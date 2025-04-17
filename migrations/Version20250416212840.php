<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250416212840 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE annoncematch CHANGE lieu lieu VARCHAR(255) DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE compagne CHANGE status status ENUM('active', 'inactive', 'pending')
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE loginhistory CHANGE ip_address ip_address VARCHAR(255) DEFAULT NULL, CHANGE device_info device_info VARCHAR(255) DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE produit CHANGE image_produit image_produit VARCHAR(255) DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE profil CHANGE avatar avatar VARCHAR(255) DEFAULT NULL, CHANGE preferences preferences VARCHAR(255) DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE user CHANGE reset_token reset_token VARCHAR(255) DEFAULT NULL, CHANGE token_expiration token_expiration DATETIME DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)'
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE annoncematch CHANGE lieu lieu VARCHAR(255) DEFAULT 'NULL'
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE compagne CHANGE status status VARCHAR(255) DEFAULT 'NULL'
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE loginhistory CHANGE ip_address ip_address VARCHAR(255) DEFAULT 'NULL', CHANGE device_info device_info VARCHAR(255) DEFAULT 'NULL'
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT 'NULL' COMMENT '(DC2Type:datetime_immutable)'
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE produit CHANGE image_produit image_produit VARCHAR(255) DEFAULT 'NULL'
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE profil CHANGE avatar avatar VARCHAR(255) DEFAULT 'NULL', CHANGE preferences preferences VARCHAR(255) DEFAULT 'NULL'
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE user CHANGE reset_token reset_token VARCHAR(255) DEFAULT 'NULL', CHANGE token_expiration token_expiration DATETIME DEFAULT 'NULL'
        SQL);
    }
}
