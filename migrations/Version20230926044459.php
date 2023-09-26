<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230926044459 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__participant AS SELECT id, nom, prenoms, matricule, contact, email, media, slug FROM participant');
        $this->addSql('DROP TABLE participant');
        $this->addSql('CREATE TABLE participant (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, compagnie_id INTEGER DEFAULT NULL, nom VARCHAR(255) DEFAULT NULL, prenoms VARCHAR(255) DEFAULT NULL, matricule VARCHAR(255) DEFAULT NULL, contact VARCHAR(255) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, media VARCHAR(255) DEFAULT NULL, slug VARCHAR(255) DEFAULT NULL, licence VARCHAR(255) DEFAULT NULL, CONSTRAINT FK_D79F6B1152FBE437 FOREIGN KEY (compagnie_id) REFERENCES compagnie (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO participant (id, nom, prenoms, matricule, contact, email, media, slug) SELECT id, nom, prenoms, matricule, contact, email, media, slug FROM __temp__participant');
        $this->addSql('DROP TABLE __temp__participant');
        $this->addSql('CREATE INDEX IDX_D79F6B1152FBE437 ON participant (compagnie_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__participant AS SELECT id, nom, prenoms, matricule, contact, email, media, slug FROM participant');
        $this->addSql('DROP TABLE participant');
        $this->addSql('CREATE TABLE participant (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nom VARCHAR(255) DEFAULT NULL, prenoms VARCHAR(255) DEFAULT NULL, matricule VARCHAR(255) DEFAULT NULL, contact VARCHAR(255) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, media VARCHAR(255) DEFAULT NULL, slug VARCHAR(255) DEFAULT NULL)');
        $this->addSql('INSERT INTO participant (id, nom, prenoms, matricule, contact, email, media, slug) SELECT id, nom, prenoms, matricule, contact, email, media, slug FROM __temp__participant');
        $this->addSql('DROP TABLE __temp__participant');
    }
}
