<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231016080932 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE series_categories (series_id INT NOT NULL, categories_id INT NOT NULL, INDEX IDX_43BF123A5278319C (series_id), INDEX IDX_43BF123AA21214B7 (categories_id), PRIMARY KEY(series_id, categories_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE series_categories ADD CONSTRAINT FK_43BF123A5278319C FOREIGN KEY (series_id) REFERENCES series (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE series_categories ADD CONSTRAINT FK_43BF123AA21214B7 FOREIGN KEY (categories_id) REFERENCES categories (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE series_categories DROP FOREIGN KEY FK_43BF123A5278319C');
        $this->addSql('ALTER TABLE series_categories DROP FOREIGN KEY FK_43BF123AA21214B7');
        $this->addSql('DROP TABLE series_categories');
    }
}
