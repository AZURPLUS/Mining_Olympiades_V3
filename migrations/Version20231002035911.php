<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231002035911 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE sponsor (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, entreprise VARCHAR(255) DEFAULT NULL, nom VARCHAR(255) DEFAULT NULL, prenoms VARCHAR(255) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, contact VARCHAR(255) DEFAULT NULL, fonction VARCHAR(255) DEFAULT NULL, secteur VARCHAR(255) DEFAULT NULL, media VARCHAR(255) DEFAULT NULL, slug VARCHAR(255) DEFAULT NULL, statut BOOLEAN DEFAULT NULL)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE sponsor');
    }
}
