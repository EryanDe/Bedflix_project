<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231016074209 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE series_categories DROP FOREIGN KEY FK_43BF123A89986428');
        $this->addSql('ALTER TABLE films_categories DROP FOREIGN KEY FK_3C3B0D6688E2F8F3');
        $this->addSql('DROP TABLE series_categories');
        $this->addSql('DROP TABLE films_categories');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE series_categories (id INT AUTO_INCREMENT NOT NULL, id_serie_id INT DEFAULT NULL, INDEX IDX_43BF123A89986428 (id_serie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE films_categories (id INT AUTO_INCREMENT NOT NULL, id_film_id INT DEFAULT NULL, INDEX IDX_3C3B0D6688E2F8F3 (id_film_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE series_categories ADD CONSTRAINT FK_43BF123A89986428 FOREIGN KEY (id_serie_id) REFERENCES series (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE films_categories ADD CONSTRAINT FK_3C3B0D6688E2F8F3 FOREIGN KEY (id_film_id) REFERENCES films (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
    }
}
