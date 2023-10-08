<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231007152608 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE discipline ADD COLUMN complementaire BOOLEAN DEFAULT 1');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__discipline AS SELECT id, titre, slug, joueur FROM discipline');
        $this->addSql('DROP TABLE discipline');
        $this->addSql('CREATE TABLE discipline (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, titre VARCHAR(255) DEFAULT NULL, slug VARCHAR(255) DEFAULT NULL, joueur INTEGER DEFAULT NULL)');
        $this->addSql('INSERT INTO discipline (id, titre, slug, joueur) SELECT id, titre, slug, joueur FROM __temp__discipline');
        $this->addSql('DROP TABLE __temp__discipline');
    }
}
