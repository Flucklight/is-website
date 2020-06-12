
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Creat schema 'is-website'
--

DROP SCHEMA IF EXISTS `is-website`;
CREATE SCHEMA IF NOT EXISTS `is-website` DEFAULT CHARACTER SET  utf8 COLLATE utf8_spanish2_ci;
USE `is-website`;

--
-- Create table structure for table `peliculas`
--

DROP TABLE IF EXISTS `peliculas`;

CREATE TABLE `peliculas` (
  `titulo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `categoria` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `director` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `duracion` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `idioma` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `resumen` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `fecha_estreno` date NOT NULL,
  `id` int UNSIGNED NOT NULL PRIMARY KEY auto_increment
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

INSERT INTO `peliculas` (`titulo`, `categoria`, `director`, `duracion`, `idioma`, `resumen`, `fecha_estreno`, `id`)
VALUES
('Bad Boys for Life', 'Accion', 'Adil El Arbi y Bilall Fallah', '2 h 4 min', 'Ingles', 
'Pasaron 17 años para poder ver nuevamente a Marcus Burnett y Mike Lowery en acción. Luego del éxito de las dos primeras entregas, esta tercera parte llamada Bad Boys For life emociona a todos. Marcus Burnett es ahora un inspector de policía, Mike lowery está en una crisis, pero el destino los junta nuevamente.',
'2020-01-17', 0),
('Bloodshot', 'Accion', 'Dave Wilson', '1 h 49 min', 'Ingles', 
'Ray Garrison (Vin Diesel), también conocido como Bloodshot, es resucitado por la compañía Rising Spirit Technologies a través del uso de nanotecnología. Mientras lucha por recuperar la memoria, Ray trata de volver al ser el que era antes de sufrir el accidente que dejaría amnésico. Película basada en el cómic "Valiant", creado por Kevin VanHook, Don Perlin y Bob Layton.',
'2020-03-13', 1),
('Sonic La Película (2019)', 'Accion y Aventura, Animación', 'Jeff Fowler', '1 h 40 min', 'Ingles',
'Sonic, el descarado erizo azul basado en la famosa serie de videojuegos de Sega, vivirá aventuras y desventuras cuando conoce a su amigo humano y policía, Tom Wachowski (James Marsden).',
'2020-02-14');

--
-- Create table structure for table `miembros`
--

DROP TABLE IF EXISTS `miembros`;

CREATE TABLE `miembros` (
  `nombre` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `correo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `alias` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `contraseña` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `permiso` int NOT NULL DEFAULT '1',
  `id` int UNSIGNED NOT NULL PRIMARY KEY auto_increment
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;