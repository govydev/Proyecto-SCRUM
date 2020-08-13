-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 21-07-2020 a las 00:23:44
-- Versión del servidor: 8.0.17
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `leyes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `idarticulo` int(11) NOT NULL,
  `numero_articulo` int(11) NOT NULL,
  `nombre_articulo` varchar(80) NOT NULL,
  `descripcion` varchar(600) NOT NULL,
  `idcapitulo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`idarticulo`, `numero_articulo`, `nombre_articulo`, `descripcion`, `idcapitulo`) VALUES
(1, 1, 'Objeto de la ley', 'La  presente  Ley  tiene  por  objeto  prevenir  y  sancionar  las  conductas  ilícitas  que afectan  los  sistemas  y  datos  informáticos  y  otros  bienes  jurídicos  de  relevancia penal,  cometidas mediante la utilización de tecnologías de la información o de la comunicación,con la finalidad de garantizar la lucha eficaz contra la ciberdelincuencia.', 1),
(2, 2, 'Acceso ilícito', 'El que deliberada e ilegítimamente accede a todo o en parte de un sistema informático, siempre que se realice con vulneración de medidas de seguridad establecidas para impedirlo, será reprimido con pena privativa de  libertad no menor de uno ni mayor de cuatro años y con treinta a noventa días-multa.Será reprimido con la  misma pena, el que accede a un sistema informático excediendo lo autorizado.', 2),
(3, 3, 'Atentado a la integridad de datos informáticos', 'El que deliberada e ilegítimamente daña, introduce, borra, deteriora, altera, suprime o hace inaccesibles datos informáticos, será reprimido con pena privativa de libertad no menor de tres ni mayor de seis años y con ochenta a ciento veinte días-multa.', 2),
(4, 4, 'Atentado contra la integridad de sistemas informáticos', 'El que deliberada e ilegítimamente inutiliza, total o parcialmente, un sistema informático, impide el acceso a este, entorpece o imposibilita su funcionamiento o la prestación de sus servicios, será reprimido con pena  privativa de libertad no menor de tres ni mayor de seis años y con ochenta a ciento veinte días-multa.', 2),
(5, 5, 'Proposiciones  a  niños,  niñas  y  adolescentes  con  fines  sexuales  por medi', 'El que a través de internet u otro medio análogo contacta con un menor de catorce años para solicitar u obtener de él material pornográfico, o para llevar a cabo actividades sexuales con él, será reprimido con una pena privativa de libertad no menor de cuatro ni mayor de ocho años e inhabilitación conforme a los numerales 1, 2 y 4 del artículo 36 del Código Penal. Cuando la víctima tiene entre catorce y menos de dieciocho años de edad y medie engaño, la pena será no menor de tres ni mayor de seis años e inhabilitación conforme a los numerales 1, 2 y 4 del artículo 36 del Código Penal.', 3),
(6, 6, 'Tráfico ilegal de datos', 'El que crea, ingresa o utiliza indebidamente una base de datos sobre una persona natural o jurídica,  identificada o identificable, para comercializar, traficar, vender, promover, favorecer o facilitar información relativaa cualquier ámbito de la esfera personal, familiar, patrimonial, laboral, financiera u otro de naturaleza análoga, creando o no perjuicio, será reprimido con pena privativa de libertad no menor de tres ni mayor de cinco años', 4),
(7, 7, 'Interceptación de datos informáticos', 'El que deliberada e ilegítimamente intercepta datos informáticos en transmisiones no públicas, dirigidos a un sistema informático, originados en un sistema informático o efectuado dentro del mismo, incluidas las emisiones electromagnéticas provenientes de un sistema informático que transporte dichos datos informáticos, será reprimido con una pena privativa de libertad no menor de tres ni mayor de seis años.La pena privativa de libertad será no menor de cinco ni mayor de ocho años cuando el delito recaiga sobre información clasificada como secreta, reservada o confidencial de conformidad con la', 4),
(8, 8, 'Fraude informático', 'El que deliberada e ilegítimamente procura para sí o para otro un provecho ilícito en  perjuicio  de  tercero  mediante  el  diseño,  introducción,  alteración,  borrado, supresión,    clonación    de    datos    informáticos    o    cualquier    interferencia    o manipulación  en  el funcionamiento de  un  sistema  informático,  será  reprimido  con una  pena  privativa  de  libertad  no  menor  de  tres  ni  mayor  de  ocho  años  y  con sesenta a ciento veinte días-multa.La pena será privativa de libertad no menor de cinco ni mayor de diez años y de ochenta  a  ciento  cuarenta  días-multa', 5),
(9, 9, 'Suplantación de identidad', 'El que, mediante las tecnologías de la información o de la comunicación suplanta la identidad de una persona natural o jurídica, siempre que de dicha conducta resulte algún perjuicio, material o moral, será reprimido con pena privativa de libertad no menor de tres ni mayor de cinco años.', 6),
(10, 10, 'Abuso de mecanismos y dispositivos informáticos', 'El que deliberada e ilegítimamente fabrica, diseña, desarrolla, vende, facilita, distribuye, importa u obtiene para su utilización, uno o más mecanismos, programas informáticos, dispositivos, contraseñas, códigos de acceso o cualquier otro dato informático, específicamente diseñados para la comisión de los delitos previstos en la presente Ley, o el que ofrece o presta servicio que contribuya a ese propósito, será reprimido con pena privativa de libertad no menor de uno ni mayor de cuatro años y con treinta a noventa días-multa.', 7),
(11, 11, 'Agravantes', 'El juez aumenta la pena privativa de libertad hasta en un tercio por encima del máximo legal fijado para cualquiera de los delitos previstos en la presente Ley cuando:\r\n1. El agente comete el delito en calidad de integrante de una organización criminal.\r\n2. El agente comete el delito mediante el abuso de una posición especial de acceso a la data o información reservada o al conocimiento de esta información en razón del ejercicio deun cargo o función.\r\n3. El agente comete el delito con el fin de obtener un beneficio económico, salvo en los delitos que prevén dicha circunstancia.\r\n4. El delito c', 7),
(12, 12, 'Exención de responsabilidad penal', 'Está exento de responsabilidad penal el que realiza las conductas descritas en los artículos 2, 3, 4 y 10 con el propósito de llevar a cabo pruebas autorizadas u otros procedimientos autorizados destinados a proteger sistemas informáticos.', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capitulo`
--

CREATE TABLE `capitulo` (
  `idcapitulo` int(11) NOT NULL,
  `numero_capitulo` int(11) NOT NULL,
  `nombre_capitulo` varchar(80) NOT NULL,
  `idley` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `capitulo`
--

INSERT INTO `capitulo` (`idcapitulo`, `numero_capitulo`, `nombre_capitulo`, `idley`) VALUES
(1, 1, 'FINALIDAD Y OBJETO DE LA LEY', 1),
(2, 2, 'DELITOS CONTRA DATOS Y SISTEMAS INFORMÁTICOS', 1),
(3, 3, 'DELITOS INFORMÁTICOS CONTRA LA INDEMNIDAD Y LIBERTAD SEXUALES', 1),
(4, 4, 'DELITOS INFORMÁTICOS CONTRA LA INTIMIDAD Y EL SECRETO DE LAS COMUNICACIONES', 1),
(5, 5, 'DELITOS INFORMÁTICOS CONTRA EL PATRIMONIO', 1),
(6, 6, 'DELITOS INFORMÁTICOS CONTRA LA FE PÚBLICA', 1),
(7, 7, 'DISPOSICIONES COMUNES', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `disposicion`
--

CREATE TABLE `disposicion` (
  `iddisposicion` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `idcapitulo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `disposicion`
--

INSERT INTO `disposicion` (`iddisposicion`, `nombre`, `descripcion`, `idcapitulo`) VALUES
(1, 'Codificación de la pornografía infantil', 'La Policía Nacional del Perú puede mantener ensus archivos, con la autorización y supervisión respectiva del Ministerio Público, material de pornografía infantil, en medios de almacenamiento de datos informáticos, para fines exclusivos del cumplimiento de su función.Para tal efecto, cuenta con una base de datos debidamente codificada.\r\nLa Policía Nacional del Perú y el Ministerio Público establecen protocolos de coordinación en el plazo de treinta días a fin de cumplir con la disposición establecida en el párrafo anterior.', 7),
(2, 'Agente encubierto en delitos informáticos', 'El fiscal, atendiendo a la urgencia del caso particular y con la debida diligencia, puede autorizar la actuación de agentes encubiertos a efectos de realizar las investigaciones de los delitos previstos en la presente Ley y de tododelito que se cometa mediante tecnologías de la información o de la comunicación, con prescindencia de si los mismos están vinculados a una organización criminal, de\r\nconformidad con el artículo 341 del Código Procesal Penal, aprobado mediante el Decreto Legislativo 957.', 7),
(3, 'Coordinación  interinstitucional de la  Policía Nacional del Perú con el Ministerio Público', 'La Policía Nacional del Perú fortalece el órgano especializado encargado de coordinar las funciones de investigación con el Ministerio Público. A fin de establecer mecanismos de comunicación con los órganos de gobierno del Ministerio Público, el centro de respuesta temprana del gobierno para ataques cibernéticos (Pe-CERT), la Oficina Nacional de Gobierno Electrónico e Informática (ONGEI) y los Organismos Especializados de  las  FuerzasArmadas, la Policía Nacional centraliza la información aportando su experiencia en la elaboración  de los programas y acciones para la adecuada persecución de los delitos informáticos, y desarrolla programas de protección y seguridad.', 7),
(4, 'Cooperación operativa', 'Con el objeto de garantizar el intercambio de información, los equipos de investigación conjuntos,la transmisión de documentos, la interceptación de\r\ncomunicaciones y demás actividades correspondientes para dar efectividad a la presente Ley, la Policía Nacional del Perú, el Ministerio Público, el Poder Judicial, el Pe-CERT (Centro de respuesta temprana del gobierno para ataques cibernéticos), la ONGEI (Oficina Nacional de Gobierno Electrónico e Informática), Organismos Especializados de las Fuerzas Armadas y los operadores del sector privado involucrados en la lucha contra los  delitos informáticos  deben  establecer protocolos de cooperación operativa reformada en el plazo de treinta días desde la vigencia de la presente Ley.', 7),
(5, 'Capacitación', 'Las instituciones públicas involucradas en la prevención y represión de los delitos informáticos deben impartir cursos de capacitación destinados a mejorar la formación profesional de su personal -especialmente de la Policía Nacional del Perú, el Ministerio Público y el Poder Judicial-en el tratamiento de los delitos previstos en la presente Ley', 7),
(6, 'Medidas de seguridad', 'La Oficina Nacional de Gobierno Electrónico e Informática (ONGEI) promueve permanentemente, en coordinación con las instituciones del sector público, el fortalecimiento de sus medidas de seguridad para la protección de los  datos informáticos sensibles y la integridad de sus sistemas informáticos.', 7),
(7, 'Buenas prácticas', 'El Estado peruano realiza acciones conjuntas con otros Estados a fin de poner en marcha acciones y medidas concretas destinadas a combatir el fenómeno de los ataques masivos contra las infraestructuras informáticas y   establece los mecanismos de prevención necesarios, incluyendo respuestas coordinadas e intercambio de información y buenas prácticas.', 7),
(8, 'Convenios multilaterales', 'El Estado peruano promueve la firma y ratificación de convenios multilaterales que garanticen la cooperación mutua con otros Estados para la persecución de los delitos informáticos.', 7),
(9, 'Terminología', 'Para efectos de la presente Ley, se entenderá, de conformidad con el artículo 1 del Convenio sobre la Ciberdelincuencia, Budapest, 23.XI.2001:\r\n\r\na. Por sistema informático: todo dispositivo aislado o conjunto de dispositivos interconectados o relacionados  entre sí, cuya función, o la de alguno de sus elementos, sea el tratamiento automatizado de datos en ejecución  de un programa.\r\n\r\nb.Por datos informáticos: toda representación de hechos, información o conceptos expresados de cualquier forma  que se preste a tratamiento informático,incluidos los programas diseñados para que un sistema informático ejecute una función.', 7),
(10, 'Regulación  e  imposición  de  multas  por  la  Superintendencia  de Banca, Seguros y AFP', 'La Superintendencia de Banca, Seguros y AFP establece la escala de multas atendiendo a las características,  complejidad y circunstancias de los casos aplicables a las empresas bajo su supervisión que incumplan con la obligación prevista en el numeral 5 del artículo 235 del Código Procesal Penal, aprobado por el Decreto Legislativo 957.\r\n\r\nEl juez, en el término de setenta y dos horas, pone en conocimiento del órgano supervisor la omisión incurrida por la empresa, con los recaudos correspondientes sobre las características, complejidad y circunstancias del caso particular, a fin de aplicarse la multa correspondiente.', 7),
(11, 'Regulación e imposición de multas por  el  Organismo Supervisor de Inversión Privada en Telecomunicaciones', 'El Organismo Supervisor de Inversión Privada en Telecomunicaciones establece las multas aplicables a las empresas bajo su supervisión que incumplan con la\r\nobligación  prevista en el numeral 4 del artículo 230 del Código Procesal Penal, aprobado por Decreto Legislativo 957.\r\n\r\nLas empresas de telecomunicaciones organizan sus recursos humanos y logísticos a fin de cumplir con la debida diligencia y sin dilación la obligación prevista en el numeral 4 del artículo 230 del Código Procesal Penal.\r\n\r\nEl juez, en el término de setenta y dos horas, pone enconocimiento del órgano supervisor la omisión incurrida  por la empresa a fin de que el Organismo Supervisor de Inversión Privada en Telecomunicaciones aplique la multa correspondiente.', 7),
(12, 'DISPOSICIONESCOMPLEMENTARIAS MODIFICATORIAS PRIMERA', 'Modificación de la Ley 27697, Ley que otorga facultad al fiscal para la intervención   y   control   de   comunicaciones   y   documentos   privados   en   caso excepcionalModificase el artículo 1 de la Ley 27697, Ley  que otorga facultad al fiscal para la intervención   y   control   de   comunicaciones   y   documentos   privados   en   caso excepcional,  modificado  por  el  Decreto  Legislativo  991  y  por  Ley  30077', 7),
(13, 'DISPOSICIONESCOMPLEMENTARIAS MODIFICATORIAS SEGUNDO', 'Modificación de la Ley 30077, Ley contra el crimen organizadoModificaseel  numeral  9  del  artículo  3  de  la  Ley  30077,  Ley  contra  el  crimen organizado.', 7),
(14, 'DISPOSICIONESCOMPLEMENTARIAS MODIFICATORIAS TERCERA', 'Modificación del Código Procesal PenalModificase el numeral 4 del artículo 230, el numeral 5 del artículo 235 y el literal a) del  numeral  1  del  artículo  473  del  Código  Procesal  Penal,  aprobado  por  Decreto Legislativo  957  y  modificado  por  Ley  30077', 7),
(15, 'DISPOSICIONESCOMPLEMENTARIAS MODIFICATORIAS CUARTA ', 'Modificación de los artículos 162, 183-A y 323 del Código PenalModificase  los  artículos  162,  183-A  y  323  del  Código  Penal,  aprobado  por  el Decreto Legislativo 635', 7),
(16, 'DISPOSICIÓN COMPLEMENTARIA DEROGATORIA\r\n', 'Deróguese el numeral 4 del segundo párrafo del artículo 186 y los artículos 207-A, 207-B,   207-C   y   207-D   del   Código   Penal', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ley`
--

CREATE TABLE `ley` (
  `idley` int(11) NOT NULL,
  `numero_ley` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `ley`
--

INSERT INTO `ley` (`idley`, `numero_ley`) VALUES
(1, '30096');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`idarticulo`),
  ADD UNIQUE KEY `numero_articulo` (`numero_articulo`),
  ADD KEY `idcapitulo` (`idcapitulo`);

--
-- Indices de la tabla `capitulo`
--
ALTER TABLE `capitulo`
  ADD PRIMARY KEY (`idcapitulo`),
  ADD KEY `idley` (`idley`);

--
-- Indices de la tabla `disposicion`
--
ALTER TABLE `disposicion`
  ADD PRIMARY KEY (`iddisposicion`);

--
-- Indices de la tabla `ley`
--
ALTER TABLE `ley`
  ADD PRIMARY KEY (`idley`),
  ADD UNIQUE KEY `numero_ley` (`numero_ley`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `idarticulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `capitulo`
--
ALTER TABLE `capitulo`
  MODIFY `idcapitulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `disposicion`
--
ALTER TABLE `disposicion`
  MODIFY `iddisposicion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `ley`
--
ALTER TABLE `ley`
  MODIFY `idley` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD CONSTRAINT `articulo_ibfk_1` FOREIGN KEY (`idcapitulo`) REFERENCES `capitulo` (`idcapitulo`);

--
-- Filtros para la tabla `capitulo`
--
ALTER TABLE `capitulo`
  ADD CONSTRAINT `capitulo_ibfk_1` FOREIGN KEY (`idley`) REFERENCES `ley` (`idley`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
