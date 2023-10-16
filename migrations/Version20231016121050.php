<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231016121050 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE episodes ADD saison_id INT NOT NULL');
        $this->addSql('ALTER TABLE episodes ADD CONSTRAINT FK_7DD55EDDF965414C FOREIGN KEY (saison_id) REFERENCES saisons (id)');
        $this->addSql('CREATE INDEX IDX_7DD55EDDF965414C ON episodes (saison_id)');
        $this->addSql('ALTER TABLE saisons ADD serie_id INT NOT NULL');
        $this->addSql('ALTER TABLE saisons ADD CONSTRAINT FK_1F1539CBD94388BD FOREIGN KEY (serie_id) REFERENCES series (id)');
        $this->addSql('CREATE INDEX IDX_1F1539CBD94388BD ON saisons (serie_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE saisons DROP FOREIGN KEY FK_1F1539CBD94388BD');
        $this->addSql('DROP INDEX IDX_1F1539CBD94388BD ON saisons');
        $this->addSql('ALTER TABLE saisons DROP serie_id');
        $this->addSql('ALTER TABLE episodes DROP FOREIGN KEY FK_7DD55EDDF965414C');
        $this->addSql('DROP INDEX IDX_7DD55EDDF965414C ON episodes');
        $this->addSql('ALTER TABLE episodes DROP saison_id');
    }
}
