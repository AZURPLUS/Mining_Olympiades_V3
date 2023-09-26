<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230926052513 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE competir (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, participant_id INTEGER DEFAULT NULL, discipline_id INTEGER DEFAULT NULL, annee INTEGER DEFAULT NULL, created_at DATETIME DEFAULT NULL, CONSTRAINT FK_5E34BF359D1C3019 FOREIGN KEY (participant_id) REFERENCES participant (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_5E34BF35A5522701 FOREIGN KEY (discipline_id) REFERENCES discipline (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE INDEX IDX_5E34BF359D1C3019 ON competir (participant_id)');
        $this->addSql('CREATE INDEX IDX_5E34BF35A5522701 ON competir (discipline_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE competir');
    }
}
