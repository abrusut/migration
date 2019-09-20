use mprod_nexoempresa;

CREATE TABLE `empresamigration_actividad` (
  `empresamigration_id` int(11) NOT NULL,
  `actividad_id` int(11) NOT NULL,
  PRIMARY KEY (`empresamigration_id`,`actividad_id`),
  KEY `IDX_181442F79521E1991` (`empresamigration_id`),
  KEY `IDX_181442F796014FACA` (`actividad_id`)  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `empresa_migration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `provincia_id` int(11) DEFAULT NULL,
  `localidad_id` int(11) DEFAULT NULL,
  `cuit` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo_size` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `razon_social` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ingresos_brutos` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre_comercial` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_santafesina` tinyint(1) NOT NULL,
  `fax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `codigo_postal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pagina_web` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `producto_servicio` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `domicilio` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `distrito_otra_provincia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `search` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `IDX_CFAA27BD4E7121AF` (`provincia_id`),
  KEY `IDX_CFAA27BD67707C89` (`localidad_id`),
  CONSTRAINT `FK_CFAA27BD4E7121AF` FOREIGN KEY (`provincia_id`) REFERENCES `provincia` (`id`),
  CONSTRAINT `FK_CFAA27BD67707C89` FOREIGN KEY (`localidad_id`) REFERENCES `localidad` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
