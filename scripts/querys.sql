-- proyecto_db.proyectos definition

CREATE TABLE `proyectos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre_proyecto` varchar(100) NOT NULL,
  `fuente_fondos` varchar(100) NOT NULL,
  `monto_planificado` float NOT NULL,
  `monto_patrocinado` float DEFAULT NULL,
  `monto_fondos_propios` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;