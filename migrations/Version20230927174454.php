<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230927174454 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE abonnement (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, compagnie_id INTEGER DEFAULT NULL, reference VARCHAR(255) DEFAULT NULL, annee INTEGER DEFAULT NULL, montant INTEGER DEFAULT NULL, media VARCHAR(255) DEFAULT NULL, justificatif VARCHAR(255) DEFAULT NULL, solde BOOLEAN DEFAULT NULL, CONSTRAINT FK_351268BB52FBE437 FOREIGN KEY (compagnie_id) REFERENCES compagnie (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE INDEX IDX_351268BB52FBE437 ON abonnement (compagnie_id)');
        $this->addSql('CREATE TABLE abonnement_discipline (abonnement_id INTEGER NOT NULL, discipline_id INTEGER NOT NULL, PRIMARY KEY(abonnement_id, discipline_id), CONSTRAINT FK_E77494EAF1D74413 FOREIGN KEY (abonnement_id) REFERENCES abonnement (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_E77494EAA5522701 FOREIGN KEY (discipline_id) REFERENCES discipline (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE INDEX IDX_E77494EAF1D74413 ON abonnement_discipline (abonnement_id)');
        $this->addSql('CREATE INDEX IDX_E77494EAA5522701 ON abonnement_discipline (discipline_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE abonnement');
        $this->addSql('DROP TABLE abonnement_discipline');
    }
}
