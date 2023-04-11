<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221216080819 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE icon ADD value VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE player ADD icon_id INT DEFAULT NULL, DROP icon');
        $this->addSql('ALTER TABLE player ADD CONSTRAINT FK_98197A6554B9D732 FOREIGN KEY (icon_id) REFERENCES icon (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_98197A6554B9D732 ON player (icon_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE icon DROP value');
        $this->addSql('ALTER TABLE player DROP FOREIGN KEY FK_98197A6554B9D732');
        $this->addSql('DROP INDEX UNIQ_98197A6554B9D732 ON player');
        $this->addSql('ALTER TABLE player ADD icon VARCHAR(255) DEFAULT NULL, DROP icon_id');
    }
}
