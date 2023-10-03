<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231003190714 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE membre ADD COLUMN participation INTEGER DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__membre AS SELECT id, compagnie_id, user_id FROM membre');
        $this->addSql('DROP TABLE membre');
        $this->addSql('CREATE TABLE membre (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, compagnie_id INTEGER DEFAULT NULL, user_id INTEGER DEFAULT NULL, CONSTRAINT FK_F6B4FB2952FBE437 FOREIGN KEY (compagnie_id) REFERENCES compagnie (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_F6B4FB29A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO membre (id, compagnie_id, user_id) SELECT id, compagnie_id, user_id FROM __temp__membre');
        $this->addSql('DROP TABLE __temp__membre');
        $this->addSql('CREATE INDEX IDX_F6B4FB2952FBE437 ON membre (compagnie_id)');
        $this->addSql('CREATE INDEX IDX_F6B4FB29A76ED395 ON membre (user_id)');
    }
}
