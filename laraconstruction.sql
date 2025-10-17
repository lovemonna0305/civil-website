/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100432
 Source Host           : localhost:3306
 Source Schema         : laraconstruction

 Target Server Type    : MySQL
 Target Server Version : 100432
 File Encoding         : 65001

 Date: 13/10/2025 10:57:16
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for about_services
-- ----------------------------
DROP TABLE IF EXISTS `about_services`;
CREATE TABLE `about_services`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of about_services
-- ----------------------------
INSERT INTO `about_services` VALUES (1, 'bi bi-easel', '444', '444', '2025-07-26 00:44:29', '2025-07-26 00:44:29');

-- ----------------------------
-- Table structure for about_teams
-- ----------------------------
DROP TABLE IF EXISTS `about_teams`;
CREATE TABLE `about_teams`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `authority` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of about_teams
-- ----------------------------
INSERT INTO `about_teams` VALUES (1, 'team/202510092059lance-kenyon.jpg', 'Lance Kenyon', 'President & Principal', 'As MHP’s President and Principal, Lance Kenyon plays a key role in leading MHP forward in their goals of providing exceptional structural engineering services to a growing clientele while providing a positive environment and culture for our excellent staff. For over three decades Lance has developed broad engineering expertise working in various sectors at MHP, starting with Design of new buildings, spending years in the Due Diligence arena and then finding his passion in Seismic Evaluation and Retrofit of Existing Buildings. Lance is responsible for financial oversight of the firm and contributes to many areas, from recruitment to business development.\r\n\r\nLance received his BS in Civil Engineering from California State University, Long Beach and his MS in Structural Engineering from the University of California, Berkeley. He is a licensed professional and structural engineer in California and is a member of SEAOSC, EERI and ASTM.\r\n\r\nLance is passionate about supporting his community and has served on the Los Altos YMCA Board, Long Beach Rotary and other community organizations for decades.\r\n\r\nWhen not working on exciting engineering projects or participating in community events, Lance will be visiting family in Portland, Austin, New England or Long Beach, hiking with his wife and friends, or playing drums with his mates in the Hammered Nails.\r\n\r\nREGISTRATIONS:\r\nLicensed Civil Engineer, State of California, License C42373\r\nLicensed Structural Engineer, State of California, License S3399\r\n\r\nPROFESSIONAL AFFILIATIONS:\r\nSEAOSC\r\nEERI\r\nASTM Committee E06', '#', '#', '#', 'https://www.linkedin.com/in/lance-kenyon-m-s-s-e-595a989/', '2025-07-26 00:45:41', '2025-10-09 21:46:45');
INSERT INTO `about_teams` VALUES (2, 'team/202510092145ken-odell.jpg', 'Kenneth O’Dell', 'Vice President & Principal', 'Serving as a principal at MHP, Inc. Kenneth O’Dell plays a major role in supporting our education and commercial projects. Ken is also active with our overall business development and human resource activities. With over 30-years years in the business, Ken is actively involved in professional organizations including the Structural Engineers Association of California, for which he was the 2022 State President, and the National Council of Structural Engineering Associations.\r\n\r\nKen received his BS in Architectural Engineering from Cal Poly, SLO and is a licensed professional and structural engineer in California and 15 other states. In addition, to being recognized as the Engineer of the Year by the Structural Engineers Association of Southern California, his Orange Coast college Planetarium Project was awarded an Excellence in Structural Engineering, Award of Excellence by SEAOSC and SEAOC in 2019.\r\n\r\nWhen Ken is not at the office or in a committee meeting, he can be found sharing a cup of coffee with his wife and college bound daughter.\r\n\r\n\r\nREGISTRATIONS:\r\nLicensed Civil Engineer, State of California, License C50350\r\nLicensed Structural Engineer, State of California, License S4101', '#', '#', '#', 'https://www.linkedin.com/in/kennethodell/', '2025-10-09 21:45:28', '2025-10-09 21:45:28');
INSERT INTO `about_teams` VALUES (3, 'team/202510092151james-kramer.jpg', 'James Kramer', 'PRINCIPAL', 'James actively oversees our residential, commercial, and retail projects with over 20 years of experience working directly with clients and staff to bring to life the visions of our exciting and driven clients. \r\nHe provides efficient and economical solutions to unique design opportunities and is responsible for the management of project teams\r\n\r\nJames received his BS in Architectural Engineering from Cal Poly, SLO and is a licensed professional and structural engineer in the state of California.\r\n\r\nOutside of the office, James enjoys the great outdoors with his family or leading his scout group in their next outdoor adventure.', '#', '#', '#', 'https://www.linkedin.com/in/james-kramer-se-67740211/', '2025-10-09 21:51:10', '2025-10-09 21:51:10');
INSERT INTO `about_teams` VALUES (4, 'team/202510092153Kathy-Rantowich.jpg', 'Kathy Rantowich', 'Associate Principal', 'Kathy Rantowich\'s primary focus is managing our equipment anchorage and specialty structural design projects. Kathy has experience in a variety of building systems and materials including commercial, industrial, retail, multi-family residential, and office. During her time at Engineering, Kathy has completed over 1000 designs for anchorage and support of non-structural components. Through her commitment to this role, she has helped Company improve the designs to decrease construction costs and streamline the review by the authorities having jurisdiction.\r\n\r\nKathy Rantowich received her BS in Architectural Engineering from Cal Poly, SLO and is a licensed professional and structural engineer in California is licensed.', '#', '#', '#', 'https://www.linkedin.com/in/kathy-rantowich-s-e-38aa2315/', '2025-10-09 21:53:50', '2025-10-09 21:53:50');
INSERT INTO `about_teams` VALUES (5, 'team/202510101444Dan-Fox.jpg', 'Daniel Fox', 'ASSOCIATE, PROJECT MANAGER', 'As an Associate and Project Manager, he manages one of company four Building Design & Renovation Groups and plays a significant role in supporting a wide breadth of projects including those in the education, office, multi-family housing, industrial, medical, and retail sectors. Dan is also heavily involved in recruiting for the firm, business development, and the production and progression of the company’s standards.\r\n\r\nDan holds a Bachelor of Science Degree in Architectural Engineering from Cal Poly San Luis Obispo, is a California licensed Civil and Structural Engineer, and a certified disaster service worker through the California OES Safety Assessment Program.\r\n\r\nDan has served as the chairperson of several committees of the Structural Engineers Association of Southern California (SEAOSC) and has served on the Board of Directors. Dan is a three-time recipient of the SEAOSC Above & Beyond Presidential Certificate of Appreciation Award. Dan has also been a recipient of Building Design & Construction Magazine’s 40 Under 40 award.', '#', '#', '#', 'https://www.mhpse.com/wp-content/uploads/2023/01/Dan-Fox.jpg', '2025-10-10 14:44:57', '2025-10-10 14:44:57');
INSERT INTO `about_teams` VALUES (6, 'team/202510101553Manuela.jfif', 'Manuela Garcia Lopez', 'Civil Engineer/ Shipping Manager', 'As a Design Engineer, Kaylee is quickly gaining experience on a diverse variety of projects. Kaylee holds a BS and MS in Architectural Engineering from Cal Poly San Luis Obispo and is a licensed engineer in training in California.\r\n\r\nWhen she is not in the San Diego office, Kaylee enjoys meticulous crafts, cooking, and relaxing at the beach.', '#', '#', '#', 'https://www.linkedin.com/in/manuela-garcia-lopez-ba1a9612b', '2025-10-10 15:47:57', '2025-10-10 15:53:39');
INSERT INTO `about_teams` VALUES (7, 'team/202510101659Kyle-White.jpg', 'Kyle White, S.E.', 'Civil Engineer, Structural Engineer', 'Kyle additionally lends his expertise to the design and oversight of large new construction projects, from the conceptual design stage through construction support.\r\n\r\nKyle is a licensed California Civil and Structural Engineer. He is also a licensed Safety Assessment Program Evaluator for CalOES.\r\n\r\nWhen he is not squinting extremely hard trying to figure out if that’s a “5” or a “3” on an old set of plans, Kyle enjoys scooting around Long Beach with his wife and 3-year-old son.', '#', '#', '#', 'https://www.linkedin.com/in/kyle-white-s-e-43244911/', '2025-10-10 16:59:16', '2025-10-10 16:59:16');
INSERT INTO `about_teams` VALUES (8, 'team/202510101701Sonia-Huynh.jpg', 'Sonia Huynh, P.E.', 'Civil Engineer', 'She is heavily involved in our education, commercial and medical portfolio sector and has experience designing multi-story new construction as well as renovations of existing buildings.\r\n\r\nSonia received her BS in Architectural Engineering from Cal Poly, SLO and is a licensed professional engineer in California. In addition, Sonia is also a registered volunteer disaster service worker through California OES Safety Assessment Program.\r\n\r\nWhen she is not at the office, Sonia enjoys cooking, hiking, and camping with her wife and dog.', '#', '#', '#', 'https://www.linkedin.com/in/sonia-huynh-i-pe-3a004a126/', '2025-10-10 17:01:02', '2025-10-10 17:01:02');

-- ----------------------------
-- Table structure for abouts
-- ----------------------------
DROP TABLE IF EXISTS `abouts`;
CREATE TABLE `abouts`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of abouts
-- ----------------------------
INSERT INTO `abouts` VALUES (1, 'Consequatur eius et magnam', '202507260016about.jpg', 'Nessim Engineering LTD has been involved in shaping communities through our professional services from conception to completion. As engineers, architects, and construction managers, we play a significant role in shaping the dreams of our clients to reality by innovative planning, design, structural plan and MEP plan.\r\n\r\nWe facilitate the entire construction process; including pre-construction concerns, development of construction budgets and production schedules, and the finalization of all projects on the most time and cost-effective schedule possible.', '221', '2025-07-25 16:38:42', '2025-08-04 17:45:09');

-- ----------------------------
-- Table structure for brands
-- ----------------------------
DROP TABLE IF EXISTS `brands`;
CREATE TABLE `brands`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of brands
-- ----------------------------
INSERT INTO `brands` VALUES (3, 'Brand 1', 'brand-1', '202508030109Pamela Learning Center, Eduacation is the key, Logo 2_1.png', 'Brand  Description 1', '2025-08-03 02:09:39', '2025-08-03 02:09:39');

-- ----------------------------
-- Table structure for categorys
-- ----------------------------
DROP TABLE IF EXISTS `categorys`;
CREATE TABLE `categorys`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categorys
-- ----------------------------
INSERT INTO `categorys` VALUES (1, 'Architectural Plans', 'remodeling', '202508071336logo (2).png', 'Architectural', '2025-08-02 16:41:48', '2025-10-09 17:58:36');
INSERT INTO `categorys` VALUES (2, 'Construction', 'construction', '202508032151Screen Shot 2021-05-18 at 11.04.20 PM.png', 'Construction', '2025-08-03 22:51:42', '2025-08-03 22:51:42');
INSERT INTO `categorys` VALUES (3, 'Structural Engineering', 'repair', '202508032152Screen Shot 2021-05-18 at 11.04.20 PM.png', 'Structural Engineering', '2025-08-03 22:52:01', '2025-10-09 19:11:59');
INSERT INTO `categorys` VALUES (4, 'Design', 'design', '202508032152Screen Shot 2021-05-18 at 11.04.20 PM.png', 'Design', '2025-08-03 22:52:12', '2025-08-03 22:52:12');

-- ----------------------------
-- Table structure for contacts
-- ----------------------------
DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of contacts
-- ----------------------------
INSERT INTO `contacts` VALUES (1, '', '', '', '', NULL, NULL);
INSERT INTO `contacts` VALUES (2, 'Anna Vezru', 'jm1210@mail.com', 'Hi, Nice to mee t you', 'ee', '2025-07-30 01:34:13', '2025-07-30 01:34:13');
INSERT INTO `contacts` VALUES (3, '12312', 'qq@qq.eee', 'sss', 'sss', '2025-07-30 19:36:25', '2025-07-30 19:36:25');
INSERT INTO `contacts` VALUES (4, '12312', 'qq@qq.eee', 'ww', 'ww', '2025-07-30 19:37:24', '2025-07-30 19:37:24');
INSERT INTO `contacts` VALUES (5, '12312', 'qq@qq.eee', 'ww', 'ww', '2025-07-30 19:39:15', '2025-07-30 19:39:15');
INSERT INTO `contacts` VALUES (6, '12312', 'qq@qq.eee', 'www', 'www', '2025-07-30 19:52:47', '2025-07-30 19:52:47');

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp(0) NOT NULL DEFAULT current_timestamp(0),
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for home_abouts
-- ----------------------------
DROP TABLE IF EXISTS `home_abouts`;
CREATE TABLE `home_abouts`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of home_abouts
-- ----------------------------
INSERT INTO `home_abouts` VALUES (1, '202507260213about.jpg', 'Architectural Design', 'We provide comprehensive architectural design services that seamlessly integrate functionality and aesthetics, guiding your project from initial concept to final plans to create elevated and livable spaces.', '2025-07-25 16:39:56', '2025-08-01 18:18:59');

-- ----------------------------
-- Table structure for home_features
-- ----------------------------
DROP TABLE IF EXISTS `home_features`;
CREATE TABLE `home_features`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of home_features
-- ----------------------------
INSERT INTO `home_features` VALUES (1, 'Error beatae dolor inventore aut', 'Error beatae dolor inventore aut', 'Error beatae dolor inventore aut', '202507260013features-1.jpg', '2025-07-26 01:13:06', '2025-07-26 01:13:06');
INSERT INTO `home_features` VALUES (2, 'Praesenti', 'Neque exercitationem debitis', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '202507260014features-2.jpg', '2025-07-26 01:14:42', '2025-07-26 01:14:42');

-- ----------------------------
-- Table structure for home_services
-- ----------------------------
DROP TABLE IF EXISTS `home_services`;
CREATE TABLE `home_services`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of home_services
-- ----------------------------
INSERT INTO `home_services` VALUES (1, 'bi bi-easel', '3333333', '333333333333', '2025-07-26 01:11:46', '2025-07-26 01:11:46');

-- ----------------------------
-- Table structure for home_sliders
-- ----------------------------
DROP TABLE IF EXISTS `home_sliders`;
CREATE TABLE `home_sliders`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 1,
  `desk` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of home_sliders
-- ----------------------------
INSERT INTO `home_sliders` VALUES (1, 'hero-carousel/202507260006hero-carousel-1.jpg', 'Welcome to Nessim', 'Innovative and Sustainable Solutions for Real Estate, Business, and Technology', '#', 1, 1, '2025-07-26 00:31:35', '2025-09-20 21:03:21');
INSERT INTO `home_sliders` VALUES (2, 'hero-carousel/202507260006hero-carousel-2.jpg', 'Welcome to Nessim', 'Innovative and Sustainable Solutions for Real Estate, Business, and Technology', '#', 1, 1, '2025-07-26 01:06:19', '2025-09-20 21:03:36');
INSERT INTO `home_sliders` VALUES (3, 'hero-carousel/202507260009hero-carousel-5.jpg', 'Welcome to Nessim', 'Innovative and Sustainable Solutions for Real Estate, Business, and Technology', '#', 1, 0, '2025-07-25 17:08:19', '2025-09-20 21:02:25');
INSERT INTO `home_sliders` VALUES (4, 'hero-carousel/202507260009hero-carousel-4.jpg', 'Welcome to Nessim', 'Innovative and Sustainable Solutions for Real Estate, Business, and Technology', '#', 1, 0, '2025-07-25 17:08:26', '2025-09-20 21:02:41');
INSERT INTO `home_sliders` VALUES (5, 'hero-carousel/202507260009hero-carousel-3.jpg', 'Welcome to Nessim', 'Innovative and Sustainable Solutions for Real Estate, Business, and Technology', '#', 1, 0, '2025-07-25 17:08:28', '2025-09-20 21:03:09');

-- ----------------------------
-- Table structure for home_testimonials
-- ----------------------------
DROP TABLE IF EXISTS `home_testimonials`;
CREATE TABLE `home_testimonials`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `authority` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `point` tinyint(4) NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of home_testimonials
-- ----------------------------
INSERT INTO `home_testimonials` VALUES (1, 'Martha Stewart', 'testimonials/202509051635Screenshot_1.png', 'Director', 5, '\"How glorious your gardens are. Your vision and expertise have turned my property into a sanctuary\"', '2025-07-26 03:16:10', '2025-09-05 16:35:45');
INSERT INTO `home_testimonials` VALUES (2, 'Don & Diedra Imus', 'testimonials/202509051635Screenshot_4.png', '444444', 5, '\"Without fall, your work was exceptional and exemplary. We can think of no one whom we could provide a more higher more enthusiastic recommendation\"', '2025-09-05 15:20:47', '2025-09-05 16:35:15');
INSERT INTO `home_testimonials` VALUES (3, 'Justin J', 'testimonials/202509051635Screenshot_6.png', 'Product Manager', 5, 'Very friendly, responsive, punctual, and professional. Communication was clear, and all deadlines were met or exceeded. I would highly recommend.', '2025-09-05 16:35:02', '2025-09-05 16:35:02');
INSERT INTO `home_testimonials` VALUES (4, 'Landon S.', 'testimonials/202509051638Screenshot_3.png', 'Product Manager', 5, 'Fast turn around and very professional results. 10/10 will be using him again.', '2025-09-05 16:38:28', '2025-09-05 16:38:28');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 30 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (5, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (6, '2022_09_26_024806_create_home_sliders_table', 1);
INSERT INTO `migrations` VALUES (7, '2022_09_26_030413_create_home_abouts_table', 1);
INSERT INTO `migrations` VALUES (8, '2022_09_26_030723_create_home_services_table', 1);
INSERT INTO `migrations` VALUES (9, '2022_09_26_031006_create_home_features_table', 1);
INSERT INTO `migrations` VALUES (10, '2022_09_26_031428_create_home_testimonials_table', 1);
INSERT INTO `migrations` VALUES (11, '2022_09_26_032219_create_abouts_table', 1);
INSERT INTO `migrations` VALUES (12, '2022_09_26_032516_create_about_services_table', 1);
INSERT INTO `migrations` VALUES (13, '2022_09_26_032801_create_about_teams_table', 1);
INSERT INTO `migrations` VALUES (14, '2022_09_26_033454_create_services_table', 1);
INSERT INTO `migrations` VALUES (15, '2022_09_26_035618_create_contacts_table', 1);
INSERT INTO `migrations` VALUES (16, '2025_09_26_035618_create_quotes_table', 2);
INSERT INTO `migrations` VALUES (22, '2025_09_26_035619_create_brands_table', 4);
INSERT INTO `migrations` VALUES (23, '2025_09_26_035719_create_categorys_table', 5);
INSERT INTO `migrations` VALUES (28, '2025_09_26_035819_create_project_photos_table', 7);
INSERT INTO `migrations` VALUES (29, '2025_09_26_035719_create_projects_table', 8);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp(0) NULL DEFAULT NULL,
  `expires_at` timestamp(0) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token`) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type`, `tokenable_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for project_photos
-- ----------------------------
DROP TABLE IF EXISTS `project_photos`;
CREATE TABLE `project_photos`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `project_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 36 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of project_photos
-- ----------------------------
INSERT INTO `project_photos` VALUES (4, '3', '333', '202508032202Screen Shot 2021-05-18 at 11.04.20 PM.png', '2025-08-03 23:02:30', '2025-08-03 23:02:30');
INSERT INTO `project_photos` VALUES (5, '1', 'Construction 1', '202508032255construction-1.jpg', '2025-08-03 23:55:22', '2025-08-03 23:55:22');
INSERT INTO `project_photos` VALUES (6, '2', '22222222', '202508032324Megan Abadie signature.png', '2025-08-04 00:24:28', '2025-08-04 00:24:28');
INSERT INTO `project_photos` VALUES (7, '2', '22222222', '202508032324Screenshot 2025-07-30 111313.png', '2025-08-04 00:24:28', '2025-08-04 00:24:28');
INSERT INTO `project_photos` VALUES (8, '3', 'Windsor Garden Home', '202508071323Screenshot_32.png', '2025-08-07 14:23:58', '2025-08-07 14:23:58');
INSERT INTO `project_photos` VALUES (9, '4', 'Architectural Plan', '202509051742Elevations.png', '2025-09-05 17:42:45', '2025-09-05 17:42:45');
INSERT INTO `project_photos` VALUES (10, '4', 'Architectural Plan', '202509051742Elevations-02.png', '2025-09-05 17:42:45', '2025-09-05 17:42:45');
INSERT INTO `project_photos` VALUES (11, '4', 'Architectural Plan', '202509051742Main Floor Plan.png', '2025-09-05 17:42:46', '2025-09-05 17:42:46');
INSERT INTO `project_photos` VALUES (12, '4', 'Architectural Plan', '202509051742Perspective.png', '2025-09-05 17:42:47', '2025-09-05 17:42:47');
INSERT INTO `project_photos` VALUES (13, '4', 'Architectural Plan', '202509051742Roof Plan.png', '2025-09-05 17:42:47', '2025-09-05 17:42:47');
INSERT INTO `project_photos` VALUES (14, '4', 'Architectural Plan', '202509051742Site plan.png', '2025-09-05 17:42:47', '2025-09-05 17:42:47');
INSERT INTO `project_photos` VALUES (15, '5', 'Residential Construction', '202510091825Screenshot_14.png', '2025-10-09 18:25:33', '2025-10-09 18:25:33');
INSERT INTO `project_photos` VALUES (16, '5', 'Residential Construction', '202510091825Screenshot_15.png', '2025-10-09 18:25:33', '2025-10-09 18:25:33');
INSERT INTO `project_photos` VALUES (17, '5', 'Residential Construction', '202510091825Screenshot_16.png', '2025-10-09 18:25:34', '2025-10-09 18:25:34');
INSERT INTO `project_photos` VALUES (18, '6', 'ARCHITECTURAL DRAWINGS, DESIGNING and DRAFTING', '202510091904Screenshot_17.png', '2025-10-09 19:04:56', '2025-10-09 19:04:56');
INSERT INTO `project_photos` VALUES (19, '6', 'ARCHITECTURAL DRAWINGS, DESIGNING and DRAFTING', '202510091904Screenshot_18.png', '2025-10-09 19:04:56', '2025-10-09 19:04:56');
INSERT INTO `project_photos` VALUES (20, '6', 'ARCHITECTURAL DRAWINGS, DESIGNING and DRAFTING', '202510091904Screenshot_19.png', '2025-10-09 19:04:57', '2025-10-09 19:04:57');
INSERT INTO `project_photos` VALUES (21, '7', 'Structure with structural software', '202510091911Screenshot_20.png', '2025-10-09 19:11:24', '2025-10-09 19:11:24');
INSERT INTO `project_photos` VALUES (22, '7', 'Structure with structural software', '202510091911Screenshot_21.png', '2025-10-09 19:11:24', '2025-10-09 19:11:24');
INSERT INTO `project_photos` VALUES (23, '7', 'Structure with structural software', '202510091911Screenshot_22.png', '2025-10-09 19:11:24', '2025-10-09 19:11:24');
INSERT INTO `project_photos` VALUES (24, '8', 'Structural design of steel, concrete or wood', '202510092007Screenshot_23.png', '2025-10-09 20:07:59', '2025-10-09 20:07:59');
INSERT INTO `project_photos` VALUES (25, '8', 'Structural design of steel, concrete or wood', '202510092007Screenshot_24.png', '2025-10-09 20:07:59', '2025-10-09 20:07:59');
INSERT INTO `project_photos` VALUES (26, '8', 'Structural design of steel, concrete or wood', '202510092007Screenshot_25.png', '2025-10-09 20:07:59', '2025-10-09 20:07:59');
INSERT INTO `project_photos` VALUES (27, '8', 'Structural design of steel, concrete or wood', '202510092007Screenshot_26.png', '2025-10-09 20:07:59', '2025-10-09 20:07:59');
INSERT INTO `project_photos` VALUES (28, '8', 'Structural design of steel, concrete or wood', '202510092007Screenshot_27.png', '2025-10-09 20:07:59', '2025-10-09 20:07:59');
INSERT INTO `project_photos` VALUES (29, '8', 'Structural design of steel, concrete or wood', '202510092007Screenshot_28.png', '2025-10-09 20:07:59', '2025-10-09 20:07:59');
INSERT INTO `project_photos` VALUES (30, '8', 'Structural design of steel, concrete or wood', '202510092007Screenshot_29.png', '2025-10-09 20:07:59', '2025-10-09 20:07:59');
INSERT INTO `project_photos` VALUES (31, '8', 'Structural design of steel, concrete or wood', '202510092007Screenshot_30.png', '2025-10-09 20:07:59', '2025-10-09 20:07:59');
INSERT INTO `project_photos` VALUES (32, '8', 'Structural design of steel, concrete or wood', '202510092008Screenshot_31.png', '2025-10-09 20:08:00', '2025-10-09 20:08:00');
INSERT INTO `project_photos` VALUES (33, '8', 'Structural design of steel, concrete or wood', '202510092008Screenshot_32.png', '2025-10-09 20:08:00', '2025-10-09 20:08:00');
INSERT INTO `project_photos` VALUES (34, '8', 'Structural design of steel, concrete or wood', '202510092008Screenshot_33.png', '2025-10-09 20:08:00', '2025-10-09 20:08:00');
INSERT INTO `project_photos` VALUES (35, '8', 'Structural design of steel, concrete or wood', '202510092008Screenshot_34.png', '2025-10-09 20:08:00', '2025-10-09 20:08:00');

-- ----------------------------
-- Table structure for projects
-- ----------------------------
DROP TABLE IF EXISTS `projects`;
CREATE TABLE `projects`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `brand_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `testimonial_id` int(11) NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `description3` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of projects
-- ----------------------------
INSERT INTO `projects` VALUES (1, 3, 2, 1, '202508032255construction-1.jpg', 'Construction 1', 'construction-1', 'Construction details 1', 'Construction 12', NULL, '2025-08-03 23:55:22', '2025-08-04 00:14:44');
INSERT INTO `projects` VALUES (4, 3, 1, 1, '202509051742Elevations-02.png', 'Architectural Plan', 'architectural-plan', 'Architectural plans, Existing plans, Proposed plans, Floor plans, Roof Plans', NULL, NULL, '2025-09-05 17:42:45', '2025-09-05 17:42:45');
INSERT INTO `projects` VALUES (5, 3, 1, 1, '202510091825Screenshot_14.png', 'Residential Construction', 'residential-construction', 'description', 'description', 'description', '2025-10-09 18:25:33', '2025-10-09 18:25:33');
INSERT INTO `projects` VALUES (6, 3, 1, 2, '202510091904Screenshot_17.png', 'ARCHITECTURAL DRAWINGS, DESIGNING and DRAFTING', 'architectural-drawings-designing-and-drafting', 'We are experienced architetcts with a proficient team skilled in producing high quality ARCHITECTURAL DRAWINGS, DESIGNING and DRAFTING services like 2D and 3D floor plan, elevations, sections, and CONSTRUCTION PERMIT DRAWINGS (Blueprints) that comply with US, UK, CANADA and AUSTRALIAN standard building codes.', 'We are specialized in HOMES, APARTMENTS, HOTELS, CONTAINERS, RETAIL SHOPS, OFFICES, and RESTAURANTS construction drawings.', 'OUR SERVICES:\r\n\r\n- 2D and 3D Floor Plans\r\n- Elevations, Sections, Roof Plans and SIte Plans\r\n- New House Construction Permit Drawings\r\n- House Addition/Remodel Permit Drawings\r\n- Deck/Patio/Garage/Sunroom/Shed Permit Drawings\r\n- Foundation Drawings\r\n- Framing Plans and Structural Drawings\r\n- MEP and HVAC Drawings\r\n- Redrawing of Existing Building (As Build Drawings)\r\n- Sketch/PDF/Image to Autocad Conversion\r\n- Interior and Exterior Rendering', '2025-10-09 19:04:56', '2025-10-09 19:04:56');
INSERT INTO `projects` VALUES (7, 3, 3, 3, '202510091911Screenshot_20.png', 'Structure with structural software', 'structure-with-structural-software', 'I will analyze and design the structure with structural software', NULL, NULL, '2025-10-09 19:11:24', '2025-10-09 19:11:24');
INSERT INTO `projects` VALUES (8, 3, 3, 3, '202510092007Screenshot_23.png', 'Structural design of steel, concrete or wood', 'structural-design-of-steel-concrete-or-wood', 'I can do structural design of steel, concrete or wood structures in tekla structure', 'Plans include floor, roof, foundation, site layout, and framing. Code-compliant with IBC, IRC, FBC, CBC. Delivered in DWG and PDF formats. Tools: AutoCAD, Revit, Bluebeam, Tekla Structures, Tedds, and more. Fast turnaround, clear communication, and revisions based on city comments.', NULL, '2025-10-09 20:07:59', '2025-10-09 20:07:59');

-- ----------------------------
-- Table structure for quotes
-- ----------------------------
DROP TABLE IF EXISTS `quotes`;
CREATE TABLE `quotes`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of quotes
-- ----------------------------
INSERT INTO `quotes` VALUES (1, 'Anna Vezru', 'jm1210@mail.com', '123456', '12345678', '2025-07-30 03:45:11', '2025-07-30 03:45:11');
INSERT INTO `quotes` VALUES (2, '12312', 'qq@qq.eee', '123', '123', '2025-07-30 19:52:35', '2025-07-30 19:52:35');

-- ----------------------------
-- Table structure for services
-- ----------------------------
DROP TABLE IF EXISTS `services`;
CREATE TABLE `services`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `services_title_unique`(`title`) USING BTREE,
  UNIQUE INDEX `services_slug_unique`(`slug`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of services
-- ----------------------------
INSERT INTO `services` VALUES (1, 'fa-mountain-city', 'Architectural Design', 'architectural-design', 'blog/202509051713Main Floor Plan.png', 'We provide comprehensive architectural design services that seamlessly integrate functionality and aesthetics, guiding your project from initial concept to final plans to create elevated and livable spaces.', '2025-07-26 00:46:40', '2025-09-05 17:13:38');
INSERT INTO `services` VALUES (2, 'fa-solid fa-arrow-up-from-ground-water', 'Interior Design', 'interior-design', 'blog/202509051707interior (4).jpeg', 'We create personalized interiors that enhance your daily life by thoughtfully selecting fixtures, finishes, layouts, and materials to reflect your unique lifestyle.', '2025-08-01 18:21:43', '2025-09-05 17:07:10');
INSERT INTO `services` VALUES (3, 'fa-solid fa-compass-drafting', 'Construction Documentation', 'construction-documentation', 'blog/202509051708111.jpg', 'We create detailed drawing sets for permitting and construction that ensure clarity for contractors and compliance with regulatory standards.', '2025-08-01 18:22:30', '2025-09-05 17:08:32');
INSERT INTO `services` VALUES (4, 'fa-solid fa-compass-drafting', 'Construction Administration', 'construction-administration', 'blog/202509051708111.jpg', 'In Construction Administration, we actively engage throughout the construction process by addressing inquiries, reviewing shop drawings, and ensuring the design\'s integrity is upheld.', '2025-08-01 18:23:07', '2025-09-05 17:08:43');
INSERT INTO `services` VALUES (5, 'fa-solid fa-images', 'Landscape & Site Design', 'landscape-site-design', 'blog/202509051708000.jpg', 'Our landscape and site design strategies focus on integrating grading, views, and outdoor flow to enhance and harmonize with the architectural elements of the space.', '2025-08-01 18:24:25', '2025-09-05 17:08:58');
INSERT INTO `services` VALUES (6, 'fa-solid fa-school', 'Feasibility Studies', 'feasibility-studies', 'blog/202509051709south afriqa.jpg', 'Feasibility studies assess your site or property by conducting zoning analysis, creating massing diagrams, and performing program studies to identify its design and development potential.', '2025-08-01 18:25:08', '2025-09-05 17:09:21');
INSERT INTO `services` VALUES (7, 'fa-solid fa-code', 'Development Services', 'development-services', 'blog/202509051718Screenshot_10.png', 'Our Development Services offer design solutions for investor-led or self-developed projects, ensuring an optimal balance of cost, aesthetics, and market appeal from the outset.', '2025-08-01 18:25:48', '2025-09-05 17:18:30');
INSERT INTO `services` VALUES (8, 'fa-trowel-bricks', 'Rezoning Applications', 'rezoning-applications', 'blog/202509051712interior (3).jpeg', 'We create comprehensive rezoning packages that consist of reports, diagrams, and supporting documents to facilitate the municipal review process for your proposal.', '2025-08-01 18:26:24', '2025-09-05 17:12:54');
INSERT INTO `services` VALUES (9, 'fa-solid fa-helmet-safety', 'Structural Engineering', 'structural-engineering', 'blog/202509051716Screenshot_8.png', 'Our licensed structural engineer provides safe and practical solutions that are seamlessly integrated into the overall design.', '2025-08-01 18:27:08', '2025-09-05 17:16:36');
INSERT INTO `services` VALUES (10, 'fa-solid fa-helmet-safety', 'Civil Engineering', 'civil-engineering', 'blog/202509051717Screenshot_9.png', 'We create civil engineering drawings for residential projects that emphasize erosion control, sediment management, and stormwater systems, ensuring compliance with local regulations.', '2025-08-01 18:28:22', '2025-09-05 17:17:52');
INSERT INTO `services` VALUES (11, 'fa-solid fa-image', 'Photorealistic Rendering', 'photorealistic-rendering', 'blog/202509051720a569fe07b51d16bfc045f97a3bc611f4.jpg', 'We provide photorealistic 3D renderings that enable you and your stakeholders to visualize the completed space before construction starts.', '2025-08-01 18:29:30', '2025-09-05 17:20:43');
INSERT INTO `services` VALUES (12, 'fa-solid fa-lock-open', 'Permit Expediting', 'permit-expediting', 'blog/202509051722Screenshot_12.png', '<blockquote><p>We provide services to coordinate and submit permit documents, facilitating a smoother approval process and minimizing delays.</p></blockquote><p><br>&nbsp;</p>', '2025-08-01 18:30:53', '2025-09-05 17:22:57');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `two_factor_recovery_codes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Admin', 'admin@gmail.com', '2025-07-25 16:28:57', '$2y$10$xyMU1IppMOYBeXT.3USpE.KO8eL42fphqZIs2m/t2vTQlRu91PG/.', NULL, NULL, NULL, NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
