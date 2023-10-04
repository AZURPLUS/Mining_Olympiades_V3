<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231004094050 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE joueur ADD COLUMN carte VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__joueur AS SELECT id, abonnement_id, nom, prenoms, matricule, contact, email, licence, media, slug FROM joueur');
        $this->addSql('DROP TABLE joueur');
        $this->addSql('CREATE TABLE joueur (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, abonnement_id INTEGER DEFAULT NULL, nom VARCHAR(255) DEFAULT NULL, prenoms VARCHAR(255) DEFAULT NULL, matricule VARCHAR(255) DEFAULT NULL, contact VARCHAR(255) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, licence VARCHAR(255) DEFAULT NULL, media VARCHAR(255) DEFAULT NULL, slug VARCHAR(255) DEFAULT NULL, CONSTRAINT FK_FD71A9C5F1D74413 FOREIGN KEY (abonnement_id) REFERENCES abonnement (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO joueur (id, abonnement_id, nom, prenoms, matricule, contact, email, licence, media, slug) SELECT id, abonnement_id, nom, prenoms, matricule, contact, email, licence, media, slug FROM __temp__joueur');
        $this->addSql('DROP TABLE __temp__joueur');
        $this->addSql('CREATE INDEX IDX_FD71A9C5F1D74413 ON joueur (abonnement_id)');
    }
}
