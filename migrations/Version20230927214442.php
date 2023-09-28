<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230927214442 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE joueur (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, abonnement_id INTEGER DEFAULT NULL, nom VARCHAR(255) DEFAULT NULL, prenoms VARCHAR(255) DEFAULT NULL, matricule VARCHAR(255) DEFAULT NULL, contact VARCHAR(255) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, licence VARCHAR(255) DEFAULT NULL, media VARCHAR(255) DEFAULT NULL, slug VARCHAR(255) DEFAULT NULL, CONSTRAINT FK_FD71A9C5F1D74413 FOREIGN KEY (abonnement_id) REFERENCES abonnement (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE INDEX IDX_FD71A9C5F1D74413 ON joueur (abonnement_id)');
        $this->addSql('CREATE TABLE joueur_discipline (joueur_id INTEGER NOT NULL, discipline_id INTEGER NOT NULL, PRIMARY KEY(joueur_id, discipline_id), CONSTRAINT FK_10F06963A9E2D76C FOREIGN KEY (joueur_id) REFERENCES joueur (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_10F06963A5522701 FOREIGN KEY (discipline_id) REFERENCES discipline (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE INDEX IDX_10F06963A9E2D76C ON joueur_discipline (joueur_id)');
        $this->addSql('CREATE INDEX IDX_10F06963A5522701 ON joueur_discipline (discipline_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE joueur');
        $this->addSql('DROP TABLE joueur_discipline');
    }
}
