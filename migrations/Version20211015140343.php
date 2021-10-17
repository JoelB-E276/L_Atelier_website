<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211015140343 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045F642B8210 FOREIGN KEY (admin_id) REFERENCES admin (id)');
        $this->addSql('CREATE INDEX IDX_C53D045F642B8210 ON image (admin_id)');
        $this->addSql('ALTER TABLE information ADD admin_id INT NOT NULL');
        $this->addSql('ALTER TABLE information ADD CONSTRAINT FK_29791883642B8210 FOREIGN KEY (admin_id) REFERENCES admin (id)');
        $this->addSql('CREATE INDEX IDX_29791883642B8210 ON information (admin_id)');
        $this->addSql('ALTER TABLE opening_hours ADD CONSTRAINT FK_2640C10B642B8210 FOREIGN KEY (admin_id) REFERENCES admin (id)');
        $this->addSql('CREATE INDEX IDX_2640C10B642B8210 ON opening_hours (admin_id)');
        $this->addSql('ALTER TABLE service ADD CONSTRAINT FK_E19D9AD2642B8210 FOREIGN KEY (admin_id) REFERENCES admin (id)');
        $this->addSql('CREATE INDEX IDX_E19D9AD2642B8210 ON service (admin_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE image DROP FOREIGN KEY FK_C53D045F642B8210');
        $this->addSql('DROP INDEX IDX_C53D045F642B8210 ON image');
        $this->addSql('ALTER TABLE information DROP FOREIGN KEY FK_29791883642B8210');
        $this->addSql('DROP INDEX IDX_29791883642B8210 ON information');
        $this->addSql('ALTER TABLE information DROP admin_id');
        $this->addSql('ALTER TABLE opening_hours DROP FOREIGN KEY FK_2640C10B642B8210');
        $this->addSql('DROP INDEX IDX_2640C10B642B8210 ON opening_hours');
        $this->addSql('ALTER TABLE service DROP FOREIGN KEY FK_E19D9AD2642B8210');
        $this->addSql('DROP INDEX IDX_E19D9AD2642B8210 ON service');
    }
}
