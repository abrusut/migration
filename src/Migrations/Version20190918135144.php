<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190918135144 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE empresa_migration (id INT AUTO_INCREMENT NOT NULL, provincia_id INT DEFAULT NULL, localidad_id INT DEFAULT NULL, cuit VARCHAR(13) NOT NULL, logo_name VARCHAR(255) DEFAULT NULL, logo_size INT DEFAULT NULL, updated_at DATETIME DEFAULT NULL, razon_social VARCHAR(255) NOT NULL, ingresos_brutos VARCHAR(255) DEFAULT NULL, nombre_comercial VARCHAR(255) NOT NULL, is_santafesina TINYINT(1) NOT NULL, fax VARCHAR(255) DEFAULT NULL, codigo_postal VARCHAR(255) DEFAULT NULL, facebook VARCHAR(255) DEFAULT NULL, twitter VARCHAR(255) DEFAULT NULL, instagram VARCHAR(255) DEFAULT NULL, descripcion VARCHAR(1024) DEFAULT NULL, pagina_web VARCHAR(255) DEFAULT NULL, telefono VARCHAR(255) DEFAULT NULL, producto_servicio VARCHAR(1024) DEFAULT NULL, domicilio VARCHAR(1024) DEFAULT NULL, distrito_otra_provincia VARCHAR(255) DEFAULT NULL, search LONGTEXT DEFAULT NULL, INDEX IDX_CFAA27BD4E7121AF (provincia_id), INDEX IDX_CFAA27BD67707C89 (localidad_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE empresa_migration ADD CONSTRAINT FK_CFAA27BD4E7121AF FOREIGN KEY (provincia_id) REFERENCES provincia (id)');
        $this->addSql('ALTER TABLE empresa_migration ADD CONSTRAINT FK_CFAA27BD67707C89 FOREIGN KEY (localidad_id) REFERENCES localidad (id)');
        $this->addSql('DROP TABLE empresa_actividad');
        $this->addSql('ALTER TABLE pedido_actividad DROP FOREIGN KEY FK_95EF92444854653A');
        $this->addSql('ALTER TABLE pedido_actividad DROP FOREIGN KEY FK_95EF92446014FACA');
        $this->addSql('ALTER TABLE pedido_actividad ADD CONSTRAINT FK_95EF92444854653A FOREIGN KEY (pedido_id) REFERENCES pedido (id)');
        $this->addSql('ALTER TABLE pedido_actividad ADD CONSTRAINT FK_95EF92446014FACA FOREIGN KEY (actividad_id) REFERENCES actividad (id)');
        $this->addSql('ALTER TABLE publicacion_actividad DROP FOREIGN KEY FK_92CE2D3D6014FACA');
        $this->addSql('ALTER TABLE publicacion_actividad DROP FOREIGN KEY FK_92CE2D3D9ACBB5E7');
        $this->addSql('ALTER TABLE publicacion_actividad ADD CONSTRAINT FK_92CE2D3D6014FACA FOREIGN KEY (actividad_id) REFERENCES actividad (id)');
        $this->addSql('ALTER TABLE publicacion_actividad ADD CONSTRAINT FK_92CE2D3D9ACBB5E7 FOREIGN KEY (publicacion_id) REFERENCES publicacion (id)');
        $this->addSql('ALTER TABLE dato_contacto DROP FOREIGN KEY FK_F356B053521E1991');
        $this->addSql('ALTER TABLE dato_contacto ADD CONSTRAINT FK_F356B053521E1991 FOREIGN KEY (empresa_id) REFERENCES empresa (id)');
        $this->addSql('DROP INDEX UNIQ_B8D75A50B9BA4881 ON empresa');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE empresa_actividad (empresa_id INT NOT NULL, actividad_id INT NOT NULL, INDEX IDX_81442F796014FACA (actividad_id), INDEX IDX_81442F79521E1991 (empresa_id), PRIMARY KEY(empresa_id, actividad_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE empresa_actividad ADD CONSTRAINT FK_81442F79521E1991 FOREIGN KEY (empresa_id) REFERENCES empresa (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE empresa_actividad ADD CONSTRAINT FK_81442F796014FACA FOREIGN KEY (actividad_id) REFERENCES actividad (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE empresa_migration');
        $this->addSql('ALTER TABLE dato_contacto DROP FOREIGN KEY FK_F356B053521E1991');
        $this->addSql('ALTER TABLE dato_contacto ADD CONSTRAINT FK_F356B053521E1991 FOREIGN KEY (empresa_id) REFERENCES empresa (id) ON DELETE CASCADE');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_B8D75A50B9BA4881 ON empresa (cuit)');
        $this->addSql('ALTER TABLE pedido_actividad DROP FOREIGN KEY FK_95EF92444854653A');
        $this->addSql('ALTER TABLE pedido_actividad DROP FOREIGN KEY FK_95EF92446014FACA');
        $this->addSql('ALTER TABLE pedido_actividad ADD CONSTRAINT FK_95EF92444854653A FOREIGN KEY (pedido_id) REFERENCES pedido (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE pedido_actividad ADD CONSTRAINT FK_95EF92446014FACA FOREIGN KEY (actividad_id) REFERENCES actividad (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE publicacion_actividad DROP FOREIGN KEY FK_92CE2D3D9ACBB5E7');
        $this->addSql('ALTER TABLE publicacion_actividad DROP FOREIGN KEY FK_92CE2D3D6014FACA');
        $this->addSql('ALTER TABLE publicacion_actividad ADD CONSTRAINT FK_92CE2D3D9ACBB5E7 FOREIGN KEY (publicacion_id) REFERENCES publicacion (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE publicacion_actividad ADD CONSTRAINT FK_92CE2D3D6014FACA FOREIGN KEY (actividad_id) REFERENCES actividad (id) ON DELETE CASCADE');
    }
}
