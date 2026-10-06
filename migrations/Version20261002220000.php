<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20261002220000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add etablissement column to etudiant table';
    }

    public function up(Schema $schema): void
    {
        $this->addSql("ALTER TABLE etudiant ADD etablissement VARCHAR(255) DEFAULT 'inconnu' NOT NULL");
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE etudiant DROP etablissement');
    }
}