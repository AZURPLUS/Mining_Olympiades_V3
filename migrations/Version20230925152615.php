<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230925152615 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE compagnie ADD COLUMN email VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__compagnie AS SELECT id, titre, dg, representant, contact, slug FROM compagnie');
        $this->addSql('DROP TABLE compagnie');
        $this->addSql('CREATE TABLE compagnie (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, titre VARCHAR(255) DEFAULT NULL, dg VARCHAR(255) DEFAULT NULL, representant VARCHAR(255) DEFAULT NULL, contact VARCHAR(255) DEFAULT NULL, slug VARCHAR(255) DEFAULT NULL)');
        $this->addSql('INSERT INTO compagnie (id, titre, dg, representant, contact, slug) SELECT id, titre, dg, representant, contact, slug FROM __temp__compagnie');
        $this->addSql('DROP TABLE __temp__compagnie');
    }
}
