/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50718
Source Host           : localhost:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50718
File Encoding         : 65001

Date: 2017-12-08 11:12:13
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for answers
-- ----------------------------
DROP TABLE IF EXISTS `answers`;
CREATE TABLE `answers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `question_id` int(10) unsigned DEFAULT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_right` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `answers_question_id_index` (`question_id`),
  CONSTRAINT `answers_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=126 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of answers
-- ----------------------------
INSERT INTO `answers` VALUES ('1', '1', 'Officia veniam nihil provident dicta delectus et.', '0');
INSERT INTO `answers` VALUES ('2', '1', 'Tenetur aut ut est vel.', '1');
INSERT INTO `answers` VALUES ('3', '1', 'Aut enim et est dolor omnis sit.', '0');
INSERT INTO `answers` VALUES ('4', '1', 'Tenetur explicabo fuga voluptatem.', '1');
INSERT INTO `answers` VALUES ('5', '1', 'Dolores suscipit alias ratione tempora autem temporibus.', '0');
INSERT INTO `answers` VALUES ('6', '2', 'Nihil in quasi et occaecati culpa occaecati ut.', '0');
INSERT INTO `answers` VALUES ('7', '2', 'Incidunt explicabo fuga corrupti et eligendi.', '0');
INSERT INTO `answers` VALUES ('8', '2', 'Facilis et molestiae nihil.', '1');
INSERT INTO `answers` VALUES ('9', '2', 'Aut laboriosam nihil in repellendus.', '0');
INSERT INTO `answers` VALUES ('10', '2', 'Rem et consequatur eum.', '0');
INSERT INTO `answers` VALUES ('11', '3', 'Illo nobis consequatur quae fugiat.', '0');
INSERT INTO `answers` VALUES ('12', '3', 'Nostrum omnis sapiente pariatur a.', '0');
INSERT INTO `answers` VALUES ('13', '3', 'Numquam deserunt minus distinctio nostrum.', '0');
INSERT INTO `answers` VALUES ('14', '3', 'Aut perspiciatis consequatur nihil officia veritatis nemo voluptas et.', '1');
INSERT INTO `answers` VALUES ('15', '3', 'Qui magnam et officiis et nihil deserunt itaque.', '0');
INSERT INTO `answers` VALUES ('16', '4', 'Enim est maxime sit voluptates ut voluptates impedit.', '0');
INSERT INTO `answers` VALUES ('17', '4', 'Dolores exercitationem illo accusamus harum et.', '0');
INSERT INTO `answers` VALUES ('18', '4', 'Excepturi libero rerum quaerat molestiae.', '0');
INSERT INTO `answers` VALUES ('19', '4', 'Autem velit dignissimos exercitationem tempore.', '1');
INSERT INTO `answers` VALUES ('20', '4', 'Ut cupiditate consequatur voluptatem laborum minima aliquam.', '1');
INSERT INTO `answers` VALUES ('21', '5', 'Similique velit quod culpa dicta voluptatibus nesciunt accusamus est.', '0');
INSERT INTO `answers` VALUES ('22', '5', 'Commodi corrupti sequi officia perferendis eos illum.', '1');
INSERT INTO `answers` VALUES ('23', '5', 'Reiciendis ipsam aut voluptate.', '1');
INSERT INTO `answers` VALUES ('24', '5', 'Harum voluptatem est dolorem iste quia ut unde laborum.', '1');
INSERT INTO `answers` VALUES ('25', '5', 'Omnis occaecati voluptate est perferendis.', '1');
INSERT INTO `answers` VALUES ('26', '6', 'Eum et ad id aspernatur omnis voluptate repellendus.', '1');
INSERT INTO `answers` VALUES ('27', '6', 'Nemo dolorum quia qui laudantium.', '0');
INSERT INTO `answers` VALUES ('28', '6', 'Adipisci laudantium eum excepturi.', '1');
INSERT INTO `answers` VALUES ('29', '6', 'Qui molestias ut deserunt qui nostrum.', '0');
INSERT INTO `answers` VALUES ('30', '6', 'Sint eum aperiam omnis qui tenetur odit quia.', '1');
INSERT INTO `answers` VALUES ('31', '7', 'Debitis nulla quas eligendi voluptatum.', '1');
INSERT INTO `answers` VALUES ('32', '7', 'Eaque nam quis corrupti.', '0');
INSERT INTO `answers` VALUES ('33', '7', 'Sed adipisci saepe facilis dolore molestiae.', '1');
INSERT INTO `answers` VALUES ('34', '7', 'Voluptatum consequatur delectus ducimus.', '1');
INSERT INTO `answers` VALUES ('35', '7', 'Reprehenderit accusamus exercitationem soluta nihil repellat assumenda possimus perferendis.', '1');
INSERT INTO `answers` VALUES ('36', '8', 'Praesentium quidem dicta eaque doloribus laborum reprehenderit voluptatem.', '0');
INSERT INTO `answers` VALUES ('37', '8', 'Quibusdam voluptas eos ipsum est porro.', '1');
INSERT INTO `answers` VALUES ('38', '8', 'Et et qui earum nemo atque modi.', '1');
INSERT INTO `answers` VALUES ('39', '8', 'Sapiente tempora maxime distinctio aut quis velit.', '0');
INSERT INTO `answers` VALUES ('40', '8', 'Ea ullam eum voluptates aliquid et.', '0');
INSERT INTO `answers` VALUES ('41', '9', 'Est veritatis vel dignissimos accusantium ea natus.', '1');
INSERT INTO `answers` VALUES ('42', '9', 'Voluptatum dolores quidem natus dolores pariatur.', '0');
INSERT INTO `answers` VALUES ('43', '9', 'Sed nostrum beatae doloremque.', '0');
INSERT INTO `answers` VALUES ('44', '9', 'Hic sed facilis ad sint id aut laboriosam.', '1');
INSERT INTO `answers` VALUES ('45', '9', 'Tempore eum numquam et modi itaque quisquam ut in.', '1');
INSERT INTO `answers` VALUES ('46', '10', 'Magni molestias repudiandae ut et sit officiis.', '1');
INSERT INTO `answers` VALUES ('47', '10', 'Qui vel quis consequatur doloremque qui ab praesentium quos.', '1');
INSERT INTO `answers` VALUES ('48', '10', 'Voluptatem sit accusantium recusandae minus praesentium quaerat voluptatem repellat.', '1');
INSERT INTO `answers` VALUES ('49', '10', 'Soluta neque quisquam explicabo est eius commodi accusamus velit.', '1');
INSERT INTO `answers` VALUES ('50', '10', 'Sequi est officiis sed est iure aut.', '0');
INSERT INTO `answers` VALUES ('51', '11', 'Sed rerum quas libero quas earum consequuntur.', '0');
INSERT INTO `answers` VALUES ('52', '11', 'Non nostrum ipsam sit id occaecati aut qui.', '0');
INSERT INTO `answers` VALUES ('53', '11', 'Veritatis corrupti officiis error fugiat ad.', '1');
INSERT INTO `answers` VALUES ('54', '11', 'Ipsam est eligendi molestiae amet voluptas iure id error.', '0');
INSERT INTO `answers` VALUES ('55', '11', 'Et expedita optio sapiente ut aut dolores.', '1');
INSERT INTO `answers` VALUES ('56', '12', 'Earum quo amet et.', '1');
INSERT INTO `answers` VALUES ('57', '12', 'Ut unde dolores et nobis tempora deleniti.', '1');
INSERT INTO `answers` VALUES ('58', '12', 'Voluptas aut quia maxime officia eos atque.', '0');
INSERT INTO `answers` VALUES ('59', '12', 'Et quas accusantium mollitia quos magni veniam suscipit.', '0');
INSERT INTO `answers` VALUES ('60', '12', 'Architecto ut velit sit qui doloremque nam.', '0');
INSERT INTO `answers` VALUES ('61', '13', 'Vitae quia dolore fugiat qui rem.', '1');
INSERT INTO `answers` VALUES ('62', '13', 'Qui et aut quisquam excepturi consequuntur.', '0');
INSERT INTO `answers` VALUES ('63', '13', 'Omnis reprehenderit id cumque aut aut voluptas est.', '1');
INSERT INTO `answers` VALUES ('64', '13', 'Perferendis ipsa officia qui tenetur.', '1');
INSERT INTO `answers` VALUES ('65', '13', 'Aut itaque consequatur voluptatum commodi nihil aut ad illo.', '1');
INSERT INTO `answers` VALUES ('66', '14', 'Dignissimos recusandae illum omnis quia ratione expedita.', '0');
INSERT INTO `answers` VALUES ('67', '14', 'Enim perspiciatis vero vero et.', '0');
INSERT INTO `answers` VALUES ('68', '14', 'Tempora ut fugit qui excepturi nulla.', '0');
INSERT INTO `answers` VALUES ('69', '14', 'Nisi non sapiente sequi minus dignissimos sed harum beatae.', '0');
INSERT INTO `answers` VALUES ('70', '14', 'Dolor molestiae eius quia ratione.', '1');
INSERT INTO `answers` VALUES ('71', '15', 'Odit libero delectus optio.', '0');
INSERT INTO `answers` VALUES ('72', '15', 'Et et quae quibusdam dicta.', '1');
INSERT INTO `answers` VALUES ('73', '15', 'Voluptate amet est doloribus sapiente ratione optio.', '1');
INSERT INTO `answers` VALUES ('74', '15', 'Qui asperiores et dolorum voluptas maxime vel.', '0');
INSERT INTO `answers` VALUES ('75', '15', 'Quae nemo et laborum doloremque.', '1');
INSERT INTO `answers` VALUES ('76', '16', 'Rerum architecto molestiae tenetur accusamus qui sit nihil.', '0');
INSERT INTO `answers` VALUES ('77', '16', 'Iure et accusamus optio enim deleniti porro eligendi.', '1');
INSERT INTO `answers` VALUES ('78', '16', 'Ut magni dolorem quia mollitia voluptatem.', '0');
INSERT INTO `answers` VALUES ('79', '16', 'Possimus illum iste ipsa non eum et omnis.', '1');
INSERT INTO `answers` VALUES ('80', '16', 'Veritatis explicabo magni quia enim architecto.', '0');
INSERT INTO `answers` VALUES ('81', '17', 'Ut perspiciatis at nobis distinctio.', '0');
INSERT INTO `answers` VALUES ('82', '17', 'Occaecati nihil consectetur sit.', '1');
INSERT INTO `answers` VALUES ('83', '17', 'Eum illum ut quos et qui.', '0');
INSERT INTO `answers` VALUES ('84', '17', 'Accusamus sunt dolorum enim deserunt voluptas voluptatem.', '0');
INSERT INTO `answers` VALUES ('85', '17', 'Corrupti ut dolor temporibus voluptate quae quod non ad.', '1');
INSERT INTO `answers` VALUES ('86', '18', 'Ex odit debitis nulla quidem similique earum sint.', '0');
INSERT INTO `answers` VALUES ('87', '18', 'Beatae vero sed et nobis accusantium hic.', '1');
INSERT INTO `answers` VALUES ('88', '18', 'Consectetur eum ea et similique.', '1');
INSERT INTO `answers` VALUES ('89', '18', 'Et rerum deleniti consequatur sed.', '1');
INSERT INTO `answers` VALUES ('90', '18', 'Quis excepturi et culpa consequatur aperiam aut nulla.', '0');
INSERT INTO `answers` VALUES ('91', '19', 'Sit aliquam cumque magnam possimus ut itaque architecto.', '1');
INSERT INTO `answers` VALUES ('92', '19', 'Est voluptatem perferendis est aut eius.', '0');
INSERT INTO `answers` VALUES ('93', '19', 'Rerum a cupiditate vitae quisquam sint.', '1');
INSERT INTO `answers` VALUES ('94', '19', 'Nihil vitae ipsa ut ipsam rerum.', '0');
INSERT INTO `answers` VALUES ('95', '19', 'Et exercitationem illum consequatur dignissimos quia sed.', '1');
INSERT INTO `answers` VALUES ('96', '20', 'Nulla et rerum voluptatem culpa enim omnis perspiciatis.', '1');
INSERT INTO `answers` VALUES ('97', '20', 'Quos blanditiis ratione pariatur animi est dignissimos.', '0');
INSERT INTO `answers` VALUES ('98', '20', 'Ipsum praesentium eaque est.', '0');
INSERT INTO `answers` VALUES ('99', '20', 'Ad commodi adipisci velit veritatis ut.', '0');
INSERT INTO `answers` VALUES ('100', '20', 'Voluptatem omnis qui ducimus dolorum placeat autem.', '0');
INSERT INTO `answers` VALUES ('101', '21', 'Est natus harum nihil alias numquam autem et.', '0');
INSERT INTO `answers` VALUES ('102', '21', 'Quasi nihil quaerat ut quibusdam ratione odit inventore iusto.', '1');
INSERT INTO `answers` VALUES ('103', '21', 'Sed animi accusantium autem.', '0');
INSERT INTO `answers` VALUES ('104', '21', 'Quo sunt enim repudiandae pariatur ea molestias.', '0');
INSERT INTO `answers` VALUES ('105', '21', 'Maiores et vitae asperiores odio soluta.', '0');
INSERT INTO `answers` VALUES ('106', '22', 'Delectus qui vero optio blanditiis eos explicabo.', '1');
INSERT INTO `answers` VALUES ('107', '22', 'Quae ut soluta ratione iste veritatis corrupti tempora.', '0');
INSERT INTO `answers` VALUES ('108', '22', 'Vel vel sapiente vel mollitia.', '1');
INSERT INTO `answers` VALUES ('109', '22', 'Et laborum cumque blanditiis fugit iste ut.', '1');
INSERT INTO `answers` VALUES ('110', '22', 'Ut accusantium molestiae odit placeat.', '0');
INSERT INTO `answers` VALUES ('111', '23', 'Est molestiae delectus id molestiae repellendus.', '1');
INSERT INTO `answers` VALUES ('112', '23', 'Pariatur enim sunt unde.', '1');
INSERT INTO `answers` VALUES ('113', '23', 'Eaque cum maiores unde.', '1');
INSERT INTO `answers` VALUES ('114', '23', 'Necessitatibus nesciunt reiciendis odit dolorem officia voluptas.', '1');
INSERT INTO `answers` VALUES ('115', '23', 'Sunt numquam libero reprehenderit cupiditate ut.', '1');
INSERT INTO `answers` VALUES ('116', '24', 'Optio vel quidem et vel atque nihil debitis.', '0');
INSERT INTO `answers` VALUES ('117', '24', 'Et est qui sit tempora omnis explicabo quas.', '1');
INSERT INTO `answers` VALUES ('118', '24', 'Aut ad totam assumenda nulla.', '1');
INSERT INTO `answers` VALUES ('119', '24', 'Neque dolores sint quia ut ipsum reiciendis.', '1');
INSERT INTO `answers` VALUES ('120', '24', 'Est nobis blanditiis rem natus dolores.', '1');
INSERT INTO `answers` VALUES ('121', '25', 'Expedita qui aut iste asperiores.', '0');
INSERT INTO `answers` VALUES ('122', '25', 'Sed enim minus et architecto optio.', '1');
INSERT INTO `answers` VALUES ('123', '25', 'Sint et reiciendis quasi molestiae ut aut.', '0');
INSERT INTO `answers` VALUES ('124', '25', 'Blanditiis sed qui quas doloribus sed magni tempore quas.', '0');
INSERT INTO `answers` VALUES ('125', '25', 'Doloremque voluptatibus ea voluptatem sunt qui.', '1');

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('1', 'dolor');
INSERT INTO `categories` VALUES ('2', 'dolorem');
INSERT INTO `categories` VALUES ('3', 'alias');
INSERT INTO `categories` VALUES ('4', 'ea');
INSERT INTO `categories` VALUES ('5', 'rerum');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2017_12_07_100007_create_category_table', '1');
INSERT INTO `migrations` VALUES ('2', '2017_12_07_100100_create_question_table', '1');
INSERT INTO `migrations` VALUES ('3', '2017_12_07_100255_create_answers_table', '1');
INSERT INTO `migrations` VALUES ('4', '2017_12_07_100719_create_quize_table', '1');
INSERT INTO `migrations` VALUES ('5', '2017_12_07_100945_create_quize_categories_table', '1');
INSERT INTO `migrations` VALUES ('6', '2017_12_07_101321_create_quize_questions_table', '1');
INSERT INTO `migrations` VALUES ('7', '2017_12_07_101801_create_quize_answers_table', '1');

-- ----------------------------
-- Table structure for questions
-- ----------------------------
DROP TABLE IF EXISTS `questions`;
CREATE TABLE `questions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned DEFAULT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `questions_category_id_index` (`category_id`),
  CONSTRAINT `questions_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of questions
-- ----------------------------
INSERT INTO `questions` VALUES ('1', '1', 'Aut natus voluptatem consequatur velit.');
INSERT INTO `questions` VALUES ('2', '1', 'Rerum nemo aliquam magni corporis.');
INSERT INTO `questions` VALUES ('3', '1', 'Culpa et quos esse cum dicta sunt.');
INSERT INTO `questions` VALUES ('4', '1', 'Dolor et ullam sed tenetur quo.');
INSERT INTO `questions` VALUES ('5', '1', 'Incidunt quo facilis et consequuntur impedit repellat qui.');
INSERT INTO `questions` VALUES ('6', '2', 'Consectetur possimus asperiores sed autem consequatur consequatur qui dolorum.');
INSERT INTO `questions` VALUES ('7', '2', 'Eius omnis id id.');
INSERT INTO `questions` VALUES ('8', '2', 'Eius voluptatem deleniti ea dolores unde ut.');
INSERT INTO `questions` VALUES ('9', '2', 'Quos optio voluptas a beatae.');
INSERT INTO `questions` VALUES ('10', '2', 'Sit et vel sint doloremque porro unde voluptate.');
INSERT INTO `questions` VALUES ('11', '3', 'Voluptas sit cupiditate eaque qui et quia.');
INSERT INTO `questions` VALUES ('12', '3', 'Quae magni quibusdam aliquam sit amet.');
INSERT INTO `questions` VALUES ('13', '3', 'Nam sed dolor explicabo atque rerum.');
INSERT INTO `questions` VALUES ('14', '3', 'Voluptas dolor doloremque voluptas dolor.');
INSERT INTO `questions` VALUES ('15', '3', 'Magnam vitae eveniet quaerat recusandae error dolorum non iste.');
INSERT INTO `questions` VALUES ('16', '4', 'Blanditiis in excepturi adipisci.');
INSERT INTO `questions` VALUES ('17', '4', 'Enim tenetur quaerat vel sapiente aut modi.');
INSERT INTO `questions` VALUES ('18', '4', 'Reiciendis totam officiis ea autem ratione deleniti laborum libero.');
INSERT INTO `questions` VALUES ('19', '4', 'Consequatur accusantium aspernatur mollitia quis cumque aut.');
INSERT INTO `questions` VALUES ('20', '4', 'Vitae dolores maxime pariatur autem dolores cupiditate nostrum.');
INSERT INTO `questions` VALUES ('21', '5', 'Iure officiis animi quisquam inventore nam.');
INSERT INTO `questions` VALUES ('22', '5', 'Et vero ex maiores enim.');
INSERT INTO `questions` VALUES ('23', '5', 'Placeat hic voluptatem sit adipisci aut voluptas.');
INSERT INTO `questions` VALUES ('24', '5', 'Voluptates et veritatis a eum odio alias libero.');
INSERT INTO `questions` VALUES ('25', '5', 'Ab deleniti qui perspiciatis labore aut suscipit ad.');

-- ----------------------------
-- Table structure for quize
-- ----------------------------
DROP TABLE IF EXISTS `quize`;
CREATE TABLE `quize` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of quize
-- ----------------------------
INSERT INTO `quize` VALUES ('1', '2017-12-08 09:14:04', '2017-12-08 09:14:04');
INSERT INTO `quize` VALUES ('2', '2017-12-08 09:37:07', '2017-12-08 09:37:07');

-- ----------------------------
-- Table structure for quize_answers
-- ----------------------------
DROP TABLE IF EXISTS `quize_answers`;
CREATE TABLE `quize_answers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `quize_question_id` int(10) unsigned DEFAULT NULL,
  `answer_id` int(10) unsigned DEFAULT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_right` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `quize_answers_quize_question_id_index` (`quize_question_id`),
  KEY `quize_answers_answer_id_index` (`answer_id`),
  CONSTRAINT `quize_answers_answer_id_foreign` FOREIGN KEY (`answer_id`) REFERENCES `answers` (`id`) ON DELETE SET NULL,
  CONSTRAINT `quize_answers_quize_question_id_foreign` FOREIGN KEY (`quize_question_id`) REFERENCES `quize_questions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of quize_answers
-- ----------------------------
INSERT INTO `quize_answers` VALUES ('1', '1', '11', 'Illo nobis consequatur quae fugiat.', '0');
INSERT INTO `quize_answers` VALUES ('2', '1', '12', 'Nostrum omnis sapiente pariatur a.', '0');
INSERT INTO `quize_answers` VALUES ('3', '1', '13', 'Numquam deserunt minus distinctio nostrum.', '0');
INSERT INTO `quize_answers` VALUES ('4', '1', '14', 'Aut perspiciatis consequatur nihil officia veritatis nemo voluptas et.', '1');
INSERT INTO `quize_answers` VALUES ('5', '1', '15', 'Qui magnam et officiis et nihil deserunt itaque.', '0');
INSERT INTO `quize_answers` VALUES ('6', '2', '26', 'Eum et ad id aspernatur omnis voluptate repellendus.', '1');
INSERT INTO `quize_answers` VALUES ('7', '2', '27', 'Nemo dolorum quia qui laudantium.', '0');
INSERT INTO `quize_answers` VALUES ('8', '2', '28', 'Adipisci laudantium eum excepturi.', '1');
INSERT INTO `quize_answers` VALUES ('9', '2', '29', 'Qui molestias ut deserunt qui nostrum.', '0');
INSERT INTO `quize_answers` VALUES ('10', '2', '30', 'Sint eum aperiam omnis qui tenetur odit quia.', '1');
INSERT INTO `quize_answers` VALUES ('11', '3', '51', 'Sed rerum quas libero quas earum consequuntur.', '0');
INSERT INTO `quize_answers` VALUES ('12', '3', '52', 'Non nostrum ipsam sit id occaecati aut qui.', '0');
INSERT INTO `quize_answers` VALUES ('13', '3', '53', 'Veritatis corrupti officiis error fugiat ad.', '1');
INSERT INTO `quize_answers` VALUES ('14', '3', '54', 'Ipsam est eligendi molestiae amet voluptas iure id error.', '0');
INSERT INTO `quize_answers` VALUES ('15', '3', '55', 'Et expedita optio sapiente ut aut dolores.', '1');
INSERT INTO `quize_answers` VALUES ('16', '4', '86', 'Ex odit debitis nulla quidem similique earum sint.', '0');
INSERT INTO `quize_answers` VALUES ('17', '4', '87', 'Beatae vero sed et nobis accusantium hic.', '1');
INSERT INTO `quize_answers` VALUES ('18', '4', '88', 'Consectetur eum ea et similique.', '1');
INSERT INTO `quize_answers` VALUES ('19', '4', '89', 'Et rerum deleniti consequatur sed.', '1');
INSERT INTO `quize_answers` VALUES ('20', '4', '90', 'Quis excepturi et culpa consequatur aperiam aut nulla.', '0');
INSERT INTO `quize_answers` VALUES ('21', '5', '111', 'Est molestiae delectus id molestiae repellendus.', '1');
INSERT INTO `quize_answers` VALUES ('22', '5', '112', 'Pariatur enim sunt unde.', '1');
INSERT INTO `quize_answers` VALUES ('23', '5', '113', 'Eaque cum maiores unde.', '1');
INSERT INTO `quize_answers` VALUES ('24', '5', '114', 'Necessitatibus nesciunt reiciendis odit dolorem officia voluptas.', '1');
INSERT INTO `quize_answers` VALUES ('25', '5', '115', 'Sunt numquam libero reprehenderit cupiditate ut.', '1');

-- ----------------------------
-- Table structure for quize_categories
-- ----------------------------
DROP TABLE IF EXISTS `quize_categories`;
CREATE TABLE `quize_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `quize_id` int(10) unsigned DEFAULT NULL,
  `category_id` int(10) unsigned DEFAULT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `quize_categories_quize_id_index` (`quize_id`),
  KEY `quize_categories_category_id_index` (`category_id`),
  CONSTRAINT `quize_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL,
  CONSTRAINT `quize_categories_quize_id_foreign` FOREIGN KEY (`quize_id`) REFERENCES `quize` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of quize_categories
-- ----------------------------
INSERT INTO `quize_categories` VALUES ('1', '2', '1', 'dolor');
INSERT INTO `quize_categories` VALUES ('2', '2', '2', 'dolorem');
INSERT INTO `quize_categories` VALUES ('3', '2', '3', 'alias');
INSERT INTO `quize_categories` VALUES ('4', '2', '4', 'ea');
INSERT INTO `quize_categories` VALUES ('5', '2', '5', 'rerum');

-- ----------------------------
-- Table structure for quize_questions
-- ----------------------------
DROP TABLE IF EXISTS `quize_questions`;
CREATE TABLE `quize_questions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `quize_category_id` int(10) unsigned DEFAULT NULL,
  `question_id` int(10) unsigned DEFAULT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `quize_questions_quize_category_id_index` (`quize_category_id`),
  KEY `quize_questions_question_id_index` (`question_id`),
  CONSTRAINT `quize_questions_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE SET NULL,
  CONSTRAINT `quize_questions_quize_category_id_foreign` FOREIGN KEY (`quize_category_id`) REFERENCES `quize_categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of quize_questions
-- ----------------------------
INSERT INTO `quize_questions` VALUES ('1', '1', '3', 'Culpa et quos esse cum dicta sunt.');
INSERT INTO `quize_questions` VALUES ('2', '2', '6', 'Consectetur possimus asperiores sed autem consequatur consequatur qui dolorum.');
INSERT INTO `quize_questions` VALUES ('3', '3', '11', 'Voluptas sit cupiditate eaque qui et quia.');
INSERT INTO `quize_questions` VALUES ('4', '4', '18', 'Reiciendis totam officiis ea autem ratione deleniti laborum libero.');
INSERT INTO `quize_questions` VALUES ('5', '5', '23', 'Placeat hic voluptatem sit adipisci aut voluptas.');
SET FOREIGN_KEY_CHECKS=1;
