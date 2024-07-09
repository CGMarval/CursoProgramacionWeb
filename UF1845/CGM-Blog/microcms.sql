-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-05-2024 a las 17:29:52
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `microcms`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `excerpt` text NOT NULL,
  `content` text NOT NULL,
  `published_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`id`, `title`, `excerpt`, `content`, `published_on`) VALUES
(1, 'Bitcoin Jesus fue uno de los primeros millonarios gracias a las criptomonedas. Ahora ha sido detenido en España', 'Todos estos movimientos son los que llevaron a catalogarlo popularmente con el nombre de Bitcoin Jesus', 'Otro inversor cripto de referencia ha sido detenido. Si la semana pasada se condenó a prisión al CEO de Binance, ahora es el ex-CEO de Bitcoin.com el que ha sido detenido por fraude fiscal. Roger Ver, nacido en San José y residente en Japón, fue uno de los primeros inversores reconocidos de las criptomonedas, allá por 2011.\r\n\r\nSu empresa, MemoryDealers, fue una de las primeras en aceptar pagos del Bitcoin. Roger Ver también es uno de los cinco fundadores de la Bitcoin Fundation y actualmente es uno de los principales impulsores del Bitcoin Cash. Todos estos movimientos son los que llevaron a catalogarlo popularmente con el nombre de \"Bitcoin Jesus\". \r\n\r\nPero ahora ha sido detenido en España, acusado por el Departamento de Justicia de los Estados Unidos de defraudar más de 45 millones de euros en impuestos, según describe Reuters. ', '2024-05-06 12:00:00'),
(2, 'Japón ya tiene su primer prototipo con 6G: los resultados han sido un éxito', '100 Gbps por segundo en interiores. Los gigantes de telecomunicaciones de Japón ya experimentan con el 6G', 'El 5G ya forma parte de prácticamente cualquier teléfono, aunque los primeros experimentos con el 6G ya están sobre la mesa. Ya ha satélites 6G en órbita para probar esta tecnología, países como Corea del Sur están probando algunos proyectos con ella, y España está aprobando las primeras ayudas para usarla.\r\n    Japón ha presentado, en colaboración con algunas de las grandes empresas de telecomunicaciones del país, su primer prototipo 6G. Han logrado hacerlo funcionar a una velocidad notablemente superior que la del 5G, alcanzando los 100 Gbps en interiores.', '2024-05-06 12:01:49'),
(3, 'Las empresas de China están organizando sus propias milicias. La gran incógnita es: para qué', 'Docenas de empresas chinas han creado unidades del Departamento de las Fuerzas Armadas Populares.', 'En China están recuperando una antigua costumbre que vivió sus años dorados durante los tiempos de Mao Zedong, sobre todo entre los 50 y 70: la formación de milicias. Lo curioso es dónde y sobre todo quiénes están impulsando esas unidades voluntarias formadas por ciudadanos y que se conocen como Departamentos de las Fuerzas Armadas del Pueblo (PAFD). Su impulso está cuajando en las empresas, sobre todo las estatales, aunque hay casos también en corporaciones privadas. La gran pregunta que deja la tendencia es… ¿Para qué?\r\n\r\nDel mono de trabajo al uniforme. El fenómeno lo señalaba ya en febrero Financial Times. Tras examinar anuncios de empresas e informes publicados en medios estatales a lo largo de 2023, el diario británico llegaba a la conclusión de que docenas de empresas chinas se han dedicado a establecer nuevos PAFD. Y en un tiempo relativamente breve. En concreto, habla de que las unidades se pusieron en marcha en cuestión de \"meses\". Entre las compañías que movieron ficha hay empresas estatales, pero también un gigante lácteo de propiedad privada.\r\n\r\nLa cadena CNN, que se ha encargado de investigar la tendencia de las milicias corporativas en China, hablaba hace dos meses y medio de al menos 16 grandes empresas con unidades creadas a lo largo de 2023. En su análisis destacaban sobre todo las firmas de propiedad estatal, conocidas como SOE, ligadas directamente al gobierno central o a las autoridades regionales, pero citaba también algún caso concreto en el que la administración no tenía mayoría en la toma de decisiones. Pero… ¿Qué clase de empresas? El listado es amplio. Los medios que han analizado la creación de milicias citan a una empresa promotora y constructora de propiedad estatal, un productor de lácteos de China también de titularidad pública, varias firmas dedicadas a la construcción, el transporte y suministro de agua, una entidad financiera… Sus ubicaciones se repartían a lo largo del país, desde Jiangsu a Shanghái, Guangdong o Hubei. En Qinhai, al noroeste de China, un banco estatal que destaca como prestamista informaba hace poco de que había organizado a parte del personal de una de sus filiales para formar una milicia.\r\n\r\nSi hay un caso que ha llamado la atención es sin embargo el de Yili Group, una empresa privada con sede en Mongolia Interior que destaca por su gran peso en el sector lácteo. A finales de 2023 se convirtió en la primera gran compañía china de control privado que, al menos en los últimos años, creó una unidad PAFD.\r\n\r\n¿Milicias, para qué? La pregunta del millón. La de Yili se constituyó por ejemplo como una fuerza de defensa que pueda \"servir en tiempos de paz, hacer frente a emergencias y responder en tiempos de guerra\", como la definió Huang Zhiquiang, vicepresidente ejecutivo de la Región Autónoma de Mongolia, durante un acto en Hohhot. La unidad quedó además bajo la dirección de la guarnición del Ejército Popular de Liberación (EPL) de Mongolia Interior y el Partido Comunista.', '2024-05-10 12:24:54'),
(4, 'Microsoft tiene un plan para evitar las comisiones de Apple y Google: lanzar su propia tienda de juegos para móvil', 'Microsoft está a punto de lanzar su propia tienda de juegos para móvil. Todo un dardo para Apple y Google', 'Microsoft está a punto de desafiar el dominio de Apple y Google en el mercado de las tiendas de aplicaciones móviles. La compañía, como recogen en Bloomberg, lanzará su propia tienda de juegos en línea en julio, ofreciendo una alternativa a las políticas y tarifas impuestas por las tiendas existentes. La tienda debutará con los juegos de Microsoft, incluyendo el popular Candy Crush Saga, con planes de expandirse para incluir títulos de otros desarrolladores en el futuro cercano.\r\n\r\nUna web, no una app. El enfoque estratégico de Microsoft es evitar las altas comisiones impuestas por las tiendas tradicionales a través de una tienda que funcionará como un sitio web, en lugar de una aplicación dedicada. Esto, según Microsoft, se traduce en que la tienda \"será accesible desde cualquier dispositivo con acceso a Internet, sin importar las políticas restrictivas de las tiendas de aplicaciones cerradas\". Esta decisión busca brindar a los usuarios una opción más abierta y flexible para descubrir y adquirir juegos para móviles.\r\n\r\nEs una decisión que deja claro que esta Store de Microsoft no vendrá para competir directamente con App Store y Play Store, sino que servirá como un espacio propio para que los juegos de Microsoft estén libres de comisiones. Evitando las comisiones. Las altas comisiones impuestas por Google y Apple están llevando a los grandes desarrolladores a mover ficha. Epic Games o Steam son ejemplos de gigantes cambiando la estrategia para atraer desarrolladores mediante un sistema de reparto mucho más equitativo. Del mismo modo, ya sabemos que Epic Games Store aterrizará en iOS y Android a finales de este año, cobrando una comisión del 12% a los desarrolladores y aprovechando que la DMA obliga a compañías como Apple a abrir su ecosistema a tiendas de terceros. El papel de Microsoft. Por el lado de Microsoft, el territorio de los juegos para móviles es clave. La adquisición de Activision Blizzard le permite competir con entregas como \"Candy Crush\" o, \"Minecraft\" \"Call of Duty\", dos de los pesos pesados en el sector móvil.\r\n\r\nSe abre así la puerta a que Microsoft retire de Play Store y App Store sus juegos más populares para evitar las comisiones, un movimiento peligroso teniendo en cuenta las millones de descargas que mueve en dichas tiendas.\r\n\r\nEl anuncio de Microsoft sobre su tienda de juegos para móviles representa un nuevo capítulo en esta saga de las stores para móvil alternativas, reafirmando la creciente determinación de las empresas tecnológicas para desafiar las estructuras existentes y ofrecer alternativas más accesibles y equitativas para los desarrolladores (y para ellos mismos).', '2024-05-10 12:38:37');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
