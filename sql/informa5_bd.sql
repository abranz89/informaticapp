SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `clientes` (
  `id` int(11) NOT NULL auto_increment,
  `nombre` varchar(150) default NULL,
  `apellido` varchar(150) default NULL,
  `email` varchar(100) default NULL,
  `clave` varchar(150) default NULL,
  `llave` varchar(300) default NULL,
  `estado` int(11) default NULL,
  `created_at` datetime default NULL,
  `updated_at` datetime default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `compras` (
  `id` int(11) NOT NULL auto_increment,
  `clientes_id` int(11) NOT NULL,
  `productos_id` int(11) NOT NULL,
  `estados_id` int(11) NOT NULL,
  `created_at` datetime default NULL,
  `updated_at` datetime default NULL,
  PRIMARY KEY  (`id`),
  KEY `fk_compras_clientes_idx` (`clientes_id`),
  KEY `fk_compras_productos1_idx` (`productos_id`),
  KEY `fk_compras_estados1_idx` (`estados_id`),
  CONSTRAINT `fk_compras_clientes` FOREIGN KEY (`clientes_id`) REFERENCES `clientes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_compras_estados1` FOREIGN KEY (`estados_id`) REFERENCES `estados` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_compras_productos1` FOREIGN KEY (`productos_id`) REFERENCES `productos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `estados` (
  `id` int(11) NOT NULL auto_increment,
  `descripcion` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `productos` (
  `id` int(11) NOT NULL auto_increment,
  `descripcion` varchar(100) default NULL,
  `valor` int(11) default NULL,
  `created_at` datetime default NULL,
  `updated_at` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;
