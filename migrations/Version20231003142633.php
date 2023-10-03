<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231003142633 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categories (categorie_id INT AUTO_INCREMENT NOT NULL, libelle_categorie VARCHAR(50) NOT NULL, PRIMARY KEY(categorie_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE episodes (episode_id INT AUTO_INCREMENT NOT NULL, saison_id INT NOT NULL, numero_episode INT NOT NULL, titre_episode VARCHAR(25) NOT NULL, duree_episode NUMERIC(5, 2) NOT NULL, INDEX IDX_7DD55EDDF965414C (saison_id), PRIMARY KEY(episode_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE films (film_id INT AUTO_INCREMENT NOT NULL, titre_film VARCHAR(50) NOT NULL, description_film LONGTEXT NOT NULL, affiche_film VARCHAR(50) NOT NULL, lien_film VARCHAR(255) NOT NULL, duree_film NUMERIC(7, 2) NOT NULL, PRIMARY KEY(film_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE films_categories (film_id INT NOT NULL, categorie_id INT NOT NULL, INDEX IDX_3C3B0D66939610EE (film_id), INDEX IDX_3C3B0D66A21214B7 (categorie_id), PRIMARY KEY(film_id, categorie_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE saisons (saison_id INT AUTO_INCREMENT NOT NULL, serie_id INT DEFAULT NULL, numero_saison INT NOT NULL, titre_saison VARCHAR(25) NOT NULL, INDEX IDX_1F1539CBD94388BD (serie_id), PRIMARY KEY(saison_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE series (serie_id INT AUTO_INCREMENT NOT NULL, titre_serie VARCHAR(50) NOT NULL, description_serie LONGTEXT NOT NULL, affiche_serie VARCHAR(50) NOT NULL, lien_serie VARCHAR(255) NOT NULL, PRIMARY KEY(serie_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE series_categories (serie_id INT NOT NULL, categorie_id INT NOT NULL, INDEX IDX_43BF123A5278319C (serie_id), INDEX IDX_43BF123AA21214B7 (categorie_id), PRIMARY KEY(serie_id, categorie_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateurs (utilisateur_id INT AUTO_INCREMENT NOT NULL, utilisateur_email VARCHAR(180) NOT NULL, utilisateur_role JSON NOT NULL, utilisateur_mot_de_passe VARCHAR(255) NOT NULL, nom_utilisateur VARCHAR(25) NOT NULL, prenom_utilisateur VARCHAR(25) NOT NULL, pseudo_utilisateur VARCHAR(25) NOT NULL, photo_profil_utilisateur VARCHAR(100) NOT NULL, UNIQUE INDEX UNIQ_497B315E215724AA (utilisateur_email), PRIMARY KEY(utilisateur_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateurs_films (utilisateur_id INT NOT NULL, film_id INT NOT NULL, INDEX IDX_2D644FAE1E969C5 (utilisateur_id), INDEX IDX_2D644FAE939610EE (film_id), PRIMARY KEY(utilisateur_id, film_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateurs_series (utilisateur_id INT NOT NULL, serie_id INT NOT NULL, INDEX IDX_17F166251E969C5 (utilisateur_id), INDEX IDX_17F166255278319C (serie_id), PRIMARY KEY(utilisateur_id, serie_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE episodes ADD CONSTRAINT FK_7DD55EDDF965414C FOREIGN KEY (saison_id) REFERENCES saisons (saison_id)');
        $this->addSql('ALTER TABLE films_categories ADD CONSTRAINT FK_3C3B0D66939610EE FOREIGN KEY (film_id) REFERENCES films (film_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE films_categories ADD CONSTRAINT FK_3C3B0D66A21214B7 FOREIGN KEY (categorie_id) REFERENCES categories (categorie_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE saisons ADD CONSTRAINT FK_1F1539CBD94388BD FOREIGN KEY (serie_id) REFERENCES series (serie_id)');
        $this->addSql('ALTER TABLE series_categories ADD CONSTRAINT FK_43BF123A5278319C FOREIGN KEY (serie_id) REFERENCES series (serie_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE series_categories ADD CONSTRAINT FK_43BF123AA21214B7 FOREIGN KEY (categorie_id) REFERENCES categories (categorie_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE utilisateurs_films ADD CONSTRAINT FK_2D644FAE1E969C5 FOREIGN KEY (utilisateur_id) REFERENCES utilisateurs (utilisateur_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE utilisateurs_films ADD CONSTRAINT FK_2D644FAE939610EE FOREIGN KEY (film_id) REFERENCES films (film_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE utilisateurs_series ADD CONSTRAINT FK_17F166251E969C5 FOREIGN KEY (utilisateur_id) REFERENCES utilisateurs (utilisateur_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE utilisateurs_series ADD CONSTRAINT FK_17F166255278319C FOREIGN KEY (serie_id) REFERENCES series (serie_id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE episodes DROP FOREIGN KEY FK_7DD55EDDF965414C');
        $this->addSql('ALTER TABLE films_categories DROP FOREIGN KEY FK_3C3B0D66939610EE');
        $this->addSql('ALTER TABLE films_categories DROP FOREIGN KEY FK_3C3B0D66A21214B7');
        $this->addSql('ALTER TABLE saisons DROP FOREIGN KEY FK_1F1539CBD94388BD');
        $this->addSql('ALTER TABLE series_categories DROP FOREIGN KEY FK_43BF123A5278319C');
        $this->addSql('ALTER TABLE series_categories DROP FOREIGN KEY FK_43BF123AA21214B7');
        $this->addSql('ALTER TABLE utilisateurs_films DROP FOREIGN KEY FK_2D644FAE1E969C5');
        $this->addSql('ALTER TABLE utilisateurs_films DROP FOREIGN KEY FK_2D644FAE939610EE');
        $this->addSql('ALTER TABLE utilisateurs_series DROP FOREIGN KEY FK_17F166251E969C5');
        $this->addSql('ALTER TABLE utilisateurs_series DROP FOREIGN KEY FK_17F166255278319C');
        $this->addSql('DROP TABLE categories');
        $this->addSql('DROP TABLE episodes');
        $this->addSql('DROP TABLE films');
        $this->addSql('DROP TABLE films_categories');
        $this->addSql('DROP TABLE saisons');
        $this->addSql('DROP TABLE series');
        $this->addSql('DROP TABLE series_categories');
        $this->addSql('DROP TABLE utilisateurs');
        $this->addSql('DROP TABLE utilisateurs_films');
        $this->addSql('DROP TABLE utilisateurs_series');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
