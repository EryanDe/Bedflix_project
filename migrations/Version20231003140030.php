<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231003140030 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE films_categories (film_id INT NOT NULL, categorie_id INT NOT NULL, INDEX IDX_3C3B0D66939610EE (film_id), INDEX IDX_3C3B0D66A21214B7 (categorie_id), PRIMARY KEY(film_id, categorie_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE series_categories (serie_id INT NOT NULL, categorie_id INT NOT NULL, INDEX IDX_43BF123A5278319C (serie_id), INDEX IDX_43BF123AA21214B7 (categorie_id), PRIMARY KEY(serie_id, categorie_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateurs_series (utilisateur_id INT NOT NULL, serie_id INT NOT NULL, INDEX IDX_17F166251E969C5 (utilisateur_id), INDEX IDX_17F166255278319C (serie_id), PRIMARY KEY(utilisateur_id, serie_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE films_categories ADD CONSTRAINT FK_3C3B0D66939610EE FOREIGN KEY (film_id) REFERENCES films (film_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE films_categories ADD CONSTRAINT FK_3C3B0D66A21214B7 FOREIGN KEY (categorie_id) REFERENCES categories (categorie_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE series_categories ADD CONSTRAINT FK_43BF123A5278319C FOREIGN KEY (serie_id) REFERENCES series (serie_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE series_categories ADD CONSTRAINT FK_43BF123AA21214B7 FOREIGN KEY (categorie_id) REFERENCES categories (categorie_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE utilisateurs_series ADD CONSTRAINT FK_17F166251E969C5 FOREIGN KEY (utilisateur_id) REFERENCES utilisateurs (utilisateur_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE utilisateurs_series ADD CONSTRAINT FK_17F166255278319C FOREIGN KEY (serie_id) REFERENCES series (serie_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE episodes ADD saison_id INT NOT NULL');
        $this->addSql('ALTER TABLE episodes ADD CONSTRAINT FK_7DD55EDDF965414C FOREIGN KEY (saison_id) REFERENCES saisons (saison_id)');
        $this->addSql('CREATE INDEX IDX_7DD55EDDF965414C ON episodes (saison_id)');
        $this->addSql('ALTER TABLE saisons ADD serie_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE saisons ADD CONSTRAINT FK_1F1539CBD94388BD FOREIGN KEY (serie_id) REFERENCES series (serie_id)');
        $this->addSql('CREATE INDEX IDX_1F1539CBD94388BD ON saisons (serie_id)');
        $this->addSql('ALTER TABLE utilisateurs_films DROP FOREIGN KEY FK_2D644FAE1E969C5');
        $this->addSql('ALTER TABLE utilisateurs_films DROP FOREIGN KEY FK_2D644FAE939610EE');
        $this->addSql('DROP INDEX IDX_2D644FAE1E969C5 ON utilisateurs_films');
        $this->addSql('DROP INDEX `primary` ON utilisateurs_films');
        $this->addSql('DROP INDEX IDX_2D644FAE939610EE ON utilisateurs_films');
        $this->addSql('ALTER TABLE utilisateurs_films ADD utilisateur_id INT NOT NULL, ADD film_id INT NOT NULL, DROP utilisateur_id, DROP film_id');
        $this->addSql('ALTER TABLE utilisateurs_films ADD CONSTRAINT FK_2D644FAE1E969C5 FOREIGN KEY (utilisateur_id) REFERENCES utilisateurs (utilisateur_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE utilisateurs_films ADD CONSTRAINT FK_2D644FAE939610EE FOREIGN KEY (film_id) REFERENCES films (film_id) ON DELETE CASCADE');
        $this->addSql('CREATE INDEX IDX_2D644FAE1E969C5 ON utilisateurs_films (utilisateur_id)');
        $this->addSql('ALTER TABLE utilisateurs_films ADD PRIMARY KEY (utilisateur_id, film_id)');
        $this->addSql('CREATE INDEX IDX_2D644FAE939610EE ON utilisateurs_films (film_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE films_categories DROP FOREIGN KEY FK_3C3B0D66939610EE');
        $this->addSql('ALTER TABLE films_categories DROP FOREIGN KEY FK_3C3B0D66A21214B7');
        $this->addSql('ALTER TABLE series_categories DROP FOREIGN KEY FK_43BF123A5278319C');
        $this->addSql('ALTER TABLE series_categories DROP FOREIGN KEY FK_43BF123AA21214B7');
        $this->addSql('ALTER TABLE utilisateurs_series DROP FOREIGN KEY FK_17F166251E969C5');
        $this->addSql('ALTER TABLE utilisateurs_series DROP FOREIGN KEY FK_17F166255278319C');
        $this->addSql('DROP TABLE films_categories');
        $this->addSql('DROP TABLE series_categories');
        $this->addSql('DROP TABLE utilisateurs_series');
        $this->addSql('ALTER TABLE episodes DROP FOREIGN KEY FK_7DD55EDDF965414C');
        $this->addSql('DROP INDEX IDX_7DD55EDDF965414C ON episodes');
        $this->addSql('ALTER TABLE episodes DROP saison_id');
        $this->addSql('ALTER TABLE saisons DROP FOREIGN KEY FK_1F1539CBD94388BD');
        $this->addSql('DROP INDEX IDX_1F1539CBD94388BD ON saisons');
        $this->addSql('ALTER TABLE saisons DROP serie_id');
        $this->addSql('ALTER TABLE utilisateurs_films DROP FOREIGN KEY FK_2D644FAE1E969C5');
        $this->addSql('ALTER TABLE utilisateurs_films DROP FOREIGN KEY FK_2D644FAE939610EE');
        $this->addSql('DROP INDEX IDX_2D644FAE1E969C5 ON utilisateurs_films');
        $this->addSql('DROP INDEX IDX_2D644FAE939610EE ON utilisateurs_films');
        $this->addSql('DROP INDEX `PRIMARY` ON utilisateurs_films');
        $this->addSql('ALTER TABLE utilisateurs_films ADD utilisateur_id INT NOT NULL, ADD film_id INT NOT NULL, DROP utilisateur_id, DROP film_id');
        $this->addSql('ALTER TABLE utilisateurs_films ADD CONSTRAINT FK_2D644FAE1E969C5 FOREIGN KEY (utilisateur_id) REFERENCES utilisateurs (utilisateur_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE utilisateurs_films ADD CONSTRAINT FK_2D644FAE939610EE FOREIGN KEY (film_id) REFERENCES films (film_id) ON DELETE CASCADE');
        $this->addSql('CREATE INDEX IDX_2D644FAE1E969C5 ON utilisateurs_films (utilisateur_id)');
        $this->addSql('CREATE INDEX IDX_2D644FAE939610EE ON utilisateurs_films (film_id)');
        $this->addSql('ALTER TABLE utilisateurs_films ADD PRIMARY KEY (utilisateur_id, film_id)');
    }
}
