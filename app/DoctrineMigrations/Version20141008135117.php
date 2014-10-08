<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20141008135117 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');
        
        $this->addSql('ALTER TABLE post DROP FOREIGN KEY FK_FAB8C3B3F675F31B');
        $this->addSql('DROP INDEX IDX_FAB8C3B3F675F31B ON post');
        $this->addSql('ALTER TABLE post CHANGE author_id user_id INT NOT NULL');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_FAB8C3B3A76ED395 FOREIGN KEY (user_id) REFERENCES fos_user (id)');
        $this->addSql('CREATE INDEX IDX_FAB8C3B3A76ED395 ON post (user_id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');
        
        $this->addSql('ALTER TABLE Post DROP FOREIGN KEY FK_FAB8C3B3A76ED395');
        $this->addSql('DROP INDEX IDX_FAB8C3B3A76ED395 ON Post');
        $this->addSql('ALTER TABLE Post CHANGE user_id author_id INT NOT NULL');
        $this->addSql('ALTER TABLE Post ADD CONSTRAINT FK_FAB8C3B3F675F31B FOREIGN KEY (author_id) REFERENCES author (id)');
        $this->addSql('CREATE INDEX IDX_FAB8C3B3F675F31B ON Post (author_id)');
    }
}
