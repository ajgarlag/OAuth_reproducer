<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241011063553 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('INSERT INTO user (email, roles, password) VALUES (\'t@t.t\', \'[]\', \'$2y$13$2Tal9guQfVogQsJVYsb/2eTQYGcV5LaVVk8.iKLlDIMpfO.esYSNK\')'); // password: p
        $this->addSql('INSERT INTO oauth2_client (identifier, name, secret, redirect_uris, grants, scopes, active) VALUES (\'testclient\', \'test\', \'testpass\', \'http://localhost:8080/callback\', \'authorization_code\', \'profile\', 1)');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DELETE FROM oauth2_client WHERE identifier = \'testclient\'');
        $this->addSql('DELETE FROM user WHERE email = \'t@t.t\'');
    }
}
