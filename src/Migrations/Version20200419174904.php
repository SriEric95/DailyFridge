<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200419174904 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE historique_achat ADD etat_h VARCHAR(255) DEFAULT NULL, CHANGE date_achat date_achat DATETIME NOT NULL, CHANGE quantite quantite INT NOT NULL');
        $this->addSql('ALTER TABLE produit CHANGE nom nom VARCHAR(255) NOT NULL, CHANGE prix prix DOUBLE PRECISION NOT NULL, CHANGE date_limite date_limite DATETIME NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE historique_achat DROP etat_h, CHANGE date_achat date_achat DATETIME DEFAULT NULL, CHANGE quantite quantite INT DEFAULT NULL');
        $this->addSql('ALTER TABLE produit CHANGE nom nom VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE prix prix DOUBLE PRECISION DEFAULT NULL, CHANGE date_limite date_limite DATETIME DEFAULT NULL');
    }
}
