<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210307120548 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE familia');
        $this->addSql('DROP TABLE producto');
        $this->addSql('DROP TABLE socio');
        $this->addSql('DROP TABLE stock');
        $this->addSql('DROP TABLE tienda');
        $this->addSql('DROP TABLE usuarios');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE familia (cod VARCHAR(6) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, nombre TEXT CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, PRIMARY KEY(cod)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE producto (cod VARCHAR(16) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, nombre TEXT CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, nombre_corto TEXT CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, descripcion TEXT CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, PVP DOUBLE PRECISION NOT NULL, familia VARCHAR(6) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, PRIMARY KEY(cod)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE socio (num_socio INT AUTO_INCREMENT NOT NULL, dni_socio VARCHAR(9) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, nombre_socio VARCHAR(30) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, apellidos_socio VARCHAR(30) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, fecNac_socio DATE NOT NULL, Localidad VARCHAR(30) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, PRIMARY KEY(num_socio)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'Socios\' ');
        $this->addSql('CREATE TABLE stock (producto VARCHAR(16) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, tienda INT UNSIGNED NOT NULL, unidades INT NOT NULL, PRIMARY KEY(producto, tienda)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE tienda (cod INT AUTO_INCREMENT NOT NULL, nombre TEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_bin`, tlf TEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_bin`, PRIMARY KEY(cod)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE usuarios (id_usuario INT UNSIGNED AUTO_INCREMENT NOT NULL, user VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_bin`, password VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_bin`, name VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_bin`, UNIQUE INDEX user (user), PRIMARY KEY(id_usuario)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
    }
}
