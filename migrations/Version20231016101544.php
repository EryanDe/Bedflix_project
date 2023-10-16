<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231016101544 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user_films (id INT AUTO_INCREMENT NOT NULL, id_user_id INT DEFAULT NULL, id_film_id INT DEFAULT NULL, INDEX IDX_2C2E310979F37AE5 (id_user_id), INDEX IDX_2C2E310988E2F8F3 (id_film_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_series (id INT AUTO_INCREMENT NOT NULL, id_user_id INT DEFAULT NULL, id_serie_id INT DEFAULT NULL, INDEX IDX_5F421A1079F37AE5 (id_user_id), INDEX IDX_5F421A1089986428 (id_serie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user_films ADD CONSTRAINT FK_2C2E310979F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user_films ADD CONSTRAINT FK_2C2E310988E2F8F3 FOREIGN KEY (id_film_id) REFERENCES films (id)');
        $this->addSql('ALTER TABLE user_series ADD CONSTRAINT FK_5F421A1079F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user_series ADD CONSTRAINT FK_5F421A1089986428 FOREIGN KEY (id_serie_id) REFERENCES series (id)');
        $this->addSql('DROP TABLE series_categories');
        $this->addSql('DROP TABLE series_categories_categories');
        $this->addSql('DROP TABLE films_categories_categories');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE series_categories (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE series_categories_categories (series_categories_id INT NOT NULL, categories_id INT NOT NULL, INDEX IDX_80E93E1F6C977BFB (series_categories_id), INDEX IDX_80E93E1FA21214B7 (categories_id), PRIMARY KEY(series_categories_id, categories_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE films_categories_categories (films_categories_id INT NOT NULL, categories_id INT NOT NULL, INDEX IDX_6A2179E62EBEE5F7 (films_categories_id), INDEX IDX_6A2179E6A21214B7 (categories_id), PRIMARY KEY(films_categories_id, categories_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE user_films DROP FOREIGN KEY FK_2C2E310979F37AE5');
        $this->addSql('ALTER TABLE user_films DROP FOREIGN KEY FK_2C2E310988E2F8F3');
        $this->addSql('ALTER TABLE user_series DROP FOREIGN KEY FK_5F421A1079F37AE5');
        $this->addSql('ALTER TABLE user_series DROP FOREIGN KEY FK_5F421A1089986428');
        $this->addSql('DROP TABLE user_films');
        $this->addSql('DROP TABLE user_series');
    }
}
