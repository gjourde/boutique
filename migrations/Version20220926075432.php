<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220926075432 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user CHANGE pseudo pseudo VARCHAR(20) DEFAULT NULL, CHANGE user_name user_name VARCHAR(20) DEFAULT NULL, CHANGE firstname firstname VARCHAR(20) DEFAULT NULL, CHANGE address address VARCHAR(40) DEFAULT NULL, CHANGE postal_code postal_code VARCHAR(5) DEFAULT NULL, CHANGE city city VARCHAR(20) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `user` CHANGE pseudo pseudo VARCHAR(20) NOT NULL, CHANGE user_name user_name VARCHAR(20) NOT NULL, CHANGE firstname firstname VARCHAR(20) NOT NULL, CHANGE address address VARCHAR(40) NOT NULL, CHANGE postal_code postal_code VARCHAR(5) NOT NULL, CHANGE city city VARCHAR(20) NOT NULL');
    }
}
