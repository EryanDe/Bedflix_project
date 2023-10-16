<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231016114419 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE series_series DROP FOREIGN KEY FK_5963E210251CCCC1');
        $this->addSql('ALTER TABLE series_series DROP FOREIGN KEY FK_5963E2103CF99C4E');
        $this->addSql('ALTER TABLE films_films DROP FOREIGN KEY FK_273B482FE8DEF4CA');
        $this->addSql('ALTER TABLE films_films DROP FOREIGN KEY FK_273B482FF13BA445');
        $this->addSql('DROP TABLE series_series');
        $this->addSql('DROP TABLE films_films');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE series_series (series_source INT NOT NULL, series_target INT NOT NULL, INDEX IDX_5963E2103CF99C4E (series_source), INDEX IDX_5963E210251CCCC1 (series_target), PRIMARY KEY(series_source, series_target)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE films_films (films_source INT NOT NULL, films_target INT NOT NULL, INDEX IDX_273B482FE8DEF4CA (films_source), INDEX IDX_273B482FF13BA445 (films_target), PRIMARY KEY(films_source, films_target)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE series_series ADD CONSTRAINT FK_5963E210251CCCC1 FOREIGN KEY (series_target) REFERENCES series (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE series_series ADD CONSTRAINT FK_5963E2103CF99C4E FOREIGN KEY (series_source) REFERENCES series (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE films_films ADD CONSTRAINT FK_273B482FE8DEF4CA FOREIGN KEY (films_source) REFERENCES films (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE films_films ADD CONSTRAINT FK_273B482FF13BA445 FOREIGN KEY (films_target) REFERENCES films (id) ON UPDATE NO ACTION ON DELETE CASCADE');
    }
}
