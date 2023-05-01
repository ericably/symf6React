<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230425233305 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE customer CHANGE company company VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE invoice ADD chrono INT NOT NULL, CHANGE sent_at sent_at DATETIME NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE customer CHANGE company company VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE invoice DROP chrono, CHANGE sent_at sent_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
    }
}
