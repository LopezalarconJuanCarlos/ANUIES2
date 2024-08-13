/*
SQLyog Community v13.1.9 (64 bit)
MySQL - 10.4.27-MariaDB : Database - anuies
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`anuies` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `anuies`;

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2019_12_14_000001_create_personal_access_tokens_table',1),
(5,'2023_07_01_055415_tb_archivos',1),
(6,'2023_07_01_055422_tb_imagenes',1),
(7,'2023_07_01_055433_tb_informacion',1),
(8,'2023_07_01_055440_tb_tipos',1),
(9,'2023_07_01_055446_tb_usuarios',1),
(10,'2023_08_03_193808_tb__directorio',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `tb_archivos` */

DROP TABLE IF EXISTS `tb_archivos`;

CREATE TABLE `tb_archivos` (
  `id_archivos` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` text NOT NULL,
  `archivo` text DEFAULT NULL,
  `id_informacion` int(11) NOT NULL,
  `detalle` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_archivos`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_archivos` */

insert  into `tb_archivos`(`id_archivos`,`nombre`,`archivo`,`id_informacion`,`detalle`,`created_at`,`updated_at`) values 
(1,'convocatoria','convocatoria',1,'mucho texto para escribirlo','2023-07-20 18:12:19','2023-07-20 18:12:21'),
(2,'20230720182554lista.docx','archivos.docx',1,'PDF','2023-07-21 00:26:05','2023-07-21 00:26:05'),
(3,'20230814131435ilovepdf_merged (1).pdf','20230814191445ilovepdf_merged (1).pdf',2,'lakslkamsxiadma','2023-08-14 19:14:50','2023-08-14 19:14:50');

/*Table structure for table `tb_directorio` */

DROP TABLE IF EXISTS `tb_directorio`;

CREATE TABLE `tb_directorio` (
  `id_directorio` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `puesto` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `app` varchar(50) NOT NULL,
  `apm` varchar(50) NOT NULL,
  `institucion` varchar(50) NOT NULL,
  `telefono` text NOT NULL,
  `email` text NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_directorio`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_directorio` */

insert  into `tb_directorio`(`id_directorio`,`puesto`,`nombre`,`app`,`apm`,`institucion`,`telefono`,`email`,`activo`,`created_at`,`updated_at`) values 
(1,'Director','Juan Carlos','Lopez','Alarcon','UTVT','7221487773','admin@cinvestav.com',1,'2023-08-06 21:26:15','2023-08-06 21:46:22'),
(2,'Secretaria','Jossue Alejandro','Candelas','Hernandez','UAEM','7223635124','al222220002@gmail.com',1,'2023-08-07 21:15:54','2023-08-07 21:15:54');

/*Table structure for table `tb_imagenes` */

DROP TABLE IF EXISTS `tb_imagenes`;

CREATE TABLE `tb_imagenes` (
  `id_imagen` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `foto` text DEFAULT NULL,
  `id_informacion` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_imagen`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_imagenes` */

insert  into `tb_imagenes`(`id_imagen`,`nombre`,`foto`,`id_informacion`,`created_at`,`updated_at`) values 
(1,'conferencia.jpg','conferencia.jpg\r\n',2,'2023-07-01 14:18:50','2023-07-13 20:29:07'),
(2,'sep.jpg\r\n','sep.jpg',2,'2023-07-01 15:02:27','2023-07-01 15:02:30'),
(3,'noticias.jpg','noticias.jpg',3,'2023-07-01 15:04:30','2023-07-20 23:28:56'),
(4,'sep.jpg','sep.jpg',4,'2023-07-12 16:36:11','2023-07-19 00:12:32'),
(11,'sep.jpg','sep.jpg',1,'2023-07-13 19:57:11','2023-07-20 23:53:29');

/*Table structure for table `tb_informacion` */

DROP TABLE IF EXISTS `tb_informacion`;

CREATE TABLE `tb_informacion` (
  `id_informacion` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `informacion` text DEFAULT NULL,
  `fi_publicacion` date NOT NULL,
  `ff_publicacion` date NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `activobanner` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_informacion`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_informacion` */

insert  into `tb_informacion`(`id_informacion`,`titulo`,`informacion`,`fi_publicacion`,`ff_publicacion`,`activo`,`activobanner`,`created_at`,`updated_at`) values 
(1,'Conferencia internacional','Nuco vivía feliz en un árbol con sus papás que le cuidaban mucho. Lo que más le gustaba era ver jugar a los niños. Cada mañana se asomaba desde su nido y les veía correr, reírse, saltar a la comba… En cuanto supiera volar bajaría a jugar con ellos. Le encantaba oír sus risas, sus canciones, sus gritos… todo era perfecto, de no ser por un extraño sonido que se repetía varias veces al día y tras él, sólo silencio.Por fin, Nuco se armo de valor, se lanzó al vacío y comenzó a mover las alas. “Mira mamá, estoy volando” gritaba feliz.Se acercó hasta donde estaban los niños para jugar con ellos, pero al llegar, sonó el ruido extraño y los niños desaparecieron corriendo. Era la sirena del colegio. Nuco se quedó muy triste al ver que todos se iban a clase y él no podía ir.','2023-07-19','2023-07-31',1,0,'2023-07-01 14:21:02','2023-07-03 03:27:07'),
(2,'Secretaria Publica','La secretaria de Educación Pública, Leticia Ramírez Amaya, defendió que el gobierno federal promueve un enfoque humanista en la educación, lo que implica un cambio de paradigma en el plan y programas de estudios, los Libros de Texto Gratuitos, y en el reconocimiento a la autonomía profesional del magisterio.\r\n\r\nAl presentar la conferencia magistral “Educación en la Cuarta Transformación” a integrantes de la maestría en Seguridad Nacional del Colegio Militar, la funcionaria informó los avances en las políticas públicas del sector educativo al cierre del ciclo escolar 2022-2023, y presentó los componentes de la Estrategia en el aula Prevención de adicciones. Si te drogas, te dañas.\r\n','2023-07-01','2023-07-31',1,0,'2023-07-01 15:02:01','2023-07-01 15:02:03'),
(3,'Noticias Estatales','En un tranquilo pueblo rodeado de exuberante vegetación y montañas majestuosas, vivía un joven apasionado por la naturaleza y los secretos que encerraba. Su nombre era Juan, y desde pequeño, mostró una innata curiosidad por descubrir los misterios de la vida. Cada mañana, salía en solitario a recorrer los senderos del bosque, observando cada planta y animal con fascinación.\r\n\r\nUn día, durante una de sus exploraciones, encontró una antigua cueva oculta tras una cascada. Intrigado, decidió adentrarse en ella. Al principio, solo había oscuridad, pero pronto, su camino se iluminó con destellos dorados. Descubrió una gema brillante que emanaba un poder desconocido. Sin saberlo, había encontrado el legendario \"Cristal de la Sabiduría\".\r\n\r\nA partir de ese momento, Juan adquirió una sabiduría excepcional, comprendiendo los lenguajes de los animales y plantas, y desvelando los secretos de la naturaleza. Con su nueva habilidad, se convirtió en un guardián del equilibrio, protegiendo a las criaturas y velando por el bienestar de su amado pueblo.\r\n\r\nCon el paso del tiempo, la fama de Juan y su don se extendió más allá de las fronteras del pueblo. Aventureros y sabios buscaban su guía y conocimiento. Sin embargo, él seguía siendo humilde y sencillo, enseñando a quienes acudían a él con amor y paciencia.\r\n\r\nEl pueblo que alguna vez fue tranquilo, se convirtió en un centro de aprendizaje y respeto por la naturaleza. Juan se convirtió en un símbolo de esperanza y armonía, recordando a todos la importancia de preservar y amar la tierra que les brindaba tanta belleza y enseñanzas.\r\n\r\nLa leyenda de Juan, el guardián del Cristal de la Sabiduría, perdura hasta nuestros días, inspirando a generaciones a cuidar del mundo natural y descubrir la sabiduría que yace en lo más profundo de nuestro ser.','2023-07-01','2023-07-31',1,0,'2023-07-01 15:06:26','2023-07-01 15:06:30'),
(4,'Conferencia internacional','na imagen de fondo en Laravel, puedes utilizar CSS para aplicar estilos a tus vistas. Aquí tienes los pasos básicos para hacerlo:  Primero, asegúrate de tener una imagen que deseas utilizar como fondo. Puedes colocarla en una carpeta dentro de tu proyecto Laravel, por ejemplo, en la carpeta public/images.  Abre tu archivo de vista (por ejemplo, blade.php) donde deseas agregar la imagen de fondo.  Agrega una sección de estilo dentro de la etiqueta <head> de tu vista. Puedes utilizar CSS para establecer la imagen de fondo. Por ejemplo:  html Copy code <style>     body {         background-image: url(\'/images/nombre-de-tu-imagen.jpg\');         background-repeat: no-repeat;         background-size: cover;     } </style> Asegúrate de reemplazar \'nombre-de-tu-imagen.jpg\' con la ruta correcta y el nombre de tu imagen.  Guarda los cambios y actualiza tu vista en el navegador. La imagen de fondo debería aplicarse ahora. Ten en cuenta que esto aplica la imagen de fondo a todo el cuerpo de la página (<body>). Si deseas','2023-07-01','2023-07-01',1,1,'2023-07-12 19:29:48','2023-07-12 19:29:48');

/*Table structure for table `tb_tipos` */

DROP TABLE IF EXISTS `tb_tipos`;

CREATE TABLE `tb_tipos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `clave` varchar(30) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `activo` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_tipos` */

insert  into `tb_tipos`(`id`,`clave`,`nombre`,`descripcion`,`activo`,`created_at`,`updated_at`) values 
(1,'T-1','Administrador','Puede controlar la informacion que se coloca en la pagina',0,'2023-07-02 18:38:55','2023-07-07 01:54:42'),
(2,'T-2','Usuario','Solo podran visualizar las noticias',1,'2023-07-07 02:22:13','2023-07-07 02:22:13'),
(3,'T-2','Administrativo','Puede hacer lo que quiera',1,'2023-07-07 02:22:49','2023-07-07 02:22:49');

/*Table structure for table `tb_usuarios` */

DROP TABLE IF EXISTS `tb_usuarios`;

CREATE TABLE `tb_usuarios` (
  `id_usuario` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `clave` varchar(30) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `app` varchar(50) NOT NULL,
  `apm` varchar(50) NOT NULL,
  `gen` varchar(15) NOT NULL,
  `fn` date NOT NULL,
  `foto` text DEFAULT NULL,
  `email` text NOT NULL,
  `pass` varchar(255) NOT NULL,
  `id_tipo` int(10) unsigned NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `tb_usuarios_email_unique` (`email`) USING HASH
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_usuarios` */

insert  into `tb_usuarios`(`id_usuario`,`clave`,`nombre`,`app`,`apm`,`gen`,`fn`,`foto`,`email`,`pass`,`id_tipo`,`activo`,`created_at`,`updated_at`) values 
(1,'USU-1','Juan Carlos','Lopez','Alarcon','M','1998-09-04','2023071900352520230712192029utvt.jpg','juancarlospuma2@gmail.com','123123',1,0,'2023-07-02 16:49:32','2023-07-19 00:35:25'),
(2,'202020','Juan Carlos','Lopez','Alarcon','F','2023-07-06','20230706213534FOei3SWXwAcsLrL.jpg','al222220002@gmail.com','123123',1,1,'2023-07-06 21:35:34','2023-07-26 00:39:59'),
(3,'USU-3','Juan Carlos','Lopez','Mendez','F','2023-06-30','20230807190946seishu inui tokyo revengers anime icon pfp manga panel.jpg','al222110707@gmail.com','123123',2,1,'2023-07-12 19:20:30','2023-08-07 19:09:47');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
