<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231005094103 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE films_categories_categories (films_categories_id INT NOT NULL, categories_id INT NOT NULL, INDEX IDX_6A2179E62EBEE5F7 (films_categories_id), INDEX IDX_6A2179E6A21214B7 (categories_id), PRIMARY KEY(films_categories_id, categories_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE series_categories_categories (series_categories_id INT NOT NULL, categories_id INT NOT NULL, INDEX IDX_80E93E1F6C977BFB (series_categories_id), INDEX IDX_80E93E1FA21214B7 (categories_id), PRIMARY KEY(series_categories_id, categories_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE films_categories_categories ADD CONSTRAINT FK_6A2179E62EBEE5F7 FOREIGN KEY (films_categories_id) REFERENCES films_categories (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE films_categories_categories ADD CONSTRAINT FK_6A2179E6A21214B7 FOREIGN KEY (categories_id) REFERENCES categories (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE series_categories_categories ADD CONSTRAINT FK_80E93E1F6C977BFB FOREIGN KEY (series_categories_id) REFERENCES series_categories (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE series_categories_categories ADD CONSTRAINT FK_80E93E1FA21214B7 FOREIGN KEY (categories_id) REFERENCES categories (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE films_categories_categories DROP FOREIGN KEY FK_6A2179E62EBEE5F7');
        $this->addSql('ALTER TABLE films_categories_categories DROP FOREIGN KEY FK_6A2179E6A21214B7');
        $this->addSql('ALTER TABLE series_categories_categories DROP FOREIGN KEY FK_80E93E1F6C977BFB');
        $this->addSql('ALTER TABLE series_categories_categories DROP FOREIGN KEY FK_80E93E1FA21214B7');
        $this->addSql('DROP TABLE films_categories_categories');
        $this->addSql('DROP TABLE series_categories_categories');
    }
}
