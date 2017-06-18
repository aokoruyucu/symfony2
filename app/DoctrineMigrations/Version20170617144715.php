<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170617144715 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP INDEX user_id ON post');
        $this->addSql('ALTER TABLE post CHANGE user_id user_id INT NOT NULL, CHANGE created_at created_at DATETIME NOT NULL, CHANGE updated_at updated_at DATETIME NOT NULL, CHANGE slug slug VARCHAR(255) NOT NULL, CHANGE title title VARCHAR(100) NOT NULL, CHANGE content content LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE user ADD slug VARCHAR(255) NOT NULL, CHANGE created_at created_at DATETIME NOT NULL, CHANGE updated_at updated_at DATETIME NOT NULL, CHANGE name name VARCHAR(150) NOT NULL, CHANGE surname surname VARCHAR(255) NOT NULL, CHANGE password password VARCHAR(255) NOT NULL, CHANGE email email VARCHAR(255) NOT NULL, CHANGE type type VARCHAR(30) NOT NULL');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE post CHANGE user_id user_id INT DEFAULT NULL, CHANGE created_at created_at DATETIME DEFAULT NULL, CHANGE updated_at updated_at DATETIME DEFAULT NULL, CHANGE slug slug VARCHAR(100) DEFAULT NULL COLLATE utf8_unicode_ci, CHANGE title title VARCHAR(100) DEFAULT NULL COLLATE utf8_unicode_ci, CHANGE content content LONGTEXT DEFAULT NULL COLLATE utf8_unicode_ci');
        $this->addSql('CREATE INDEX user_id ON post (user_id)');
        $this->addSql('ALTER TABLE user DROP slug, CHANGE created_at created_at DATETIME DEFAULT NULL, CHANGE updated_at updated_at DATETIME DEFAULT NULL, CHANGE name name VARCHAR(150) DEFAULT NULL COLLATE utf8_unicode_ci, CHANGE surname surname VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, CHANGE password password VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, CHANGE email email VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, CHANGE type type VARCHAR(30) DEFAULT NULL COLLATE utf8_unicode_ci');
    }
}
