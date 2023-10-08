<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231008092849 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE abonnement ADD COLUMN created_at DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__abonnement AS SELECT id, compagnie_id, reference, annee, montant, media, justificatif, solde, total_joueur, restant_joueur FROM abonnement');
        $this->addSql('DROP TABLE abonnement');
        $this->addSql('CREATE TABLE abonnement (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, compagnie_id INTEGER DEFAULT NULL, reference VARCHAR(255) DEFAULT NULL, annee INTEGER DEFAULT NULL, montant INTEGER DEFAULT NULL, media VARCHAR(255) DEFAULT NULL, justificatif VARCHAR(255) DEFAULT NULL, solde BOOLEAN DEFAULT NULL, total_joueur INTEGER DEFAULT NULL, restant_joueur INTEGER DEFAULT NULL, CONSTRAINT FK_351268BB52FBE437 FOREIGN KEY (compagnie_id) REFERENCES compagnie (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO abonnement (id, compagnie_id, reference, annee, montant, media, justificatif, solde, total_joueur, restant_joueur) SELECT id, compagnie_id, reference, annee, montant, media, justificatif, solde, total_joueur, restant_joueur FROM __temp__abonnement');
        $this->addSql('DROP TABLE __temp__abonnement');
        $this->addSql('CREATE INDEX IDX_351268BB52FBE437 ON abonnement (compagnie_id)');
    }
}
