<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190604170413 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE gvidasr_channels_group_plugin_channel_group (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, sharedBasket TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET UTF8 COLLATE UTF8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE sylius_channel ADD channel_group_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE sylius_channel ADD CONSTRAINT FK_16C8119E89E4AAEE FOREIGN KEY (channel_group_id) REFERENCES gvidasr_channels_group_plugin_channel_group (id)');
        $this->addSql('CREATE INDEX IDX_16C8119E89E4AAEE ON sylius_channel (channel_group_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE sylius_channel DROP FOREIGN KEY FK_16C8119E89E4AAEE');
        $this->addSql('DROP TABLE gvidasr_channels_group_plugin_channel_group');
        $this->addSql('DROP INDEX IDX_16C8119E89E4AAEE ON sylius_channel');
        $this->addSql('ALTER TABLE sylius_channel DROP channel_group_id');
    }
}
