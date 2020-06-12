
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
'2020-02-14', 2),
('Avengers Endgame (2019)', 'Accion', 'Joe Russo y Anthony Russo', '3 h 2 min', 'Ingles', 
'Tras los sucesos de "Vengadores: Infinity War", los superhéroes que sobrevivieron a Thanos se reunen para poner en práctica un plan definitivo que podría acabar con el villano definitivamente.',
'2020-04-22', 3),
('Guasón (2019)', 'Drama, Suspenso', 'Todd Phillips', '2 h 2 min', 'Ingles', 
'Película centrada en el Joker, el archienemigo de Batman, que pondrá foco en cómo se convirtió en un villano y qué le llevó a ello. ', 
'2019-10-04', 4),
('Justice League Dark Apokolips War (2020)', 'Animación', 'Matt Peters y Christina Sotta', '1 h 30 min', 'Ingles', 
'Culminando seis años de una aventura que comenzó con el lanzamiento de Justice League: War en 2014, Justice League Dark: Apokolips War presenta un planeta Tierra totalmente devastado por el tirano intergaláctico Darkseid en el que los superhéroes apenas han podido hacer frente a la guerra.', 
'2020-05-05', 5),
('Batman vs Superman El Origen de la Justicia (2016)', 'Accion', 'Zack Snyder', '2 h 35 min', 'Ingles',
'Temiendo las acciones desenfrenadas de un superhéroe con poderes similares a los de un Dios, el formidable y poderoso vigilante de Ciudad Gótica se convierte en salvador moderno y el más aclamado de Metropolis, mientras el mundo parece abrumarse por saber a qué tipo de héroe realmente necesita.',
'2016-03-24', 6),
('¡Huye! (2017)', 'Horror', 'Jordan Peele', '1 h 43 min', 'Ingles',
'El actor y comediante Jordan Peele debuta como director con la película Get Out, una cinta de horror que se centra en la visita que un joven afromericano hará a la familia caucásica de su novia. Sin embargo, no todo es lo que parece y su estadía tomará un giro siniestro.',
'2017-05-26', 7),
('Capitán América Civil War (2016)', 'Accion', 'Anthony Russo y Joe Russo', '2 h 23 min', 'Ingles',
'Capitán América: Guerra Civil continúa la historia de Steve Rogers, líder del recién formado equipo de Vengadores, en sus continuos esfuerzos para salvaguardar la humanidad.',
'2016-04-29', 8),
('La Forma Del Agua (2017)', 'Ciencia ficcion, Romance', 'Guillermo del Toro', '1 h 59 min', 'Ingles',
'Estados Unidos, 1963. Plena Guerra Fría. Ciertas instalaciones de gobierno albergan laboratorios secretos de alta seguridad, en los que científicos llevan a cabo diversas pruebas y experimentos sobre un extraño hombre pez (Doug Jones).',
'2018-01-12', 9),
('It (Eso) (2017)', 'Horror', 'Andrés Muschietti', '2 h 15 min', 'Ingles', 
'New Line Cinema presenta IT, una película de horror y suspenso basada en la popular novela homónima de Stephen King, que ha logrado aterrorizar a sus lectores por décadas.',
'2017-09-14',11),
('Onward (2020)', 'Animación, Aventura', 'Dan Scanlon', '1 h 03 min', 'Ingles',
'Ambientado en un mundo de fantasía suburbana, dos hermanos elfos adolescentes, Ian y Barley Lightfood, se embarcan en una aventura en la que se proponen descubrir si existe aún algo de magia en el mundo que les permita pasar un último día con su padre, que falleció cuando ellos eran aún muy pequeños como para poder recordarlo.',
'2020-02-20', 10),
('Una Voz Silenciosa (2016)', 'Animación, Drama, Romance', 'Naoko Yamada', '2 h 9 min', 'Japones',
'“Koe no Katachi” (Una Voz Silenciosa) es una conmovedora historia realizada por el estudio de animación Kyoto Animation y basada en el manga escrito por Yohitoki Oima sobre la amistad y la empatía, la cuál se desarrolla a través de Shouya, un chico con un pasado vergonzoso.',
'2017-05-05', 12),
('Toy Story 4 (2019)', 'Animación, comedia', 'Josh Cooley', '1 h 40 min', 'Inglés',
'“Woody siempre ha tenido claro cuál es su labor en el mundo y cuál es su prioridad: cuidar a su dueño, ya sea Andy o Bonnie. Sin embargo, Woody descubrirá lo grande que puede ser el mundo para un juguete cuando Forky se convierta en su nuevo compañero de habitación. Los juguetes se embarcarán en una aventura de la que no se olvidarán jamás.',
'2019-06-21', 13),
('El hombre invisible (2020)', 'Terror, Suspenso', 'Leigh Whannell', '2 h 05 min', 'Inglés',
'Después de que su abusivo ex novio se suicide, la ingenua viuda Cecilia comienza a reconstruir su vida para mejor. Sin embargo, su sentido de la realidad se pone en tela de juicio cuando comienza a sospechar que su ex novio en realidad no está muerto, como había pensado.',
'2020-02-28', 14),
('Maléfica, Dueña del mal (2019)', 'Fantasía, Aventura', 'Joachim Ronning', '1 h 58 min', 'Inglés',
'Secuela de "Maléfica" que cuenta la vida de Maléfica y Aurora, así como las alianzas que formarán para sobrevivir a las amenazas del mágico mundo en el que habitan.',
'2019-10-16', 15),
('El Rey Leon (2019)', 'Animación, Familia', 'Jon Favreau', '1 h 58 min', 'Inglés',
'Un remake del clásico animado de Disney de 1994 El rey león que estará dirigido por Jon Favreu. Simba (Donald Glover) es el hijo del rey de los leones, Mufasa, y heredero de todo el reino. Pero cuando su padre es brutalmente asesinado por su tío Scar, decidirá huir, dejando vía libre para que su tío tome el puesto de su padre como líder de la manada. En su camino, Simba se encuentra con el suricato Timón y el jabalí Pumba, que le enseñarán a vivir la vida sin preocupaciones. Pero el joven león se verá obligado a decidir entre su vida libre de problemas o su destino como rey .',
'2019-07-09', 16),
('Aquaman (2018)', 'Acción, Aventura', 'James Wan', '2 h 22 min', 'Inglés',
'Arthur Curry, también conocido como Aquaman (Jason Momoa), es un habitante de un poderoso reino subacuático que recibe el nombre de la Atlántida. En esta película repleta de acción y aventura conoceremos sus orígenes, desde que era un niño criado por un hombre humano y considerado un paria por los suyos, hasta que crece y debe hacer frente a los problemas que han aparecido en su mundo. Entonces, este hombre mitad humano y mitad atlante, emprenderá el viaje de su vida, en el que tendrá que descubrir quién es realmente y si es digno de ser un rey. Acompañado de Mera (Amber Heard), hará frente a este y otros retos, mientras le planta cara a Black Manta (Yahya Abdul-Mateen II) y a su propio hermanastro Orm (Patrick Wilson). ¿Será capaz de dirigir a su pueblo y convertirse en un héroe para el mundo?.',
'2018-12-13', 17),
('Aves de presa (2020)', 'Acción', 'Cathy Yan', '1 h 49 min', 'Inglés',
'Después de separarse de Joker, Harley Quinn y otras tres heroínas, Canario Negro, Cazadora y Renné Montoya, unen sus fuerzas para salvar a una niña del malvado rey del crímen, Máscara negra.',
'2020-01-29', 18),
('Terminator Destino Oculto (2019)', 'Acción, Ciencia Fincción', 'Tim Miller', '2 h 08 min', 'Inglés',
'Un nuevo tipo de Terminator llega desde el futuro a la Ciudad de México para asesinar a una joven llamada Dani Ramos. Sin embargo, también viaja al presente desde el futuro Grace, un híbrido entre cyborg y humano que debe, con la ayuda de Sarah Connor, proteger a Ramos del aparentemente indestructible robot asesino.',
'2019-10-23', 19),
('Jumanji Siguiente Nivel (2019)', 'Acción, Comedia', 'Jake Kasdan', '2 h 03 min', 'Inglés',
'En esta ocasión, los jugadores vuelven al juego, pero sus personajes se han intercambiado entre sí, lo que ofrece un curioso plantel: los mismos héroes con distinta apariencia. Pero, ¿dónde está el resto de la gente? Los participantes sólo tienen una opción: jugar una vez más a esta peligrosa partida para descubrir qué es realmente lo que está sucediendo.',
'2019-12-12', 20);





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