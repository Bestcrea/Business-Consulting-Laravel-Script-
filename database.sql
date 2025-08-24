-- MySQL dump 10.13  Distrib 5.7.44, for osx10.19 (x86_64)
--
-- Host: 127.0.0.1    Database: gerow
-- ------------------------------------------------------
-- Server version	8.0.36

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `activations`
--

DROP TABLE IF EXISTS `activations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `activations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `code` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `activations_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activations`
--

LOCK TABLES `activations` WRITE;
/*!40000 ALTER TABLE `activations` DISABLE KEYS */;
INSERT INTO `activations` VALUES (1,1,'xSdxs3u818D4djsMjZaw92KnMO3ucKYG',1,'2025-01-28 00:59:05','2025-01-28 00:59:05','2025-01-28 00:59:05');
/*!40000 ALTER TABLE `activations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_notifications`
--

DROP TABLE IF EXISTS `admin_notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_notifications` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `action_label` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `permission` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_notifications`
--

LOCK TABLES `admin_notifications` WRITE;
/*!40000 ALTER TABLE `admin_notifications` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin_notifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `announcements`
--

DROP TABLE IF EXISTS `announcements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `announcements` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `has_action` tinyint(1) NOT NULL DEFAULT '0',
  `action_label` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action_url` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action_open_new_tab` tinyint(1) NOT NULL DEFAULT '0',
  `dismissible` tinyint(1) NOT NULL DEFAULT '0',
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `announcements`
--

LOCK TABLES `announcements` WRITE;
/*!40000 ALTER TABLE `announcements` DISABLE KEYS */;
INSERT INTO `announcements` VALUES (1,'Announcement 1','Exclusive Limited-Time Offers for Entrepreneurs: Unlock Big Savings on Essential Business Tools Today',0,NULL,NULL,0,1,'2025-01-28 07:59:14',NULL,1,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(2,'Announcement 2','Calling all Startups! Don\'t Miss Out on Our Special Discounts for Business Software and Services - Act Fast!',0,NULL,NULL,0,1,'2025-01-28 07:59:14',NULL,1,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(3,'Announcement 3','Attention Small Business Owners: Score Big Savings on Marketing Solutions and Growth Strategies - Limited Time Offer!',0,NULL,NULL,0,1,'2025-01-28 07:59:14',NULL,1,'2025-01-28 00:59:14','2025-01-28 00:59:14');
/*!40000 ALTER TABLE `announcements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `announcements_translations`
--

DROP TABLE IF EXISTS `announcements_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `announcements_translations` (
  `lang_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `announcements_id` bigint unsigned NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`lang_code`,`announcements_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `announcements_translations`
--

LOCK TABLES `announcements_translations` WRITE;
/*!40000 ALTER TABLE `announcements_translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `announcements_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `audit_histories`
--

DROP TABLE IF EXISTS `audit_histories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `audit_histories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `module` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `request` longtext COLLATE utf8mb4_unicode_ci,
  `action` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference_user` bigint unsigned NOT NULL,
  `reference_id` bigint unsigned NOT NULL,
  `reference_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `audit_histories_user_id_index` (`user_id`),
  KEY `audit_histories_module_index` (`module`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `audit_histories`
--

LOCK TABLES `audit_histories` WRITE;
/*!40000 ALTER TABLE `audit_histories` DISABLE KEYS */;
/*!40000 ALTER TABLE `audit_histories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cache` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cache_locks` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `careers`
--

DROP TABLE IF EXISTS `careers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `careers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `careers`
--

LOCK TABLES `careers` WRITE;
/*!40000 ALTER TABLE `careers` DISABLE KEYS */;
INSERT INTO `careers` VALUES (1,'Senior Full Stack Engineer, Creator Success Full Time','North Ahmed, Saint Kitts and Nevis','3,840','Constantly changing work patterns and norms, and the need for organizational resiliency','<h4 class=\"color-brand-1\">Responsibilities</h4>\n<p>Product knowledge: Deeply understand the technology and features of the product area to which you are assigned.</p>\n<p>Research: Provide human and business impact and insights for products.</p>\n<p>Deliverables: Create deliverables for your product area (for example competitive analyses, user flows, low fidelity wireframes, high fidelity mockups, prototypes, etc.) that solve real user problems through the user experience.</p>\n<p>Communication: Communicate the results of UX activities within your product area to the design team department, cross-functional partners within your product area, and other interested Superformula team members using clear language that simplifies complexity.</p>\n<h4 class=\"color-brand-1\">Requirements</h4>\n<ul>\n    <li>A portfolio demonstrating well thought through and polished end to end customer journeys</li>\n    <li>5+ years of industry experience in interactive design and / or visual design</li>\n    <li>Excellent interpersonal skills </li>\n    <li>Aware of trends in mobile, communications, and collaboration</li>\n    <li>Ability to create highly polished design prototypes, mockups, and other communication artifacts</li>\n    <li>The ability to scope and estimate efforts accurately and prioritize tasks and goals independently</li>\n    <li>History of impacting shipping products with your work</li>\n    <li>A Bachelor’s Degree in Design (or related field) or equivalent professional experience</li>\n    <li>Proficiency in a variety of design tools such as Figma, Photoshop, Illustrator, and Sketch</li>\n</ul>\n<h4 class=\"color-brand-1\">What\'s on Offer </h4>\n<ul>\n    <li>Annual bonus and holidays, social welfare, and health checks.</li>\n    <li>Training and attachment in Taiwan and other Greater China branches.</li>\n</ul>\n','published','2025-01-28 00:59:14','2025-01-28 00:59:14'),(2,'Data Science Specialist, Analytics Division','South Idella, Honduras','3,574','Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit laborum — semper quis lectus nulla','<h4 class=\"color-brand-1\">Responsibilities</h4>\n<p>Product knowledge: Deeply understand the technology and features of the product area to which you are assigned.</p>\n<p>Research: Provide human and business impact and insights for products.</p>\n<p>Deliverables: Create deliverables for your product area (for example competitive analyses, user flows, low fidelity wireframes, high fidelity mockups, prototypes, etc.) that solve real user problems through the user experience.</p>\n<p>Communication: Communicate the results of UX activities within your product area to the design team department, cross-functional partners within your product area, and other interested Superformula team members using clear language that simplifies complexity.</p>\n<h4 class=\"color-brand-1\">Requirements</h4>\n<ul>\n    <li>A portfolio demonstrating well thought through and polished end to end customer journeys</li>\n    <li>5+ years of industry experience in interactive design and / or visual design</li>\n    <li>Excellent interpersonal skills </li>\n    <li>Aware of trends in mobile, communications, and collaboration</li>\n    <li>Ability to create highly polished design prototypes, mockups, and other communication artifacts</li>\n    <li>The ability to scope and estimate efforts accurately and prioritize tasks and goals independently</li>\n    <li>History of impacting shipping products with your work</li>\n    <li>A Bachelor’s Degree in Design (or related field) or equivalent professional experience</li>\n    <li>Proficiency in a variety of design tools such as Figma, Photoshop, Illustrator, and Sketch</li>\n</ul>\n<h4 class=\"color-brand-1\">What\'s on Offer </h4>\n<ul>\n    <li>Annual bonus and holidays, social welfare, and health checks.</li>\n    <li>Training and attachment in Taiwan and other Greater China branches.</li>\n</ul>\n','published','2025-01-28 00:59:14','2025-01-28 00:59:14'),(3,'Product Marketing Manager, Growth Team','West Amaliaberg, San Marino','7,334','Crafting compelling marketing strategies to drive user acquisition and retention','<h4 class=\"color-brand-1\">Responsibilities</h4>\n<p>Product knowledge: Deeply understand the technology and features of the product area to which you are assigned.</p>\n<p>Research: Provide human and business impact and insights for products.</p>\n<p>Deliverables: Create deliverables for your product area (for example competitive analyses, user flows, low fidelity wireframes, high fidelity mockups, prototypes, etc.) that solve real user problems through the user experience.</p>\n<p>Communication: Communicate the results of UX activities within your product area to the design team department, cross-functional partners within your product area, and other interested Superformula team members using clear language that simplifies complexity.</p>\n<h4 class=\"color-brand-1\">Requirements</h4>\n<ul>\n    <li>A portfolio demonstrating well thought through and polished end to end customer journeys</li>\n    <li>5+ years of industry experience in interactive design and / or visual design</li>\n    <li>Excellent interpersonal skills </li>\n    <li>Aware of trends in mobile, communications, and collaboration</li>\n    <li>Ability to create highly polished design prototypes, mockups, and other communication artifacts</li>\n    <li>The ability to scope and estimate efforts accurately and prioritize tasks and goals independently</li>\n    <li>History of impacting shipping products with your work</li>\n    <li>A Bachelor’s Degree in Design (or related field) or equivalent professional experience</li>\n    <li>Proficiency in a variety of design tools such as Figma, Photoshop, Illustrator, and Sketch</li>\n</ul>\n<h4 class=\"color-brand-1\">What\'s on Offer </h4>\n<ul>\n    <li>Annual bonus and holidays, social welfare, and health checks.</li>\n    <li>Training and attachment in Taiwan and other Greater China branches.</li>\n</ul>\n','published','2025-01-28 00:59:14','2025-01-28 00:59:14'),(4,'UX/UI Designer, User Experience Team','Adeleton, Guyana','2,485','Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','<h4 class=\"color-brand-1\">Responsibilities</h4>\n<p>Product knowledge: Deeply understand the technology and features of the product area to which you are assigned.</p>\n<p>Research: Provide human and business impact and insights for products.</p>\n<p>Deliverables: Create deliverables for your product area (for example competitive analyses, user flows, low fidelity wireframes, high fidelity mockups, prototypes, etc.) that solve real user problems through the user experience.</p>\n<p>Communication: Communicate the results of UX activities within your product area to the design team department, cross-functional partners within your product area, and other interested Superformula team members using clear language that simplifies complexity.</p>\n<h4 class=\"color-brand-1\">Requirements</h4>\n<ul>\n    <li>A portfolio demonstrating well thought through and polished end to end customer journeys</li>\n    <li>5+ years of industry experience in interactive design and / or visual design</li>\n    <li>Excellent interpersonal skills </li>\n    <li>Aware of trends in mobile, communications, and collaboration</li>\n    <li>Ability to create highly polished design prototypes, mockups, and other communication artifacts</li>\n    <li>The ability to scope and estimate efforts accurately and prioritize tasks and goals independently</li>\n    <li>History of impacting shipping products with your work</li>\n    <li>A Bachelor’s Degree in Design (or related field) or equivalent professional experience</li>\n    <li>Proficiency in a variety of design tools such as Figma, Photoshop, Illustrator, and Sketch</li>\n</ul>\n<h4 class=\"color-brand-1\">What\'s on Offer </h4>\n<ul>\n    <li>Annual bonus and holidays, social welfare, and health checks.</li>\n    <li>Training and attachment in Taiwan and other Greater China branches.</li>\n</ul>\n','published','2025-01-28 00:59:14','2025-01-28 00:59:14'),(5,'Operations Manager, Supply Chain Division','Wymanhaven, Burundi','1,376','Ensuring smooth and efficient supply chain operations for timely product delivery','<h4 class=\"color-brand-1\">Responsibilities</h4>\n<p>Product knowledge: Deeply understand the technology and features of the product area to which you are assigned.</p>\n<p>Research: Provide human and business impact and insights for products.</p>\n<p>Deliverables: Create deliverables for your product area (for example competitive analyses, user flows, low fidelity wireframes, high fidelity mockups, prototypes, etc.) that solve real user problems through the user experience.</p>\n<p>Communication: Communicate the results of UX activities within your product area to the design team department, cross-functional partners within your product area, and other interested Superformula team members using clear language that simplifies complexity.</p>\n<h4 class=\"color-brand-1\">Requirements</h4>\n<ul>\n    <li>A portfolio demonstrating well thought through and polished end to end customer journeys</li>\n    <li>5+ years of industry experience in interactive design and / or visual design</li>\n    <li>Excellent interpersonal skills </li>\n    <li>Aware of trends in mobile, communications, and collaboration</li>\n    <li>Ability to create highly polished design prototypes, mockups, and other communication artifacts</li>\n    <li>The ability to scope and estimate efforts accurately and prioritize tasks and goals independently</li>\n    <li>History of impacting shipping products with your work</li>\n    <li>A Bachelor’s Degree in Design (or related field) or equivalent professional experience</li>\n    <li>Proficiency in a variety of design tools such as Figma, Photoshop, Illustrator, and Sketch</li>\n</ul>\n<h4 class=\"color-brand-1\">What\'s on Offer </h4>\n<ul>\n    <li>Annual bonus and holidays, social welfare, and health checks.</li>\n    <li>Training and attachment in Taiwan and other Greater China branches.</li>\n</ul>\n','published','2025-01-28 00:59:14','2025-01-28 00:59:14'),(6,'Financial Analyst, Investment Group','North Bria, Mongolia','1,059','Analyzing market trends and investment opportunities for optimal financial outcomes','<h4 class=\"color-brand-1\">Responsibilities</h4>\n<p>Product knowledge: Deeply understand the technology and features of the product area to which you are assigned.</p>\n<p>Research: Provide human and business impact and insights for products.</p>\n<p>Deliverables: Create deliverables for your product area (for example competitive analyses, user flows, low fidelity wireframes, high fidelity mockups, prototypes, etc.) that solve real user problems through the user experience.</p>\n<p>Communication: Communicate the results of UX activities within your product area to the design team department, cross-functional partners within your product area, and other interested Superformula team members using clear language that simplifies complexity.</p>\n<h4 class=\"color-brand-1\">Requirements</h4>\n<ul>\n    <li>A portfolio demonstrating well thought through and polished end to end customer journeys</li>\n    <li>5+ years of industry experience in interactive design and / or visual design</li>\n    <li>Excellent interpersonal skills </li>\n    <li>Aware of trends in mobile, communications, and collaboration</li>\n    <li>Ability to create highly polished design prototypes, mockups, and other communication artifacts</li>\n    <li>The ability to scope and estimate efforts accurately and prioritize tasks and goals independently</li>\n    <li>History of impacting shipping products with your work</li>\n    <li>A Bachelor’s Degree in Design (or related field) or equivalent professional experience</li>\n    <li>Proficiency in a variety of design tools such as Figma, Photoshop, Illustrator, and Sketch</li>\n</ul>\n<h4 class=\"color-brand-1\">What\'s on Offer </h4>\n<ul>\n    <li>Annual bonus and holidays, social welfare, and health checks.</li>\n    <li>Training and attachment in Taiwan and other Greater China branches.</li>\n</ul>\n','published','2025-01-28 00:59:14','2025-01-28 00:59:14');
/*!40000 ALTER TABLE `careers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `careers_translations`
--

DROP TABLE IF EXISTS `careers_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `careers_translations` (
  `lang_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `careers_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`lang_code`,`careers_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `careers_translations`
--

LOCK TABLES `careers_translations` WRITE;
/*!40000 ALTER TABLE `careers_translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `careers_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` bigint unsigned NOT NULL DEFAULT '0',
  `description` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `author_id` bigint unsigned DEFAULT NULL,
  `author_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Botble\\ACL\\Models\\User',
  `icon` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int unsigned NOT NULL DEFAULT '0',
  `is_featured` tinyint NOT NULL DEFAULT '0',
  `is_default` tinyint unsigned NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categories_parent_id_index` (`parent_id`),
  KEY `categories_status_index` (`status`),
  KEY `categories_created_at_index` (`created_at`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Business Strategy',0,'Molestiae voluptas et beatae. Facere non voluptatem eos dignissimos vel ipsam. At nemo voluptatum neque debitis. Expedita repellendus aut neque quis molestias quidem.','published',1,'Botble\\ACL\\Models\\User',NULL,0,0,1,'2025-01-28 00:59:12','2025-01-28 00:59:12'),(2,'Market Research',0,'Et fugiat laborum molestiae ratione officia beatae. Sint laboriosam aut nostrum doloremque excepturi neque. Velit velit alias at.','published',1,'Botble\\ACL\\Models\\User',NULL,0,1,0,'2025-01-28 00:59:12','2025-01-28 00:59:12'),(3,'Financial Management',2,'Ut eaque ea totam hic odio inventore quod. Et natus esse quia. Iste ducimus et quam recusandae ea qui impedit. Facere quia maxime earum unde.','published',1,'Botble\\ACL\\Models\\User',NULL,0,0,0,'2025-01-28 00:59:12','2025-01-28 00:59:12'),(4,'Entrepreneurship',0,'Earum quis incidunt laboriosam consequatur sapiente numquam adipisci. Possimus repellendus deserunt est ea dicta laborum ipsa sint.','published',1,'Botble\\ACL\\Models\\User',NULL,0,1,0,'2025-01-28 00:59:12','2025-01-28 00:59:12'),(5,'Career Development',4,'Autem id aut et qui. Beatae sunt inventore repellat aut ut quo sunt. Facilis pariatur ab natus id.','published',1,'Botble\\ACL\\Models\\User',NULL,0,0,0,'2025-01-28 00:59:12','2025-01-28 00:59:12'),(6,'Startups',0,'Molestias sapiente officia et voluptatem nihil nostrum ipsum. Inventore dolorum doloribus repellat expedita.','published',1,'Botble\\ACL\\Models\\User',NULL,0,1,0,'2025-01-28 00:59:12','2025-01-28 00:59:12'),(7,'Success Stories',6,'In molestiae sint quia iste ea molestiae quo ipsam. Repellat qui molestiae voluptates alias aspernatur. Qui soluta praesentium ut alias officia sit. Accusantium nostrum expedita vitae.','published',1,'Botble\\ACL\\Models\\User',NULL,0,0,0,'2025-01-28 00:59:12','2025-01-28 00:59:12'),(8,'Industry Insights',6,'Iusto optio quis optio culpa nihil id. Aliquam repellat eos distinctio sed saepe. Sit eum accusantium sed repellat. Dolorem aut sunt numquam et aut consequatur sit.','published',1,'Botble\\ACL\\Models\\User',NULL,0,0,0,'2025-01-28 00:59:12','2025-01-28 00:59:12'),(9,'Human Resources',6,'Sunt reiciendis et provident nulla quam voluptatibus. Nostrum provident quis ipsum blanditiis sit exercitationem. Cum pariatur animi voluptas recusandae magnam. Rem quidem vel qui vitae eius.','published',1,'Botble\\ACL\\Models\\User',NULL,0,0,0,'2025-01-28 00:59:12','2025-01-28 00:59:12');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories_translations`
--

DROP TABLE IF EXISTS `categories_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories_translations` (
  `lang_code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categories_id` bigint unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`lang_code`,`categories_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories_translations`
--

LOCK TABLES `categories_translations` WRITE;
/*!40000 ALTER TABLE `categories_translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `categories_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_custom_field_options`
--

DROP TABLE IF EXISTS `contact_custom_field_options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_custom_field_options` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `custom_field_id` bigint unsigned NOT NULL,
  `label` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int NOT NULL DEFAULT '999',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_custom_field_options`
--

LOCK TABLES `contact_custom_field_options` WRITE;
/*!40000 ALTER TABLE `contact_custom_field_options` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact_custom_field_options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_custom_field_options_translations`
--

DROP TABLE IF EXISTS `contact_custom_field_options_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_custom_field_options_translations` (
  `contact_custom_field_options_id` bigint unsigned NOT NULL,
  `lang_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`lang_code`,`contact_custom_field_options_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_custom_field_options_translations`
--

LOCK TABLES `contact_custom_field_options_translations` WRITE;
/*!40000 ALTER TABLE `contact_custom_field_options_translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact_custom_field_options_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_custom_fields`
--

DROP TABLE IF EXISTS `contact_custom_fields`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_custom_fields` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `placeholder` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int NOT NULL DEFAULT '999',
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_custom_fields`
--

LOCK TABLES `contact_custom_fields` WRITE;
/*!40000 ALTER TABLE `contact_custom_fields` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact_custom_fields` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_custom_fields_translations`
--

DROP TABLE IF EXISTS `contact_custom_fields_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_custom_fields_translations` (
  `contact_custom_fields_id` bigint unsigned NOT NULL,
  `lang_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `placeholder` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`lang_code`,`contact_custom_fields_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_custom_fields_translations`
--

LOCK TABLES `contact_custom_fields_translations` WRITE;
/*!40000 ALTER TABLE `contact_custom_fields_translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact_custom_fields_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_replies`
--

DROP TABLE IF EXISTS `contact_replies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_replies` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_replies`
--

LOCK TABLES `contact_replies` WRITE;
/*!40000 ALTER TABLE `contact_replies` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact_replies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `custom_fields` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unread',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dashboard_widget_settings`
--

DROP TABLE IF EXISTS `dashboard_widget_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dashboard_widget_settings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `user_id` bigint unsigned NOT NULL,
  `widget_id` bigint unsigned NOT NULL,
  `order` tinyint unsigned NOT NULL DEFAULT '0',
  `status` tinyint unsigned NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `dashboard_widget_settings_user_id_index` (`user_id`),
  KEY `dashboard_widget_settings_widget_id_index` (`widget_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dashboard_widget_settings`
--

LOCK TABLES `dashboard_widget_settings` WRITE;
/*!40000 ALTER TABLE `dashboard_widget_settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `dashboard_widget_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dashboard_widgets`
--

DROP TABLE IF EXISTS `dashboard_widgets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dashboard_widgets` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dashboard_widgets`
--

LOCK TABLES `dashboard_widgets` WRITE;
/*!40000 ALTER TABLE `dashboard_widgets` DISABLE KEYS */;
/*!40000 ALTER TABLE `dashboard_widgets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faq_categories`
--

DROP TABLE IF EXISTS `faq_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faq_categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` tinyint NOT NULL DEFAULT '0',
  `status` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faq_categories`
--

LOCK TABLES `faq_categories` WRITE;
/*!40000 ALTER TABLE `faq_categories` DISABLE KEYS */;
INSERT INTO `faq_categories` VALUES (1,'Service Offerings',0,'published','2025-01-28 00:59:14','2025-01-28 00:59:14',NULL),(2,'Cost and Billing',1,'published','2025-01-28 00:59:14','2025-01-28 00:59:14',NULL),(3,'Follow-Up Support',2,'published','2025-01-28 00:59:14','2025-01-28 00:59:14',NULL);
/*!40000 ALTER TABLE `faq_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faq_categories_translations`
--

DROP TABLE IF EXISTS `faq_categories_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faq_categories_translations` (
  `lang_code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faq_categories_id` bigint unsigned NOT NULL,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`lang_code`,`faq_categories_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faq_categories_translations`
--

LOCK TABLES `faq_categories_translations` WRITE;
/*!40000 ALTER TABLE `faq_categories_translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `faq_categories_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faqs`
--

DROP TABLE IF EXISTS `faqs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faqs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint unsigned NOT NULL,
  `status` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faqs`
--

LOCK TABLES `faqs` WRITE;
/*!40000 ALTER TABLE `faqs` DISABLE KEYS */;
INSERT INTO `faqs` VALUES (1,'What is business consulting?','Business consulting involves providing expert advice to organizations to help them improve their performance and achieve their business objectives.',2,'published','2025-01-28 00:59:14','2025-01-28 00:59:14'),(2,'How can consulting services benefit my business?','Consulting services can provide insights, strategies, and solutions to address specific challenges, improve efficiency, enhance decision-making, and ultimately contribute to the overall success of your business.',3,'published','2025-01-28 00:59:14','2025-01-28 00:59:14'),(3,'What specific services do you provide?','We offer a range of services, including strategic planning, financial advisory, operations optimization, market research, and more. Our goal is to tailor our services to meet the unique needs of each client.',3,'published','2025-01-28 00:59:14','2025-01-28 00:59:14'),(4,'How do you structure your fees?','Our fees are structured based on the scope and complexity of the project. We offer different pricing models, including hourly rates, project-based fees, and retainer agreements. The specific fee structure will be discussed and agreed upon during the initial consultation.',2,'published','2025-01-28 00:59:14','2025-01-28 00:59:14'),(5,'What industries do you specialize in?','We have experience and expertise across various industries, including but not limited to technology, finance, healthcare, and manufacturing. Our consultants work closely with clients to understand industry-specific challenges and provide tailored solutions.',1,'published','2025-01-28 00:59:14','2025-01-28 00:59:14'),(6,'Can you share any client testimonials or case studies?','Certainly! We have a collection of client testimonials and case studies that highlight the success stories of our consulting engagements. Please visit our \'Client Success Stories\' section for more details.',3,'published','2025-01-28 00:59:14','2025-01-28 00:59:14'),(7,'How do you collaborate with clients during the consulting process?','We believe in a collaborative approach. Throughout the consulting process, we maintain open communication with our clients, involve key stakeholders, and ensure that the client\'s perspective is integral to the decision-making process.',1,'published','2025-01-28 00:59:14','2025-01-28 00:59:14'),(8,'How long does a typical consulting engagement last?','The duration of a consulting engagement varies depending on the nature and scope of the project. During the initial consultation, we work with clients to define the timeline and milestones for the project, ensuring alignment with their goals and objectives.',2,'published','2025-01-28 00:59:14','2025-01-28 00:59:14'),(9,'Who are the key members of your consulting team?','Our consulting team consists of highly qualified and experienced professionals with diverse backgrounds. You can learn more about our team members on the \'Meet the Team\' page of our website.',2,'published','2025-01-28 00:59:14','2025-01-28 00:59:14'),(10,'How do you handle client information and sensitive data?','We take data privacy and confidentiality seriously. Our firm adheres to strict security protocols to protect client information. We have established measures to ensure the confidentiality and security of sensitive data throughout the consulting process.',2,'published','2025-01-28 00:59:14','2025-01-28 00:59:14'),(11,'Is there ongoing support after the consulting engagement?','Yes, we provide ongoing support to our clients even after the completion of the consulting engagement. This may include follow-up meetings, additional training, and assistance with the implementation of recommended strategies to ensure sustained success.',3,'published','2025-01-28 00:59:14','2025-01-28 00:59:14'),(12,'What is your policy regarding cancellations?','Our cancellation policy is outlined in the consulting agreement. Generally, we require advance notice for cancellations, and any associated fees or refunds will be discussed and agreed upon during the initial engagement negotiations.',3,'published','2025-01-28 00:59:14','2025-01-28 00:59:14'),(13,'What is your approach to sustainability consulting?','In sustainability consulting, we work with clients to develop environmentally responsible and socially conscious business practices. Our approach involves assessing current operations, identifying areas for improvement, and implementing sustainable strategies to reduce environmental impact and promote corporate social responsibility.',1,'published','2025-01-28 00:59:14','2025-01-28 00:59:14'),(14,'Do you offer remote consulting services?','Yes, we offer remote consulting services to clients worldwide. Our team is equipped to conduct virtual meetings, collaborate online, and deliver effective consulting services remotely. This allows us to work with clients regardless of geographical location.',2,'published','2025-01-28 00:59:14','2025-01-28 00:59:14'),(15,'How can your technology integration services benefit my business?','Our technology integration services focus on streamlining business processes through the effective use of technology. By integrating the right technologies, we help businesses enhance efficiency, improve communication, and stay competitive in today\'s rapidly evolving digital landscape.',1,'published','2025-01-28 00:59:14','2025-01-28 00:59:14'),(16,'What sets your leadership development programs apart?','Our leadership development programs are designed to empower individuals at all levels of an organization. We go beyond traditional training, focusing on personalized coaching, mentorship, and experiential learning to cultivate effective and inspiring leaders within your company.',1,'published','2025-01-28 00:59:14','2025-01-28 00:59:14'),(17,'How do you stay updated on industry trends and best practices?','We are committed to staying at the forefront of industry trends and best practices. Our team actively engages in continuous learning, participates in relevant conferences, and maintains a strong network of industry professionals to ensure that our consulting services are informed by the latest insights and innovations.',2,'published','2025-01-28 00:59:14','2025-01-28 00:59:14'),(18,'What measures do you take to ensure the quality of your consulting services?','We prioritize the quality of our consulting services by implementing rigorous quality assurance processes. This includes regular reviews of our methodologies, ongoing training for our consultants, and soliciting feedback from clients to continuously improve our service delivery.',2,'published','2025-01-28 00:59:14','2025-01-28 00:59:14');
/*!40000 ALTER TABLE `faqs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faqs_translations`
--

DROP TABLE IF EXISTS `faqs_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faqs_translations` (
  `lang_code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faqs_id` bigint unsigned NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci,
  `answer` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`lang_code`,`faqs_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faqs_translations`
--

LOCK TABLES `faqs_translations` WRITE;
/*!40000 ALTER TABLE `faqs_translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `faqs_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `galleries`
--

DROP TABLE IF EXISTS `galleries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `galleries` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_featured` tinyint unsigned NOT NULL DEFAULT '0',
  `order` tinyint unsigned NOT NULL DEFAULT '0',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `status` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `galleries_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galleries`
--

LOCK TABLES `galleries` WRITE;
/*!40000 ALTER TABLE `galleries` DISABLE KEYS */;
INSERT INTO `galleries` VALUES (1,'Business','Exploring the world of cutting-edge tech and digital innovations.',1,0,'galleries/1.png',1,'published','2025-01-28 00:59:11','2025-01-28 00:59:11'),(2,'Innovation','Images that exemplify effective guidance and inspirational leadership.',1,0,'galleries/2.png',1,'published','2025-01-28 00:59:11','2025-01-28 00:59:11'),(3,'Leadership','Moments of achievement and triumph in various business contexts.',1,0,'galleries/3.png',1,'published','2025-01-28 00:59:11','2025-01-28 00:59:11'),(4,'Technology','Showcasing breakthrough ideas, inventions, and creative solutions.',1,0,'galleries/4.png',1,'published','2025-01-28 00:59:11','2025-01-28 00:59:11'),(5,'Success','Highlighting strategies to engage, attract, and retain customers.',1,0,'galleries/5.png',1,'published','2025-01-28 00:59:11','2025-01-28 00:59:11'),(6,'Entrepreneurship','Strategic planning, decision-making, and goal-oriented visuals.',1,0,'galleries/6.png',1,'published','2025-01-28 00:59:11','2025-01-28 00:59:11');
/*!40000 ALTER TABLE `galleries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `galleries_translations`
--

DROP TABLE IF EXISTS `galleries_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `galleries_translations` (
  `lang_code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `galleries_id` bigint unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`lang_code`,`galleries_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galleries_translations`
--

LOCK TABLES `galleries_translations` WRITE;
/*!40000 ALTER TABLE `galleries_translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `galleries_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gallery_meta`
--

DROP TABLE IF EXISTS `gallery_meta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gallery_meta` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `images` text COLLATE utf8mb4_unicode_ci,
  `reference_id` bigint unsigned NOT NULL,
  `reference_type` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `gallery_meta_reference_id_index` (`reference_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery_meta`
--

LOCK TABLES `gallery_meta` WRITE;
/*!40000 ALTER TABLE `gallery_meta` DISABLE KEYS */;
INSERT INTO `gallery_meta` VALUES (1,'[{\"img\":\"galleries\\/1.png\",\"description\":\"Capturing the essence of corporate endeavors and entrepreneurial spirit.\"},{\"img\":\"galleries\\/2.png\",\"description\":\"Capturing the essence of corporate endeavors and entrepreneurial spirit.\"},{\"img\":\"galleries\\/3.png\",\"description\":\"Images depicting expansion, progress, and business development.\"},{\"img\":\"galleries\\/4.png\",\"description\":\"Celebrating the spirit of startups, innovation, and risk-taking.\"},{\"img\":\"galleries\\/5.png\",\"description\":\"Images depicting expansion, progress, and business development.\"},{\"img\":\"galleries\\/6.png\",\"description\":\"Moments of achievement and triumph in various business contexts.\"}]',1,'Botble\\Gallery\\Models\\Gallery','2025-01-28 00:59:11','2025-01-28 00:59:11'),(2,'[{\"img\":\"galleries\\/1.png\",\"description\":\"Capturing the essence of corporate endeavors and entrepreneurial spirit.\"},{\"img\":\"galleries\\/2.png\",\"description\":\"Capturing the essence of corporate endeavors and entrepreneurial spirit.\"},{\"img\":\"galleries\\/3.png\",\"description\":\"Images depicting expansion, progress, and business development.\"},{\"img\":\"galleries\\/4.png\",\"description\":\"Celebrating the spirit of startups, innovation, and risk-taking.\"},{\"img\":\"galleries\\/5.png\",\"description\":\"Images depicting expansion, progress, and business development.\"},{\"img\":\"galleries\\/6.png\",\"description\":\"Moments of achievement and triumph in various business contexts.\"}]',2,'Botble\\Gallery\\Models\\Gallery','2025-01-28 00:59:11','2025-01-28 00:59:11'),(3,'[{\"img\":\"galleries\\/1.png\",\"description\":\"Capturing the essence of corporate endeavors and entrepreneurial spirit.\"},{\"img\":\"galleries\\/2.png\",\"description\":\"Capturing the essence of corporate endeavors and entrepreneurial spirit.\"},{\"img\":\"galleries\\/3.png\",\"description\":\"Images depicting expansion, progress, and business development.\"},{\"img\":\"galleries\\/4.png\",\"description\":\"Celebrating the spirit of startups, innovation, and risk-taking.\"},{\"img\":\"galleries\\/5.png\",\"description\":\"Images depicting expansion, progress, and business development.\"},{\"img\":\"galleries\\/6.png\",\"description\":\"Moments of achievement and triumph in various business contexts.\"}]',3,'Botble\\Gallery\\Models\\Gallery','2025-01-28 00:59:11','2025-01-28 00:59:11'),(4,'[{\"img\":\"galleries\\/1.png\",\"description\":\"Capturing the essence of corporate endeavors and entrepreneurial spirit.\"},{\"img\":\"galleries\\/2.png\",\"description\":\"Capturing the essence of corporate endeavors and entrepreneurial spirit.\"},{\"img\":\"galleries\\/3.png\",\"description\":\"Images depicting expansion, progress, and business development.\"},{\"img\":\"galleries\\/4.png\",\"description\":\"Celebrating the spirit of startups, innovation, and risk-taking.\"},{\"img\":\"galleries\\/5.png\",\"description\":\"Images depicting expansion, progress, and business development.\"},{\"img\":\"galleries\\/6.png\",\"description\":\"Moments of achievement and triumph in various business contexts.\"}]',4,'Botble\\Gallery\\Models\\Gallery','2025-01-28 00:59:11','2025-01-28 00:59:11'),(5,'[{\"img\":\"galleries\\/1.png\",\"description\":\"Capturing the essence of corporate endeavors and entrepreneurial spirit.\"},{\"img\":\"galleries\\/2.png\",\"description\":\"Capturing the essence of corporate endeavors and entrepreneurial spirit.\"},{\"img\":\"galleries\\/3.png\",\"description\":\"Images depicting expansion, progress, and business development.\"},{\"img\":\"galleries\\/4.png\",\"description\":\"Celebrating the spirit of startups, innovation, and risk-taking.\"},{\"img\":\"galleries\\/5.png\",\"description\":\"Images depicting expansion, progress, and business development.\"},{\"img\":\"galleries\\/6.png\",\"description\":\"Moments of achievement and triumph in various business contexts.\"}]',5,'Botble\\Gallery\\Models\\Gallery','2025-01-28 00:59:11','2025-01-28 00:59:11'),(6,'[{\"img\":\"galleries\\/1.png\",\"description\":\"Capturing the essence of corporate endeavors and entrepreneurial spirit.\"},{\"img\":\"galleries\\/2.png\",\"description\":\"Capturing the essence of corporate endeavors and entrepreneurial spirit.\"},{\"img\":\"galleries\\/3.png\",\"description\":\"Images depicting expansion, progress, and business development.\"},{\"img\":\"galleries\\/4.png\",\"description\":\"Celebrating the spirit of startups, innovation, and risk-taking.\"},{\"img\":\"galleries\\/5.png\",\"description\":\"Images depicting expansion, progress, and business development.\"},{\"img\":\"galleries\\/6.png\",\"description\":\"Moments of achievement and triumph in various business contexts.\"}]',6,'Botble\\Gallery\\Models\\Gallery','2025-01-28 00:59:11','2025-01-28 00:59:11'),(7,'[{\"img\":\"galleries\\/1.png\",\"description\":\"Mock Turtle angrily: \'really you are painting those roses?\' Five and Seven said nothing, but looked at Alice. \'It must be getting somewhere near the looking-glass. There was a paper label, with the.\"},{\"img\":\"galleries\\/2.png\",\"description\":\"The Caterpillar and Alice looked round, eager to see you again, you dear old thing!\' said Alice, as she did not wish to offend the Dormouse crossed the court, she said to herself; \'the March Hare.\"},{\"img\":\"galleries\\/3.png\",\"description\":\"NOT a serpent!\' said Alice to find any. And yet I don\'t keep the same words as before, \'It\'s all about for some time without hearing anything more: at last in the other. In the very middle of one!.\"},{\"img\":\"galleries\\/4.png\",\"description\":\"However, at last came a little irritated at the end of the soldiers did. After these came the guests, mostly Kings and Queens, and among them Alice recognised the White Rabbit read:-- \'They told me.\"},{\"img\":\"galleries\\/5.png\",\"description\":\"Alice. \'That\'s the first figure,\' said the Footman, and began smoking again. This time there were ten of them, and he went on, \'I must be a footman because he was in a trembling voice, \'--and I.\"},{\"img\":\"galleries\\/6.png\",\"description\":\"I don\'t put my arm round your waist,\' the Duchess replied, in a sulky tone; \'Seven jogged my elbow.\' On which Seven looked up eagerly, half hoping that they couldn\'t see it?\' So she was now about.\"}]',6,'Botble\\Gallery\\Models\\Gallery','2025-01-28 00:59:11','2025-01-28 00:59:11');
/*!40000 ALTER TABLE `gallery_meta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gallery_meta_translations`
--

DROP TABLE IF EXISTS `gallery_meta_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gallery_meta_translations` (
  `lang_code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gallery_meta_id` bigint unsigned NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`lang_code`,`gallery_meta_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery_meta_translations`
--

LOCK TABLES `gallery_meta_translations` WRITE;
/*!40000 ALTER TABLE `gallery_meta_translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `gallery_meta_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `language_meta`
--

DROP TABLE IF EXISTS `language_meta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `language_meta` (
  `lang_meta_id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `lang_meta_code` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang_meta_origin` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference_id` bigint unsigned NOT NULL,
  `reference_type` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`lang_meta_id`),
  KEY `language_meta_reference_id_index` (`reference_id`),
  KEY `meta_code_index` (`lang_meta_code`),
  KEY `meta_origin_index` (`lang_meta_origin`),
  KEY `meta_reference_type_index` (`reference_type`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `language_meta`
--

LOCK TABLES `language_meta` WRITE;
/*!40000 ALTER TABLE `language_meta` DISABLE KEYS */;
INSERT INTO `language_meta` VALUES (1,'en_US','98e214432e48c4fb866f06ec2a18ffaa',1,'Botble\\Menu\\Models\\MenuLocation'),(2,'en_US','1d80f84d4ea4cfca3522e83afae72f76',1,'Botble\\Menu\\Models\\Menu'),(3,'en_US','5952b1ed0bd8065750ebd06ad9b5b905',2,'Botble\\Menu\\Models\\Menu'),(4,'en_US','9f654feec361f3e4f8d3381fa307fb9a',3,'Botble\\Menu\\Models\\Menu'),(5,'en_US','38f9736680d9a6d936d9159a32330619',4,'Botble\\Menu\\Models\\Menu'),(6,'en_US','e419192e83f08dfb0c2614713b649522',5,'Botble\\Menu\\Models\\Menu'),(7,'en_US','46d53bc6a32663bdecc038e9e87dab9d',2,'Botble\\Menu\\Models\\MenuLocation'),(8,'en_US','af377086fea6ecf9e5a35e98b82eb588',6,'Botble\\Menu\\Models\\Menu');
/*!40000 ALTER TABLE `language_meta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `languages`
--

DROP TABLE IF EXISTS `languages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `languages` (
  `lang_id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `lang_name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang_locale` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang_code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang_flag` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang_is_default` tinyint unsigned NOT NULL DEFAULT '0',
  `lang_order` int NOT NULL DEFAULT '0',
  `lang_is_rtl` tinyint unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`lang_id`),
  KEY `lang_locale_index` (`lang_locale`),
  KEY `lang_code_index` (`lang_code`),
  KEY `lang_is_default_index` (`lang_is_default`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `languages`
--

LOCK TABLES `languages` WRITE;
/*!40000 ALTER TABLE `languages` DISABLE KEYS */;
INSERT INTO `languages` VALUES (1,'English','en','en_US','us',1,0,0);
/*!40000 ALTER TABLE `languages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `media_files`
--

DROP TABLE IF EXISTS `media_files`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `media_files` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `folder_id` bigint unsigned NOT NULL DEFAULT '0',
  `mime_type` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` int NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `visibility` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'public',
  PRIMARY KEY (`id`),
  KEY `media_files_user_id_index` (`user_id`),
  KEY `media_files_index` (`folder_id`,`user_id`,`created_at`)
) ENGINE=InnoDB AUTO_INCREMENT=169 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media_files`
--

LOCK TABLES `media_files` WRITE;
/*!40000 ALTER TABLE `media_files` DISABLE KEYS */;
INSERT INTO `media_files` VALUES (1,0,'about-bg','about-bg',1,'image/jpeg',33768,'backgrounds/about-bg.jpg','[]','2025-01-28 00:59:05','2025-01-28 00:59:05',NULL,'public'),(2,0,'about-img-shape01','about-img-shape01',1,'image/png',6492,'backgrounds/about-img-shape01.png','[]','2025-01-28 00:59:05','2025-01-28 00:59:05',NULL,'public'),(3,0,'about-shape01','about-shape01',1,'image/png',1060,'backgrounds/about-shape01.png','[]','2025-01-28 00:59:05','2025-01-28 00:59:05',NULL,'public'),(4,0,'about-shape02','about-shape02',1,'image/png',2113,'backgrounds/about-shape02.png','[]','2025-01-28 00:59:05','2025-01-28 00:59:05',NULL,'public'),(5,0,'about-shape03','about-shape03',1,'image/png',18296,'backgrounds/about-shape03.png','[]','2025-01-28 00:59:05','2025-01-28 00:59:05',NULL,'public'),(6,0,'about-shape04','about-shape04',1,'image/png',77065,'backgrounds/about-shape04.png','[]','2025-01-28 00:59:05','2025-01-28 00:59:05',NULL,'public'),(7,0,'about-shape06','about-shape06',1,'image/png',8130,'backgrounds/about-shape06.png','[]','2025-01-28 00:59:05','2025-01-28 00:59:05',NULL,'public'),(8,0,'about-shape07','about-shape07',1,'image/png',10793,'backgrounds/about-shape07.png','[]','2025-01-28 00:59:05','2025-01-28 00:59:05',NULL,'public'),(9,0,'about-shape08','about-shape08',1,'image/png',10165,'backgrounds/about-shape08.png','[]','2025-01-28 00:59:05','2025-01-28 00:59:05',NULL,'public'),(10,0,'banner-shape','banner-shape',1,'image/png',877,'backgrounds/banner-shape.png','[]','2025-01-28 00:59:05','2025-01-28 00:59:05',NULL,'public'),(11,0,'banner-shape01','banner-shape01',1,'image/png',1841,'backgrounds/banner-shape01.png','[]','2025-01-28 00:59:05','2025-01-28 00:59:05',NULL,'public'),(12,0,'banner-shape02','banner-shape02',1,'image/png',1420,'backgrounds/banner-shape02.png','[]','2025-01-28 00:59:05','2025-01-28 00:59:05',NULL,'public'),(13,0,'banner-shape03','banner-shape03',1,'image/png',6020,'backgrounds/banner-shape03.png','[]','2025-01-28 00:59:05','2025-01-28 00:59:05',NULL,'public'),(14,0,'banner-shape05','banner-shape05',1,'image/png',307,'backgrounds/banner-shape05.png','[]','2025-01-28 00:59:05','2025-01-28 00:59:05',NULL,'public'),(15,0,'bg-footer-dark','bg-footer-dark',1,'image/png',24883,'backgrounds/bg-footer-dark.png','[]','2025-01-28 00:59:05','2025-01-28 00:59:05',NULL,'public'),(16,0,'bg-footer','bg-footer',1,'image/png',24488,'backgrounds/bg-footer.png','[]','2025-01-28 00:59:06','2025-01-28 00:59:06',NULL,'public'),(17,0,'blog-bg','blog-bg',1,'image/jpeg',24117,'backgrounds/blog-bg.jpg','[]','2025-01-28 00:59:06','2025-01-28 00:59:06',NULL,'public'),(18,0,'blog-bg-1','blog-bg-1',1,'image/png',32465,'backgrounds/blog-bg-1.png','[]','2025-01-28 00:59:06','2025-01-28 00:59:06',NULL,'public'),(19,0,'breadcrumb-shape01','breadcrumb-shape01',1,'image/png',10761,'backgrounds/breadcrumb-shape01.png','[]','2025-01-28 00:59:06','2025-01-28 00:59:06',NULL,'public'),(20,0,'breadcrumb-shape02','breadcrumb-shape02',1,'image/png',1566,'backgrounds/breadcrumb-shape02.png','[]','2025-01-28 00:59:06','2025-01-28 00:59:06',NULL,'public'),(21,0,'choose-img-shape01','choose-img-shape01',1,'image/png',9244,'backgrounds/choose-img-shape01.png','[]','2025-01-28 00:59:06','2025-01-28 00:59:06',NULL,'public'),(22,0,'choose-img-shape02','choose-img-shape02',1,'image/png',2113,'backgrounds/choose-img-shape02.png','[]','2025-01-28 00:59:06','2025-01-28 00:59:06',NULL,'public'),(23,0,'choose-shape','choose-shape',1,'image/png',17262,'backgrounds/choose-shape.png','[]','2025-01-28 00:59:06','2025-01-28 00:59:06',NULL,'public'),(24,0,'consulting-about-img02','consulting-about-img02',1,'image/png',3159,'backgrounds/consulting-about-img02.png','[]','2025-01-28 00:59:06','2025-01-28 00:59:06',NULL,'public'),(25,0,'consulting-about-shape01','consulting-about-shape01',1,'image/png',11339,'backgrounds/consulting-about-shape01.png','[]','2025-01-28 00:59:06','2025-01-28 00:59:06',NULL,'public'),(26,0,'consulting-about-shape02','consulting-about-shape02',1,'image/png',3159,'backgrounds/consulting-about-shape02.png','[]','2025-01-28 00:59:06','2025-01-28 00:59:06',NULL,'public'),(27,0,'consulting-about-shape03','consulting-about-shape03',1,'image/png',459,'backgrounds/consulting-about-shape03.png','[]','2025-01-28 00:59:06','2025-01-28 00:59:06',NULL,'public'),(28,0,'consulting-banner-img02','consulting-banner-img02',1,'image/png',3899,'backgrounds/consulting-banner-img02.png','[]','2025-01-28 00:59:06','2025-01-28 00:59:06',NULL,'public'),(29,0,'consulting-banner-shape01','consulting-banner-shape01',1,'image/png',2421,'backgrounds/consulting-banner-shape01.png','[]','2025-01-28 00:59:06','2025-01-28 00:59:06',NULL,'public'),(30,0,'contact-bg','contact-bg',1,'image/jpeg',28641,'backgrounds/contact-bg.jpg','[]','2025-01-28 00:59:06','2025-01-28 00:59:06',NULL,'public'),(31,0,'contact-shape','contact-shape',1,'image/png',2767,'backgrounds/contact-shape.png','[]','2025-01-28 00:59:06','2025-01-28 00:59:06',NULL,'public'),(32,0,'counter-bg','counter-bg',1,'image/jpeg',12584,'backgrounds/counter-bg.jpg','[]','2025-01-28 00:59:06','2025-01-28 00:59:06',NULL,'public'),(33,0,'counter-shape01','counter-shape01',1,'image/png',937,'backgrounds/counter-shape01.png','[]','2025-01-28 00:59:06','2025-01-28 00:59:06',NULL,'public'),(34,0,'cta-bg','cta-bg',1,'image/png',6978,'backgrounds/cta-bg.png','[]','2025-01-28 00:59:06','2025-01-28 00:59:06',NULL,'public'),(35,0,'cta-bg02','cta-bg02',1,'image/png',6896,'backgrounds/cta-bg02.png','[]','2025-01-28 00:59:06','2025-01-28 00:59:06',NULL,'public'),(36,0,'cta-bg03','cta-bg03',1,'image/png',4304,'backgrounds/cta-bg03.png','[]','2025-01-28 00:59:06','2025-01-28 00:59:06',NULL,'public'),(37,0,'faq-img02','faq-img02',1,'image/jpeg',5878,'backgrounds/faq-img02.jpg','[]','2025-01-28 00:59:06','2025-01-28 00:59:06',NULL,'public'),(38,0,'faq-shape01','faq-shape01',1,'image/png',7014,'backgrounds/faq-shape01.png','[]','2025-01-28 00:59:06','2025-01-28 00:59:06',NULL,'public'),(39,0,'faq-shape02','faq-shape02',1,'image/png',36555,'backgrounds/faq-shape02.png','[]','2025-01-28 00:59:06','2025-01-28 00:59:06',NULL,'public'),(40,0,'features-bg','features-bg',1,'image/png',31023,'backgrounds/features-bg.png','[]','2025-01-28 00:59:06','2025-01-28 00:59:06',NULL,'public'),(41,0,'features-shape02','features-shape02',1,'image/png',1476,'backgrounds/features-shape02.png','[]','2025-01-28 00:59:06','2025-01-28 00:59:06',NULL,'public'),(42,0,'finance-banner-bg','finance-banner-bg',1,'image/png',41475,'backgrounds/finance-banner-bg.png','[]','2025-01-28 00:59:06','2025-01-28 00:59:06',NULL,'public'),(43,0,'inner-about-img04','inner-about-img04',1,'image/png',5885,'backgrounds/inner-about-img04.png','[]','2025-01-28 00:59:07','2025-01-28 00:59:07',NULL,'public'),(44,0,'inner-services-bg','inner-services-bg',1,'image/jpeg',121184,'backgrounds/inner-services-bg.jpg','[]','2025-01-28 00:59:07','2025-01-28 00:59:07',NULL,'public'),(45,0,'insurance-banner-bg','insurance-banner-bg',1,'image/png',24538,'backgrounds/insurance-banner-bg.png','[]','2025-01-28 00:59:07','2025-01-28 00:59:07',NULL,'public'),(46,0,'insurance-banner-shape02','insurance-banner-shape02',1,'image/png',2482,'backgrounds/insurance-banner-shape02.png','[]','2025-01-28 00:59:07','2025-01-28 00:59:07',NULL,'public'),(47,0,'insurance-banner-shape03','insurance-banner-shape03',1,'image/png',15535,'backgrounds/insurance-banner-shape03.png','[]','2025-01-28 00:59:07','2025-01-28 00:59:07',NULL,'public'),(48,0,'mask-img','mask-img',1,'image/png',16021,'backgrounds/mask-img.png','[]','2025-01-28 00:59:07','2025-01-28 00:59:07',NULL,'public'),(49,0,'mask-img02','mask-img02',1,'image/png',10851,'backgrounds/mask-img02.png','[]','2025-01-28 00:59:07','2025-01-28 00:59:07',NULL,'public'),(50,0,'overview-img-shape','overview-img-shape',1,'image/png',5386,'backgrounds/overview-img-shape.png','[]','2025-01-28 00:59:07','2025-01-28 00:59:07',NULL,'public'),(51,0,'overview-img02','overview-img02',1,'image/png',5878,'backgrounds/overview-img02.png','[]','2025-01-28 00:59:07','2025-01-28 00:59:07',NULL,'public'),(52,0,'overview-img04','overview-img04',1,'image/png',5030,'backgrounds/overview-img04.png','[]','2025-01-28 00:59:07','2025-01-28 00:59:07',NULL,'public'),(53,0,'overview-shape','overview-shape',1,'image/png',13278,'backgrounds/overview-shape.png','[]','2025-01-28 00:59:07','2025-01-28 00:59:07',NULL,'public'),(54,0,'overview-shape01','overview-shape01',1,'image/png',1625,'backgrounds/overview-shape01.png','[]','2025-01-28 00:59:07','2025-01-28 00:59:07',NULL,'public'),(55,0,'overview-shape02','overview-shape02',1,'image/png',4572,'backgrounds/overview-shape02.png','[]','2025-01-28 00:59:07','2025-01-28 00:59:07',NULL,'public'),(56,0,'pricing-shape','pricing-shape',1,'image/png',14455,'backgrounds/pricing-shape.png','[]','2025-01-28 00:59:07','2025-01-28 00:59:07',NULL,'public'),(57,0,'project-bg','project-bg',1,'image/jpeg',35373,'backgrounds/project-bg.jpg','[]','2025-01-28 00:59:07','2025-01-28 00:59:07',NULL,'public'),(58,0,'project-bg02','project-bg02',1,'image/png',34955,'backgrounds/project-bg02.png','[]','2025-01-28 00:59:07','2025-01-28 00:59:07',NULL,'public'),(59,0,'request-bg','request-bg',1,'image/png',12797,'backgrounds/request-bg.png','[]','2025-01-28 00:59:07','2025-01-28 00:59:07',NULL,'public'),(60,0,'services-bg','services-bg',1,'image/jpeg',104571,'backgrounds/services-bg.jpg','[]','2025-01-28 00:59:07','2025-01-28 00:59:07',NULL,'public'),(61,0,'services-bg02','services-bg02',1,'image/png',62786,'backgrounds/services-bg02.png','[]','2025-01-28 00:59:07','2025-01-28 00:59:07',NULL,'public'),(62,0,'services-item-shape','services-item-shape',1,'image/png',1106,'backgrounds/services-item-shape.png','[]','2025-01-28 00:59:07','2025-01-28 00:59:07',NULL,'public'),(63,0,'shape01','shape01',1,'image/png',3103,'backgrounds/shape01.png','[]','2025-01-28 00:59:07','2025-01-28 00:59:07',NULL,'public'),(64,0,'shape02','shape02',1,'image/png',14965,'backgrounds/shape02.png','[]','2025-01-28 00:59:08','2025-01-28 00:59:08',NULL,'public'),(65,0,'team-bg','team-bg',1,'image/png',43370,'backgrounds/team-bg.png','[]','2025-01-28 00:59:08','2025-01-28 00:59:08',NULL,'public'),(66,0,'team-shape','team-shape',1,'image/png',13845,'backgrounds/team-shape.png','[]','2025-01-28 00:59:08','2025-01-28 00:59:08',NULL,'public'),(67,0,'testimonial-bg','testimonial-bg',1,'image/png',75707,'backgrounds/testimonial-bg.png','[]','2025-01-28 00:59:08','2025-01-28 00:59:08',NULL,'public'),(68,0,'testimonial-bg1','testimonial-bg1',1,'image/png',127349,'backgrounds/testimonial-bg1.png','[]','2025-01-28 00:59:08','2025-01-28 00:59:08',NULL,'public'),(69,0,'about-author','about-author',2,'image/png',827,'general/about-author.png','[]','2025-01-28 00:59:08','2025-01-28 00:59:08',NULL,'public'),(70,0,'about-img','about-img',2,'image/png',9679,'general/about-img.png','[]','2025-01-28 00:59:08','2025-01-28 00:59:08',NULL,'public'),(71,0,'about-img01','about-img01',2,'image/png',11011,'general/about-img01.png','[]','2025-01-28 00:59:08','2025-01-28 00:59:08',NULL,'public'),(72,0,'about-img02','about-img02',2,'image/png',3374,'general/about-img02.png','[]','2025-01-28 00:59:08','2025-01-28 00:59:08',NULL,'public'),(73,0,'about-img04','about-img04',2,'image/png',2161,'general/about-img04.png','[]','2025-01-28 00:59:08','2025-01-28 00:59:08',NULL,'public'),(74,0,'banner-main-img','banner-main-img',2,'image/png',11898,'general/banner-main-img.png','[]','2025-01-28 00:59:08','2025-01-28 00:59:08',NULL,'public'),(75,0,'banner-shape01','banner-shape01',2,'image/png',5798,'general/banner-shape01.png','[]','2025-01-28 00:59:08','2025-01-28 00:59:08',NULL,'public'),(76,0,'breadcrumb-bg','breadcrumb-bg',2,'image/png',10270,'general/breadcrumb-bg.png','[]','2025-01-28 00:59:08','2025-01-28 00:59:08',NULL,'public'),(77,0,'choose-bg','choose-bg',2,'image/png',24863,'general/choose-bg.png','[]','2025-01-28 00:59:08','2025-01-28 00:59:08',NULL,'public'),(78,0,'choose-img','choose-img',2,'image/png',8544,'general/choose-img.png','[]','2025-01-28 00:59:08','2025-01-28 00:59:08',NULL,'public'),(79,0,'consulting-banner-img03','consulting-banner-img03',2,'image/png',1804,'general/consulting-banner-img03.png','[]','2025-01-28 00:59:08','2025-01-28 00:59:08',NULL,'public'),(80,0,'contact-img','contact-img',2,'image/jpeg',13078,'general/contact-img.jpg','[]','2025-01-28 00:59:08','2025-01-28 00:59:08',NULL,'public'),(81,0,'estimate-img','estimate-img',2,'image/png',10042,'general/estimate-img.png','[]','2025-01-28 00:59:08','2025-01-28 00:59:08',NULL,'public'),(82,0,'favicon','favicon',2,'image/png',653,'general/favicon.png','[]','2025-01-28 00:59:09','2025-01-28 00:59:09',NULL,'public'),(83,0,'finance-banner-img','finance-banner-img',2,'image/png',8958,'general/finance-banner-img.png','[]','2025-01-28 00:59:09','2025-01-28 00:59:09',NULL,'public'),(84,0,'inner-about-img05','inner-about-img05',2,'image/png',9666,'general/inner-about-img05.png','[]','2025-01-28 00:59:09','2025-01-28 00:59:09',NULL,'public'),(85,0,'inner-choose-img','inner-choose-img',2,'image/png',21167,'general/inner-choose-img.png','[]','2025-01-28 00:59:09','2025-01-28 00:59:09',NULL,'public'),(86,0,'insurance-banner-img','insurance-banner-img',2,'image/png',11800,'general/insurance-banner-img.png','[]','2025-01-28 00:59:09','2025-01-28 00:59:09',NULL,'public'),(87,0,'logo-white','logo-white',2,'image/png',2984,'general/logo-white.png','[]','2025-01-28 00:59:09','2025-01-28 00:59:09',NULL,'public'),(88,0,'logo','logo',2,'image/png',3838,'general/logo.png','[]','2025-01-28 00:59:09','2025-01-28 00:59:09',NULL,'public'),(89,0,'newsletter-popup','newsletter-popup',2,'image/jpeg',39739,'general/newsletter-popup.jpg','[]','2025-01-28 00:59:09','2025-01-28 00:59:09',NULL,'public'),(90,0,'overview-img01','overview-img01',2,'image/png',8593,'general/overview-img01.png','[]','2025-01-28 00:59:09','2025-01-28 00:59:09',NULL,'public'),(91,0,'placeholder','placeholder',2,'image/png',12581,'general/placeholder.png','[]','2025-01-28 00:59:09','2025-01-28 00:59:09',NULL,'public'),(92,0,'signature','signature',2,'image/png',2327,'general/signature.png','[]','2025-01-28 00:59:09','2025-01-28 00:59:09',NULL,'public'),(93,0,'testimonial-img','testimonial-img',2,'image/png',8609,'general/testimonial-img.png','[]','2025-01-28 00:59:09','2025-01-28 00:59:09',NULL,'public'),(94,0,'testimonial-img01','testimonial-img01',2,'image/png',7828,'general/testimonial-img01.png','[]','2025-01-28 00:59:09','2025-01-28 00:59:09',NULL,'public'),(95,0,'testimonial-img03','testimonial-img03',2,'image/png',8333,'general/testimonial-img03.png','[]','2025-01-28 00:59:09','2025-01-28 00:59:09',NULL,'public'),(96,0,'brand-img01','brand-img01',3,'image/png',901,'brands/brand-img01.png','[]','2025-01-28 00:59:09','2025-01-28 00:59:09',NULL,'public'),(97,0,'brand-img02','brand-img02',3,'image/png',901,'brands/brand-img02.png','[]','2025-01-28 00:59:09','2025-01-28 00:59:09',NULL,'public'),(98,0,'brand-img03','brand-img03',3,'image/png',901,'brands/brand-img03.png','[]','2025-01-28 00:59:09','2025-01-28 00:59:09',NULL,'public'),(99,0,'brand-img04','brand-img04',3,'image/png',901,'brands/brand-img04.png','[]','2025-01-28 00:59:09','2025-01-28 00:59:09',NULL,'public'),(100,0,'brand-img05','brand-img05',3,'image/png',901,'brands/brand-img05.png','[]','2025-01-28 00:59:10','2025-01-28 00:59:10',NULL,'public'),(101,0,'quote','quote',4,'image/png',1378,'icons/quote.png','[]','2025-01-28 00:59:10','2025-01-28 00:59:10',NULL,'public'),(102,0,'rating','rating',4,'image/png',1488,'icons/rating.png','[]','2025-01-28 00:59:10','2025-01-28 00:59:10',NULL,'public'),(103,0,'testimonial-shape04','testimonial-shape04',4,'image/png',1147,'icons/testimonial-shape04.png','[]','2025-01-28 00:59:10','2025-01-28 00:59:10',NULL,'public'),(104,0,'banner-bg','banner-bg',5,'image/jpeg',24422,'sliders/banner-bg.jpg','[]','2025-01-28 00:59:10','2025-01-28 00:59:10',NULL,'public'),(105,0,'banner-bg02','banner-bg02',5,'image/jpeg',24422,'sliders/banner-bg02.jpg','[]','2025-01-28 00:59:10','2025-01-28 00:59:10',NULL,'public'),(106,0,'1','1',6,'image/png',13024,'galleries/1.png','[]','2025-01-28 00:59:11','2025-01-28 00:59:11',NULL,'public'),(107,0,'2','2',6,'image/png',3152,'galleries/2.png','[]','2025-01-28 00:59:11','2025-01-28 00:59:11',NULL,'public'),(108,0,'3','3',6,'image/png',11055,'galleries/3.png','[]','2025-01-28 00:59:11','2025-01-28 00:59:11',NULL,'public'),(109,0,'4','4',6,'image/png',8025,'galleries/4.png','[]','2025-01-28 00:59:11','2025-01-28 00:59:11',NULL,'public'),(110,0,'5','5',6,'image/png',10354,'galleries/5.png','[]','2025-01-28 00:59:11','2025-01-28 00:59:11',NULL,'public'),(111,0,'6','6',6,'image/png',9667,'galleries/6.png','[]','2025-01-28 00:59:11','2025-01-28 00:59:11',NULL,'public'),(112,0,'1','1',7,'image/png',10595,'news/1.png','[]','2025-01-28 00:59:11','2025-01-28 00:59:11',NULL,'public'),(113,0,'10','10',7,'image/png',10595,'news/10.png','[]','2025-01-28 00:59:11','2025-01-28 00:59:11',NULL,'public'),(114,0,'11','11',7,'image/png',10595,'news/11.png','[]','2025-01-28 00:59:11','2025-01-28 00:59:11',NULL,'public'),(115,0,'12','12',7,'image/png',10595,'news/12.png','[]','2025-01-28 00:59:11','2025-01-28 00:59:11',NULL,'public'),(116,0,'2','2',7,'image/png',10595,'news/2.png','[]','2025-01-28 00:59:11','2025-01-28 00:59:11',NULL,'public'),(117,0,'3','3',7,'image/png',10595,'news/3.png','[]','2025-01-28 00:59:11','2025-01-28 00:59:11',NULL,'public'),(118,0,'4','4',7,'image/png',10595,'news/4.png','[]','2025-01-28 00:59:11','2025-01-28 00:59:11',NULL,'public'),(119,0,'5','5',7,'image/png',10595,'news/5.png','[]','2025-01-28 00:59:11','2025-01-28 00:59:11',NULL,'public'),(120,0,'6','6',7,'image/png',10595,'news/6.png','[]','2025-01-28 00:59:11','2025-01-28 00:59:11',NULL,'public'),(121,0,'7','7',7,'image/png',10595,'news/7.png','[]','2025-01-28 00:59:11','2025-01-28 00:59:11',NULL,'public'),(122,0,'8','8',7,'image/png',10595,'news/8.png','[]','2025-01-28 00:59:12','2025-01-28 00:59:12',NULL,'public'),(123,0,'9','9',7,'image/png',10595,'news/9.png','[]','2025-01-28 00:59:12','2025-01-28 00:59:12',NULL,'public'),(124,0,'1','1',8,'image/png',2537,'testimonials/1.png','[]','2025-01-28 00:59:12','2025-01-28 00:59:12',NULL,'public'),(125,0,'2','2',8,'image/png',2537,'testimonials/2.png','[]','2025-01-28 00:59:12','2025-01-28 00:59:12',NULL,'public'),(126,0,'3','3',8,'image/png',2537,'testimonials/3.png','[]','2025-01-28 00:59:12','2025-01-28 00:59:12',NULL,'public'),(127,0,'4','4',8,'image/png',2537,'testimonials/4.png','[]','2025-01-28 00:59:12','2025-01-28 00:59:12',NULL,'public'),(128,0,'1-1','1-1',9,'image/png',6765,'teams/1-1.png','[]','2025-01-28 00:59:12','2025-01-28 00:59:12',NULL,'public'),(129,0,'1-2','1-2',9,'image/png',6765,'teams/1-2.png','[]','2025-01-28 00:59:12','2025-01-28 00:59:12',NULL,'public'),(130,0,'1-3','1-3',9,'image/png',6765,'teams/1-3.png','[]','2025-01-28 00:59:12','2025-01-28 00:59:12',NULL,'public'),(131,0,'1-4','1-4',9,'image/png',6765,'teams/1-4.png','[]','2025-01-28 00:59:12','2025-01-28 00:59:12',NULL,'public'),(132,0,'2-1','2-1',9,'image/png',6423,'teams/2-1.png','[]','2025-01-28 00:59:12','2025-01-28 00:59:12',NULL,'public'),(133,0,'2-2','2-2',9,'image/png',6423,'teams/2-2.png','[]','2025-01-28 00:59:12','2025-01-28 00:59:12',NULL,'public'),(134,0,'2-3','2-3',9,'image/png',6423,'teams/2-3.png','[]','2025-01-28 00:59:12','2025-01-28 00:59:12',NULL,'public'),(135,0,'2-4','2-4',9,'image/png',6423,'teams/2-4.png','[]','2025-01-28 00:59:12','2025-01-28 00:59:12',NULL,'public'),(136,0,'3-1','3-1',9,'image/png',6157,'teams/3-1.png','[]','2025-01-28 00:59:12','2025-01-28 00:59:12',NULL,'public'),(137,0,'3-2','3-2',9,'image/png',6157,'teams/3-2.png','[]','2025-01-28 00:59:12','2025-01-28 00:59:12',NULL,'public'),(138,0,'3-3','3-3',9,'image/png',6157,'teams/3-3.png','[]','2025-01-28 00:59:12','2025-01-28 00:59:12',NULL,'public'),(139,0,'3-4','3-4',9,'image/png',6157,'teams/3-4.png','[]','2025-01-28 00:59:12','2025-01-28 00:59:12',NULL,'public'),(140,0,'4-1','4-1',9,'image/png',2324,'teams/4-1.png','[]','2025-01-28 00:59:12','2025-01-28 00:59:12',NULL,'public'),(141,0,'4-2','4-2',9,'image/png',2324,'teams/4-2.png','[]','2025-01-28 00:59:12','2025-01-28 00:59:12',NULL,'public'),(142,0,'4-3','4-3',9,'image/png',2324,'teams/4-3.png','[]','2025-01-28 00:59:12','2025-01-28 00:59:12',NULL,'public'),(143,0,'4-4','4-4',9,'image/png',2324,'teams/4-4.png','[]','2025-01-28 00:59:12','2025-01-28 00:59:12',NULL,'public'),(144,0,'5-1','5-1',9,'image/png',5005,'teams/5-1.png','[]','2025-01-28 00:59:13','2025-01-28 00:59:13',NULL,'public'),(145,0,'5-2','5-2',9,'image/png',5005,'teams/5-2.png','[]','2025-01-28 00:59:13','2025-01-28 00:59:13',NULL,'public'),(146,0,'5-3','5-3',9,'image/png',5005,'teams/5-3.png','[]','2025-01-28 00:59:13','2025-01-28 00:59:13',NULL,'public'),(147,0,'5-4','5-4',9,'image/png',5005,'teams/5-4.png','[]','2025-01-28 00:59:13','2025-01-28 00:59:13',NULL,'public'),(148,0,'1','1',10,'image/png',8724,'projects/1.png','[]','2025-01-28 00:59:13','2025-01-28 00:59:13',NULL,'public'),(149,0,'2','2',10,'image/png',8724,'projects/2.png','[]','2025-01-28 00:59:13','2025-01-28 00:59:13',NULL,'public'),(150,0,'3','3',10,'image/png',8724,'projects/3.png','[]','2025-01-28 00:59:13','2025-01-28 00:59:13',NULL,'public'),(151,0,'4','4',10,'image/png',8724,'projects/4.png','[]','2025-01-28 00:59:13','2025-01-28 00:59:13',NULL,'public'),(152,0,'5','5',10,'image/png',7275,'projects/5.png','[]','2025-01-28 00:59:13','2025-01-28 00:59:13',NULL,'public'),(153,0,'6','6',10,'image/png',7275,'projects/6.png','[]','2025-01-28 00:59:13','2025-01-28 00:59:13',NULL,'public'),(154,0,'7','7',10,'image/png',7212,'projects/7.png','[]','2025-01-28 00:59:13','2025-01-28 00:59:13',NULL,'public'),(155,0,'8','8',10,'image/png',7212,'projects/8.png','[]','2025-01-28 00:59:13','2025-01-28 00:59:13',NULL,'public'),(156,0,'9','9',10,'image/png',7212,'projects/9.png','[]','2025-01-28 00:59:13','2025-01-28 00:59:13',NULL,'public'),(157,0,'1','1',11,'image/png',17323,'services/1.png','[]','2025-01-28 00:59:13','2025-01-28 00:59:13',NULL,'public'),(158,0,'2','2',11,'image/png',17323,'services/2.png','[]','2025-01-28 00:59:13','2025-01-28 00:59:13',NULL,'public'),(159,0,'3','3',11,'image/png',17323,'services/3.png','[]','2025-01-28 00:59:13','2025-01-28 00:59:13',NULL,'public'),(160,0,'4','4',11,'image/png',17323,'services/4.png','[]','2025-01-28 00:59:13','2025-01-28 00:59:13',NULL,'public'),(161,0,'5','5',11,'image/jpeg',17323,'services/5.jpg','[]','2025-01-28 00:59:13','2025-01-28 00:59:13',NULL,'public'),(162,0,'1','1',12,'image/png',14547,'careers/1.png','[]','2025-01-28 00:59:14','2025-01-28 00:59:14',NULL,'public'),(163,0,'2','2',12,'image/png',18918,'careers/2.png','[]','2025-01-28 00:59:14','2025-01-28 00:59:14',NULL,'public'),(164,0,'3','3',12,'image/png',9953,'careers/3.png','[]','2025-01-28 00:59:14','2025-01-28 00:59:14',NULL,'public'),(165,0,'4','4',12,'image/png',14406,'careers/4.png','[]','2025-01-28 00:59:14','2025-01-28 00:59:14',NULL,'public'),(166,0,'5','5',12,'image/png',13492,'careers/5.png','[]','2025-01-28 00:59:14','2025-01-28 00:59:14',NULL,'public'),(167,0,'6','6',12,'image/png',14893,'careers/6.png','[]','2025-01-28 00:59:14','2025-01-28 00:59:14',NULL,'public'),(168,0,'background-image','background-image',12,'image/jpeg',369786,'careers/background-image.jpg','[]','2025-01-28 00:59:14','2025-01-28 00:59:14',NULL,'public');
/*!40000 ALTER TABLE `media_files` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `media_folders`
--

DROP TABLE IF EXISTS `media_folders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `media_folders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` bigint unsigned NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `media_folders_user_id_index` (`user_id`),
  KEY `media_folders_index` (`parent_id`,`user_id`,`created_at`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media_folders`
--

LOCK TABLES `media_folders` WRITE;
/*!40000 ALTER TABLE `media_folders` DISABLE KEYS */;
INSERT INTO `media_folders` VALUES (1,0,'backgrounds',NULL,'backgrounds',0,'2025-01-28 00:59:05','2025-01-28 00:59:05',NULL),(2,0,'general',NULL,'general',0,'2025-01-28 00:59:08','2025-01-28 00:59:08',NULL),(3,0,'brands',NULL,'brands',0,'2025-01-28 00:59:09','2025-01-28 00:59:09',NULL),(4,0,'icons',NULL,'icons',0,'2025-01-28 00:59:10','2025-01-28 00:59:10',NULL),(5,0,'sliders',NULL,'sliders',0,'2025-01-28 00:59:10','2025-01-28 00:59:10',NULL),(6,0,'galleries',NULL,'galleries',0,'2025-01-28 00:59:11','2025-01-28 00:59:11',NULL),(7,0,'news',NULL,'news',0,'2025-01-28 00:59:11','2025-01-28 00:59:11',NULL),(8,0,'testimonials',NULL,'testimonials',0,'2025-01-28 00:59:12','2025-01-28 00:59:12',NULL),(9,0,'teams',NULL,'teams',0,'2025-01-28 00:59:12','2025-01-28 00:59:12',NULL),(10,0,'projects',NULL,'projects',0,'2025-01-28 00:59:13','2025-01-28 00:59:13',NULL),(11,0,'services',NULL,'services',0,'2025-01-28 00:59:13','2025-01-28 00:59:13',NULL),(12,0,'careers',NULL,'careers',0,'2025-01-28 00:59:14','2025-01-28 00:59:14',NULL);
/*!40000 ALTER TABLE `media_folders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `media_settings`
--

DROP TABLE IF EXISTS `media_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `media_settings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `media_id` bigint unsigned DEFAULT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media_settings`
--

LOCK TABLES `media_settings` WRITE;
/*!40000 ALTER TABLE `media_settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `media_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_locations`
--

DROP TABLE IF EXISTS `menu_locations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu_locations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` bigint unsigned NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `menu_locations_menu_id_created_at_index` (`menu_id`,`created_at`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_locations`
--

LOCK TABLES `menu_locations` WRITE;
/*!40000 ALTER TABLE `menu_locations` DISABLE KEYS */;
INSERT INTO `menu_locations` VALUES (1,1,'main-menu','2025-01-28 00:59:14','2025-01-28 00:59:14'),(2,6,'footer-menu','2025-01-28 00:59:14','2025-01-28 00:59:14');
/*!40000 ALTER TABLE `menu_locations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_nodes`
--

DROP TABLE IF EXISTS `menu_nodes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu_nodes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` bigint unsigned NOT NULL,
  `parent_id` bigint unsigned NOT NULL DEFAULT '0',
  `reference_id` bigint unsigned DEFAULT NULL,
  `reference_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon_font` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` tinyint unsigned NOT NULL DEFAULT '0',
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `css_class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `has_child` tinyint unsigned NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `menu_nodes_menu_id_index` (`menu_id`),
  KEY `menu_nodes_parent_id_index` (`parent_id`),
  KEY `reference_id` (`reference_id`),
  KEY `reference_type` (`reference_type`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_nodes`
--

LOCK TABLES `menu_nodes` WRITE;
/*!40000 ALTER TABLE `menu_nodes` DISABLE KEYS */;
INSERT INTO `menu_nodes` VALUES (1,1,0,NULL,NULL,NULL,NULL,0,'Home',NULL,'_self',1,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(2,1,1,NULL,NULL,'',NULL,0,'Finance',NULL,'_self',0,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(3,1,1,NULL,NULL,'/consulting',NULL,0,'Consulting',NULL,'_self',0,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(4,1,1,NULL,NULL,'/insurance',NULL,0,'Insurance',NULL,'_self',0,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(5,1,1,NULL,NULL,'/digital-agency',NULL,0,'Digital Agency',NULL,'_self',0,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(6,1,1,NULL,NULL,'/business',NULL,0,'Business',NULL,'_self',0,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(7,1,0,NULL,NULL,'/about',NULL,0,'About Us',NULL,'_self',1,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(8,1,7,NULL,NULL,'/about',NULL,0,'About One',NULL,'_self',0,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(9,1,7,NULL,NULL,'/about-2',NULL,0,'About Two',NULL,'_self',0,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(10,1,7,NULL,NULL,'/about-3',NULL,0,'About Three',NULL,'_self',0,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(11,1,7,NULL,NULL,'/about-4',NULL,0,'About Four',NULL,'_self',0,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(12,1,7,NULL,NULL,'/about-5',NULL,0,'About Five',NULL,'_self',0,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(13,1,0,NULL,NULL,'#',NULL,0,'Page',NULL,'_self',1,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(14,1,13,NULL,NULL,'/careers',NULL,0,'Careers',NULL,'_self',1,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(15,1,14,NULL,NULL,'/careers',NULL,0,'Career Listing',NULL,'_self',0,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(16,1,14,NULL,NULL,'',NULL,0,'Career Details',NULL,'_self',0,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(17,1,13,NULL,NULL,'/faqs',NULL,0,'FAQs',NULL,'_self',0,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(18,1,13,NULL,NULL,'/services',NULL,0,'Services One',NULL,'_self',1,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(19,1,18,NULL,NULL,'/services',NULL,0,'Services',NULL,'_self',0,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(20,1,18,NULL,NULL,'/services-2',NULL,0,'Services Two',NULL,'_self',0,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(21,1,18,NULL,NULL,'/services-3',NULL,0,'Services Three',NULL,'_self',0,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(22,1,18,NULL,NULL,'/services-4',NULL,0,'Services Four',NULL,'_self',0,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(23,1,18,NULL,NULL,'/services-5',NULL,0,'Services Five',NULL,'_self',0,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(24,1,13,NULL,NULL,'',NULL,0,'Service Details',NULL,'_self',0,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(25,1,13,NULL,NULL,'',NULL,0,'Team Details',NULL,'_self',0,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(26,1,13,NULL,NULL,'',NULL,0,'Project Details',NULL,'_self',0,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(27,1,13,NULL,NULL,'/404',NULL,0,'404 Error',NULL,'_self',0,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(28,1,13,NULL,NULL,'/coming-soon',NULL,0,'Coming Soon',NULL,'_self',0,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(29,1,0,NULL,NULL,'/blog',NULL,0,'Blog',NULL,'_self',1,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(30,1,29,NULL,NULL,'/blog',NULL,0,'Our Blog',NULL,'_self',0,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(31,1,29,NULL,NULL,'/blog/balancing-act-work-life-integration-for-business-owners',NULL,0,'Blog Details',NULL,'_self',0,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(32,1,0,NULL,NULL,'/contact',NULL,0,'Contact',NULL,'_self',0,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(33,2,0,NULL,NULL,'/contact-us',NULL,1,'Mission & Vision',NULL,'_self',0,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(34,2,0,NULL,NULL,'/our-team',NULL,1,'Our Team',NULL,'_self',0,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(35,2,0,NULL,NULL,'/contact-us',NULL,1,'Careers',NULL,'_self',0,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(36,2,0,NULL,NULL,'/services',NULL,1,'Press & Media',NULL,'_self',0,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(37,2,0,NULL,NULL,'/contact-us',NULL,1,'Advertising',NULL,'_self',0,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(38,2,0,NULL,NULL,'/contact-us',NULL,1,'Testimonials',NULL,'_self',0,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(39,3,0,NULL,NULL,'/contact-us',NULL,2,'Global coverage',NULL,'_self',0,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(40,3,0,NULL,NULL,'/contact-us',NULL,2,'Distribution',NULL,'_self',0,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(41,3,0,NULL,NULL,'/contact-us',NULL,2,'Accounting Tools',NULL,'_self',0,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(42,3,0,NULL,NULL,'/contact-us',NULL,2,'Freight Recovery',NULL,'_self',0,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(43,3,0,NULL,NULL,'/contact-us',NULL,2,'Supply Chain',NULL,'_self',0,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(44,3,0,NULL,NULL,'/contact-us',NULL,2,'Warehousing',NULL,'_self',0,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(45,4,0,NULL,NULL,'/company',NULL,3,'Company',NULL,'_self',0,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(46,4,0,NULL,NULL,'/careers',NULL,3,'Careers',NULL,'_self',0,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(47,4,0,NULL,NULL,'/galleries',NULL,3,'Press Media',NULL,'_self',0,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(48,4,0,NULL,NULL,'/blog',NULL,3,'Our Blog',NULL,'_self',0,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(49,4,0,NULL,NULL,'/privacy-policy',NULL,3,'Privacy Policy',NULL,'_self',0,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(50,5,0,NULL,NULL,'how-it-work',NULL,4,'How it work',NULL,'_self',0,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(51,5,0,NULL,NULL,'partners',NULL,4,'Partners',NULL,'_self',0,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(52,5,0,NULL,NULL,'testimonials',NULL,4,'Testimonials',NULL,'_self',0,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(53,5,0,NULL,NULL,'case-studies',NULL,4,'Case Studies',NULL,'_self',0,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(54,5,0,NULL,NULL,'pricing',NULL,4,'Pricing',NULL,'_self',0,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(55,6,0,18,'Botble\\Page\\Models\\Page','/privacy-policy',NULL,5,'Privacy Policy',NULL,'_self',0,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(56,6,0,16,'Botble\\Page\\Models\\Page','/cookies',NULL,5,'Cookies',NULL,'_self',0,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(57,6,0,17,'Botble\\Page\\Models\\Page','/terms-of-service',NULL,5,'Terms of service',NULL,'_self',0,'2025-01-28 00:59:14','2025-01-28 00:59:14');
/*!40000 ALTER TABLE `menu_nodes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menus` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menus_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'Main menu','main-menu','published','2025-01-28 00:59:14','2025-01-28 00:59:14'),(2,'Company','company','published','2025-01-28 00:59:14','2025-01-28 00:59:14'),(3,'Industries','industries','published','2025-01-28 00:59:14','2025-01-28 00:59:14'),(4,'Menu','menu','published','2025-01-28 00:59:14','2025-01-28 00:59:14'),(5,'Quick links','quick-links','published','2025-01-28 00:59:14','2025-01-28 00:59:14'),(6,'Footer menu','footer-menu','published','2025-01-28 00:59:14','2025-01-28 00:59:14');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meta_boxes`
--

DROP TABLE IF EXISTS `meta_boxes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `meta_boxes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `meta_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_value` text COLLATE utf8mb4_unicode_ci,
  `reference_id` bigint unsigned NOT NULL,
  `reference_type` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `meta_boxes_reference_id_index` (`reference_id`)
) ENGINE=InnoDB AUTO_INCREMENT=143 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meta_boxes`
--

LOCK TABLES `meta_boxes` WRITE;
/*!40000 ALTER TABLE `meta_boxes` DISABLE KEYS */;
INSERT INTO `meta_boxes` VALUES (1,'header_style','[\"style-2\"]',2,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(2,'header_top_sidebar_style','[\"style-2\"]',2,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(3,'footer_style','[\"style-1\"]',2,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(4,'bottom_footer_style','[\"style-1\"]',2,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(5,'customize_footer','[\"custom\"]',2,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(6,'footer_background_color','[\"#FFFFFF\"]',2,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(7,'footer_text_color','[\"#ffffff\"]',2,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(8,'footer_border_color','[\"#0055FF\"]',2,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(9,'footer_text_muted_color','[\"#96A1B8\"]',2,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(10,'footer_background_image','[\"backgrounds\\/bg-footer-dark.png\"]',2,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(11,'header_style','[\"style-3\"]',3,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(12,'header_top_sidebar_style','[\"style-1\"]',3,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(13,'footer_style','[\"style-1\"]',3,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(14,'bottom_footer_style','[\"style-1\"]',3,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(15,'customize_footer','[\"custom\"]',3,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(16,'footer_background_color','[\"#FFFFFF\"]',3,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(17,'footer_text_color','[\"#ffffff\"]',3,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(18,'footer_border_color','[\"#0055FF\"]',3,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(19,'footer_text_muted_color','[\"#96A1B8\"]',3,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(20,'footer_background_image','[\"backgrounds\\/bg-footer-dark.png\"]',3,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(21,'header_style','[\"style-3\"]',4,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(22,'header_top_sidebar_style','[\"style-1\"]',4,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(23,'header_style','[\"style-2\"]',5,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(24,'header_top_sidebar_style','[\"style-1\"]',5,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(25,'header_style','[\"style-3\"]',6,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(26,'header_top_sidebar_style','[\"style-2\"]',6,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(27,'footer_style','[\"style-1\"]',6,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(28,'bottom_footer_style','[\"style-1\"]',6,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(29,'customize_footer','[\"custom\"]',6,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(30,'footer_background_color','[\"#FFFFFF\"]',6,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(31,'footer_text_color','[\"#ffffff\"]',6,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(32,'footer_border_color','[\"#0055FF\"]',6,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(33,'footer_text_muted_color','[\"#96A1B8\"]',6,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(34,'footer_background_image','[\"backgrounds\\/bg-footer-dark.png\"]',6,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(35,'header_style','[\"style-3\"]',7,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(36,'header_top_sidebar_style','[\"style-2\"]',7,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(37,'footer_style','[\"style-1\"]',7,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(38,'bottom_footer_style','[\"style-1\"]',7,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(39,'customize_footer','[\"custom\"]',7,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(40,'footer_background_color','[\"#FFFFFF\"]',7,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(41,'footer_text_color','[\"#ffffff\"]',7,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(42,'footer_border_color','[\"#0055FF\"]',7,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(43,'footer_text_muted_color','[\"#96A1B8\"]',7,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(44,'footer_background_image','[\"backgrounds\\/bg-footer-dark.png\"]',7,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(45,'pre_footer_sidebar_style','[\"style-1\"]',7,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(46,'header_style','[\"style-3\"]',8,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(47,'header_top_sidebar_style','[\"style-2\"]',8,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(48,'footer_style','[\"style-1\"]',8,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(49,'bottom_footer_style','[\"style-1\"]',8,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(50,'customize_footer','[\"custom\"]',8,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(51,'footer_background_color','[\"#FFFFFF\"]',8,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(52,'footer_text_color','[\"#ffffff\"]',8,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(53,'footer_border_color','[\"#0055FF\"]',8,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(54,'footer_text_muted_color','[\"#96A1B8\"]',8,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(55,'footer_background_image','[\"backgrounds\\/bg-footer-dark.png\"]',8,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(56,'pre_footer_sidebar_style','[\"style-2\"]',9,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(57,'header_style','[\"style-3\"]',9,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(58,'header_top_sidebar_style','[\"style-2\"]',9,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(59,'footer_style','[\"style-1\"]',9,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(60,'bottom_footer_style','[\"style-1\"]',9,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(61,'customize_footer','[\"custom\"]',9,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(62,'footer_background_color','[\"#FFFFFF\"]',9,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(63,'footer_text_color','[\"#ffffff\"]',9,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(64,'footer_border_color','[\"#0055FF\"]',9,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(65,'footer_text_muted_color','[\"#96A1B8\"]',9,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(66,'footer_background_image','[\"backgrounds\\/bg-footer-dark.png\"]',9,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(67,'pre_footer_sidebar_style','[\"none\"]',10,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(68,'header_style','[\"style-3\"]',10,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(69,'header_top_sidebar_style','[\"style-2\"]',10,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(70,'header_style','[\"style-3\"]',11,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(71,'header_top_sidebar_style','[\"style-2\"]',11,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(72,'header_style','[\"style-3\"]',12,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(73,'header_top_sidebar_style','[\"style-2\"]',12,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(74,'header_style','[\"style-3\"]',13,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(75,'header_top_sidebar_style','[\"style-2\"]',13,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(76,'header_style','[\"style-3\"]',14,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(77,'header_top_sidebar_style','[\"style-2\"]',14,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(78,'header_style','[\"style-3\"]',15,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(79,'header_top_sidebar_style','[\"style-2\"]',15,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(80,'header_style','[\"style-2\"]',16,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(81,'header_style','[\"style-2\"]',17,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(82,'header_style','[\"style-2\"]',18,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(83,'header_style','[\"style-3\"]',19,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(84,'header_top_sidebar_style','[\"style-2\"]',19,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(85,'pre_footer_sidebar_style','[\"none\"]',20,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(86,'header_style','[\"style-3\"]',20,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(87,'header_top_sidebar_style','[\"style-2\"]',20,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(88,'header_style','[\"style-2\"]',21,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(89,'header_style','[\"style-2\"]',22,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(90,'header_style','[\"style-2\"]',23,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(91,'header_style','[\"style-2\"]',24,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(92,'header_style','[\"style-2\"]',25,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(93,'header_style','[\"style-2\"]',26,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(94,'header_style','[\"style-2\"]',27,'Botble\\Page\\Models\\Page','2025-01-28 00:59:10','2025-01-28 00:59:10'),(95,'header_style','[\"style-2\"]',28,'Botble\\Page\\Models\\Page','2025-01-28 00:59:11','2025-01-28 00:59:11'),(96,'title','[\"Satisfied client testimonial\"]',1,'Botble\\Testimonial\\Models\\Testimonial','2025-01-28 00:59:12','2025-01-28 00:59:12'),(97,'star','[5]',1,'Botble\\Testimonial\\Models\\Testimonial','2025-01-28 00:59:12','2025-01-28 00:59:12'),(98,'title','[\"Impressed Customer\"]',2,'Botble\\Testimonial\\Models\\Testimonial','2025-01-28 00:59:12','2025-01-28 00:59:12'),(99,'star','[5]',2,'Botble\\Testimonial\\Models\\Testimonial','2025-01-28 00:59:12','2025-01-28 00:59:12'),(100,'title','[\"Our success stories\"]',3,'Botble\\Testimonial\\Models\\Testimonial','2025-01-28 00:59:12','2025-01-28 00:59:12'),(101,'star','[5]',3,'Botble\\Testimonial\\Models\\Testimonial','2025-01-28 00:59:12','2025-01-28 00:59:12'),(102,'title','[\"Preferred Partner\"]',4,'Botble\\Testimonial\\Models\\Testimonial','2025-01-28 00:59:12','2025-01-28 00:59:12'),(103,'star','[5]',4,'Botble\\Testimonial\\Models\\Testimonial','2025-01-28 00:59:12','2025-01-28 00:59:12'),(104,'icon','[\"flaticon-briefcase\"]',1,'Botble\\Portfolio\\Models\\ServiceCategory','2025-01-28 00:59:14','2025-01-28 00:59:14'),(105,'icon','[\"flaticon-taxes\"]',2,'Botble\\Portfolio\\Models\\ServiceCategory','2025-01-28 00:59:14','2025-01-28 00:59:14'),(106,'icon','[\"flaticon-layers\"]',3,'Botble\\Portfolio\\Models\\ServiceCategory','2025-01-28 00:59:14','2025-01-28 00:59:14'),(107,'icon','[\"flaticon-investment\"]',4,'Botble\\Portfolio\\Models\\ServiceCategory','2025-01-28 00:59:14','2025-01-28 00:59:14'),(108,'icon','[\"flaticon-briefcase\"]',1,'Botble\\Portfolio\\Models\\Service','2025-01-28 00:59:14','2025-01-28 00:59:14'),(109,'icon','[\"flaticon-taxes\"]',2,'Botble\\Portfolio\\Models\\Service','2025-01-28 00:59:14','2025-01-28 00:59:14'),(110,'icon','[\"flaticon-money\"]',3,'Botble\\Portfolio\\Models\\Service','2025-01-28 00:59:14','2025-01-28 00:59:14'),(111,'icon','[\"flaticon-investment\"]',4,'Botble\\Portfolio\\Models\\Service','2025-01-28 00:59:14','2025-01-28 00:59:14'),(112,'icon','[\"flaticon-data-management\"]',5,'Botble\\Portfolio\\Models\\Service','2025-01-28 00:59:14','2025-01-28 00:59:14'),(113,'icon','[\"flaticon-calculator\"]',6,'Botble\\Portfolio\\Models\\Service','2025-01-28 00:59:14','2025-01-28 00:59:14'),(114,'icon','[\"flaticon-piggy-bank\"]',7,'Botble\\Portfolio\\Models\\Service','2025-01-28 00:59:14','2025-01-28 00:59:14'),(115,'icon','[\"flaticon-layers\"]',8,'Botble\\Portfolio\\Models\\Service','2025-01-28 00:59:14','2025-01-28 00:59:14'),(116,'icon','[\"flaticon-money\"]',9,'Botble\\Portfolio\\Models\\Service','2025-01-28 00:59:14','2025-01-28 00:59:14'),(117,'icon','[\"flaticon-handshake\"]',10,'Botble\\Portfolio\\Models\\Service','2025-01-28 00:59:14','2025-01-28 00:59:14'),(118,'icon','[\"flaticon-development\"]',11,'Botble\\Portfolio\\Models\\Service','2025-01-28 00:59:14','2025-01-28 00:59:14'),(119,'icon','[\"flaticon-business-presentation\"]',12,'Botble\\Portfolio\\Models\\Service','2025-01-28 00:59:14','2025-01-28 00:59:14'),(120,'icon','[\"flaticon-inspiration\"]',13,'Botble\\Portfolio\\Models\\Service','2025-01-28 00:59:14','2025-01-28 00:59:14'),(121,'icon','[\"flaticon-rocket\"]',1,'Botble\\Portfolio\\Models\\Package','2025-01-28 00:59:14','2025-01-28 00:59:14'),(122,'icon','[\"flaticon-inspiration\"]',2,'Botble\\Portfolio\\Models\\Package','2025-01-28 00:59:14','2025-01-28 00:59:14'),(123,'icon','[\"flaticon-briefcase\"]',3,'Botble\\Portfolio\\Models\\Package','2025-01-28 00:59:14','2025-01-28 00:59:14'),(124,'image','[\"careers\\/background-image.jpg\"]',1,'ArchiElite\\Career\\Models\\Career','2025-01-28 00:59:14','2025-01-28 00:59:14'),(125,'icon','[\"careers\\/1.png\"]',1,'ArchiElite\\Career\\Models\\Career','2025-01-28 00:59:14','2025-01-28 00:59:14'),(126,'apply_url','[\"\\/contact\"]',1,'ArchiElite\\Career\\Models\\Career','2025-01-28 00:59:14','2025-01-28 00:59:14'),(127,'image','[\"careers\\/background-image.jpg\"]',2,'ArchiElite\\Career\\Models\\Career','2025-01-28 00:59:14','2025-01-28 00:59:14'),(128,'icon','[\"careers\\/2.png\"]',2,'ArchiElite\\Career\\Models\\Career','2025-01-28 00:59:14','2025-01-28 00:59:14'),(129,'apply_url','[\"\\/contact\"]',2,'ArchiElite\\Career\\Models\\Career','2025-01-28 00:59:14','2025-01-28 00:59:14'),(130,'image','[\"careers\\/background-image.jpg\"]',3,'ArchiElite\\Career\\Models\\Career','2025-01-28 00:59:14','2025-01-28 00:59:14'),(131,'icon','[\"careers\\/3.png\"]',3,'ArchiElite\\Career\\Models\\Career','2025-01-28 00:59:14','2025-01-28 00:59:14'),(132,'apply_url','[\"\\/contact\"]',3,'ArchiElite\\Career\\Models\\Career','2025-01-28 00:59:14','2025-01-28 00:59:14'),(133,'image','[\"careers\\/background-image.jpg\"]',4,'ArchiElite\\Career\\Models\\Career','2025-01-28 00:59:14','2025-01-28 00:59:14'),(134,'icon','[\"careers\\/4.png\"]',4,'ArchiElite\\Career\\Models\\Career','2025-01-28 00:59:14','2025-01-28 00:59:14'),(135,'apply_url','[\"\\/contact\"]',4,'ArchiElite\\Career\\Models\\Career','2025-01-28 00:59:14','2025-01-28 00:59:14'),(136,'image','[\"careers\\/background-image.jpg\"]',5,'ArchiElite\\Career\\Models\\Career','2025-01-28 00:59:14','2025-01-28 00:59:14'),(137,'icon','[\"careers\\/5.png\"]',5,'ArchiElite\\Career\\Models\\Career','2025-01-28 00:59:14','2025-01-28 00:59:14'),(138,'apply_url','[\"\\/contact\"]',5,'ArchiElite\\Career\\Models\\Career','2025-01-28 00:59:14','2025-01-28 00:59:14'),(139,'image','[\"careers\\/background-image.jpg\"]',6,'ArchiElite\\Career\\Models\\Career','2025-01-28 00:59:14','2025-01-28 00:59:14'),(140,'icon','[\"careers\\/6.png\"]',6,'ArchiElite\\Career\\Models\\Career','2025-01-28 00:59:14','2025-01-28 00:59:14'),(141,'apply_url','[\"\\/contact\"]',6,'ArchiElite\\Career\\Models\\Career','2025-01-28 00:59:14','2025-01-28 00:59:14'),(142,'display_name','[\"Rosalina William\"]',1,'Botble\\ACL\\Models\\User','2025-01-28 00:59:14','2025-01-28 00:59:14');
/*!40000 ALTER TABLE `meta_boxes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000001_create_cache_table',1),(2,'2013_04_09_032329_create_base_tables',1),(3,'2013_04_09_062329_create_revisions_table',1),(4,'2014_10_12_000000_create_users_table',1),(5,'2014_10_12_100000_create_password_reset_tokens_table',1),(6,'2016_06_10_230148_create_acl_tables',1),(7,'2016_06_14_230857_create_menus_table',1),(8,'2016_06_28_221418_create_pages_table',1),(9,'2016_10_05_074239_create_setting_table',1),(10,'2016_11_28_032840_create_dashboard_widget_tables',1),(11,'2016_12_16_084601_create_widgets_table',1),(12,'2017_05_09_070343_create_media_tables',1),(13,'2017_11_03_070450_create_slug_table',1),(14,'2019_01_05_053554_create_jobs_table',1),(15,'2019_08_19_000000_create_failed_jobs_table',1),(16,'2019_12_14_000001_create_personal_access_tokens_table',1),(17,'2022_04_20_100851_add_index_to_media_table',1),(18,'2022_04_20_101046_add_index_to_menu_table',1),(19,'2022_07_10_034813_move_lang_folder_to_root',1),(20,'2022_08_04_051940_add_missing_column_expires_at',1),(21,'2022_09_01_000001_create_admin_notifications_tables',1),(22,'2022_10_14_024629_drop_column_is_featured',1),(23,'2022_11_18_063357_add_missing_timestamp_in_table_settings',1),(24,'2022_12_02_093615_update_slug_index_columns',1),(25,'2023_01_30_024431_add_alt_to_media_table',1),(26,'2023_02_16_042611_drop_table_password_resets',1),(27,'2023_04_23_005903_add_column_permissions_to_admin_notifications',1),(28,'2023_05_10_075124_drop_column_id_in_role_users_table',1),(29,'2023_08_21_090810_make_page_content_nullable',1),(30,'2023_09_14_021936_update_index_for_slugs_table',1),(31,'2023_10_22_092312_remove_unused_plugins',1),(32,'2023_12_07_095130_add_color_column_to_media_folders_table',1),(33,'2023_12_17_162208_make_sure_column_color_in_media_folders_nullable',1),(34,'2024_04_04_110758_update_value_column_in_user_meta_table',1),(35,'2024_05_12_091229_add_column_visibility_to_table_media_files',1),(36,'2024_07_07_091316_fix_column_url_in_menu_nodes_table',1),(37,'2024_07_12_100000_change_random_hash_for_media',1),(38,'2024_09_30_024515_create_sessions_table',1),(39,'2024_04_27_100730_improve_analytics_setting',2),(40,'2023_08_11_060908_create_announcements_table',3),(41,'2015_06_29_025744_create_audit_history',4),(42,'2023_11_14_033417_change_request_column_in_table_audit_histories',4),(43,'2015_06_18_033822_create_blog_table',5),(44,'2021_02_16_092633_remove_default_value_for_author_type',5),(45,'2021_12_03_030600_create_blog_translations',5),(46,'2022_04_19_113923_add_index_to_table_posts',5),(47,'2023_08_29_074620_make_column_author_id_nullable',5),(48,'2024_07_30_091615_fix_order_column_in_categories_table',5),(49,'2025_01_06_033807_add_default_value_for_categories_author_type',5),(50,'2019_06_24_211801_create_career_table',6),(51,'2021_12_04_095357_create_careers_translations_table',6),(52,'2023_09_20_050420_add_missing_translation_column',6),(53,'2016_06_17_091537_create_contacts_table',7),(54,'2023_11_10_080225_migrate_contact_blacklist_email_domains_to_core',7),(55,'2024_03_20_080001_migrate_change_attribute_email_to_nullable_form_contacts_table',7),(56,'2024_03_25_000001_update_captcha_settings_for_contact',7),(57,'2024_04_19_063914_create_custom_fields_table',7),(58,'2018_07_09_221238_create_faq_table',8),(59,'2021_12_03_082134_create_faq_translations',8),(60,'2023_11_17_063408_add_description_column_to_faq_categories_table',8),(61,'2016_10_13_150201_create_galleries_table',9),(62,'2021_12_03_082953_create_gallery_translations',9),(63,'2022_04_30_034048_create_gallery_meta_translations_table',9),(64,'2023_08_29_075308_make_column_user_id_nullable',9),(65,'2016_10_03_032336_create_languages_table',10),(66,'2023_09_14_022423_add_index_for_language_table',10),(67,'2021_10_25_021023_fix-priority-load-for-language-advanced',11),(68,'2021_12_03_075608_create_page_translations',11),(69,'2023_07_06_011444_create_slug_translations_table',11),(70,'2017_10_24_154832_create_newsletter_table',12),(71,'2024_03_25_000001_update_captcha_settings_for_newsletter',12),(72,'2023_07_25_072632_create_portfolio_tables',13),(73,'2023_09_11_023233_create_pf_custom_fields_table',13),(74,'2023_09_13_042633_add_columns_to_pf_projects_table',13),(75,'2023_09_13_044041_create_pf_project_categories_table',13),(76,'2023_09_22_061723_create_custom_fields_translations_table',13),(77,'2023_09_22_343531_remove_project_categories_table',13),(78,'2023_11_05_081701_fix_projects_table',13),(79,'2024_05_16_060328_add_projects_translations_table',13),(80,'2024_09_09_075552_add_action_field_pf_packages_table',13),(81,'2024_11_14_024038_improve_pf_packages_table',13),(82,'2025_01_19_145943_add_column_order_to_table_pf_services',13),(83,'2022_11_02_092723_team_create_team_table',14),(84,'2023_08_11_094574_update_team_table',14),(85,'2023_11_30_085354_add_missing_description_to_team',14),(86,'2024_10_02_030027_add_more_columns_to_teams_translations_table',14),(87,'2018_07_09_214610_create_testimonial_table',15),(88,'2021_12_03_083642_create_testimonials_translations',15),(89,'2016_10_07_193005_create_translations_table',16),(90,'2023_12_12_105220_drop_translations_table',16);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `newsletters`
--

DROP TABLE IF EXISTS `newsletters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `newsletters` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'subscribed',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `newsletters`
--

LOCK TABLES `newsletters` WRITE;
/*!40000 ALTER TABLE `newsletters` DISABLE KEYS */;
/*!40000 ALTER TABLE `newsletters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `user_id` bigint unsigned DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `template` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pages_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,'Home','<div>[hero-banner title=\"Get a Smart Way For Your Business\" subtitle=\"WE ARE EXPERT IN THIS FIELD\" description=\"Agilos Helps You To Convert Your Data Into A Strategic Asset And Get Top-Notch Business Insights.\" button_label=\"Our Services\" button_url=\"/services\" button_play_video_label=\"Watch  The Video\" youtube_url=\"https://www.youtube.com/watch?v=2h478iPhuEw\" image=\"general/finance-banner-img.png\" background_image=\"backgrounds/finance-banner-bg.png\" background_image_1=\"backgrounds/banner-shape01.png\" background_image_2=\"backgrounds/banner-shape02.png\" background_image_3=\"backgrounds/banner-shape03.png\" style=\"style-1\"][/hero-banner]</div><div>[featured-service-categories category_ids=\"1,2,3\" enable_lazy_loading=\"yes\"][/featured-service-categories]</div><div>[about-us-information title=\" 25 Years Of Experience In This Finance Advisory Company\" subtitle=\"GET TO KNOW US\" description=\"Morem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elita Florai Psum Dolor Sit Amet, Consecteture.Borem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elita Florai Psum.\" founded_year=\"1993\" company_description=\"Of Experience in This Finance Advisory Company.\" quantity=\"4\" title_1=\"100% Better Results\" title_2=\"Suspe Ndisse Suscipit Sagittis\" title_3=\"Promis Specific TimelineI Guarantee\" title_4=\"Review Credit Reports\" sub_description=\"Morem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elita Florai Psum Dolor Sit Amet, Consecteture\" author_name=\"Mark Stranger,CEO, Gerow Finance\" author_bio=\"CEO, Gerow Finance\" author_avatar=\"general/about-author.png\" author_signature=\"general/signature.png\" image=\"general/about-img01.png\" image_1=\"general/about-img02.png\" background_image_1=\"backgrounds/about-shape01.png\" background_image_2=\"backgrounds/about-shape02.png\" background_image_3=\"backgrounds/about-shape03.png\" enable_lazy_loading=\"yes\"][/about-us-information]</div><div>[brands quantity=\"5\" name_1=\"Zelus\" image_1=\"brands/brand-img04.png\" link_1=\"https://zelus.com\" name_2=\"The bird\" image_2=\"brands/brand-img05.png\" link_2=\"https://thebird.com\" name_3=\"Nature Wave\" image_3=\"brands/brand-img03.png\" link_3=\"https://naturewave.com\" name_4=\"Start\" image_4=\"brands/brand-img01.png\" link_4=\"https://start.com\" name_5=\"Finance\" image_5=\"brands/brand-img02.png\" link_5=\"https://finance.com\" enable_lazy_loading=\"yes\"][/brands]</div><br></br><br></br><br></br><div>[featured-services title=\"We can inspire and Offer Different Services\" subtitle=\"WHAT WE DO FOR YOU\" service_ids=\"1,2,3,4\" button_label=\"See All Services\" button_url=\"/services\" background_image=\"backgrounds/services-bg02.png\" enable_lazy_loading=\"yes\"][/featured-services]</div><div>[company-overview title=\"Plan your business strategy with Our Experts\" subtitle=\"COMPANY OVERVIEW\" description=\"Morem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elita Florai Psum Dolor Sit Amet, Consecteture.Borem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elita Florai Psum. Morem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elita Florai Psum Dolor Sit Amet, Consecteture.Borem.\" image=\"general/overview-img01.png\" image_1=\"backgrounds/overview-img02.png\" background_image=\"backgrounds/overview-shape.png\" background_image_1=\"backgrounds/overview-img-shape.png\" quantity=\"2\" title_1=\"Best Award\" logo_1=\"flaticon-trophy\" data_1=\"235\" unit_1=\"+\" title_2=\"Happy Clients\" logo_2=\"flaticon-rating\" data_2=\"98\" unit_2=\"K\" style=\"style-1\" enable_lazy_loading=\"yes\"][/company-overview]</div><div>[intro-video title=\"We’ll Ensure You Always Get the Best Guidance.\" description=\"Morem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elita Florai Psum Dolor Sit Amet, Consecteture.Borem.\" button_label=\"Watch Video\" youtube_video_url=\"https://www.youtube.com/watch?v=2h478iPhuEw\" background_image=\"general/choose-bg.png\" background_image_1=\"backgrounds/choose-shape.png\" box_title=\"Smart & Great Finance For you Solutions\" box_subtitle=\"WHY WE ARE THE BEST\" box_description=\"Morem Ipsum Dolor Sit Amet Consectedipiscing Elita Florai Psum Dolor Sit Amonsectet Borem Ipsum Consectetur.\" quantity=\"3\" title_1=\"Consulting\" percent_1=\"85\" title_2=\"Investment\" percent_2=\"76\" title_3=\"Business\" percent_3=\"90\" enable_lazy_loading=\"yes\"][/intro-video]</div><div>[featured-projects title=\"Our recently completed projects list\" subtitle=\"COMPLETE PROJECTS\" description=\"Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Come To Mind? Oftentimes.\" background_image=\"backgrounds/project-bg02.png\" project_ids=\"1,2,3\" enable_lazy_loading=\"yes\"][/featured-projects]</div><br></br><br></br><br></br><div>[contact-block title=\"Let’s Request a Schedule For Free Consultation\" hotline=\"1238989444\" subtitle=\"Call For More Info\" button_label=\"Contact Us\" button_url=\"/contact\" background_image=\"backgrounds/cta-bg.png\" enable_lazy_loading=\"yes\"][/contact-block]</div><div>[teams title=\"Our Dedicated Team Members\" subtitle=\"EXPERT PEOPLE\" description=\"Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Come To Mind? Oftentimes.\" background_image=\"/backgrounds/team-shape.png\" quantity=\"4\" team_id_1=\"1\" image_1=\"teams/1-1.png\" team_id_2=\"2\" image_2=\"teams/1-2.png\" team_id_3=\"3\" image_3=\"teams/1-3.png\" team_id_4=\"4\" image_4=\"teams/1-4.png\" team_id_5=\"1\" team_id_6=\"1\" style=\"style-1\" enable_lazy_loading=\"yes\"][/teams]</div><div>[testimonials title=\"What Customers Say’s About Our Gerow Services\" subtitle=\"OUR TESTIMONIALS\"  testimonial_ids=\"1,2,3,4\" background_image=\"backgrounds/testimonial-bg.png\" enable_lazy_loading=\"yes\"][/testimonials]</div><div>[pricing title=\"We’ve offered the best pricing for you\" subtitle=\"FLEXIBLE PRICING PLAN\" description=\"Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Come To Mind? Oftentimes.\" package_ids=\"1,2,3\" background_image=\"backgrounds/pricing-shape.png\" enable_lazy_loading=\"yes\"][/pricing]</div><div>[news title=\"Read Our Latest Updates\" subtitle=\"NEWS & BLOGS\" description=\"Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Come To Mind? Oftentimes.\" type=\"featured\" limit=\"3\" background_image=\"backgrounds/blog-bg-1.png\" style=\"style-1\" post_style=\"style-1\" enable_lazy_loading=\"yes\"][/news]</div>',1,NULL,'homepage',NULL,'published','2025-01-28 00:59:10','2025-01-28 00:59:10'),(2,'Consulting','<div>[hero-banner title=\"Need Business Consultation Today\" description=\"Agilos Helps You To Convert Your Data Into A Strategic Asset And Get Top-Notch Business Insights.\" image=\"galleries/5.png\" image_1=\"backgrounds/consulting-banner-img02.png\" image_2=\"general/consulting-banner-img03.png\" background_image_1=\"backgrounds/consulting-banner-shape01.png\" background_image_2=\"backgrounds/about-shape01.png\" style=\"style-2\"][/hero-banner]</div><div>[brands title=\"Trusted by 10,000+ companies around the world\" quantity=\"5\" name_1=\"Zelus\" image_1=\"brands/brand-img04.png\" link_1=\"https://zelus.com\" name_2=\"The bird\" image_2=\"brands/brand-img05.png\" link_2=\"https://thebird.com\" name_3=\"Nature Wave\" image_3=\"brands/brand-img03.png\" link_3=\"https://naturewave.com\" name_4=\"Start\" image_4=\"brands/brand-img01.png\" link_4=\"https://start.com\" name_5=\"Finance\" image_5=\"brands/brand-img02.png\" link_5=\"https://finance.com\" style=\"style-2\"][/brands]</div><div>[featured-service-categories title=\"The features that make our Service unique\" subtitle=\"WHAT WE DO FOR YOU\" category_ids=\"1,2,3,4\" style=\"style-2\"][/featured-service-categories]</div><div>[about-us-information title=\"We are the next gen Business experience\" subtitle=\"GET TO KNOW US\" description=\"With Over 25 Years Of Experience, We Have Crafted Thousands Of Strategic Discovery Process That Enables Us To Peel Back Which Enable Us To Understand.\" quantity=\"2\" title_1=\"Business Growth\" description_1=\"Eiusmod Temporincididunt Ut Labore Magna Aliqua Quisery.\" icon_1=\"flaticon-profit\" title_2=\"Target Audience\" description_2=\"Eiusmod Temporincididunt Ut Labore Magna Aliqua Quisery.\" icon_2=\"flaticon-mission\" image=\"galleries/1.png\" image_1=\"backgrounds/consulting-about-img02.png\" background_image_1=\"backgrounds/mask-img.png\" background_image_2=\"backgrounds/consulting-about-shape01.png\" background_image_3=\"backgrounds/about-shape01.png\" background_image_4=\"backgrounds/consulting-about-shape03.png\" style=\"style-2\"][/about-us-information]</div><div>[company-overview title=\"We Prepare An Effective Strategy For Companies\" subtitle=\"COMPANY OVERVIEW\" description=\"Morem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elita Florai Psum Dolor Sit Amet, Consecteture.\" image=\"galleries/3.png\" image_1=\"backgrounds/overview-img04.png\" background_image=\"backgrounds/mask-img02.png\" background_image_1=\"backgrounds/overview-shape01.png\" background_image_2=\"backgrounds/overview-shape02.png\" quantity=\"3\" title_1=\"Consulting\" data_1=\"85\" title_2=\"Investment\" data_2=\"76\" title_3=\"Investment\" data_3=\"90\" style=\"style-2\"][/company-overview]</div><div>[site-statistics quantity=\"4\" title_1=\"Success Rate\" data_1=\"95\" unit_1=\"%\" title_2=\"Complete Projects\" data_2=\"55\" unit_2=\"K\" title_3=\"Satisfied Clients\" data_3=\"25\" unit_3=\"K\" title_4=\"Trade In The World\" data_4=\"15\" unit_4=\"K\"][/site-statistics]</div><div>[teams title=\"Dedicated Team Members\" subtitle=\"EXPERT PEOPLE\" description=\"Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Come To Mind? Oftentimes.\" quantity=\"4\" team_id_1=\"1\" image_1=\"teams/2-1.png\" team_id_2=\"2\" image_2=\"teams/2-2.png\" team_id_3=\"3\" image_3=\"teams/2-3.png\" team_id_4=\"4\" image_4=\"teams/2-4.png\" team_id_5=\"1\" team_id_6=\"1\" style=\"style-2\" enable_lazy_loading=\"yes\"][/teams]</div><div>[testimonials  testimonial_ids=\"1,2,3,4\" image=\"general/testimonial-img.png\" background_image=\"backgrounds/testimonial-bg1.png\" style=\"style-2\" enable_lazy_loading=\"yes\"][/testimonials]</div><div>[contact-block title=\"Let’s Request a Schedule For Free Consultation\" hotline=\"1238989444\" subtitle=\"Call For More Info\" button_label=\"Contact Us\" button_url=\"/contact\" background_image=\"backgrounds/cta-bg02.png\" style=\"style-2\" enable_lazy_loading=\"yes\"][/contact-block]</div><div>[news title=\"Read Our Latest Updates\" subtitle=\"NEWS & BLOGS\" description=\"Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Come To Mind? Oftentimes.\" type=\"featured\" limit=\"3\" post_style=\"style-2\" enable_lazy_loading=\"yes\"][/news]</div>',1,NULL,'homepage',NULL,'published','2025-01-28 00:59:10','2025-01-28 00:59:10'),(3,'Insurance','<div>[hero-banner title=\"Enjoy Life With Safety Insurance\" subtitle=\"INSURANCE AGENCY\" description=\"Agilos Helps You To Convert Your Data Into Rategic Asset Emand Get Top-Notch Business Insights.\" button_label=\"Discover More\" button_url=\"/contact\" image=\"general/insurance-banner-img.png\" background_image=\"backgrounds/insurance-banner-bg.png\" background_image_1=\"backgrounds/about-shape01.png\" background_image_2=\"backgrounds/insurance-banner-shape02.png\" background_image_3=\"backgrounds/insurance-banner-shape03.png\" style=\"style-3\"][/hero-banner]</div><div>[featured-service-categories category_ids=\"1,2,3\" style=\"style-3\"][/featured-service-categories]</div><div>[about-us-information title=\"Today, any health insurance deductible can feel like\" subtitle=\"INSURANCE AGENCY\" description=\"When An Unknown Printer Took A Galley Of Type And Scrambled It To Make A Type Specimen Book. It Has Survived Not Only Five Centuries, But Also The Leap Into Electronic.\" founded_year=\"2015\" company_description=\"Years Of Experience\" quantity=\"6\" title_1=\"100% Better Results\" title_2=\"Suspe Ndisse Suscipit Sagittis\" title_3=\"Promis TimelineI Guarantee\" title_4=\"Review Credit Reports\" title_5=\"Insured Customers\" icon_5=\"flaticon-trophy.png\" data_5=\"63\" unit_5=\"%\" title_6=\"Satisfied Award\" icon_6=\"flaticon-family.png\" data_6=\"95\" unit_6=\"%\" image=\"galleries/4.png\" image_1=\"general/about-img04.png\" style=\"style-3\"][/about-us-information]</div><div>[featured-services title=\"We can inspire and Offer Different Services\" subtitle=\"WHAT WE DO FOR YOU\" service_ids=\"1,2,3,4\" button_label=\"See All Services\" button_url=\"/services\" background_image=\"backgrounds/about-shape03.png\" style=\"style-3\"][/featured-services]</div><div>[why-choose-us title=\"We’ll Ensure You Always Get the Best Guidance.\" subtitle=\"WHY CHOOSE US\" description=\"Morem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elita Florai Psum Dolor Sit Amet, Consecteture.Borem.\" image=\"general/choose-img.png\" background_image_1=\"backgrounds/choose-img-shape01.png\" background_image_2=\"backgrounds/choose-img-shape02.png\" background_image_3=\"backgrounds/choose-shape.png\" background_color=\"#001641\" quantity=\"3\" title_1=\"Business Growth\" data_1=\"55\" unit_1=\"%\" title_2=\"Trusted Clients\" data_2=\"80\" unit_2=\"%\" title_3=\"Complete Insurance\" data_3=\"98\" unit_3=\"%\"][/why-choose-us]</div><div>[contact-block title=\"Let’s Request a Schedule For Free Consultation\" hotline=\"1238989444\" subtitle=\"Call For More Info\" button_label=\"Contact Us\" button_url=\"/contact\" background_image=\"backgrounds/cta-bg03.png\" style=\"style-3\" enable_lazy_loading=\"yes\"][/contact-block]</div><div>[request-quote title=\"Get an insurance quote From Our Expertise\" subtitle=\"GET A FREE ESTIMATE\" image=\"general/estimate-img.png\" background_image=\"backgrounds/about-shape03.png\" enable_lazy_loading=\"yes\"][/request-quote]</div><div>[teams title=\"Dedicated Team Members\" subtitle=\"EXPERT PEOPLE\" description=\"Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Come To Mind? Oftentimes.\" quantity=\"4\" team_id_1=\"1\" image_1=\"teams/3-1.png\" team_id_2=\"2\" image_2=\"teams/3-2.png\" team_id_3=\"3\" image_3=\"teams/3-3.png\" team_id_4=\"4\" image_4=\"teams/3-4.png\" team_id_5=\"1\" team_id_6=\"1\" style=\"style-3\" enable_lazy_loading=\"yes\"][/teams]</div><div>[pricing title=\"We’ve offered the best pricing for you\" subtitle=\"FLEXIBLE PRICING PLAN\" description=\"Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Come To Mind? Oftentimes.\" package_ids=\"1,2,3\" background_image=\"backgrounds/pricing-shape.png\" style=\"style-2\"][/pricing]</div><div>[news title=\"Read Our Latest Updates\" subtitle=\"NEWS & BLOGS\" description=\"Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Come To Mind? Oftentimes.\" type=\"featured\" limit=\"3\" post_style=\"style-2\" enable_lazy_loading=\"yes\"][/news]</div>',1,NULL,'homepage',NULL,'published','2025-01-28 00:59:10','2025-01-28 00:59:10'),(4,'Digital Agency','<div>[hero-banner title=\"Get Digital Products For your Business\" highlight_text=\"Products\" description=\"When An Unknown Printer Took A Galley Type And Scramble Make A Type Specimen Book. It Has Survived Not Only Five Centuries But Also Leap.\" button_label=\"Our Services\" button_url=\"/services\" image=\"general/banner-main-img.png\" image_1=\"general/banner-shape01.png\" background_image=\"backgrounds/banner-shape02.png\" background_image_1=\"backgrounds/banner-shape05.png\" style=\"style-4\"][/hero-banner]</div><br></br><br></br><br></br><div>[brands quantity=\"5\" name_1=\"Zelus\" image_1=\"brands/brand-img04.png\" link_1=\"https://zelus.com\" name_2=\"The bird\" image_2=\"brands/brand-img05.png\" link_2=\"https://thebird.com\" name_3=\"Nature Wave\" image_3=\"brands/brand-img03.png\" link_3=\"https://naturewave.com\" name_4=\"Start\" image_4=\"brands/brand-img01.png\" link_4=\"https://start.com\" name_5=\"Finance\" image_5=\"brands/brand-img02.png\" link_5=\"https://finance.com\" style=\"style-1\"][/brands]</div><div>[services-list title=\"Provide Best Services\" badge=\"OUR EXPERTISE\" description=\"Morem Ipsum Dolor Sit Amet Consectetur Adipiscingelita Florai PsumBoremipsum Dolor Sit Amet.\" background_color=\"#FFFFFF\" service_ids=\"1,2,4\" style=\"style-5\"][/services-list]</div><div>[about-us-information title=\"We’re The Best Digital Marketing Company\" subtitle=\"INSURANCE AGENCY\" description=\"When An Unknown Printer Took A Galley Of Type And Scrambled It Ake A Type Specimen Book. When An Unknown Printer Took A Galley Of Type And Scrambled It Ake.\" button_label=\"Take our Service\" button_url=\"/services\" quantity=\"4\" title_1=\"100% Better Results\" title_2=\"Promis TimelineI\" title_3=\"Ndisse Suscipit Sagittis\" title_4=\"Review Credit Reports\" image=\"general/about-img.png\" image_1=\"backgrounds/about-shape01.png\" background_image_1=\"backgrounds/about-shape02.png\" style=\"style-5\"][/about-us-information]</div><div>[site-statistics quantity=\"6\" title_1=\"Best Awards\" icon_1=\"flaticon-trophy\" data_1=\"25\" unit_1=\"K\" title_2=\"Happy Clients\" icon_2=\"flaticon-rating\" data_2=\"223\" unit_2=\"K\" title_3=\"Projects Done\" icon_3=\"flaticon-folder-1\" data_3=\"98\" unit_3=\"K\" title_4=\"Expert People\" icon_4=\"flaticon-round-table\" data_4=\"22\" unit_4=\"K\" style=\"style-2\"][/site-statistics]</div><div>[teams title=\"Experience Team Members\" subtitle=\"MEET OUR TEAM\" description=\"Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Come To Minddestmentor Area\" quantity=\"4\" team_id_1=\"1\" image_1=\"teams/4-1.png\" team_id_2=\"2\" image_2=\"teams/4-2.png\" team_id_3=\"3\" image_3=\"teams/4-3.png\" team_id_4=\"4\" image_4=\"teams/4-4.png\" team_id_5=\"1\" team_id_6=\"1\" style=\"style-5\" enable_lazy_loading=\"yes\"][/teams]</div><br></br><br></br><br></br><div>[featured-projects title=\"We’ve Done Lot’s Of Work, Let’s Check Some From Here\" subtitle=\"CASE STUDIES\" button_label=\"See All Projects\" button_url=\"/projects\" project_ids=\"5,6,7,8,9\" style=\"style-2\" enable_lazy_loading=\"yes\"][/featured-projects]</div><br></br><br></br><br></br><div>[contact-block title=\"Let’s Request a Schedule For Free Consultation\" hotline=\"1238989444\" subtitle=\"Call For More Info\" button_label=\"Contact Us\" button_url=\"/contact\" background_image=\"backgrounds/cta-bg02.png\" style=\"style-2\" enable_lazy_loading=\"yes\"][/contact-block]</div><div>[testimonials title=\"What our awesome customers say\" subtitle=\"What our awesome customers say\" testimonial_ids=\"1,2,3,4\" image=\"general/testimonial-img03.png\" background_image=\"backgrounds/about-shape06.png\" background_image_1=\"backgrounds/banner-shape02.png\" background_image_2=\"icons/testimonial-shape04.png\" background_image_3=\"icons/quote.png\" style=\"style-5\" enable_lazy_loading=\"yes\"][/testimonials]</div><div>[news title=\"Read Our Latest Updates\" subtitle=\"NEWS & BLOGS\" description=\"Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Come To Mind? Oftentimes.\" type=\"featured\" limit=\"3\" post_style=\"style-4\" enable_lazy_loading=\"yes\"][/news]</div>',1,NULL,'homepage',NULL,'published','2025-01-28 00:59:10','2025-01-28 00:59:10'),(5,'Business','<div>[hero-banner-slider title_1=\"Grow Your Business More Efficiently\" title_2=\"Grow Your Start Up Now\" subtitle_1=\"We Are Expert In This Field\" subtitle_2=\"We Are Gerow\" description_1=\"Agilos helps you to convert your data into a strategic asset and get top-notch business insights.\" description_2=\"Gerow helps you to convert your data into a strategic asset and get top-notch business insights.\" button_label_1=\"Our Services\" button_url_1=\"/services-one\" button_label_2=\"Contact Us\" button_url_2=\"/contact\" image_1=\"sliders/banner-bg.jpg\" background_image_1=\"backgrounds/banner-shape.png\" image_2=\"sliders/banner-bg02.jpg\" background_image_2=\"backgrounds/banner-shape.png\"][/hero-banner-slider]</div><div>[company-overview title=\"Changing The Way To Do Best Business Solutions\" subtitle=\"WHAT WE ARE DOING\" description=\"Revolutionizing the Business Landscape: A Journey Towards Unprecedented Success and Sustainable Growth Through Innovative Solutions and Visionary Leadership.\" image=\"general/about-img01.png\" background_image=\"backgrounds/about-bg.jpg\" background_image_1=\"backgrounds/about-img-shape01.png\" background_image_2=\"backgrounds/about-shape02.png\" quantity=\"2\" title_1=\"Growing Business\" description_1=\"Finance Helps You To Convert Into A Strategic Asset Get.\" title_2=\"Finance Investment\" description_2=\"Finance Helps You To Convert Into A Strategic Asset Get\" style=\"style-6\"][/company-overview]</div><div>[featured-service-categories category_ids=\"1,2,3\" style=\"style-5\"][/featured-service-categories]</div><div>[about-us-information title=\"Building Your Own Startup Has Been Simpler\" subtitle=\"Who We are\" description=\"Transforming the Business Landscape: Leading a New Era of Excellence, Innovation, and Sustainability in Solutions and Leadership for Unprecedented Success and Global Impact.\" button_label=\"Get Started With Us\" button_url=\"/contact\" quantity=\"6\" title_1=\"100% Better results\" title_2=\"Valuable Ideas\" title_3=\"Budget Friendly Theme\" title_4=\"Happy Customers\" title_5=\"Total revenue in 1 year\" data_5=\"+150,000\" title_6=\"Increase in sales\" data_6=\"90%\" sub_description=\"Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elita Florai Psum Dolor Sit Amet, Consecteture. Consecteture.Borem Ipsum Dolor Sit Amectetur Adipiscing.\" image=\"general/choose-bg.png\" youtube_url=\"https://www.youtube.com/watch?v=2h478iPhuEw\" button_play_video_icon=\"fa fa-play\" image_1=\"general/breadcrumb-bg.png\" background_image=\"backgrounds/finance-banner-bg.png\" background_image_1=\"backgrounds/about-shape02.png\" background_image_2=\"backgrounds/about-shape04.png\" style=\"style-8\"][/about-us-information]</div><div>[featured-services title=&quot;Spotlight Some Most &lt;br&gt; Important Features We Have&quot; subtitle=&quot;Our Dedicated Services&quot; description=&quot;Unveiling Our Remarkable Features: Shining a Spotlight on the Cornerstones That Define Our Distinctiveness and Excellence.&quot; service_ids=&quot;1,2,3,4&quot; background_image=&quot;backgrounds/services-bg.jpg&quot; style=&quot;style-4&quot;][/featured-services]</div><div>[site-statistics background_image=\"backgrounds/counter-bg.jpg\" background_image_1=\"backgrounds/counter-shape01.png\" background_image_2=\"backgrounds/counter-shape01.png\" quantity=\"4\" title_1=\"Success Rate\" data_1=\"95\" unit_1=\"%\" title_2=\"Complete Projects\" data_2=\"55\" unit_2=\"K\" title_3=\"Satisfied Clients\" data_3=\"25\" unit_3=\"K\" title_4=\"Trade In The World\" data_4=\"12\" unit_4=\"K\" style=\"style-4\"][/site-statistics]</div><br></br><br></br><br></br><div>[featured-projects title=\"Keep Your Business Safe & Ensure High Availability.\" subtitle=\"COMPLETE PROJECTS\" description=\"Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Come To Mind? Oftentimes.\" background_image=\"backgrounds/project-bg.jpg\" project_ids=\"1,2,3,4\" style=\"style-3\" enable_lazy_loading=\"yes\"][/featured-projects]</div><br></br><br></br><br></br><div>[featured-specialty title=\"Keep Your Business Safe & Ensure High Availability.\" subtitle=\"OUR SERVICE BENIFITS\" description=\"Ever Find Yourself Staring At Your Computer S Good Consulting Slogan To Come To Mind? Oftentimes.\" image=\"projects/4.png\" image_1=\"backgrounds/overview-img02.png\" background_image=\"backgrounds/faq-shape01.png\" background_image_1=\"backgrounds/faq-shape02.png\" background_image_2=\"backgrounds/banner-shape02.png\" background_color=\"#00194C\" quantity=\"3\" title_1=\"Interdum et malesuada fames ac ante ipsum\" description_1=\"Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Coind Yourself Sta Your Computer Screen A Good Consulting Slogan.\" title_2=\"Interdum et malesuada ante ipsum\" description_2=\"Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Coind Yourself Sta Your Computer Screen A Good Consulting Slogan.\" title_3=\"Ente ipsumerdum et malesuada fames\" description_3=\"Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Coind Yourself Sta Your Computer Screen A Good Consulting Slogan.\" style=\"style-2\"][/featured-specialty]</div><div>[contact-block title=\"Let’s Request a Schedule For Free Consultation\" hotline=\"1238989444\" subtitle=\"Call For More Info\" button_label=\"Contact Us\" button_url=\"/contact\" background_image=\"backgrounds/cta-bg02.png\" style=\"style-2\" enable_lazy_loading=\"yes\"][/contact-block]</div><div>[teams title=\"Meet Our Dedicated Team\" subtitle=\"SKILLED TEAM MEMBERS\" description=\"Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Come To Mind? Oftentimes.\" background_image=\"backgrounds/team-bg.png\" quantity=\"4\" team_id_1=\"1\" image_1=\"teams/5-1.png\" team_id_2=\"2\" image_2=\"teams/5-2.png\" team_id_3=\"3\" image_3=\"teams/5-3.png\" team_id_4=\"4\" image_4=\"teams/5-4.png\" style=\"style-4\" enable_lazy_loading=\"yes\"][/teams]</div><div>[testimonials  testimonial_ids=\"1,2,3,4\" image=\"general/testimonial-img01.png\" background_image=\"backgrounds/testimonial-bg.png\" background_image_1=\"icons/quote.png\" box_title=\"15K\" box_image=\"icons/rating.png\" box_description=\"Positive Review\" style=\"style-4\" enable_lazy_loading=\"yes\"][/testimonials]</div><div>[pricing title=\"We’ve offered the best pricing for you\" subtitle=\"FLEXIBLE PRICING PLAN\" description=\"Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Come To Mind? Oftentimes.\" package_ids=\"1,2,3\" background_image=\"backgrounds/pricing-shape.png\" style=\"style-3\"][/pricing]</div><div>[contact-form title=\"We Are Connected To Help Your Business!\" subtitle=\"GET IN TOUCH\" description=\"Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Come To Mind? Oftentimes.\" button_label=\"SUBMIT NOW\" background_image=\"backgrounds/contact-bg.jpg\" background_image_1=\"backgrounds/contact-shape.png\"][/contact-form]</div><div>[news title=\"Read Our Latest Updates\" subtitle=\"NEWS & BLOGS\" description=\"Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Come To Mind? Oftentimes.\" type=\"featured\" limit=\"3\" style=\"style-2\" post_style=\"style-5\" enable_lazy_loading=\"yes\"][/news]</div><div>[brands title=\"Trusted by 10,000+ companies around the world\" quantity=\"5\" name_1=\"Zelus\" image_1=\"brands/brand-img04.png\" link_1=\"https://zelus.com\" name_2=\"The bird\" image_2=\"brands/brand-img05.png\" link_2=\"https://thebird.com\" name_3=\"Nature Wave\" image_3=\"brands/brand-img03.png\" link_3=\"https://naturewave.com\" name_4=\"Start\" image_4=\"brands/brand-img01.png\" link_4=\"https://start.com\" name_5=\"Finance\" image_5=\"brands/brand-img02.png\" link_5=\"https://finance.com\" style=\"style-3\"][/brands]</div>',1,NULL,'homepage',NULL,'published','2025-01-28 00:59:10','2025-01-28 00:59:10'),(6,'About','<div>[about-us-information title=\"Innovative Business Solutions For Success Company\" subtitle=\"WHO WE ARE\" description=\"Morem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elita Florai Psum Dolor Sit Amet Consecteture Borem Ipsum Dolor Sitter Consectetur Adipiscing Elita Florai Psum.\" founded_year=\"2015\" company_description=\"Years Of Experience\" button_label=\"Contact Us\" button_url=\"/contact\" quantity=\"2\" title_1=\"Total Revenue\" data_1=\"152\" unit_1=\"K\" icon_1=\"flaticon-investment\" title_2=\"Increase In Sales\" data_2=\"95\" unit_2=\"%\" icon_2=\"flaticon-profit\" sub_description=\"Morem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elita Florai Psum Dolor Sit Amet, Consecteture. Consecteture.Borem Ipsum Dolor Sit Amectetur Adipiscing.\" image=\"galleries/6.png\" image_1=\"galleries/2.png\" background_image_1=\"backgrounds/about-shape01.png\" style=\"style-4\"][/about-us-information]</div><div>[featured-service-categories title=\"Amazing Features For Business Solutions\" subtitle=\"CORE FEATURES\" category_ids=\"1,2,3\" background_image=\"backgrounds/services-bg02.png\" background_image_1=\"backgrounds/features-shape02.png\" background_image_2=\"backgrounds/features-shape02.png\" style=\"style-4\"][/featured-service-categories]</div><div>[teams title=\"Dedicated Team Members\" subtitle=\"EXPERT PEOPLE\" description=\"Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Come To Mind? Oftentimes.\" quantity=\"4\" team_id_1=\"1\" image_1=\"teams/2-1.png\" team_id_2=\"2\" image_2=\"teams/2-2.png\" team_id_3=\"3\" image_3=\"teams/2-3.png\" team_id_4=\"4\" image_4=\"teams/2-4.png\" team_id_5=\"1\" team_id_6=\"1\" style=\"style-2\" enable_lazy_loading=\"yes\"][/teams]</div><div>[testimonials  testimonial_ids=\"1,2,3,4\" image=\"general/testimonial-img01.png\" background_image=\"backgrounds/testimonial-bg.png\" background_image_1=\"icons/quote.png\" box_title=\"15K\" box_image=\"icons/rating.png\" box_description=\"Positive Review\" style=\"style-4\" enable_lazy_loading=\"yes\"][/testimonials]</div><br></br><br></br><br></br><div>[brands quantity=\"5\" name_1=\"Zelus\" image_1=\"brands/brand-img04.png\" link_1=\"https://zelus.com\" name_2=\"The bird\" image_2=\"brands/brand-img05.png\" link_2=\"https://thebird.com\" name_3=\"Nature Wave\" image_3=\"brands/brand-img03.png\" link_3=\"https://naturewave.com\" name_4=\"Start\" image_4=\"brands/brand-img01.png\" link_4=\"https://start.com\" name_5=\"Finance\" image_5=\"brands/brand-img02.png\" link_5=\"https://finance.com\" style=\"style-1\"][/brands]</div><br></br><br></br><br></br>',1,NULL,'page-detail',NULL,'published','2025-01-28 00:59:10','2025-01-28 00:59:10'),(7,'About 2','<div>[company-overview title=\"We Have More Than 20+ Years Of Practical Finance Industries\" subtitle=\"GET TO KNOW MORE\" description=\"Morem Ipsum Dolor Sit Amet Consectetur Adipiscing Elita Florai Psum Dolor Sit Amet Consecteture Borem Ipsum Dolor Sitter Consectetur Adipiscing Elita Florai Rem Ipsum Dolor Sit Amet Consectetu.\" image=\"general/overview-img01.png\" image_1=\"backgrounds/inner-about-img04.png\" button_label=\"Our Services\" button_url=\"/services\" author_name=\"Mark Stranger\" author_bio=\"CEO, Gerow Finance\" author_avatar=\"general/about-author.png\" quantity=\"2\" title_1=\"Growing Business\" description_1=\"Finance Helps You To Convert Into A Strategic Asset Get.\" logo_1=\"flaticon-business-presentation\" title_2=\"Finance Investment\" description_2=\"Finance Helps You To Convert Into A Strategic Asset Get\" logo_2=\"flaticon-investment\" style=\"style-3\"][/company-overview]</div><div>[featured-specialty title=\"Keep Your Business Safe & Ensure High Availability.\" subtitle=\"WHAT SPECIALTY\" description=\"Ever Find Yourself Staring At Your Computer S Good Consulting Slogan To Come To Mind? Oftentimes.\" image=\"general/inner-choose-img.png\" background_color=\"#00194C\" quantity=\"3\" title_1=\"Interdum et malesuada fames ac ante ipsum\" description_1=\"Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Coind Yourself Sta Your Computer Screen A Good Consulting Slogan.\" title_2=\"Interdum et malesuada ante ipsum\" description_2=\"Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Coind Yourself Sta Your Computer Screen A Good Consulting Slogan.\" title_3=\"Ente ipsumerdum et malesuada fames\" description_3=\"Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Coind Yourself Sta Your Computer Screen A Good Consulting Slogan.\"][/featured-specialty]</div><div>[teams title=\"Meet Our Dedicated Team\" subtitle=\"SKILLED TEAM MEMBERS\" description=\"Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Come To Mind? Oftentimes.\" background_image=\"backgrounds/team-bg.png\" quantity=\"4\" team_id_1=\"1\" image_1=\"teams/5-1.png\" team_id_2=\"2\" image_2=\"teams/5-2.png\" team_id_3=\"3\" image_3=\"teams/5-3.png\" team_id_4=\"4\" image_4=\"teams/5-4.png\" style=\"style-4\" enable_lazy_loading=\"yes\"][/teams]</div><div>[testimonials  testimonial_ids=\"1,2,3,4\" image=\"general/testimonial-img.png\" background_image=\"backgrounds/testimonial-bg1.png\" style=\"style-2\" enable_lazy_loading=\"yes\"][/testimonials]</div><br></br><br></br><br></br><div>[brands quantity=\"5\" name_1=\"Zelus\" image_1=\"brands/brand-img04.png\" link_1=\"https://zelus.com\" name_2=\"The bird\" image_2=\"brands/brand-img05.png\" link_2=\"https://thebird.com\" name_3=\"Nature Wave\" image_3=\"brands/brand-img03.png\" link_3=\"https://naturewave.com\" name_4=\"Start\" image_4=\"brands/brand-img01.png\" link_4=\"https://start.com\" name_5=\"Finance\" image_5=\"brands/brand-img02.png\" link_5=\"https://finance.com\" style=\"style-1\"][/brands]</div><br></br><br></br><br></br>',1,NULL,'page-detail',NULL,'published','2025-01-28 00:59:10','2025-01-28 00:59:10'),(8,'About 3','<br></br><br></br><br></br><div>[about-us-information title=\"We are the next gen Business experience\" subtitle=\"GET TO KNOW US\" description=\"With Over 25 Years Of Experience, We Have Crafted Thousands Of Strategic Discovery Process That Enables Us To Peel Back Which Enable Us To Understand.\" quantity=\"2\" title_1=\"Business Growth\" description_1=\"Eiusmod Temporincididunt Ut Labore Magna Aliqua Quisery.\" icon_1=\"flaticon-profit\" title_2=\"Target Audience\" description_2=\"Eiusmod Temporincididunt Ut Labore Magna Aliqua Quisery.\" icon_2=\"flaticon-mission\" image=\"galleries/1.png\" image_1=\"backgrounds/consulting-about-img02.png\" background_image_1=\"backgrounds/mask-img.png\" background_image_2=\"backgrounds/consulting-about-shape01.png\" background_image_3=\"backgrounds/about-shape01.png\" background_image_4=\"backgrounds/consulting-about-shape03.png\" style=\"style-2\"][/about-us-information]</div><div>[contact-block title=\"Let’s Request a Schedule For Free Consultation\" hotline=\"1238989444\" subtitle=\"Call For More Info\" button_label=\"Contact Us\" button_url=\"/contact\" background_image=\"backgrounds/cta-bg03.png\" style=\"style-4\" enable_lazy_loading=\"yes\"][/contact-block]</div><div>[site-statistics title=\"Consulting is a law firm specializing in corporate finance work\" subtitle=\"TOP FEATURES\" description=\"Advice On Comprehensive Legal Solutions And Legal Planning On All Aspects Of Business, Including: Issues Under Company Law & Exchange Control Regulations\" quantity=\"4\" title_1=\"Best Awards\" icon_1=\"flaticon-trophy\" data_1=\"23\" unit_1=\"K\" title_2=\"Happy Clients\" icon_2=\"flaticon-rating\" data_2=\"223\" unit_2=\"K\" title_3=\"Projects Done\" icon_3=\"flaticon-folder-1\" data_3=\"98\" unit_3=\"K\" title_4=\"Expert People\" icon_4=\"flaticon-round-table\" data_4=\"22\" unit_4=\"K\" background_image=\"backgrounds/overview-shape.png\" style=\"style-3\"][/site-statistics]</div><div>[teams title=\"Dedicated Team Members\" subtitle=\"EXPERT PEOPLE\" description=\"Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Come To Mind? Oftentimes.\" quantity=\"4\" team_id_1=\"1\" image_1=\"teams/3-1.png\" team_id_2=\"2\" image_2=\"teams/3-2.png\" team_id_3=\"3\" image_3=\"teams/3-3.png\" team_id_4=\"4\" image_4=\"teams/3-4.png\" team_id_5=\"1\" team_id_6=\"1\" style=\"style-3\" enable_lazy_loading=\"yes\"][/teams]</div><div>[pricing title=\"We’ve offered the best pricing for you\" subtitle=\"FLEXIBLE PRICING PLAN\" description=\"Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Come To Mind? Oftentimes.\" package_ids=\"1,2,3\" background_image=\"backgrounds/pricing-shape.png\" style=\"style-2\"][/pricing]</div>',1,NULL,'page-detail',NULL,'published','2025-01-28 00:59:10','2025-01-28 00:59:10'),(9,'About 4','<div>[about-us-information title=\"We are the next gen Business experience\" subtitle=\"GET TO KNOW US\" description=\"With Over 25 Years Of Experience, We Have Crafted Thousands Of Strategic Discovery Process That Enables Us To Peel Back Which Enable Us To Understand. When An Unknown Printer Took A Galley Of Type And Scrambled It To Make A Type Specimen Book. It Has Survived Not Only Five Centurieswhen An Unknown Printer Took A Galley Of Type And Scrambled It To Make Specimen Book\" founded_year=\"2010\" company_description=\"Years Of Experience\" quantity=\"2\" title_1=\"Insured Customers\" icon_1=\"flaticon-family\" data_1=\"63\" unit_1=\"%\" title_2=\"Satisfied Award\" icon_2=\"flaticon-trophy\" data_2=\"95\" unit_2=\"%\" image=\"galleries/4.png\" image_1=\"general/consulting-banner-img03.png\" background_image_1=\"backgrounds/banner-shape02.png\" style=\"style-6\"][/about-us-information]</div><div>[company-overview title=\"Consulting Insurance firm specializing in This Field\" subtitle=\"TOP FEATURES\" description=\"Advice On Comprehensive Legal Solutions And Legal Planning On All Aspects Of Business, Including: Issues Under Company Law & Exchange Control Regulations\" background_image=\"backgrounds/pricing-shape.png\" quantity=\"3\" title_1=\"Child Insurance\" data_1=\"55\" title_2=\"Insurance Claim\" data_2=\"76\" title_3=\"Investment\" data_3=\"90\" style=\"style-4\"][/company-overview]</div><div>[teams title=\"Our Dedicated Team Members\" subtitle=\"EXPERT PEOPLE\" description=\"Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Come To Mind? Oftentimes.\" background_image=\"/backgrounds/team-shape.png\" quantity=\"4\" team_id_1=\"1\" image_1=\"teams/1-1.png\" team_id_2=\"2\" image_2=\"teams/1-2.png\" team_id_3=\"3\" image_3=\"teams/1-3.png\" team_id_4=\"4\" image_4=\"teams/1-4.png\" team_id_5=\"1\" team_id_6=\"1\" style=\"style-1\" enable_lazy_loading=\"yes\"][/teams]</div>',1,NULL,'page-detail',NULL,'published','2025-01-28 00:59:10','2025-01-28 00:59:10'),(10,'About 5','<div>[about-us-information title=\"Best Digital Solution Provider Agency\" subtitle=\"WHO WE ARE\" description=\"When An Unknown Printer Took A Galley Of Type And Scrambled It Ake A Type Specimen Book. When An Unknown Printer Took A Galley Of Type And Scrambled It Ake.\" button_label=\"Take Our Service\" button_url=\"/services\" quantity=\"3\" title_1=\"Digital Creative Agency\" title_2=\"Professional Problem Solutions\" title_3=\"Web Design & Development\" image=\"general/inner-about-img05.png\" image_1=\"backgrounds/about-shape07.png\" background_image_1=\"backgrounds/banner-shape02.png\" style=\"style-7\"][/about-us-information]</div><div>[company-overview title=\"Consulting Digital Agency specializing in This Field\" subtitle=\"EXPERTISE AREAS\" description=\"Advice On Comprehensive Legal Solutions And Legal Planning On All Aspects Of Business, Including Issues\" image=\"general/about-img.png\" background_image=\"backgrounds/about-shape08.png\" background_image_1=\"backgrounds/about-shape02.png\" quantity=\"3\" title_1=\"Child Insurance\" data_1=\"55\" title_2=\"Insurance Claim\" data_2=\"76\" title_3=\"Investment\" data_3=\"90\" style=\"style-5\"][/company-overview]</div><div>[contact-block title=\"Let’s Request a Schedule For Free Consultation\" hotline=\"1238989444\" subtitle=\"Call For More Info\" button_label=\"Contact Us\" button_url=\"/contact\" background_image=\"backgrounds/cta-bg03.png\" style=\"style-4\" enable_lazy_loading=\"yes\"][/contact-block]</div><br></br><br></br><br></br><div>[teams title=\"Experience Team Members\" subtitle=\"MEET OUR TEAM\" description=\"Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Come To Minddestmentor Area\" quantity=\"4\" team_id_1=\"1\" image_1=\"teams/4-1.png\" team_id_2=\"2\" image_2=\"teams/4-2.png\" team_id_3=\"3\" image_3=\"teams/4-3.png\" team_id_4=\"4\" image_4=\"teams/4-4.png\" team_id_5=\"1\" team_id_6=\"1\" style=\"style-5\" enable_lazy_loading=\"yes\"][/teams]</div><div>[contact-block title=\"Let’s Request A Schedule For Free Consultation\" hotline=\"1238989444\" subtitle=\"Hotline 24/7\" button_label=\"Request a Schedule\" button_url=\"/contact\" background_image=\"backgrounds/request-bg.png\" background_image_1=\"backgrounds/features-shape02.png\" style=\"style-5\" enable_lazy_loading=\"yes\"][/contact-block]</div>',1,NULL,'page-detail',NULL,'published','2025-01-28 00:59:10','2025-01-28 00:59:10'),(11,'Services','<div>[services-list title=\"Spotlight some most important features We have\" description=\"Our comprehensive suite of services includes expert Business Analysis, Tax Strategy, and Financial Advice. We partner with you to optimize your financial decisions, ensuring long-term success and prosperity for your business and personal finances.\" background_image=\"backgrounds/inner-services-bg.jpg\" background_color=\"#E0F0F6\" service_ids=\"1,2,3,4,5,6\" style=\"style-1\"][/services-list]</div>',1,NULL,'page-detail',NULL,'published','2025-01-28 00:59:10','2025-01-28 00:59:10'),(12,'Services 2','<div>[services-list title=\"We can inspire and Offer Different Services\" badge=\"WHAT WE DO FOR YOU\" description=\"Our comprehensive suite of services includes expert Business Analysis, Tax Strategy, and Financial Advice. We partner with you to optimize your financial decisions, ensuring long-term success and prosperity for your business and personal finances.\" background_image=\"backgrounds/inner-services-bg.jpg\" background_color=\"#E0F0F6\" service_ids=\"1,2,4,5,6,11,12,13\" shape_image=\"backgrounds/services-item-shape.png\" style=\"style-2\"][/services-list]</div><br></br><br></br><br></br><div>[brands quantity=\"5\" name_1=\"Zelus\" image_1=\"brands/brand-img04.png\" link_1=\"https://zelus.com\" name_2=\"The bird\" image_2=\"brands/brand-img05.png\" link_2=\"https://thebird.com\" name_3=\"Nature Wave\" image_3=\"brands/brand-img03.png\" link_3=\"https://naturewave.com\" name_4=\"Start\" image_4=\"brands/brand-img01.png\" link_4=\"https://start.com\" name_5=\"Finance\" image_5=\"brands/brand-img02.png\" link_5=\"https://finance.com\" style=\"style-1\"][/brands]</div><br></br><br></br><br></br>',1,NULL,'page-detail',NULL,'published','2025-01-28 00:59:10','2025-01-28 00:59:10'),(13,'Services 3','<div>[services-list title=\"The features that make our Service unique\" badge=\"WHAT WE DO FOR YOU\" description=\" Our comprehensive suite of services includes expert Business Analysis, Tax Strategy, and Financial Advice. We partner with you to optimize your financial decisions, ensuring long-term success and prosperity for your business and personal finances.\" background_color=\"#F8FAFF\" service_ids=\"1,2,4,5,6,7,8,9\" style=\"style-3\"][/services-list]</div><div>[contact-block title=\"Let’s Request a Schedule For Free Consultation\" hotline=\"1238989444\" subtitle=\"Call For More Info\" button_label=\"Contact Us\" button_url=\"/contact\" background_image=\"backgrounds/cta-bg02.png\" style=\"style-2\" enable_lazy_loading=\"yes\"][/contact-block]</div><br></br><br></br><br></br><div>[brands quantity=\"5\" name_1=\"Zelus\" image_1=\"brands/brand-img04.png\" link_1=\"https://zelus.com\" name_2=\"The bird\" image_2=\"brands/brand-img05.png\" link_2=\"https://thebird.com\" name_3=\"Nature Wave\" image_3=\"brands/brand-img03.png\" link_3=\"https://naturewave.com\" name_4=\"Start\" image_4=\"brands/brand-img01.png\" link_4=\"https://start.com\" name_5=\"Finance\" image_5=\"brands/brand-img02.png\" link_5=\"https://finance.com\" style=\"style-1\"][/brands]</div><br></br><br></br><br></br>',1,NULL,'page-detail',NULL,'published','2025-01-28 00:59:10','2025-01-28 00:59:10'),(14,'Services 4','<div>[services-list title=\"We Make Better Insurance For Everyone\" badge=\"OUR EXPERTISE AREAS\" button_label=\"See All Service\" link=\"/services\" background_image=\"backgrounds/about-shape03.png\" background_color=\"#E0F0F6\" service_ids=\"1,2,3,4,5,6,8,9\" style=\"style-4\"][/services-list]</div><br></br><br></br><br></br><div>[brands quantity=\"5\" name_1=\"Zelus\" image_1=\"brands/brand-img04.png\" link_1=\"https://zelus.com\" name_2=\"The bird\" image_2=\"brands/brand-img05.png\" link_2=\"https://thebird.com\" name_3=\"Nature Wave\" image_3=\"brands/brand-img03.png\" link_3=\"https://naturewave.com\" name_4=\"Start\" image_4=\"brands/brand-img01.png\" link_4=\"https://start.com\" name_5=\"Finance\" image_5=\"brands/brand-img02.png\" link_5=\"https://finance.com\" style=\"style-1\"][/brands]</div><br></br><br></br><br></br>',1,NULL,'page-detail',NULL,'published','2025-01-28 00:59:10','2025-01-28 00:59:10'),(15,'Services 5','<div>[services-list title=\"We Make Better Insurance For Everyone\" badge=\"OUR EXPERTISE AREAS\" description=\" Our comprehensive suite of services includes expert Business Analysis, Tax Strategy, and Financial Advice. We partner with you to optimize your financial decisions, ensuring long-term success and prosperity for your business and personal finances.\" button_label=\"See All Service\" link=\"/services\" limit=\"6\" service_ids=\"1,2,4,6,8,9\" style=\"style-5\"][/services-list]</div><br></br><br></br><br></br><div>[brands quantity=\"5\" name_1=\"Zelus\" image_1=\"brands/brand-img04.png\" link_1=\"https://zelus.com\" name_2=\"The bird\" image_2=\"brands/brand-img05.png\" link_2=\"https://thebird.com\" name_3=\"Nature Wave\" image_3=\"brands/brand-img03.png\" link_3=\"https://naturewave.com\" name_4=\"Start\" image_4=\"brands/brand-img01.png\" link_4=\"https://start.com\" name_5=\"Finance\" image_5=\"brands/brand-img02.png\" link_5=\"https://finance.com\" style=\"style-1\"][/brands]</div><br></br><br></br><br></br>',1,NULL,'page-detail',NULL,'published','2025-01-28 00:59:10','2025-01-28 00:59:10'),(16,'Cookies','<section class=\"section\">\n    <div class=\"container\">\n        <div class=\"content-detail\">\n            <h3 class=\"color-brand-2\">EU Cookie Consent</h3>\n            <p class=\"font-md color-grey-900\">To use this website we are using Cookies and collecting some Data. To be compliant with the EU GDPR we give you to choose if you allow us to use certain Cookies and to collect some Data. .</p>\n            <p>There are two primary modes of sea freight transportation: Full Container Load (FCL) and Less than Container Load (LCL). FCL is used when the shipment is large enough to fill an entire container. On the other hand, LCL is used when the shipment does not require a full container. In this case, the goods are combined with other shipments to fill a container. Both modes have their advantages and disadvantages.</p>\n            <p>There are two primary modes of sea freight transportation: Full Container Load (FCL) and Less than Container Load (LCL). FCL is used when the shipment is large enough to fill an entire container. On the other hand, LCL is used when the shipment does not require a full container. In this case, the goods are combined with other shipments to fill a container. Both modes have their advantages and disadvantages.</p>\n            <h3>Essential Data</h3>\n            <div class=\"row align-items-center\">\n                <div class=\"col-lg-12\">\n                    <p>The Essential Data is needed to run the Site you are visiting technically. You can not deactivate them.</p>\n                    <p>Session Cookie: PHP uses a Cookie to identify user sessions. Without this Cookie the Website is not working.</p>\n                    <p>XSRF-Token Cookie: Laravel automatically generates a CSRF \"token\" for each active user session managed by the application. This token is used to verify that the authenticated user is the one actually making the requests to the application.</p>\n                </div>\n            </div>\n        </div>\n    </div>\n</section>\n',1,NULL,NULL,NULL,'published','2025-01-28 00:59:10','2025-01-28 00:59:10'),(17,'Terms of service','<section class=\"section\">\n    <div class=\"container\">\n        <div class=\"content-detail\">\n            <h3 class=\"color-brand-2\">EU Cookie Consent</h3>\n            <p class=\"font-md color-grey-900\">To use this website we are using Cookies and collecting some Data. To be compliant with the EU GDPR we give you to choose if you allow us to use certain Cookies and to collect some Data. .</p>\n            <p>There are two primary modes of sea freight transportation: Full Container Load (FCL) and Less than Container Load (LCL). FCL is used when the shipment is large enough to fill an entire container. On the other hand, LCL is used when the shipment does not require a full container. In this case, the goods are combined with other shipments to fill a container. Both modes have their advantages and disadvantages.</p>\n            <p>There are two primary modes of sea freight transportation: Full Container Load (FCL) and Less than Container Load (LCL). FCL is used when the shipment is large enough to fill an entire container. On the other hand, LCL is used when the shipment does not require a full container. In this case, the goods are combined with other shipments to fill a container. Both modes have their advantages and disadvantages.</p>\n            <h3>Essential Data</h3>\n            <div class=\"row align-items-center\">\n                <div class=\"col-lg-12\">\n                    <p>The Essential Data is needed to run the Site you are visiting technically. You can not deactivate them.</p>\n                    <p>Session Cookie: PHP uses a Cookie to identify user sessions. Without this Cookie the Website is not working.</p>\n                    <p>XSRF-Token Cookie: Laravel automatically generates a CSRF \"token\" for each active user session managed by the application. This token is used to verify that the authenticated user is the one actually making the requests to the application.</p>\n                </div>\n            </div>\n        </div>\n    </div>\n</section>\n',1,NULL,NULL,NULL,'published','2025-01-28 00:59:10','2025-01-28 00:59:10'),(18,'Privacy Policy','<section class=\"section\">\n    <div class=\"container\">\n        <div class=\"content-detail\">\n            <h3 class=\"color-brand-2\">EU Cookie Consent</h3>\n            <p class=\"font-md color-grey-900\">To use this website we are using Cookies and collecting some Data. To be compliant with the EU GDPR we give you to choose if you allow us to use certain Cookies and to collect some Data. .</p>\n            <p>There are two primary modes of sea freight transportation: Full Container Load (FCL) and Less than Container Load (LCL). FCL is used when the shipment is large enough to fill an entire container. On the other hand, LCL is used when the shipment does not require a full container. In this case, the goods are combined with other shipments to fill a container. Both modes have their advantages and disadvantages.</p>\n            <p>There are two primary modes of sea freight transportation: Full Container Load (FCL) and Less than Container Load (LCL). FCL is used when the shipment is large enough to fill an entire container. On the other hand, LCL is used when the shipment does not require a full container. In this case, the goods are combined with other shipments to fill a container. Both modes have their advantages and disadvantages.</p>\n            <h3>Essential Data</h3>\n            <div class=\"row align-items-center\">\n                <div class=\"col-lg-12\">\n                    <p>The Essential Data is needed to run the Site you are visiting technically. You can not deactivate them.</p>\n                    <p>Session Cookie: PHP uses a Cookie to identify user sessions. Without this Cookie the Website is not working.</p>\n                    <p>XSRF-Token Cookie: Laravel automatically generates a CSRF \"token\" for each active user session managed by the application. This token is used to verify that the authenticated user is the one actually making the requests to the application.</p>\n                </div>\n            </div>\n        </div>\n    </div>\n</section>\n',1,NULL,NULL,NULL,'published','2025-01-28 00:59:10','2025-01-28 00:59:10'),(19,'Blog','',1,NULL,'blog-sidebar',NULL,'published','2025-01-28 00:59:10','2025-01-28 00:59:10'),(20,'Contact','<div>[branch-offices title=&quot;Our Office Address&quot; image=&quot;general/contact-img.jpg&quot; quantity=&quot;2&quot; title_1=&quot;USA Office&quot; address_1=&quot;100 Wilshire Blvd, Suite 700 Santa&lt;br&gt;Monica, CA 90401, USA&quot; phone_1=&quot;+1 (310) 620-8565&quot; email_1=&quot;info@gmail.com&quot; title_2=&quot;Australia Office&quot; address_2=&quot;100 Wilshire Blvd, Suite 700 Santa&lt;br&gt;Monica, CA 90401, USA&quot; phone_2=&quot;+1 (310) 620-8565&quot; email_2=&quot;info@gmail.com&quot;][/branch-offices]</div><div>[contact-form title=\"We Are Connected To Help Your Business!\" subtitle=\"GET IN TOUCH\" description=\"Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Come To Mind? Oftentimes.\" button_label=\"SUBMIT NOW\" background_image=\"backgrounds/contact-bg.jpg\" background_image_1=\"backgrounds/contact-shape.png\"][/contact-form]</div><div>[google-map address=\"Envato Level 3/551 Swanston St, Carlton VIC 3053, Australia\"][/google-map]</div>',1,NULL,'page-detail',NULL,'published','2025-01-28 00:59:10','2025-01-28 00:59:10'),(21,'Company','<div>[about-us-information title=\" 25 Years Of Experience In This Finance Advisory Company\" subtitle=\"GET TO KNOW US\" description=\"Morem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elita Florai Psum Dolor Sit Amet, Consecteture.Borem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elita Florai Psum.\" founded_year=\"1993\" company_description=\"Of Experience in This Finance Advisory Company.\" quantity=\"4\" title_1=\"100% Better Results\" title_2=\"Suspe Ndisse Suscipit Sagittis\" title_3=\"Promis Specific TimelineI Guarantee\" title_4=\"Review Credit Reports\" sub_description=\"Morem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elita Florai Psum Dolor Sit Amet, Consecteture\" author_name=\"Mark Stranger,CEO, Gerow Finance\" author_bio=\"CEO, Gerow Finance\" author_avatar=\"general/about-author.png\" author_signature=\"general/signature.png\" image=\"general/about-img01.png\" image_1=\"general/about-img02.png\" background_image_1=\"backgrounds/about-shape01.png\" background_image_2=\"backgrounds/about-shape02.png\" background_image_3=\"backgrounds/about-shape03.png\"][/about-us-information]</div><div>[company-overview title=\"We Prepare An Effective Strategy For Companies\" subtitle=\"COMPANY OVERVIEW\" description=\"Morem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elita Florai Psum Dolor Sit Amet, Consecteture.\" image=\"galleries/3.png\" image_1=\"backgrounds/overview-img04.png\" background_image=\"backgrounds/mask-img02.png\" background_image_1=\"backgrounds/overview-shape01.png\" background_image_2=\"backgrounds/overview-shape02.png\" quantity=\"3\" title_1=\"Consulting\" data_1=\"85\" title_2=\"Investment\" data_2=\"76\" title_3=\"Investment\" data_3=\"90\" style=\"style-2\"][/company-overview]</div>',1,NULL,NULL,NULL,'published','2025-01-28 00:59:10','2025-01-28 00:59:10'),(22,'Case Studies','<div>[featured-services title=\"We can inspire and Offer Different Services\" subtitle=\"WHAT WE DO FOR YOU\" service_ids=\"1,2,3,4\" button_label=\"See All Services\" button_url=\"/services\" background_image=\"backgrounds/about-shape03.png\" style=\"style-3\"][/featured-services]</div>',1,NULL,'page-detail',NULL,'published','2025-01-28 00:59:10','2025-01-28 00:59:10'),(23,'How It Work','<div>[about-us-information title=\"Best Digital Solution Provider Agency\" subtitle=\"WHO WE ARE\" description=\"When An Unknown Printer Took A Galley Of Type And Scrambled It Ake A Type Specimen Book. When An Unknown Printer Took A Galley Of Type And Scrambled It Ake.\" button_label=\"Take Our Service\" button_url=\"/services\" quantity=\"3\" title_1=\"Digital Creative Agency\" title_2=\"Professional Problem Solutions\" title_3=\"Web Design & Development\" image=\"general/inner-about-img05.png\" image_1=\"backgrounds/about-shape07.png\" background_image_1=\"backgrounds/banner-shape02.png\" style=\"style-7\"][/about-us-information]</div><br></br><br></br>',1,NULL,'page-detail',NULL,'published','2025-01-28 00:59:10','2025-01-28 00:59:10'),(24,'Partners','<div>[about-us-information title=\"We are the next gen Business experience\" subtitle=\"GET TO KNOW US\" description=\"With Over 25 Years Of Experience, We Have Crafted Thousands Of Strategic Discovery Process That Enables Us To Peel Back Which Enable Us To Understand.\" quantity=\"2\" title_1=\"Business Growth\" description_1=\"Eiusmod Temporincididunt Ut Labore Magna Aliqua Quisery.\" icon_1=\"flaticon-profit\" title_2=\"Target Audience\" description_2=\"Eiusmod Temporincididunt Ut Labore Magna Aliqua Quisery.\" icon_2=\"flaticon-mission\" image=\"galleries/1.png\" image_1=\"backgrounds/consulting-about-img02.png\" background_image_1=\"backgrounds/mask-img.png\" background_image_2=\"backgrounds/consulting-about-shape01.png\" background_image_3=\"backgrounds/about-shape01.png\" background_image_4=\"backgrounds/consulting-about-shape03.png\" style=\"style-2\"][/about-us-information]</div>',1,NULL,NULL,NULL,'published','2025-01-28 00:59:10','2025-01-28 00:59:10'),(25,'Pricing','<div>[pricing title=\"We’ve offered the best pricing for you\" subtitle=\"FLEXIBLE PRICING PLAN\" description=\"Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Come To Mind? Oftentimes.\" package_ids=\"1,2,3\" background_image=\"backgrounds/pricing-shape.png\"][/pricing]</div>',1,NULL,'page-detail',NULL,'published','2025-01-28 00:59:10','2025-01-28 00:59:10'),(26,'Testimonials','<div>[testimonials testimonial_ids=\"1,2,3,4\" image=\"general/testimonial-img.png\" background_image=\"backgrounds/testimonial-bg1.png\" style=\"style-2\" enable_lazy_loading=\"yes\"][/testimonials]</div>',1,NULL,NULL,NULL,'published','2025-01-28 00:59:10','2025-01-28 00:59:10'),(27,'Projects','<div>[featured-projects style=\"style-1\" project_ids=\"1,2,3,4,5,6,7,8,9\" enable_lazy_loading=\"yes\"][/featured-projects]</div>',1,NULL,NULL,NULL,'published','2025-01-28 00:59:10','2025-01-28 00:59:10'),(28,'FAQs','<div>[faqs category_ids=\"1,2,3\"][/faqs]</div><div>[contact-form title=\"We Are Connected To Help Your Business!\" subtitle=\"GET IN TOUCH\" description=\"Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Come To Mind? Oftentimes.\" button_label=\"SUBMIT NOW\" background_image=\"backgrounds/contact-bg.jpg\" background_image_1=\"backgrounds/contact-shape.png\"][/contact-form]</div>',1,NULL,'page-detail',NULL,'published','2025-01-28 00:59:10','2025-01-28 00:59:10'),(29,'Coming Soon','[coming-soon title=\"Get Notified When We Launch\" countdown_time=\"2025-08-16\" address=\" 58 Street Commercial Road Fratton, Australia\" hotline=\"+123456789\" business_hours=\"Mon – Sat: 8 am – 5 pm, Sunday: CLOSED\" show_social_links=\"0,1\" image=\"general/contact-img.jpg\"][/coming-soon]',1,NULL,'coming-soon',NULL,'published','2025-01-28 00:59:11','2025-01-28 00:59:11');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages_translations`
--

DROP TABLE IF EXISTS `pages_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages_translations` (
  `lang_code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pages_id` bigint unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`lang_code`,`pages_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages_translations`
--

LOCK TABLES `pages_translations` WRITE;
/*!40000 ALTER TABLE `pages_translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `pages_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pf_custom_field_options`
--

DROP TABLE IF EXISTS `pf_custom_field_options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pf_custom_field_options` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `custom_field_id` bigint unsigned NOT NULL,
  `label` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int NOT NULL DEFAULT '999',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pf_custom_field_options_custom_field_id_index` (`custom_field_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pf_custom_field_options`
--

LOCK TABLES `pf_custom_field_options` WRITE;
/*!40000 ALTER TABLE `pf_custom_field_options` DISABLE KEYS */;
INSERT INTO `pf_custom_field_options` VALUES (1,1,'Home','Home',999,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(2,1,'Vehicles','Vehicles',999,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(3,1,'Health','Health',999,'2025-01-28 00:59:14','2025-01-28 00:59:14'),(4,1,'Life','Life',999,'2025-01-28 00:59:14','2025-01-28 00:59:14');
/*!40000 ALTER TABLE `pf_custom_field_options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pf_custom_field_options_translations`
--

DROP TABLE IF EXISTS `pf_custom_field_options_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pf_custom_field_options_translations` (
  `lang_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pf_custom_field_options_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`lang_code`,`pf_custom_field_options_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pf_custom_field_options_translations`
--

LOCK TABLES `pf_custom_field_options_translations` WRITE;
/*!40000 ALTER TABLE `pf_custom_field_options_translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `pf_custom_field_options_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pf_custom_fields`
--

DROP TABLE IF EXISTS `pf_custom_fields`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pf_custom_fields` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `author_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `placeholder` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `type` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int NOT NULL DEFAULT '999',
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pf_custom_fields_author_type_author_id_index` (`author_type`,`author_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pf_custom_fields`
--

LOCK TABLES `pf_custom_fields` WRITE;
/*!40000 ALTER TABLE `pf_custom_fields` DISABLE KEYS */;
INSERT INTO `pf_custom_fields` VALUES (1,'Botble\\ACL\\Models\\User',1,'Type',NULL,1,'dropdown',999,'published','2025-01-28 00:59:14','2025-01-28 00:59:14'),(2,'Botble\\ACL\\Models\\User',1,'Price','Enter price',1,'number',999,'published','2025-01-28 00:59:14','2025-01-28 00:59:14');
/*!40000 ALTER TABLE `pf_custom_fields` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pf_custom_fields_translations`
--

DROP TABLE IF EXISTS `pf_custom_fields_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pf_custom_fields_translations` (
  `lang_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `placeholder` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pf_custom_fields_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`lang_code`,`pf_custom_fields_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pf_custom_fields_translations`
--

LOCK TABLES `pf_custom_fields_translations` WRITE;
/*!40000 ALTER TABLE `pf_custom_fields_translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `pf_custom_fields_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pf_packages`
--

DROP TABLE IF EXISTS `pf_packages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pf_packages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `annual_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'monthly',
  `features` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `is_popular` tinyint(1) NOT NULL DEFAULT '0',
  `action_label` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `order` tinyint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pf_packages`
--

LOCK TABLES `pf_packages` WRITE;
/*!40000 ALTER TABLE `pf_packages` DISABLE KEYS */;
INSERT INTO `pf_packages` VALUES (1,'Basic Plan','Advanced features for pros who need more customization.','<h4>Basic Plan</h4>\n<p>Our Basic Plan is designed for startups and small businesses looking to establish a strong foundation. With this plan, you\'ll get:</p>\n<ul>\n    <li>Essential Tools: Access to fundamental business tools and resources.</li>\n    <li>Cost-Effective: Affordable pricing tailored to smaller budgets.</li>\n    <li>24/7 Support: Assistance whenever you need it to kickstart your journey.</li>\n    <li>Scalability: Option to upgrade as your business grows.</li>\n</ul>\n<p>The Basic Plan is the perfect choice for those taking their first steps in the business world.</p>\n<h4>Team Plan</h4>\n<p>Our Team Plan is ideal for growing businesses that require collaboration and efficiency. With this plan, you\'ll enjoy:</p>\n<ul>\n    <li>Collaborative Tools: Enhanced features for seamless team collaboration.</li>\n    <li>Customization: Tailor the plan to fit your team\'s specific needs.</li>\n    <li>Dedicated Support: Priority assistance to keep your team productive.</li>\n    <li>Scalability: Flexibility to accommodate expanding teams.</li>\n</ul>\n<p>Choose the Team Plan to empower your growing business with the tools it needs to succeed.</p>\n<h4>Enterprise Plan</h4>\n<p>Our Enterprise Plan is designed for established businesses seeking advanced solutions and scalability. With this plan, you\'ll receive:</p>\n<ul>\n    <li>Advanced Features: Comprehensive tools for large-scale operations.</li>\n    <li>Tailored Solutions: Customized to match your unique business requirements.</li>\n    <li>Priority Support: Rapid response and support for mission-critical operations.</li>\n    <li>Enterprise-Grade Security: Robust security measures to protect your data.</li>\n</ul>\n<p>The Enterprise Plan is your pathway to taking your business to the next level with confidence.</p>\n','$19','$119','monthly','+ 100 User Activities\n+ Limit Access\n+ No Hidden Charge\n+ 01 Time Updates\n+ Figma Source File\n+ Many More Facilities','published',0,'Get The Plan Now','/contact','2025-01-28 00:59:14','2025-01-28 00:59:14',0),(2,'Team Plan','All the basics for businesses that are just getting started.','<h4>Basic Plan</h4>\n<p>Our Basic Plan is designed for startups and small businesses looking to establish a strong foundation. With this plan, you\'ll get:</p>\n<ul>\n    <li>Essential Tools: Access to fundamental business tools and resources.</li>\n    <li>Cost-Effective: Affordable pricing tailored to smaller budgets.</li>\n    <li>24/7 Support: Assistance whenever you need it to kickstart your journey.</li>\n    <li>Scalability: Option to upgrade as your business grows.</li>\n</ul>\n<p>The Basic Plan is the perfect choice for those taking their first steps in the business world.</p>\n<h4>Team Plan</h4>\n<p>Our Team Plan is ideal for growing businesses that require collaboration and efficiency. With this plan, you\'ll enjoy:</p>\n<ul>\n    <li>Collaborative Tools: Enhanced features for seamless team collaboration.</li>\n    <li>Customization: Tailor the plan to fit your team\'s specific needs.</li>\n    <li>Dedicated Support: Priority assistance to keep your team productive.</li>\n    <li>Scalability: Flexibility to accommodate expanding teams.</li>\n</ul>\n<p>Choose the Team Plan to empower your growing business with the tools it needs to succeed.</p>\n<h4>Enterprise Plan</h4>\n<p>Our Enterprise Plan is designed for established businesses seeking advanced solutions and scalability. With this plan, you\'ll receive:</p>\n<ul>\n    <li>Advanced Features: Comprehensive tools for large-scale operations.</li>\n    <li>Tailored Solutions: Customized to match your unique business requirements.</li>\n    <li>Priority Support: Rapid response and support for mission-critical operations.</li>\n    <li>Enterprise-Grade Security: Robust security measures to protect your data.</li>\n</ul>\n<p>The Enterprise Plan is your pathway to taking your business to the next level with confidence.</p>\n','$49','$499','monthly','+ 1000 User Activities\n+ Unlimited Access\n+ No Hidden Charge\n+ 03 Time Updates\n+ Figma Source File\n+ Many More Facilities','published',1,'Get The Plan Now','/contact','2025-01-28 00:59:14','2025-01-28 00:59:14',0),(3,'Enterprise Plan','Advanced features for pros who need more customization.','<h4>Basic Plan</h4>\n<p>Our Basic Plan is designed for startups and small businesses looking to establish a strong foundation. With this plan, you\'ll get:</p>\n<ul>\n    <li>Essential Tools: Access to fundamental business tools and resources.</li>\n    <li>Cost-Effective: Affordable pricing tailored to smaller budgets.</li>\n    <li>24/7 Support: Assistance whenever you need it to kickstart your journey.</li>\n    <li>Scalability: Option to upgrade as your business grows.</li>\n</ul>\n<p>The Basic Plan is the perfect choice for those taking their first steps in the business world.</p>\n<h4>Team Plan</h4>\n<p>Our Team Plan is ideal for growing businesses that require collaboration and efficiency. With this plan, you\'ll enjoy:</p>\n<ul>\n    <li>Collaborative Tools: Enhanced features for seamless team collaboration.</li>\n    <li>Customization: Tailor the plan to fit your team\'s specific needs.</li>\n    <li>Dedicated Support: Priority assistance to keep your team productive.</li>\n    <li>Scalability: Flexibility to accommodate expanding teams.</li>\n</ul>\n<p>Choose the Team Plan to empower your growing business with the tools it needs to succeed.</p>\n<h4>Enterprise Plan</h4>\n<p>Our Enterprise Plan is designed for established businesses seeking advanced solutions and scalability. With this plan, you\'ll receive:</p>\n<ul>\n    <li>Advanced Features: Comprehensive tools for large-scale operations.</li>\n    <li>Tailored Solutions: Customized to match your unique business requirements.</li>\n    <li>Priority Support: Rapid response and support for mission-critical operations.</li>\n    <li>Enterprise-Grade Security: Robust security measures to protect your data.</li>\n</ul>\n<p>The Enterprise Plan is your pathway to taking your business to the next level with confidence.</p>\n','$99','$999','monthly','+ 5000 User Activities\n+ Unlimited Access\n+ No Hidden Charge\n+ 10 Time Updates\n+ Figma Source File\n+ Many More Facilities','published',0,'Get The Plan Now','/contact','2025-01-28 00:59:14','2025-01-28 00:59:14',0);
/*!40000 ALTER TABLE `pf_packages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pf_packages_translations`
--

DROP TABLE IF EXISTS `pf_packages_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pf_packages_translations` (
  `lang_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pf_packages_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `annual_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `features` text COLLATE utf8mb4_unicode_ci,
  `action_label` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`lang_code`,`pf_packages_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pf_packages_translations`
--

LOCK TABLES `pf_packages_translations` WRITE;
/*!40000 ALTER TABLE `pf_packages_translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `pf_packages_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pf_projects`
--

DROP TABLE IF EXISTS `pf_projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pf_projects` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL DEFAULT '0',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` text COLLATE utf8mb4_unicode_ci,
  `views` int NOT NULL DEFAULT '0',
  `status` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `order` tinyint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pf_projects`
--

LOCK TABLES `pf_projects` WRITE;
/*!40000 ALTER TABLE `pf_projects` DISABLE KEYS */;
INSERT INTO `pf_projects` VALUES (1,'Innovation Hub: Navigating the Future','Gain invaluable insights into strategic business planning and decision-making through our comprehensive program. Unlock the power of data-driven strategies for sustainable growth.','<div class=\"project-details-content\">\n    <div class=\"pd-inner-wrap\">\n        <div class=\"row align-items-center\">\n            <div class=\"col-41\">\n                <div class=\"content\">\n                    <h3 class=\"title-two\">Raise capital faster <br> negotiate on your own terms</h3>\n                    <p class=\"info-one\">when an unknown printer took a galley offer typey anddey scrambled make a type specimen bookhas survived not only five centuries but also.</p>\n                    <ul class=\"list-wrap\">\n                        <li>\n                            <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"1em\" viewBox=\"0 0 512 512\">\n                                <path fill=\"currentColor\" d=\"M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z\"/>\n                            </svg>\n                            100% Better results\n                        </li>\n                        <li>\n                            <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"1em\" viewBox=\"0 0 512 512\">\n                                <path fill=\"currentColor\" d=\"M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z\"/>\n                            </svg>\n                            Valuable Ideas\n                        </li>\n                        <li>\n                            <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"1em\" viewBox=\"0 0 512 512\">\n                                <path fill=\"currentColor\" d=\"M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z\"/>\n                            </svg>\n                            Budget Friendly Theme\n                        </li>\n                        <li>\n                            <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"1em\" viewBox=\"0 0 512 512\">\n                                <path fill=\"currentColor\" d=\"M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z\"/>\n                            </svg>\n                            Happy Customers\n                        </li>\n                    </ul>\n                    <p class=\"info-two\">when an unknown printer took a galley of type and  aweratr scrambled it to make a type specimen bookhas a not only five centuries, but also the leap into electronic typesetting, remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p>\n                </div>\n            </div>\n            <div class=\"col-59\">\n                <div class=\"thumb\">\n                    <img src=\"http://gerow.test/storage/services/5.jpg\" alt=\"\">\n                    <a href=\"https://www.youtube.com/watch?v=j4dPPWKsxFs\" class=\"play-btn popup-video\"><i class=\"fas fa-play\"></i></a>\n                </div>\n            </div>\n        </div>\n    </div>\n</div>\n','Paris','Grace Williams',0,'projects/1.png',NULL,0,'published','2025-01-28 00:59:14','2025-01-28 00:59:14','Dr. Max Borer','2002-06-06',0),(2,'Leadership Excellence Initiative','Join us at the Innovation Hub, where we explore cutting-edge technologies and trends shaping the future of business. Discover innovative solutions and stay ahead of the curve.','<div class=\"project-details-content\">\n    <div class=\"pd-inner-wrap\">\n        <div class=\"row align-items-center\">\n            <div class=\"col-41\">\n                <div class=\"content\">\n                    <h3 class=\"title-two\">Raise capital faster <br> negotiate on your own terms</h3>\n                    <p class=\"info-one\">when an unknown printer took a galley offer typey anddey scrambled make a type specimen bookhas survived not only five centuries but also.</p>\n                    <ul class=\"list-wrap\">\n                        <li>\n                            <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"1em\" viewBox=\"0 0 512 512\">\n                                <path fill=\"currentColor\" d=\"M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z\"/>\n                            </svg>\n                            100% Better results\n                        </li>\n                        <li>\n                            <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"1em\" viewBox=\"0 0 512 512\">\n                                <path fill=\"currentColor\" d=\"M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z\"/>\n                            </svg>\n                            Valuable Ideas\n                        </li>\n                        <li>\n                            <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"1em\" viewBox=\"0 0 512 512\">\n                                <path fill=\"currentColor\" d=\"M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z\"/>\n                            </svg>\n                            Budget Friendly Theme\n                        </li>\n                        <li>\n                            <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"1em\" viewBox=\"0 0 512 512\">\n                                <path fill=\"currentColor\" d=\"M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z\"/>\n                            </svg>\n                            Happy Customers\n                        </li>\n                    </ul>\n                    <p class=\"info-two\">when an unknown printer took a galley of type and  aweratr scrambled it to make a type specimen bookhas a not only five centuries, but also the leap into electronic typesetting, remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p>\n                </div>\n            </div>\n            <div class=\"col-59\">\n                <div class=\"thumb\">\n                    <img src=\"http://gerow.test/storage/services/5.jpg\" alt=\"\">\n                    <a href=\"https://www.youtube.com/watch?v=j4dPPWKsxFs\" class=\"play-btn popup-video\"><i class=\"fas fa-play\"></i></a>\n                </div>\n            </div>\n        </div>\n    </div>\n</div>\n','USA','Michael Turner',0,'projects/2.png',NULL,0,'published','2025-01-28 00:59:14','2025-01-28 00:59:14','Carmel Wilkinson','2014-04-19',0),(3,'Startup Accelerator Program','Accelerate your startup’s growth with our intensive program. From idea to market entry, we provide mentorship, resources, and networking opportunities for success.','<div class=\"project-details-content\">\n    <div class=\"pd-inner-wrap\">\n        <div class=\"row align-items-center\">\n            <div class=\"col-41\">\n                <div class=\"content\">\n                    <h3 class=\"title-two\">Raise capital faster <br> negotiate on your own terms</h3>\n                    <p class=\"info-one\">when an unknown printer took a galley offer typey anddey scrambled make a type specimen bookhas survived not only five centuries but also.</p>\n                    <ul class=\"list-wrap\">\n                        <li>\n                            <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"1em\" viewBox=\"0 0 512 512\">\n                                <path fill=\"currentColor\" d=\"M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z\"/>\n                            </svg>\n                            100% Better results\n                        </li>\n                        <li>\n                            <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"1em\" viewBox=\"0 0 512 512\">\n                                <path fill=\"currentColor\" d=\"M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z\"/>\n                            </svg>\n                            Valuable Ideas\n                        </li>\n                        <li>\n                            <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"1em\" viewBox=\"0 0 512 512\">\n                                <path fill=\"currentColor\" d=\"M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z\"/>\n                            </svg>\n                            Budget Friendly Theme\n                        </li>\n                        <li>\n                            <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"1em\" viewBox=\"0 0 512 512\">\n                                <path fill=\"currentColor\" d=\"M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z\"/>\n                            </svg>\n                            Happy Customers\n                        </li>\n                    </ul>\n                    <p class=\"info-two\">when an unknown printer took a galley of type and  aweratr scrambled it to make a type specimen bookhas a not only five centuries, but also the leap into electronic typesetting, remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p>\n                </div>\n            </div>\n            <div class=\"col-59\">\n                <div class=\"thumb\">\n                    <img src=\"http://gerow.test/storage/services/5.jpg\" alt=\"\">\n                    <a href=\"https://www.youtube.com/watch?v=j4dPPWKsxFs\" class=\"play-btn popup-video\"><i class=\"fas fa-play\"></i></a>\n                </div>\n            </div>\n        </div>\n    </div>\n</div>\n','Thailand','David Chen',0,'projects/3.png',NULL,0,'published','2025-01-28 00:59:14','2025-01-28 00:59:14','Brad Towne DDS','2000-02-07',0),(4,'Marketing Mastery Series','Master the art of marketing with our comprehensive series. From branding to digital marketing, this series equips you with the skills to captivate your audience.','<div class=\"project-details-content\">\n    <div class=\"pd-inner-wrap\">\n        <div class=\"row align-items-center\">\n            <div class=\"col-41\">\n                <div class=\"content\">\n                    <h3 class=\"title-two\">Raise capital faster <br> negotiate on your own terms</h3>\n                    <p class=\"info-one\">when an unknown printer took a galley offer typey anddey scrambled make a type specimen bookhas survived not only five centuries but also.</p>\n                    <ul class=\"list-wrap\">\n                        <li>\n                            <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"1em\" viewBox=\"0 0 512 512\">\n                                <path fill=\"currentColor\" d=\"M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z\"/>\n                            </svg>\n                            100% Better results\n                        </li>\n                        <li>\n                            <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"1em\" viewBox=\"0 0 512 512\">\n                                <path fill=\"currentColor\" d=\"M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z\"/>\n                            </svg>\n                            Valuable Ideas\n                        </li>\n                        <li>\n                            <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"1em\" viewBox=\"0 0 512 512\">\n                                <path fill=\"currentColor\" d=\"M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z\"/>\n                            </svg>\n                            Budget Friendly Theme\n                        </li>\n                        <li>\n                            <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"1em\" viewBox=\"0 0 512 512\">\n                                <path fill=\"currentColor\" d=\"M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z\"/>\n                            </svg>\n                            Happy Customers\n                        </li>\n                    </ul>\n                    <p class=\"info-two\">when an unknown printer took a galley of type and  aweratr scrambled it to make a type specimen bookhas a not only five centuries, but also the leap into electronic typesetting, remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p>\n                </div>\n            </div>\n            <div class=\"col-59\">\n                <div class=\"thumb\">\n                    <img src=\"http://gerow.test/storage/services/5.jpg\" alt=\"\">\n                    <a href=\"https://www.youtube.com/watch?v=j4dPPWKsxFs\" class=\"play-btn popup-video\"><i class=\"fas fa-play\"></i></a>\n                </div>\n            </div>\n        </div>\n    </div>\n</div>\n','Japan','Takashi Hamachi',0,'projects/4.png',NULL,0,'published','2025-01-28 00:59:14','2025-01-28 00:59:14','Ludwig Beer','2008-05-12',0),(5,'Illustration Design','Qui vel amet minima nemo. Nisi aut expedita repellendus sequi.','<div class=\"project-details-content\">\n    <div class=\"pd-inner-wrap\">\n        <div class=\"row align-items-center\">\n            <div class=\"col-41\">\n                <div class=\"content\">\n                    <h3 class=\"title-two\">Raise capital faster <br> negotiate on your own terms</h3>\n                    <p class=\"info-one\">when an unknown printer took a galley offer typey anddey scrambled make a type specimen bookhas survived not only five centuries but also.</p>\n                    <ul class=\"list-wrap\">\n                        <li>\n                            <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"1em\" viewBox=\"0 0 512 512\">\n                                <path fill=\"currentColor\" d=\"M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z\"/>\n                            </svg>\n                            100% Better results\n                        </li>\n                        <li>\n                            <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"1em\" viewBox=\"0 0 512 512\">\n                                <path fill=\"currentColor\" d=\"M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z\"/>\n                            </svg>\n                            Valuable Ideas\n                        </li>\n                        <li>\n                            <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"1em\" viewBox=\"0 0 512 512\">\n                                <path fill=\"currentColor\" d=\"M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z\"/>\n                            </svg>\n                            Budget Friendly Theme\n                        </li>\n                        <li>\n                            <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"1em\" viewBox=\"0 0 512 512\">\n                                <path fill=\"currentColor\" d=\"M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z\"/>\n                            </svg>\n                            Happy Customers\n                        </li>\n                    </ul>\n                    <p class=\"info-two\">when an unknown printer took a galley of type and  aweratr scrambled it to make a type specimen bookhas a not only five centuries, but also the leap into electronic typesetting, remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p>\n                </div>\n            </div>\n            <div class=\"col-59\">\n                <div class=\"thumb\">\n                    <img src=\"http://gerow.test/storage/services/5.jpg\" alt=\"\">\n                    <a href=\"https://www.youtube.com/watch?v=j4dPPWKsxFs\" class=\"play-btn popup-video\"><i class=\"fas fa-play\"></i></a>\n                </div>\n            </div>\n        </div>\n    </div>\n</div>\n','USA','David Kane',0,'projects/5.png',NULL,0,'published','2025-01-28 00:59:14','2025-01-28 00:59:14','Maggie Cassin','2001-02-03',0),(6,'Design & Development','Impedit qui et harum dolore natus. Et deserunt nobis eum quos necessitatibus.','<div class=\"project-details-content\">\n    <div class=\"pd-inner-wrap\">\n        <div class=\"row align-items-center\">\n            <div class=\"col-41\">\n                <div class=\"content\">\n                    <h3 class=\"title-two\">Raise capital faster <br> negotiate on your own terms</h3>\n                    <p class=\"info-one\">when an unknown printer took a galley offer typey anddey scrambled make a type specimen bookhas survived not only five centuries but also.</p>\n                    <ul class=\"list-wrap\">\n                        <li>\n                            <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"1em\" viewBox=\"0 0 512 512\">\n                                <path fill=\"currentColor\" d=\"M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z\"/>\n                            </svg>\n                            100% Better results\n                        </li>\n                        <li>\n                            <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"1em\" viewBox=\"0 0 512 512\">\n                                <path fill=\"currentColor\" d=\"M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z\"/>\n                            </svg>\n                            Valuable Ideas\n                        </li>\n                        <li>\n                            <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"1em\" viewBox=\"0 0 512 512\">\n                                <path fill=\"currentColor\" d=\"M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z\"/>\n                            </svg>\n                            Budget Friendly Theme\n                        </li>\n                        <li>\n                            <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"1em\" viewBox=\"0 0 512 512\">\n                                <path fill=\"currentColor\" d=\"M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z\"/>\n                            </svg>\n                            Happy Customers\n                        </li>\n                    </ul>\n                    <p class=\"info-two\">when an unknown printer took a galley of type and  aweratr scrambled it to make a type specimen bookhas a not only five centuries, but also the leap into electronic typesetting, remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p>\n                </div>\n            </div>\n            <div class=\"col-59\">\n                <div class=\"thumb\">\n                    <img src=\"http://gerow.test/storage/services/5.jpg\" alt=\"\">\n                    <a href=\"https://www.youtube.com/watch?v=j4dPPWKsxFs\" class=\"play-btn popup-video\"><i class=\"fas fa-play\"></i></a>\n                </div>\n            </div>\n        </div>\n    </div>\n</div>\n','Canada','Franks Doe',0,'projects/6.png',NULL,0,'published','2025-01-28 00:59:14','2025-01-28 00:59:14','Garrick Connelly','2005-12-06',0),(7,'Marketing Consultancy','Eos sapiente et maiores. Earum aut dolor officia eligendi et eum. Et ea laborum assumenda aliquid.','<div class=\"project-details-content\">\n    <div class=\"pd-inner-wrap\">\n        <div class=\"row align-items-center\">\n            <div class=\"col-41\">\n                <div class=\"content\">\n                    <h3 class=\"title-two\">Raise capital faster <br> negotiate on your own terms</h3>\n                    <p class=\"info-one\">when an unknown printer took a galley offer typey anddey scrambled make a type specimen bookhas survived not only five centuries but also.</p>\n                    <ul class=\"list-wrap\">\n                        <li>\n                            <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"1em\" viewBox=\"0 0 512 512\">\n                                <path fill=\"currentColor\" d=\"M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z\"/>\n                            </svg>\n                            100% Better results\n                        </li>\n                        <li>\n                            <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"1em\" viewBox=\"0 0 512 512\">\n                                <path fill=\"currentColor\" d=\"M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z\"/>\n                            </svg>\n                            Valuable Ideas\n                        </li>\n                        <li>\n                            <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"1em\" viewBox=\"0 0 512 512\">\n                                <path fill=\"currentColor\" d=\"M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z\"/>\n                            </svg>\n                            Budget Friendly Theme\n                        </li>\n                        <li>\n                            <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"1em\" viewBox=\"0 0 512 512\">\n                                <path fill=\"currentColor\" d=\"M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z\"/>\n                            </svg>\n                            Happy Customers\n                        </li>\n                    </ul>\n                    <p class=\"info-two\">when an unknown printer took a galley of type and  aweratr scrambled it to make a type specimen bookhas a not only five centuries, but also the leap into electronic typesetting, remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p>\n                </div>\n            </div>\n            <div class=\"col-59\">\n                <div class=\"thumb\">\n                    <img src=\"http://gerow.test/storage/services/5.jpg\" alt=\"\">\n                    <a href=\"https://www.youtube.com/watch?v=j4dPPWKsxFs\" class=\"play-btn popup-video\"><i class=\"fas fa-play\"></i></a>\n                </div>\n            </div>\n        </div>\n    </div>\n</div>\n','India','Alexander Kavas',0,'projects/7.png',NULL,0,'published','2025-01-28 00:59:14','2025-01-28 00:59:14','Mrs. Ardith Streich','2000-11-26',0),(8,'Digital Marketing','Et quae quibusdam fugit non ea dicta quo exercitationem. Dolorem minus consequatur id et.','<div class=\"project-details-content\">\n    <div class=\"pd-inner-wrap\">\n        <div class=\"row align-items-center\">\n            <div class=\"col-41\">\n                <div class=\"content\">\n                    <h3 class=\"title-two\">Raise capital faster <br> negotiate on your own terms</h3>\n                    <p class=\"info-one\">when an unknown printer took a galley offer typey anddey scrambled make a type specimen bookhas survived not only five centuries but also.</p>\n                    <ul class=\"list-wrap\">\n                        <li>\n                            <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"1em\" viewBox=\"0 0 512 512\">\n                                <path fill=\"currentColor\" d=\"M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z\"/>\n                            </svg>\n                            100% Better results\n                        </li>\n                        <li>\n                            <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"1em\" viewBox=\"0 0 512 512\">\n                                <path fill=\"currentColor\" d=\"M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z\"/>\n                            </svg>\n                            Valuable Ideas\n                        </li>\n                        <li>\n                            <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"1em\" viewBox=\"0 0 512 512\">\n                                <path fill=\"currentColor\" d=\"M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z\"/>\n                            </svg>\n                            Budget Friendly Theme\n                        </li>\n                        <li>\n                            <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"1em\" viewBox=\"0 0 512 512\">\n                                <path fill=\"currentColor\" d=\"M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z\"/>\n                            </svg>\n                            Happy Customers\n                        </li>\n                    </ul>\n                    <p class=\"info-two\">when an unknown printer took a galley of type and  aweratr scrambled it to make a type specimen bookhas a not only five centuries, but also the leap into electronic typesetting, remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p>\n                </div>\n            </div>\n            <div class=\"col-59\">\n                <div class=\"thumb\">\n                    <img src=\"http://gerow.test/storage/services/5.jpg\" alt=\"\">\n                    <a href=\"https://www.youtube.com/watch?v=j4dPPWKsxFs\" class=\"play-btn popup-video\"><i class=\"fas fa-play\"></i></a>\n                </div>\n            </div>\n        </div>\n    </div>\n</div>\n','Brazil','Roby Elexa',0,'projects/8.png',NULL,0,'published','2025-01-28 00:59:14','2025-01-28 00:59:14','Prof. Antwan O\'Reilly','1984-06-08',0),(9,'Strategic Planning','Qui est voluptas culpa. Natus quos enim et quia repudiandae. Dolorem in animi consequatur cumque.','<div class=\"project-details-content\">\n    <div class=\"pd-inner-wrap\">\n        <div class=\"row align-items-center\">\n            <div class=\"col-41\">\n                <div class=\"content\">\n                    <h3 class=\"title-two\">Raise capital faster <br> negotiate on your own terms</h3>\n                    <p class=\"info-one\">when an unknown printer took a galley offer typey anddey scrambled make a type specimen bookhas survived not only five centuries but also.</p>\n                    <ul class=\"list-wrap\">\n                        <li>\n                            <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"1em\" viewBox=\"0 0 512 512\">\n                                <path fill=\"currentColor\" d=\"M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z\"/>\n                            </svg>\n                            100% Better results\n                        </li>\n                        <li>\n                            <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"1em\" viewBox=\"0 0 512 512\">\n                                <path fill=\"currentColor\" d=\"M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z\"/>\n                            </svg>\n                            Valuable Ideas\n                        </li>\n                        <li>\n                            <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"1em\" viewBox=\"0 0 512 512\">\n                                <path fill=\"currentColor\" d=\"M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z\"/>\n                            </svg>\n                            Budget Friendly Theme\n                        </li>\n                        <li>\n                            <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"1em\" viewBox=\"0 0 512 512\">\n                                <path fill=\"currentColor\" d=\"M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z\"/>\n                            </svg>\n                            Happy Customers\n                        </li>\n                    </ul>\n                    <p class=\"info-two\">when an unknown printer took a galley of type and  aweratr scrambled it to make a type specimen bookhas a not only five centuries, but also the leap into electronic typesetting, remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p>\n                </div>\n            </div>\n            <div class=\"col-59\">\n                <div class=\"thumb\">\n                    <img src=\"http://gerow.test/storage/services/5.jpg\" alt=\"\">\n                    <a href=\"https://www.youtube.com/watch?v=j4dPPWKsxFs\" class=\"play-btn popup-video\"><i class=\"fas fa-play\"></i></a>\n                </div>\n            </div>\n        </div>\n    </div>\n</div>\n','Thai Lan','Nicola Per',0,'projects/9.png',NULL,0,'published','2025-01-28 00:59:14','2025-01-28 00:59:14','Domenic Gutkowski','1981-07-30',0);
/*!40000 ALTER TABLE `pf_projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pf_projects_translations`
--

DROP TABLE IF EXISTS `pf_projects_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pf_projects_translations` (
  `lang_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pf_projects_id` bigint unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pf_projects_translations`
--

LOCK TABLES `pf_projects_translations` WRITE;
/*!40000 ALTER TABLE `pf_projects_translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `pf_projects_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pf_quotes`
--

DROP TABLE IF EXISTS `pf_quotes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pf_quotes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fields` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unread',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pf_quotes`
--

LOCK TABLES `pf_quotes` WRITE;
/*!40000 ALTER TABLE `pf_quotes` DISABLE KEYS */;
/*!40000 ALTER TABLE `pf_quotes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pf_service_categories`
--

DROP TABLE IF EXISTS `pf_service_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pf_service_categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` bigint unsigned DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` tinyint NOT NULL DEFAULT '0',
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pf_service_categories_parent_id_index` (`parent_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pf_service_categories`
--

LOCK TABLES `pf_service_categories` WRITE;
/*!40000 ALTER TABLE `pf_service_categories` DISABLE KEYS */;
INSERT INTO `pf_service_categories` VALUES (1,NULL,'Financial Analysis','Eos voluptatibus perferendis quis in. Aliquam placeat sunt dolore et dolore adipisci non. Quidem odit eius exercitationem quas corporis ducimus et dolorum. Et molestiae illum sapiente reiciendis. Est est alias beatae explicabo. Culpa quos enim beatae adipisci. Voluptate non id culpa odio sit in eveniet. Quod aut repellat non.',NULL,1,'published','2025-01-28 00:59:14','2025-01-28 00:59:14'),(2,NULL,'Tax Strategy','Odio in ratione ut adipisci nesciunt voluptatem. Ipsa eos odit nostrum dolorem. Nostrum est sed minima tenetur pariatur ea. Aut culpa quod aut incidunt natus deserunt. Quas natus et corporis numquam. Enim sed quo facere labore delectus. Minima quos omnis iure est aspernatur hic et.',NULL,2,'published','2025-01-28 00:59:14','2025-01-28 00:59:14'),(3,NULL,'Market Research','Minima sed cum perferendis quo id. Voluptates qui delectus enim inventore dolor nostrum amet sit. Vitae dicta explicabo est. Reprehenderit laudantium quibusdam rem officia deserunt saepe eos. Quidem quasi nisi nesciunt repellendus consequatur. Labore omnis voluptatem aut omnis et aspernatur ut. Modi facilis explicabo minus ipsa.',NULL,3,'published','2025-01-28 00:59:14','2025-01-28 00:59:14'),(4,NULL,'Business Strategy','Dolor qui labore voluptas esse. Libero omnis officiis voluptatem odio. Nisi soluta repellat et nihil illum repudiandae amet. Dolore dolorem iure rem modi aperiam ut quia sit. Labore est est et voluptatibus temporibus. Quia molestiae incidunt a molestiae voluptates fuga. Tenetur optio et tempora aut voluptates incidunt.',NULL,4,'published','2025-01-28 00:59:14','2025-01-28 00:59:14');
/*!40000 ALTER TABLE `pf_service_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pf_service_categories_translations`
--

DROP TABLE IF EXISTS `pf_service_categories_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pf_service_categories_translations` (
  `lang_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pf_service_categories_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`lang_code`,`pf_service_categories_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pf_service_categories_translations`
--

LOCK TABLES `pf_service_categories_translations` WRITE;
/*!40000 ALTER TABLE `pf_service_categories_translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `pf_service_categories_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pf_services`
--

DROP TABLE IF EXISTS `pf_services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pf_services` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `category_id` bigint unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `is_featured` tinyint(1) NOT NULL DEFAULT '0',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` text COLLATE utf8mb4_unicode_ci,
  `views` int NOT NULL DEFAULT '0',
  `status` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `order` tinyint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `pf_services_category_id_index` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pf_services`
--

LOCK TABLES `pf_services` WRITE;
/*!40000 ALTER TABLE `pf_services` DISABLE KEYS */;
INSERT INTO `pf_services` VALUES (1,4,'Data Analyst','Analyzes financial data, optimizing processes for efficiency and identifying profitability opportunities.','<div>[content-rich-fields title=\"The Power of Data Analytics in Business Decision-Making\" description=\"Discover how data analytics can transform decision-making processes, drive innovation, and enhance competitiveness in today’s business world.\" right_image=\"galleries/1.png\" quantity=\"6\" title_1=\" Growing Business\" description_1=\"Finance Helps You To Convert Into A Strategic Asset Get.\" icon_1=\"flaticon-business-presentation\" title_2=\"Finance Investment\" description_2=\"Finance Investment Convert Into A Strategic Asset Get.\" icon_2=\"flaticon-investment\" title_3=\"Tax Advisory\" description_3=\"Tax Advisory Convert Into A Strategic Asset Get.\" icon_3=\"flaticon-taxes\" style=\"style-2\"][/content-rich-fields]</div><p>when an unknown printer took a galley of type and scrambled it to make a type specimen bookhas a not only five centuries, but also the leap into electronic typesetting, remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p><div>[content-rich-fields title=\"Quality Industrial Working\" description=\"Discover how data analytics can transform decision-making processes, drive innovation, and enhance competitiveness in today’s business world.\" right_image=\"galleries/1.png\" quantity=\"6\" style=\"style-3\"][/content-rich-fields]</div><h2 class=\"title-two\">Effective Leadership: Inspiring Your Team to Success</h2><p>Dive into the qualities and strategies of effective leadership that inspire teams, foster growth, and achieve remarkable success.</p><div>[content-collapse quantity=\"3\" title_1=\"What does Financial Planning involve?\" description_1=\"Our Financial Planning services are designed to provide you with a comprehensive and customized financial roadmap. We begin by assessing your current financial situation, including income, expenses, assets, and liabilities. Based on your goals and aspirations, we develop a detailed plan that encompasses wealth management.\" title_2=\"How can Financial Analysis benefit my business?\" description_2=\"Financial Analysis can benefit your business in several ways. It offers a deep understanding of your financial health, helping you make informed decisions. By identifying cost-saving opportunities and revenue growth potential, it can significantly improve your bottom line. \" title_3=\"What does Tax Strategy involve?\" description_3=\"Our Tax Strategy services focus on optimizing your tax position while ensuring strict compliance with tax laws and regulations. We begin by conducting a thorough analysis of your financial records, transactions, and tax obligations.\"][/content-collapse]</div>',1,'services/1.png','[\"services\\/1.png\"]',5826,'published','2025-01-28 00:59:14','2025-01-28 00:59:14',0),(2,3,'Liability Planner','Develops strategies to reduce tax burdens while maintaining legal compliance.','<h2 class=\"title-two\">Investment Strategies for a Secure Financial Future</h2><p>Gain insights into investment strategies that can help secure your financial future, whether for personal wealth or business growth.</p><div>[content-rich-fields title=\"Resilience in Business: Adapting to Change and Challenges\" description=\"Learn how resilience can be a powerful asset in business, enabling adaptability, growth, and the ability to overcome challenges.\" left_image=\"galleries/1.png\" quantity=\"4\" title_1=\"Budget Friendly Theme\" description_1=\"Finance Helps You To Convert Into A Strategic Asset Get.\" title_2=\"100% Better results\" description_2=\"Finance Helps You To Convert Into A Strategic Asset Get. \" title_3=\"Valuable Ideas\" description_3=\"Finance Helps You To Convert Into A Strategic Asset Get.\" title_4=\"Happy Customers\" style=\"style-1\"][/content-rich-fields]</div><div>[content-rich-fields title=\"The Power of Data Analytics in Business Decision-Making\" description=\"Discover how data analytics can transform decision-making processes, drive innovation, and enhance competitiveness in today’s business world.\" right_image=\"galleries/1.png\" quantity=\"6\" title_1=\" Growing Business\" description_1=\"Finance Helps You To Convert Into A Strategic Asset Get.\" icon_1=\"flaticon-business-presentation\" title_2=\"Finance Investment\" description_2=\"Finance Investment Convert Into A Strategic Asset Get.\" icon_2=\"flaticon-investment\" title_3=\"Tax Advisory\" description_3=\"Tax Advisory Convert Into A Strategic Asset Get.\" icon_3=\"flaticon-taxes\" style=\"style-2\"][/content-rich-fields]</div><div>[content-rich-fields title=\"Effective Networking for Business Professionals\" description=\"Discover techniques and best practices for effective networking to build valuable connections and expand your professional reach.\" left_image=\"services/4.png\" right_image=\"general/about-img02.png\" quantity=\"3\" title_1=\"Growing Business\" description_1=\"Finance Helps You To Convert Into A Strategic Asset Get.\" icon_1=\"flaticon-business-presentation\" title_2=\"Finance Investment\" description_2=\"Finance Helps You To Convert Into A Strategic Asset Get.\" icon_2=\"flaticon-investment\" title_3=\"Tax Advisory\" description_3=\"Finance Helps You To Convert Into A Strategic Asset Get.\" icon_3=\"flaticon-taxes\" style=\"style-3\"][/content-rich-fields]</div><p>when an unknown printer took a galley of type and scrambled it to make a type specimen bookhas a not only five centuries, but also the leap into electronic typesetting, remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p><div>[content-collapse quantity=\"3\" title_1=\"What does your Financial Analysis service entail?\" description_1=\"Our Financial Analysis service is a comprehensive examination of your financial data and operations. We meticulously review your income statements, balance sheets, cash flow statements, and other financial records. We also assess your business processes, cost structures, and revenue streams.\" title_2=\"How can Financial Analysis benefit my business?\" description_2=\"Financial Analysis can benefit your business in several ways. It offers a deep understanding of your financial health, helping you make informed decisions. By identifying cost-saving opportunities and revenue growth potential, it can significantly improve your bottom line. \" title_3=\"What does Tax Strategy involve?\" description_3=\"Our Tax Strategy services focus on optimizing your tax position while ensuring strict compliance with tax laws and regulations. We begin by conducting a thorough analysis of your financial records, transactions, and tax obligations.\"][/content-collapse]</div>',0,'services/3.png','[\"services\\/3.png\"]',8580,'published','2025-01-28 00:59:14','2025-01-28 00:59:14',0),(3,3,'Growth Planner','Develops strategies for sustainable market expansion and business growth.','<div>[content-rich-fields title=\"Effective Leadership: Inspiring Your Team to Success\" description=\"Dive into the qualities and strategies of effective leadership that inspire teams, foster growth, and achieve remarkable success.\" left_image=\"services/4.png\" right_image=\"galleries/1.png\" quantity=\"6\" style=\"style-3\"][/content-rich-fields]</div><p>when an unknown printer took a galley of type and scrambled it to make a type specimen bookhas a not only five centuries, but also the leap into electronic typesetting, remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p><div>[content-rich-fields title=\"The Power of Data Analytics in Business Decision-Making\" description=\"Discover how data analytics can transform decision-making processes, drive innovation, and enhance competitiveness in today’s business world.\" right_image=\"galleries/1.png\" quantity=\"6\" title_1=\" Growing Business\" description_1=\"Finance Helps You To Convert Into A Strategic Asset Get.\" icon_1=\"flaticon-business-presentation\" title_2=\"Finance Investment\" description_2=\"Finance Investment Convert Into A Strategic Asset Get.\" icon_2=\"flaticon-investment\" title_3=\"Tax Advisory\" description_3=\"Tax Advisory Convert Into A Strategic Asset Get.\" icon_3=\"flaticon-taxes\" style=\"style-2\"][/content-rich-fields]</div><h2 class=\"title-two\">Effective Leadership: Inspiring Your Team to Success</h2><p>Dive into the qualities and strategies of effective leadership that inspire teams, foster growth, and achieve remarkable success.</p><div>[content-collapse quantity=\"3\" title_1=\"What does Financial Planning involve?\" description_1=\"Our Financial Planning services are designed to provide you with a comprehensive and customized financial roadmap. We begin by assessing your current financial situation, including income, expenses, assets, and liabilities. Based on your goals and aspirations, we develop a detailed plan that encompasses wealth management.\" title_2=\"How can Financial Analysis benefit my business?\" description_2=\"Financial Analysis can benefit your business in several ways. It offers a deep understanding of your financial health, helping you make informed decisions. By identifying cost-saving opportunities and revenue growth potential, it can significantly improve your bottom line. \" title_3=\"What does Tax Strategy involve?\" description_3=\"Our Tax Strategy services focus on optimizing your tax position while ensuring strict compliance with tax laws and regulations. We begin by conducting a thorough analysis of your financial records, transactions, and tax obligations.\"][/content-collapse]</div>',1,'services/4.png','[\"services\\/2.png\"]',6434,'published','2025-01-28 00:59:14','2025-01-28 00:59:14',0),(4,2,'Risk Manager','Identifies and manages risks while aligning strategies with business goals.','<h2 class=\"title-two\">How to Create a Winning Marketing Plan</h2><p>Learn the essential steps and elements to craft a winning marketing plan that effectively reaches your target audience and drives results.</p><div>[content-rich-fields title=\"Balancing Act: Work-Life Integration for Business Owners\" description=\"Discover strategies for achieving work-life integration as a business owner, ensuring well-being and productivity in both spheres.\" left_image=\"galleries/1.png\" quantity=\"4\" title_1=\"100% Better results\" description_1=\"Finance Helps You To Convert Into A Strategic Asset Get.\" title_2=\"Valuable Ideas\" description_2=\"Finance Helps You To Convert Into A Strategic Asset Get. \" title_3=\"Budget Friendly Theme\" title_4=\"Happy Customers\" style=\"style-1\"][/content-rich-fields]</div><div>[content-rich-fields title=\"The Impact of Sustainable Practices on Business Sustainability\" description=\"Explore the positive impact of sustainable business practices on long-term sustainability, environmental responsibility, and brand reputation.\" left_image=\"services/4.png\" right_image=\"galleries/1.png\" quantity=\"6\" style=\"style-3\"][/content-rich-fields]</div><p>when an unknown printer took a galley of type and scrambled it to make a type specimen bookhas a not only five centuries, but also the leap into electronic typesetting, remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p><div>[content-collapse quantity=\"3\" title_1=\"What does your Financial Analysis service entail?\" description_1=\"Our Financial Analysis service is a comprehensive examination of your financial data and operations. We meticulously review your income statements, balance sheets, cash flow statements, and other financial records. We also assess your business processes, cost structures, and revenue streams.\" title_2=\"How can Financial Analysis benefit my business?\" description_2=\"Financial Analysis can benefit your business in several ways. It offers a deep understanding of your financial health, helping you make informed decisions. By identifying cost-saving opportunities and revenue growth potential, it can significantly improve your bottom line. \" title_3=\"What does Tax Strategy involve?\" description_3=\"Our Tax Strategy services focus on optimizing your tax position while ensuring strict compliance with tax laws and regulations. We begin by conducting a thorough analysis of your financial records, transactions, and tax obligations.\"][/content-collapse]</div>',1,'services/2.png','[\"services\\/4.png\"]',5151,'published','2025-01-28 00:59:14','2025-01-28 00:59:14',0),(5,2,'Retirement Planner','Helps clients plan for a secure and comfortable retirement.','<div>[content-rich-fields title=\"The Power of Data Analytics in Business Decision-Making\" description=\"Discover how data analytics can transform decision-making processes, drive innovation, and enhance competitiveness in today’s business world.\" right_image=\"galleries/1.png\" quantity=\"6\" title_1=\" Growing Business\" description_1=\"Finance Helps You To Convert Into A Strategic Asset Get.\" icon_1=\"flaticon-business-presentation\" title_2=\"Finance Investment\" description_2=\"Finance Investment Convert Into A Strategic Asset Get.\" icon_2=\"flaticon-investment\" title_3=\"Tax Advisory\" description_3=\"Tax Advisory Convert Into A Strategic Asset Get.\" icon_3=\"flaticon-taxes\" style=\"style-2\"][/content-rich-fields]</div><p>Learn how businesses can leverage technology to gain a competitive edge, streamline operations, and deliver exceptional value to customers. Explore the importance of building a strong employer brand to attract and retain top talent in a competitive job market.</p><div>[content-rich-fields title=\"Productivity Hacks for Busy Entrepreneurs\" description=\"Explore practical productivity hacks and time management strategies designed to help busy entrepreneurs optimize their workflows.\" left_image=\"services/4.png\" right_image=\"galleries/1.png\" quantity=\"6\" style=\"style-3\"][/content-rich-fields]</div><h2 class=\"title-two\">Measuring Success: Key Performance Indicators (KPIs) for Business</h2><p>when an unknown printer took a galley of type and scrambled it to make a type specimen bookhas a not only five centuries, but also the leap into electronic typesetting, remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p><div>[content-collapse quantity=\"3\" title_1=\"What does your Financial Analysis service entail?\" description_1=\"Our Financial Analysis service is a comprehensive examination of your financial data and operations. We meticulously review your income statements, balance sheets, cash flow statements, and other financial records. We also assess your business processes, cost structures, and revenue streams.\" title_2=\"How can Financial Analysis benefit my business?\" description_2=\"Financial Analysis can benefit your business in several ways. It offers a deep understanding of your financial health, helping you make informed decisions. By identifying cost-saving opportunities and revenue growth potential, it can significantly improve your bottom line. \" title_3=\"What does Tax Strategy involve?\" description_3=\"Our Tax Strategy services focus on optimizing your tax position while ensuring strict compliance with tax laws and regulations. We begin by conducting a thorough analysis of your financial records, transactions, and tax obligations.\"][/content-collapse]</div>',0,'services/4.png','[\"services\\/3.png\"]',9247,'published','2025-01-28 00:59:14','2025-01-28 00:59:14',0),(6,4,'Risk Analyst','Identifies potential risks and develops strategies to mitigate them.','<div>[content-rich-fields title=\"Effective Networking for Business Professionals\" description=\"Discover techniques and best practices for effective networking to build valuable connections and expand your professional reach.\" left_image=\"galleries/1.png\" quantity=\"4\" title_1=\"100% Better results\" description_1=\"Finance Helps You To Convert Into A Strategic Asset Get.\" title_2=\"Valuable Ideas\" description_2=\"Finance Helps You To Convert Into A Strategic Asset Get. \" title_3=\"Budget Friendly Theme\" title_4=\"Happy Customers\" style=\"style-1\"][/content-rich-fields]</div><p>Dive into effective sales strategies and tactics to maximize revenue and market share in a highly competitive business environment.</p><div>[content-rich-fields title=\"The Power of Data Analytics in Business Decision-Making\" description=\"Discover how data analytics can transform decision-making processes, drive innovation, and enhance competitiveness in today’s business world.\" right_image=\"galleries/1.png\" quantity=\"6\" title_1=\" Growing Business\" description_1=\"Finance Helps You To Convert Into A Strategic Asset Get.\" icon_1=\"flaticon-business-presentation\" title_2=\"Finance Investment\" description_2=\"Finance Investment Convert Into A Strategic Asset Get.\" icon_2=\"flaticon-investment\" title_3=\"Tax Advisory\" description_3=\"Tax Advisory Convert Into A Strategic Asset Get.\" icon_3=\"flaticon-taxes\" style=\"style-2\"][/content-rich-fields]</div><h2 class=\"title-two\">The Human Factor: HR Best Practices for Businesses</h2><p>Learn about HR best practices that promote a positive workplace culture, employee engagement, and overall business success.</p><div>[content-collapse quantity=\"3\" title_1=\"What does your Financial Analysis service entail?\" description_1=\"Our Financial Analysis service is a comprehensive examination of your financial data and operations. We meticulously review your income statements, balance sheets, cash flow statements, and other financial records. We also assess your business processes, cost structures, and revenue streams.\" title_2=\"How can Financial Analysis benefit my business?\" description_2=\"Financial Analysis can benefit your business in several ways. It offers a deep understanding of your financial health, helping you make informed decisions. By identifying cost-saving opportunities and revenue growth potential, it can significantly improve your bottom line. \" title_3=\"What does Tax Strategy involve?\" description_3=\"Our Tax Strategy services focus on optimizing your tax position while ensuring strict compliance with tax laws and regulations. We begin by conducting a thorough analysis of your financial records, transactions, and tax obligations.\"][/content-collapse]</div>',1,'services/2.png','[\"services\\/2.png\"]',6219,'published','2025-01-28 00:59:14','2025-01-28 00:59:14',0),(7,1,'Insurance Expert','Advises on insurance solutions to protect against various risks.','<p>Gain insights into investment strategies that can help secure your financial future, whether for personal wealth or business growth. Learn how resilience can be a powerful asset in business, enabling adaptability, growth, and the ability to overcome challenges.</p><div>[content-rich-fields title=\"Effective Networking for Business Professionals\" description=\"Discover techniques and best practices for effective networking to build valuable connections and expand your professional reach.\" left_image=\"galleries/1.png\" quantity=\"4\" title_1=\"100% Better results\" description_1=\"Finance Helps You To Convert Into A Strategic Asset Get.\" title_2=\"Valuable Ideas\" description_2=\"Finance Helps You To Convert Into A Strategic Asset Get. \" title_3=\"Budget Friendly Theme\" title_4=\"Happy Customers\" style=\"style-1\"][/content-rich-fields]</div><div>[content-rich-fields title=\"The Power of Data Analytics in Business Decision-Making\" description=\"Discover how data analytics can transform decision-making processes, drive innovation, and enhance competitiveness in today’s business world.\" right_image=\"galleries/1.png\" quantity=\"6\" title_1=\" Growing Business\" description_1=\"Finance Helps You To Convert Into A Strategic Asset Get.\" icon_1=\"flaticon-business-presentation\" title_2=\"Finance Investment\" description_2=\"Finance Investment Convert Into A Strategic Asset Get.\" icon_2=\"flaticon-investment\" title_3=\"Tax Advisory\" description_3=\"Tax Advisory Convert Into A Strategic Asset Get.\" icon_3=\"flaticon-taxes\" style=\"style-2\"][/content-rich-fields]</div><div>[content-rich-fields title=\"Productivity Hacks for Busy Entrepreneurs\" description=\"Explore practical productivity hacks and time management strategies designed to help busy entrepreneurs optimize their workflows.\" left_image=\"services/4.png\" right_image=\"galleries/1.png\" quantity=\"6\" style=\"style-3\"][/content-rich-fields]</div><div>[content-collapse quantity=\"3\" title_1=\"What does your Financial Analysis service entail?\" description_1=\"Our Financial Analysis service is a comprehensive examination of your financial data and operations. We meticulously review your income statements, balance sheets, cash flow statements, and other financial records. We also assess your business processes, cost structures, and revenue streams.\" title_2=\"How can Financial Analysis benefit my business?\" description_2=\"Financial Analysis can benefit your business in several ways. It offers a deep understanding of your financial health, helping you make informed decisions. By identifying cost-saving opportunities and revenue growth potential, it can significantly improve your bottom line. \" title_3=\"What does Tax Strategy involve?\" description_3=\"Our Tax Strategy services focus on optimizing your tax position while ensuring strict compliance with tax laws and regulations. We begin by conducting a thorough analysis of your financial records, transactions, and tax obligations.\"][/content-collapse]</div>',1,'services/4.png','[\"services\\/4.png\"]',8922,'published','2025-01-28 00:59:14','2025-01-28 00:59:14',0),(8,1,'Budget Manager','Ensures projects stay within budget constraints while meeting objectives.','<div>[content-rich-fields title=\"The Power of Data Analytics in Business Decision-Making\" description=\"Discover how data analytics can transform decision-making processes, drive innovation, and enhance competitiveness in today’s business world.\" right_image=\"galleries/1.png\" quantity=\"6\" title_1=\" Growing Business\" description_1=\"Finance Helps You To Convert Into A Strategic Asset Get.\" icon_1=\"flaticon-business-presentation\" title_2=\"Finance Investment\" description_2=\"Finance Investment Convert Into A Strategic Asset Get.\" icon_2=\"flaticon-investment\" title_3=\"Tax Advisory\" description_3=\"Tax Advisory Convert Into A Strategic Asset Get.\" icon_3=\"flaticon-taxes\" style=\"style-2\"][/content-rich-fields]</div><p>Learn how resilience can be a powerful asset in business, enabling adaptability, growth, and the ability to overcome challenges.</p><div>[content-rich-fields title=\"Productivity Hacks for Busy Entrepreneurs\" description=\"Explore practical productivity hacks and time management strategies designed to help busy entrepreneurs optimize their workflows.\" left_image=\"services/4.png\" right_image=\"galleries/1.png\" quantity=\"6\" style=\"style-3\"][/content-rich-fields]</div><h2 class=\"title-two\">Productivity Hacks for Busy Entrepreneurs</h2><p>Explore practical productivity hacks and time management strategies designed to help busy entrepreneurs optimize their workflows.</p><div>[content-collapse quantity=\"3\" title_1=\"What does your Financial Analysis service entail?\" description_1=\"Our Financial Analysis service is a comprehensive examination of your financial data and operations. We meticulously review your income statements, balance sheets, cash flow statements, and other financial records. We also assess your business processes, cost structures, and revenue streams.\" title_2=\"How can Financial Analysis benefit my business?\" description_2=\"Financial Analysis can benefit your business in several ways. It offers a deep understanding of your financial health, helping you make informed decisions. By identifying cost-saving opportunities and revenue growth potential, it can significantly improve your bottom line. \" title_3=\"What does Tax Strategy involve?\" description_3=\"Our Tax Strategy services focus on optimizing your tax position while ensuring strict compliance with tax laws and regulations. We begin by conducting a thorough analysis of your financial records, transactions, and tax obligations.\"][/content-collapse]</div>',0,'services/2.png','[\"services\\/4.png\"]',2788,'published','2025-01-28 00:59:14','2025-01-28 00:59:14',0),(9,1,'Strategy Adviser','Provides strategic guidance for enhancing competitiveness and profitability.','<div>[content-rich-fields title=\"The Power of Data Analytics in Business Decision-Making\" description=\"Discover how data analytics can transform decision-making processes, drive innovation, and enhance competitiveness in today’s business world.\" right_image=\"galleries/1.png\" quantity=\"6\" title_1=\" Growing Business\" description_1=\"Finance Helps You To Convert Into A Strategic Asset Get.\" icon_1=\"flaticon-business-presentation\" title_2=\"Finance Investment\" description_2=\"Finance Investment Convert Into A Strategic Asset Get.\" icon_2=\"flaticon-investment\" title_3=\"Tax Advisory\" description_3=\"Tax Advisory Convert Into A Strategic Asset Get.\" icon_3=\"flaticon-taxes\" style=\"style-2\"][/content-rich-fields]</div><p>Learn how resilience can be a powerful asset in business, enabling adaptability, growth, and the ability to overcome challenges.</p><div>[content-rich-fields title=\"Productivity Hacks for Busy Entrepreneurs\" description=\"Explore practical productivity hacks and time management strategies designed to help busy entrepreneurs optimize their workflows.\" left_image=\"services/4.png\" right_image=\"galleries/1.png\" quantity=\"6\" style=\"style-3\"][/content-rich-fields]</div><div>[content-rich-fields title=\"Effective Networking for Business Professionals\" description=\"Discover techniques and best practices for effective networking to build valuable connections and expand your professional reach.\" right_image=\"galleries/1.png\" right_link=\"https://www.youtube.com/watch?v=JAiKnnb9dH8\" quantity=\"4\" title_1=\"100% Better results\" description_1=\"Finance Helps You To Convert Into A Strategic Asset Get.\" title_2=\"Valuable Ideas\" description_2=\"Finance Helps You To Convert Into A Strategic Asset Get. \" title_3=\"Budget Friendly Theme\" title_4=\"Happy Customers\" style=\"style-1\"][/content-rich-fields]</div><h2 class=\"title-two\">Productivity Hacks for Busy Entrepreneurs</h2><p>Explore practical productivity hacks and time management strategies designed to help busy entrepreneurs optimize their workflows.</p><div>[content-collapse quantity=\"3\" title_1=\"What does your Financial Analysis service entail?\" description_1=\"Our Financial Analysis service is a comprehensive examination of your financial data and operations. We meticulously review your income statements, balance sheets, cash flow statements, and other financial records. We also assess your business processes, cost structures, and revenue streams.\" title_2=\"How can Financial Analysis benefit my business?\" description_2=\"Financial Analysis can benefit your business in several ways. It offers a deep understanding of your financial health, helping you make informed decisions. By identifying cost-saving opportunities and revenue growth potential, it can significantly improve your bottom line. \" title_3=\"What does Tax Strategy involve?\" description_3=\"Our Tax Strategy services focus on optimizing your tax position while ensuring strict compliance with tax laws and regulations. We begin by conducting a thorough analysis of your financial records, transactions, and tax obligations.\"][/content-collapse]</div>',1,'services/1.png','[\"services\\/4.png\"]',603,'published','2025-01-28 00:59:14','2025-01-28 00:59:14',0),(10,1,'Operations Expert','Assists in optimizing business processes and operational efficiency.','<div>[content-rich-fields title=\"The Power of Data Analytics in Business Decision-Making\" description=\"Discover how data analytics can transform decision-making processes, drive innovation, and enhance competitiveness in today’s business world.\" right_image=\"galleries/1.png\" quantity=\"6\" title_1=\" Growing Business\" description_1=\"Finance Helps You To Convert Into A Strategic Asset Get.\" icon_1=\"flaticon-business-presentation\" title_2=\"Finance Investment\" description_2=\"Finance Investment Convert Into A Strategic Asset Get.\" icon_2=\"flaticon-investment\" title_3=\"Tax Advisory\" description_3=\"Tax Advisory Convert Into A Strategic Asset Get.\" icon_3=\"flaticon-taxes\" style=\"style-2\"][/content-rich-fields]</div><p>Learn how resilience can be a powerful asset in business, enabling adaptability, growth, and the ability to overcome challenges.</p><div>[content-rich-fields title=\"Productivity Hacks for Busy Entrepreneurs\" description=\"Explore practical productivity hacks and time management strategies designed to help busy entrepreneurs optimize their workflows.\" left_image=\"services/4.png\" right_image=\"galleries/1.png\" quantity=\"6\" style=\"style-3\"][/content-rich-fields]</div><h2 class=\"title-two\">Productivity Hacks for Busy Entrepreneurs</h2><p>Explore practical productivity hacks and time management strategies designed to help busy entrepreneurs optimize their workflows.</p><div>[content-collapse quantity=\"3\" title_1=\"What does your Financial Analysis service entail?\" description_1=\"Our Financial Analysis service is a comprehensive examination of your financial data and operations. We meticulously review your income statements, balance sheets, cash flow statements, and other financial records. We also assess your business processes, cost structures, and revenue streams.\" title_2=\"How can Financial Analysis benefit my business?\" description_2=\"Financial Analysis can benefit your business in several ways. It offers a deep understanding of your financial health, helping you make informed decisions. By identifying cost-saving opportunities and revenue growth potential, it can significantly improve your bottom line. \" title_3=\"What does Tax Strategy involve?\" description_3=\"Our Tax Strategy services focus on optimizing your tax position while ensuring strict compliance with tax laws and regulations. We begin by conducting a thorough analysis of your financial records, transactions, and tax obligations.\"][/content-collapse]</div>',1,'services/2.png','[\"services\\/4.png\"]',8921,'published','2025-01-28 00:59:14','2025-01-28 00:59:14',0),(11,4,'Profit Strategist','Develops strategies to maximize profits and enhance overall financial performance.','<div>[content-rich-fields title=\"Productivity Hacks for Busy Entrepreneurs\" description=\"Explore practical productivity hacks and time management strategies designed to help busy entrepreneurs optimize their workflows.\" left_image=\"services/4.png\" right_image=\"galleries/1.png\" quantity=\"6\" style=\"style-3\"][/content-rich-fields]</div><p>Learn how resilience can be a powerful asset in business, enabling adaptability, growth, and the ability to overcome challenges.</p><div>[content-rich-fields title=\"Creating a Customer-Centric Brand Experience\" description=\"Delve into the concept of creating a customer-centric brand experience that fosters loyalty and drives business success.\" right_image=\"galleries/1.png\" right_link=\"https://www.youtube.com/watch?v=JAiKnnb9dH8\" quantity=\"4\" title_1=\"100% Better results\" description_1=\"Finance Helps You To Convert Into A Strategic Asset Get.\" title_2=\"Valuable Ideas\" description_2=\"Finance Helps You To Convert Into A Strategic Asset Get. \" title_3=\"Budget Friendly Theme\" title_4=\"Happy Customers\" style=\"style-1\"][/content-rich-fields]</div><h2 class=\"title-two\">Productivity Hacks for Busy Entrepreneurs</h2><p>Explore practical productivity hacks and time management strategies designed to help busy entrepreneurs optimize their workflows.</p><div>[content-collapse quantity=\"3\" title_1=\"What does your Financial Analysis service entail?\" description_1=\"Our Financial Analysis service is a comprehensive examination of your financial data and operations. We meticulously review your income statements, balance sheets, cash flow statements, and other financial records. We also assess your business processes, cost structures, and revenue streams.\" title_2=\"How can Financial Analysis benefit my business?\" description_2=\"Financial Analysis can benefit your business in several ways. It offers a deep understanding of your financial health, helping you make informed decisions. By identifying cost-saving opportunities and revenue growth potential, it can significantly improve your bottom line. \" title_3=\"What does Tax Strategy involve?\" description_3=\"Our Tax Strategy services focus on optimizing your tax position while ensuring strict compliance with tax laws and regulations. We begin by conducting a thorough analysis of your financial records, transactions, and tax obligations.\"][/content-collapse]</div>',1,'services/1.png','[\"services\\/4.png\"]',9557,'published','2025-01-28 00:59:14','2025-01-28 00:59:14',0),(12,1,'Objective Planner','Sets clear and aligned business objectives to drive success and growth.','<p>Learn how resilience can be a powerful asset in business, enabling adaptability, growth, and the ability to overcome challenges.</p><div>[content-rich-fields title=\"The Power of Data Analytics in Business Decision-Making\" description=\"Discover how data analytics can transform decision-making processes, drive innovation, and enhance competitiveness in today’s business world.\" right_image=\"galleries/1.png\" quantity=\"6\" title_1=\" Growing Business\" description_1=\"Finance Helps You To Convert Into A Strategic Asset Get.\" icon_1=\"flaticon-business-presentation\" title_2=\"Finance Investment\" description_2=\"Finance Investment Convert Into A Strategic Asset Get.\" icon_2=\"flaticon-investment\" title_3=\"Tax Advisory\" description_3=\"Tax Advisory Convert Into A Strategic Asset Get.\" icon_3=\"flaticon-taxes\" style=\"style-2\"][/content-rich-fields]</div><p>Learn how resilience can be a powerful asset in business, enabling adaptability, growth, and the ability to overcome challenges.</p><div>[content-rich-fields title=\"Productivity Hacks for Busy Entrepreneurs\" description=\"Explore practical productivity hacks and time management strategies designed to help busy entrepreneurs optimize their workflows.\" left_image=\"services/4.png\" right_image=\"galleries/1.png\" quantity=\"6\" style=\"style-3\"][/content-rich-fields]</div><h2 class=\"title-two\">Building a Strong Employer Brand for Talent Acquisition</h2><p>Explore the importance of building a strong employer brand to attract and retain top talent in a competitive job market.</p><div>[content-collapse quantity=\"3\" title_1=\"What does your Financial Analysis service entail?\" description_1=\"Our Financial Analysis service is a comprehensive examination of your financial data and operations. We meticulously review your income statements, balance sheets, cash flow statements, and other financial records. We also assess your business processes, cost structures, and revenue streams.\" title_2=\"How can Financial Analysis benefit my business?\" description_2=\"Financial Analysis can benefit your business in several ways. It offers a deep understanding of your financial health, helping you make informed decisions. By identifying cost-saving opportunities and revenue growth potential, it can significantly improve your bottom line. \" title_3=\"What does Tax Strategy involve?\" description_3=\"Our Tax Strategy services focus on optimizing your tax position while ensuring strict compliance with tax laws and regulations. We begin by conducting a thorough analysis of your financial records, transactions, and tax obligations.\"][/content-collapse]</div>',0,'services/2.png','[\"services\\/4.png\"]',358,'published','2025-01-28 00:59:14','2025-01-28 00:59:14',0),(13,1,'Goal Specialist','Guides organizations in defining and achieving their strategic goals.','<h2 class=\"title-two\">Productivity Hacks for Busy Entrepreneurs</h2><p>Learn how resilience can be a powerful asset in business, enabling adaptability, growth, and the ability to overcome challenges.</p><div>[content-rich-fields title=\"Creating a Customer-Centric Brand Experience\" description=\"Delve into the concept of creating a customer-centric brand experience that fosters loyalty and drives business success.\" right_image=\"galleries/1.png\" right_link=\"https://www.youtube.com/watch?v=JAiKnnb9dH8\" quantity=\"4\" title_1=\"100% Better results\" description_1=\"Finance Helps You To Convert Into A Strategic Asset Get.\" title_2=\"Valuable Ideas\" description_2=\"Finance Helps You To Convert Into A Strategic Asset Get. \" title_3=\"Budget Friendly Theme\" title_4=\"Happy Customers\" style=\"style-1\"][/content-rich-fields]</div><div>[content-rich-fields title=\"Productivity Hacks for Busy Entrepreneurs\" description=\"Explore practical productivity hacks and time management strategies designed to help busy entrepreneurs optimize their workflows.\" left_image=\"services/4.png\" right_image=\"galleries/1.png\" quantity=\"6\" style=\"style-3\"][/content-rich-fields]</div><div>[content-collapse quantity=\"3\" title_1=\"What does your Financial Analysis service entail?\" description_1=\"Our Financial Analysis service is a comprehensive examination of your financial data and operations. We meticulously review your income statements, balance sheets, cash flow statements, and other financial records. We also assess your business processes, cost structures, and revenue streams.\" title_2=\"How can Financial Analysis benefit my business?\" description_2=\"Financial Analysis can benefit your business in several ways. It offers a deep understanding of your financial health, helping you make informed decisions. By identifying cost-saving opportunities and revenue growth potential, it can significantly improve your bottom line. \" title_3=\"What does Tax Strategy involve?\" description_3=\"Our Tax Strategy services focus on optimizing your tax position while ensuring strict compliance with tax laws and regulations. We begin by conducting a thorough analysis of your financial records, transactions, and tax obligations.\"][/content-collapse]</div><p>Explore practical productivity hacks and time management strategies designed to help busy entrepreneurs optimize their workflows.</p>',1,'services/3.png','[\"services\\/4.png\"]',2190,'published','2025-01-28 00:59:14','2025-01-28 00:59:14',0);
/*!40000 ALTER TABLE `pf_services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pf_services_translations`
--

DROP TABLE IF EXISTS `pf_services_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pf_services_translations` (
  `lang_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pf_services_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`lang_code`,`pf_services_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pf_services_translations`
--

LOCK TABLES `pf_services_translations` WRITE;
/*!40000 ALTER TABLE `pf_services_translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `pf_services_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_categories`
--

DROP TABLE IF EXISTS `post_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post_categories` (
  `category_id` bigint unsigned NOT NULL,
  `post_id` bigint unsigned NOT NULL,
  KEY `post_categories_category_id_index` (`category_id`),
  KEY `post_categories_post_id_index` (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_categories`
--

LOCK TABLES `post_categories` WRITE;
/*!40000 ALTER TABLE `post_categories` DISABLE KEYS */;
INSERT INTO `post_categories` VALUES (4,1),(7,1),(2,2),(5,2),(2,3),(7,3),(1,4),(6,4),(2,5),(5,5),(2,6),(6,6),(1,7),(7,7),(3,8),(7,8),(2,9),(5,9),(1,10),(5,10),(2,11),(7,11),(4,12),(6,12);
/*!40000 ALTER TABLE `post_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_tags`
--

DROP TABLE IF EXISTS `post_tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post_tags` (
  `tag_id` bigint unsigned NOT NULL,
  `post_id` bigint unsigned NOT NULL,
  KEY `post_tags_tag_id_index` (`tag_id`),
  KEY `post_tags_post_id_index` (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_tags`
--

LOCK TABLES `post_tags` WRITE;
/*!40000 ALTER TABLE `post_tags` DISABLE KEYS */;
INSERT INTO `post_tags` VALUES (1,1),(2,1),(3,1),(1,2),(2,2),(3,2),(1,3),(2,3),(3,3),(1,4),(2,4),(3,4),(1,5),(2,5),(3,5),(1,6),(2,6),(3,6),(1,7),(2,7),(3,7),(1,8),(2,8),(3,8),(1,9),(2,9),(3,9),(1,10),(2,10),(3,10),(1,11),(2,11),(3,11),(1,12),(2,12),(3,12);
/*!40000 ALTER TABLE `post_tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `status` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `author_id` bigint unsigned DEFAULT NULL,
  `author_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_featured` tinyint unsigned NOT NULL DEFAULT '0',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `views` int unsigned NOT NULL DEFAULT '0',
  `format_type` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `posts_status_index` (`status`),
  KEY `posts_author_id_index` (`author_id`),
  KEY `posts_author_type_index` (`author_type`),
  KEY `posts_created_at_index` (`created_at`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'10 Strategies for Business Growth in 2023','Hear inspiring stories of startup success and uncover valuable lessons from industry leaders who turned ideas into thriving businesses.','<p>when an unknown printer took ar galley offer type year anddey scrambled  make type aewer specimen book bethas survived not only five when annery unknown printer.eed a little help from our friends from time to time. Although we offer the one-stop convenience.</p>\n<p>eed a little help from our friends from time to time. Although we offer the one-stop convenience of annery integrated range of legal, financial services under one roof, there are occasions when our clients areaneed specia- list advice beyond the scope of our own expertise.</p>\n<blockquote>\n    <p>“ urabitur varius eros rutrum consequat Mauris aewa sollicitudin enim condimentum luctus enim justo non molestie nisl ”</p>\n</blockquote>\n<h4 class=\"title-two\">Speed Optimized</h4>\n<p>when an unknown printer took a galley of type and scrambled it to make a type specimen bookhas a not only five centuries, but also the leap into electronic typesetting, remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p>\n<div class=\"bd-inner-wrap\">\n    <div class=\"row align-items-center\">\n        <div class=\"col-46\">\n            <div class=\"thumb\">\n                <img src=\"http://gerow.test/storage/news/12.png\" alt=\"News\">\n                <a href=\"https://www.youtube.com/watch?v=v2qeqkKgw7U\" class=\"play-btn popup-video\"><i class=\"fas fa-play\"></i></a>\n            </div>\n        </div>\n        <div class=\"col-54\">\n            <div class=\"content\">\n                <h3 class=\"title-two\">Conduct replied off whether arrived adapted</h3>\n                <p>when an unknown printer took a galley type remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p>\n                <ul class=\"list-wrap\">\n                    <li><i class=\"fas fa-check-circle\"></i>Commercial Property Insurance</li>\n                    <li><i class=\"fas fa-check-circle\"></i>Budget Friendly Theme</li>\n                    <li><i class=\"fas fa-check-circle\"></i>Happy Customers</li>\n                </ul>\n            </div>\n        </div>\n    </div>\n</div>\n<p>when an unknown printer took a galley of type and scrambled it to make a type specimen bookhas a not only five centuries, but also the leap into electronic typesetting, remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p>\n','published',1,'Botble\\ACL\\Models\\User',1,'news/1.png',1802,NULL,'2025-01-28 00:59:12','2025-01-28 00:59:12'),(2,'Navigating Tax Season: Tips for Small Businesses','Dive into the qualities and strategies of effective leadership that inspire teams, foster growth, and achieve remarkable success.','<p>when an unknown printer took ar galley offer type year anddey scrambled  make type aewer specimen book bethas survived not only five when annery unknown printer.eed a little help from our friends from time to time. Although we offer the one-stop convenience.</p>\n<p>eed a little help from our friends from time to time. Although we offer the one-stop convenience of annery integrated range of legal, financial services under one roof, there are occasions when our clients areaneed specia- list advice beyond the scope of our own expertise.</p>\n<blockquote>\n    <p>“ urabitur varius eros rutrum consequat Mauris aewa sollicitudin enim condimentum luctus enim justo non molestie nisl ”</p>\n</blockquote>\n<h4 class=\"title-two\">Speed Optimized</h4>\n<p>when an unknown printer took a galley of type and scrambled it to make a type specimen bookhas a not only five centuries, but also the leap into electronic typesetting, remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p>\n<div class=\"bd-inner-wrap\">\n    <div class=\"row align-items-center\">\n        <div class=\"col-46\">\n            <div class=\"thumb\">\n                <img src=\"http://gerow.test/storage/news/12.png\" alt=\"News\">\n                <a href=\"https://www.youtube.com/watch?v=v2qeqkKgw7U\" class=\"play-btn popup-video\"><i class=\"fas fa-play\"></i></a>\n            </div>\n        </div>\n        <div class=\"col-54\">\n            <div class=\"content\">\n                <h3 class=\"title-two\">Conduct replied off whether arrived adapted</h3>\n                <p>when an unknown printer took a galley type remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p>\n                <ul class=\"list-wrap\">\n                    <li><i class=\"fas fa-check-circle\"></i>Commercial Property Insurance</li>\n                    <li><i class=\"fas fa-check-circle\"></i>Budget Friendly Theme</li>\n                    <li><i class=\"fas fa-check-circle\"></i>Happy Customers</li>\n                </ul>\n            </div>\n        </div>\n    </div>\n</div>\n<p>when an unknown printer took a galley of type and scrambled it to make a type specimen bookhas a not only five centuries, but also the leap into electronic typesetting, remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p>\n','published',1,'Botble\\ACL\\Models\\User',1,'news/2.png',1616,NULL,'2025-01-28 00:59:12','2025-01-28 00:59:12'),(3,'The Power of Data Analytics in Business Decision-Making','Get expert advice on how small businesses can navigate tax season efficiently, minimize liabilities, and stay compliant with tax regulations.','<p>when an unknown printer took ar galley offer type year anddey scrambled  make type aewer specimen book bethas survived not only five when annery unknown printer.eed a little help from our friends from time to time. Although we offer the one-stop convenience.</p>\n<p>eed a little help from our friends from time to time. Although we offer the one-stop convenience of annery integrated range of legal, financial services under one roof, there are occasions when our clients areaneed specia- list advice beyond the scope of our own expertise.</p>\n<blockquote>\n    <p>“ urabitur varius eros rutrum consequat Mauris aewa sollicitudin enim condimentum luctus enim justo non molestie nisl ”</p>\n</blockquote>\n<h4 class=\"title-two\">Speed Optimized</h4>\n<p>when an unknown printer took a galley of type and scrambled it to make a type specimen bookhas a not only five centuries, but also the leap into electronic typesetting, remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p>\n<div class=\"bd-inner-wrap\">\n    <div class=\"row align-items-center\">\n        <div class=\"col-46\">\n            <div class=\"thumb\">\n                <img src=\"http://gerow.test/storage/news/12.png\" alt=\"News\">\n                <a href=\"https://www.youtube.com/watch?v=v2qeqkKgw7U\" class=\"play-btn popup-video\"><i class=\"fas fa-play\"></i></a>\n            </div>\n        </div>\n        <div class=\"col-54\">\n            <div class=\"content\">\n                <h3 class=\"title-two\">Conduct replied off whether arrived adapted</h3>\n                <p>when an unknown printer took a galley type remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p>\n                <ul class=\"list-wrap\">\n                    <li><i class=\"fas fa-check-circle\"></i>Commercial Property Insurance</li>\n                    <li><i class=\"fas fa-check-circle\"></i>Budget Friendly Theme</li>\n                    <li><i class=\"fas fa-check-circle\"></i>Happy Customers</li>\n                </ul>\n            </div>\n        </div>\n    </div>\n</div>\n<p>when an unknown printer took a galley of type and scrambled it to make a type specimen bookhas a not only five centuries, but also the leap into electronic typesetting, remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p>\n','published',1,'Botble\\ACL\\Models\\User',1,'news/3.png',646,NULL,'2025-01-28 00:59:12','2025-01-28 00:59:12'),(4,'How to Create a Winning Marketing Plan','Learn the essential steps and elements to craft a winning marketing plan that effectively reaches your target audience and drives results.','<p>when an unknown printer took ar galley offer type year anddey scrambled  make type aewer specimen book bethas survived not only five when annery unknown printer.eed a little help from our friends from time to time. Although we offer the one-stop convenience.</p>\n<p>eed a little help from our friends from time to time. Although we offer the one-stop convenience of annery integrated range of legal, financial services under one roof, there are occasions when our clients areaneed specia- list advice beyond the scope of our own expertise.</p>\n<blockquote>\n    <p>“ urabitur varius eros rutrum consequat Mauris aewa sollicitudin enim condimentum luctus enim justo non molestie nisl ”</p>\n</blockquote>\n<h4 class=\"title-two\">Speed Optimized</h4>\n<p>when an unknown printer took a galley of type and scrambled it to make a type specimen bookhas a not only five centuries, but also the leap into electronic typesetting, remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p>\n<div class=\"bd-inner-wrap\">\n    <div class=\"row align-items-center\">\n        <div class=\"col-46\">\n            <div class=\"thumb\">\n                <img src=\"http://gerow.test/storage/news/12.png\" alt=\"News\">\n                <a href=\"https://www.youtube.com/watch?v=v2qeqkKgw7U\" class=\"play-btn popup-video\"><i class=\"fas fa-play\"></i></a>\n            </div>\n        </div>\n        <div class=\"col-54\">\n            <div class=\"content\">\n                <h3 class=\"title-two\">Conduct replied off whether arrived adapted</h3>\n                <p>when an unknown printer took a galley type remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p>\n                <ul class=\"list-wrap\">\n                    <li><i class=\"fas fa-check-circle\"></i>Commercial Property Insurance</li>\n                    <li><i class=\"fas fa-check-circle\"></i>Budget Friendly Theme</li>\n                    <li><i class=\"fas fa-check-circle\"></i>Happy Customers</li>\n                </ul>\n            </div>\n        </div>\n    </div>\n</div>\n<p>when an unknown printer took a galley of type and scrambled it to make a type specimen bookhas a not only five centuries, but also the leap into electronic typesetting, remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p>\n','published',1,'Botble\\ACL\\Models\\User',1,'news/4.png',625,NULL,'2025-01-28 00:59:12','2025-01-28 00:59:12'),(5,'Mastering the Art of Financial Planning for Entrepreneurs','Get expert advice on how small businesses can navigate tax season efficiently, minimize liabilities, and stay compliant with tax regulations.','<p>when an unknown printer took ar galley offer type year anddey scrambled  make type aewer specimen book bethas survived not only five when annery unknown printer.eed a little help from our friends from time to time. Although we offer the one-stop convenience.</p>\n<p>eed a little help from our friends from time to time. Although we offer the one-stop convenience of annery integrated range of legal, financial services under one roof, there are occasions when our clients areaneed specia- list advice beyond the scope of our own expertise.</p>\n<blockquote>\n    <p>“ urabitur varius eros rutrum consequat Mauris aewa sollicitudin enim condimentum luctus enim justo non molestie nisl ”</p>\n</blockquote>\n<h4 class=\"title-two\">Speed Optimized</h4>\n<p>when an unknown printer took a galley of type and scrambled it to make a type specimen bookhas a not only five centuries, but also the leap into electronic typesetting, remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p>\n<div class=\"bd-inner-wrap\">\n    <div class=\"row align-items-center\">\n        <div class=\"col-46\">\n            <div class=\"thumb\">\n                <img src=\"http://gerow.test/storage/news/12.png\" alt=\"News\">\n                <a href=\"https://www.youtube.com/watch?v=v2qeqkKgw7U\" class=\"play-btn popup-video\"><i class=\"fas fa-play\"></i></a>\n            </div>\n        </div>\n        <div class=\"col-54\">\n            <div class=\"content\">\n                <h3 class=\"title-two\">Conduct replied off whether arrived adapted</h3>\n                <p>when an unknown printer took a galley type remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p>\n                <ul class=\"list-wrap\">\n                    <li><i class=\"fas fa-check-circle\"></i>Commercial Property Insurance</li>\n                    <li><i class=\"fas fa-check-circle\"></i>Budget Friendly Theme</li>\n                    <li><i class=\"fas fa-check-circle\"></i>Happy Customers</li>\n                </ul>\n            </div>\n        </div>\n    </div>\n</div>\n<p>when an unknown printer took a galley of type and scrambled it to make a type specimen bookhas a not only five centuries, but also the leap into electronic typesetting, remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p>\n','published',1,'Botble\\ACL\\Models\\User',1,'news/5.png',1882,NULL,'2025-01-28 00:59:12','2025-01-28 00:59:12'),(6,'The Role of Innovation in Modern Business','Learn how businesses can leverage technology to gain a competitive edge, streamline operations, and deliver exceptional value to customers.','<p>when an unknown printer took ar galley offer type year anddey scrambled  make type aewer specimen book bethas survived not only five when annery unknown printer.eed a little help from our friends from time to time. Although we offer the one-stop convenience.</p>\n<p>eed a little help from our friends from time to time. Although we offer the one-stop convenience of annery integrated range of legal, financial services under one roof, there are occasions when our clients areaneed specia- list advice beyond the scope of our own expertise.</p>\n<blockquote>\n    <p>“ urabitur varius eros rutrum consequat Mauris aewa sollicitudin enim condimentum luctus enim justo non molestie nisl ”</p>\n</blockquote>\n<h4 class=\"title-two\">Speed Optimized</h4>\n<p>when an unknown printer took a galley of type and scrambled it to make a type specimen bookhas a not only five centuries, but also the leap into electronic typesetting, remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p>\n<div class=\"bd-inner-wrap\">\n    <div class=\"row align-items-center\">\n        <div class=\"col-46\">\n            <div class=\"thumb\">\n                <img src=\"http://gerow.test/storage/news/12.png\" alt=\"News\">\n                <a href=\"https://www.youtube.com/watch?v=v2qeqkKgw7U\" class=\"play-btn popup-video\"><i class=\"fas fa-play\"></i></a>\n            </div>\n        </div>\n        <div class=\"col-54\">\n            <div class=\"content\">\n                <h3 class=\"title-two\">Conduct replied off whether arrived adapted</h3>\n                <p>when an unknown printer took a galley type remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p>\n                <ul class=\"list-wrap\">\n                    <li><i class=\"fas fa-check-circle\"></i>Commercial Property Insurance</li>\n                    <li><i class=\"fas fa-check-circle\"></i>Budget Friendly Theme</li>\n                    <li><i class=\"fas fa-check-circle\"></i>Happy Customers</li>\n                </ul>\n            </div>\n        </div>\n    </div>\n</div>\n<p>when an unknown printer took a galley of type and scrambled it to make a type specimen bookhas a not only five centuries, but also the leap into electronic typesetting, remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p>\n','published',1,'Botble\\ACL\\Models\\User',1,'news/6.png',759,NULL,'2025-01-28 00:59:12','2025-01-28 00:59:12'),(7,'Startup Success Stories: Lessons from Industry Leaders','Discover strategies for achieving work-life integration as a business owner, ensuring well-being and productivity in both spheres.','<p>when an unknown printer took ar galley offer type year anddey scrambled  make type aewer specimen book bethas survived not only five when annery unknown printer.eed a little help from our friends from time to time. Although we offer the one-stop convenience.</p>\n<p>eed a little help from our friends from time to time. Although we offer the one-stop convenience of annery integrated range of legal, financial services under one roof, there are occasions when our clients areaneed specia- list advice beyond the scope of our own expertise.</p>\n<blockquote>\n    <p>“ urabitur varius eros rutrum consequat Mauris aewa sollicitudin enim condimentum luctus enim justo non molestie nisl ”</p>\n</blockquote>\n<h4 class=\"title-two\">Speed Optimized</h4>\n<p>when an unknown printer took a galley of type and scrambled it to make a type specimen bookhas a not only five centuries, but also the leap into electronic typesetting, remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p>\n<div class=\"bd-inner-wrap\">\n    <div class=\"row align-items-center\">\n        <div class=\"col-46\">\n            <div class=\"thumb\">\n                <img src=\"http://gerow.test/storage/news/12.png\" alt=\"News\">\n                <a href=\"https://www.youtube.com/watch?v=v2qeqkKgw7U\" class=\"play-btn popup-video\"><i class=\"fas fa-play\"></i></a>\n            </div>\n        </div>\n        <div class=\"col-54\">\n            <div class=\"content\">\n                <h3 class=\"title-two\">Conduct replied off whether arrived adapted</h3>\n                <p>when an unknown printer took a galley type remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p>\n                <ul class=\"list-wrap\">\n                    <li><i class=\"fas fa-check-circle\"></i>Commercial Property Insurance</li>\n                    <li><i class=\"fas fa-check-circle\"></i>Budget Friendly Theme</li>\n                    <li><i class=\"fas fa-check-circle\"></i>Happy Customers</li>\n                </ul>\n            </div>\n        </div>\n    </div>\n</div>\n<p>when an unknown printer took a galley of type and scrambled it to make a type specimen bookhas a not only five centuries, but also the leap into electronic typesetting, remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p>\n','published',1,'Botble\\ACL\\Models\\User',0,'news/7.png',1188,NULL,'2025-01-28 00:59:12','2025-01-28 00:59:12'),(8,'Balancing Act: Work-Life Integration for Business Owners','Learn how businesses can leverage technology to gain a competitive edge, streamline operations, and deliver exceptional value to customers.','<p>when an unknown printer took ar galley offer type year anddey scrambled  make type aewer specimen book bethas survived not only five when annery unknown printer.eed a little help from our friends from time to time. Although we offer the one-stop convenience.</p>\n<p>eed a little help from our friends from time to time. Although we offer the one-stop convenience of annery integrated range of legal, financial services under one roof, there are occasions when our clients areaneed specia- list advice beyond the scope of our own expertise.</p>\n<blockquote>\n    <p>“ urabitur varius eros rutrum consequat Mauris aewa sollicitudin enim condimentum luctus enim justo non molestie nisl ”</p>\n</blockquote>\n<h4 class=\"title-two\">Speed Optimized</h4>\n<p>when an unknown printer took a galley of type and scrambled it to make a type specimen bookhas a not only five centuries, but also the leap into electronic typesetting, remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p>\n<div class=\"bd-inner-wrap\">\n    <div class=\"row align-items-center\">\n        <div class=\"col-46\">\n            <div class=\"thumb\">\n                <img src=\"http://gerow.test/storage/news/12.png\" alt=\"News\">\n                <a href=\"https://www.youtube.com/watch?v=v2qeqkKgw7U\" class=\"play-btn popup-video\"><i class=\"fas fa-play\"></i></a>\n            </div>\n        </div>\n        <div class=\"col-54\">\n            <div class=\"content\">\n                <h3 class=\"title-two\">Conduct replied off whether arrived adapted</h3>\n                <p>when an unknown printer took a galley type remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p>\n                <ul class=\"list-wrap\">\n                    <li><i class=\"fas fa-check-circle\"></i>Commercial Property Insurance</li>\n                    <li><i class=\"fas fa-check-circle\"></i>Budget Friendly Theme</li>\n                    <li><i class=\"fas fa-check-circle\"></i>Happy Customers</li>\n                </ul>\n            </div>\n        </div>\n    </div>\n</div>\n<p>when an unknown printer took a galley of type and scrambled it to make a type specimen bookhas a not only five centuries, but also the leap into electronic typesetting, remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p>\n','published',1,'Botble\\ACL\\Models\\User',0,'news/8.png',1223,NULL,'2025-01-28 00:59:12','2025-01-28 00:59:12'),(9,'The Impact of Sustainable Practices on Business Sustainability','Get expert advice on how small businesses can navigate tax season efficiently, minimize liabilities, and stay compliant with tax regulations.','<p>when an unknown printer took ar galley offer type year anddey scrambled  make type aewer specimen book bethas survived not only five when annery unknown printer.eed a little help from our friends from time to time. Although we offer the one-stop convenience.</p>\n<p>eed a little help from our friends from time to time. Although we offer the one-stop convenience of annery integrated range of legal, financial services under one roof, there are occasions when our clients areaneed specia- list advice beyond the scope of our own expertise.</p>\n<blockquote>\n    <p>“ urabitur varius eros rutrum consequat Mauris aewa sollicitudin enim condimentum luctus enim justo non molestie nisl ”</p>\n</blockquote>\n<h4 class=\"title-two\">Speed Optimized</h4>\n<p>when an unknown printer took a galley of type and scrambled it to make a type specimen bookhas a not only five centuries, but also the leap into electronic typesetting, remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p>\n<div class=\"bd-inner-wrap\">\n    <div class=\"row align-items-center\">\n        <div class=\"col-46\">\n            <div class=\"thumb\">\n                <img src=\"http://gerow.test/storage/news/12.png\" alt=\"News\">\n                <a href=\"https://www.youtube.com/watch?v=v2qeqkKgw7U\" class=\"play-btn popup-video\"><i class=\"fas fa-play\"></i></a>\n            </div>\n        </div>\n        <div class=\"col-54\">\n            <div class=\"content\">\n                <h3 class=\"title-two\">Conduct replied off whether arrived adapted</h3>\n                <p>when an unknown printer took a galley type remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p>\n                <ul class=\"list-wrap\">\n                    <li><i class=\"fas fa-check-circle\"></i>Commercial Property Insurance</li>\n                    <li><i class=\"fas fa-check-circle\"></i>Budget Friendly Theme</li>\n                    <li><i class=\"fas fa-check-circle\"></i>Happy Customers</li>\n                </ul>\n            </div>\n        </div>\n    </div>\n</div>\n<p>when an unknown printer took a galley of type and scrambled it to make a type specimen bookhas a not only five centuries, but also the leap into electronic typesetting, remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p>\n','published',1,'Botble\\ACL\\Models\\User',0,'news/9.png',2360,NULL,'2025-01-28 00:59:12','2025-01-28 00:59:12'),(10,'Building a Strong Employer Brand for Talent Acquisition','Learn the essential steps and elements to craft a winning marketing plan that effectively reaches your target audience and drives results.','<p>when an unknown printer took ar galley offer type year anddey scrambled  make type aewer specimen book bethas survived not only five when annery unknown printer.eed a little help from our friends from time to time. Although we offer the one-stop convenience.</p>\n<p>eed a little help from our friends from time to time. Although we offer the one-stop convenience of annery integrated range of legal, financial services under one roof, there are occasions when our clients areaneed specia- list advice beyond the scope of our own expertise.</p>\n<blockquote>\n    <p>“ urabitur varius eros rutrum consequat Mauris aewa sollicitudin enim condimentum luctus enim justo non molestie nisl ”</p>\n</blockquote>\n<h4 class=\"title-two\">Speed Optimized</h4>\n<p>when an unknown printer took a galley of type and scrambled it to make a type specimen bookhas a not only five centuries, but also the leap into electronic typesetting, remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p>\n<div class=\"bd-inner-wrap\">\n    <div class=\"row align-items-center\">\n        <div class=\"col-46\">\n            <div class=\"thumb\">\n                <img src=\"http://gerow.test/storage/news/12.png\" alt=\"News\">\n                <a href=\"https://www.youtube.com/watch?v=v2qeqkKgw7U\" class=\"play-btn popup-video\"><i class=\"fas fa-play\"></i></a>\n            </div>\n        </div>\n        <div class=\"col-54\">\n            <div class=\"content\">\n                <h3 class=\"title-two\">Conduct replied off whether arrived adapted</h3>\n                <p>when an unknown printer took a galley type remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p>\n                <ul class=\"list-wrap\">\n                    <li><i class=\"fas fa-check-circle\"></i>Commercial Property Insurance</li>\n                    <li><i class=\"fas fa-check-circle\"></i>Budget Friendly Theme</li>\n                    <li><i class=\"fas fa-check-circle\"></i>Happy Customers</li>\n                </ul>\n            </div>\n        </div>\n    </div>\n</div>\n<p>when an unknown printer took a galley of type and scrambled it to make a type specimen bookhas a not only five centuries, but also the leap into electronic typesetting, remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p>\n','published',1,'Botble\\ACL\\Models\\User',0,'news/10.png',1834,NULL,'2025-01-28 00:59:12','2025-01-28 00:59:12'),(11,'Productivity Hacks for Busy Entrepreneurs','Learn the essential steps and elements to craft a winning marketing plan that effectively reaches your target audience and drives results.','<p>when an unknown printer took ar galley offer type year anddey scrambled  make type aewer specimen book bethas survived not only five when annery unknown printer.eed a little help from our friends from time to time. Although we offer the one-stop convenience.</p>\n<p>eed a little help from our friends from time to time. Although we offer the one-stop convenience of annery integrated range of legal, financial services under one roof, there are occasions when our clients areaneed specia- list advice beyond the scope of our own expertise.</p>\n<blockquote>\n    <p>“ urabitur varius eros rutrum consequat Mauris aewa sollicitudin enim condimentum luctus enim justo non molestie nisl ”</p>\n</blockquote>\n<h4 class=\"title-two\">Speed Optimized</h4>\n<p>when an unknown printer took a galley of type and scrambled it to make a type specimen bookhas a not only five centuries, but also the leap into electronic typesetting, remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p>\n<div class=\"bd-inner-wrap\">\n    <div class=\"row align-items-center\">\n        <div class=\"col-46\">\n            <div class=\"thumb\">\n                <img src=\"http://gerow.test/storage/news/12.png\" alt=\"News\">\n                <a href=\"https://www.youtube.com/watch?v=v2qeqkKgw7U\" class=\"play-btn popup-video\"><i class=\"fas fa-play\"></i></a>\n            </div>\n        </div>\n        <div class=\"col-54\">\n            <div class=\"content\">\n                <h3 class=\"title-two\">Conduct replied off whether arrived adapted</h3>\n                <p>when an unknown printer took a galley type remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p>\n                <ul class=\"list-wrap\">\n                    <li><i class=\"fas fa-check-circle\"></i>Commercial Property Insurance</li>\n                    <li><i class=\"fas fa-check-circle\"></i>Budget Friendly Theme</li>\n                    <li><i class=\"fas fa-check-circle\"></i>Happy Customers</li>\n                </ul>\n            </div>\n        </div>\n    </div>\n</div>\n<p>when an unknown printer took a galley of type and scrambled it to make a type specimen bookhas a not only five centuries, but also the leap into electronic typesetting, remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p>\n','published',1,'Botble\\ACL\\Models\\User',0,'news/11.png',2136,NULL,'2025-01-28 00:59:12','2025-01-28 00:59:12'),(12,'The Human Factor: HR Best Practices for Businesses','Gain insights into the art of financial planning tailored to entrepreneurs, helping you secure your financial future and business success.','<p>when an unknown printer took ar galley offer type year anddey scrambled  make type aewer specimen book bethas survived not only five when annery unknown printer.eed a little help from our friends from time to time. Although we offer the one-stop convenience.</p>\n<p>eed a little help from our friends from time to time. Although we offer the one-stop convenience of annery integrated range of legal, financial services under one roof, there are occasions when our clients areaneed specia- list advice beyond the scope of our own expertise.</p>\n<blockquote>\n    <p>“ urabitur varius eros rutrum consequat Mauris aewa sollicitudin enim condimentum luctus enim justo non molestie nisl ”</p>\n</blockquote>\n<h4 class=\"title-two\">Speed Optimized</h4>\n<p>when an unknown printer took a galley of type and scrambled it to make a type specimen bookhas a not only five centuries, but also the leap into electronic typesetting, remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p>\n<div class=\"bd-inner-wrap\">\n    <div class=\"row align-items-center\">\n        <div class=\"col-46\">\n            <div class=\"thumb\">\n                <img src=\"http://gerow.test/storage/news/12.png\" alt=\"News\">\n                <a href=\"https://www.youtube.com/watch?v=v2qeqkKgw7U\" class=\"play-btn popup-video\"><i class=\"fas fa-play\"></i></a>\n            </div>\n        </div>\n        <div class=\"col-54\">\n            <div class=\"content\">\n                <h3 class=\"title-two\">Conduct replied off whether arrived adapted</h3>\n                <p>when an unknown printer took a galley type remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p>\n                <ul class=\"list-wrap\">\n                    <li><i class=\"fas fa-check-circle\"></i>Commercial Property Insurance</li>\n                    <li><i class=\"fas fa-check-circle\"></i>Budget Friendly Theme</li>\n                    <li><i class=\"fas fa-check-circle\"></i>Happy Customers</li>\n                </ul>\n            </div>\n        </div>\n    </div>\n</div>\n<p>when an unknown printer took a galley of type and scrambled it to make a type specimen bookhas a not only five centuries, but also the leap into electronic typesetting, remaining essentially unchan galley of type and scrambled it to make a type specimen book.</p>\n','published',1,'Botble\\ACL\\Models\\User',0,'news/12.png',636,NULL,'2025-01-28 00:59:12','2025-01-28 00:59:12');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts_translations`
--

DROP TABLE IF EXISTS `posts_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts_translations` (
  `lang_code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posts_id` bigint unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`lang_code`,`posts_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts_translations`
--

LOCK TABLES `posts_translations` WRITE;
/*!40000 ALTER TABLE `posts_translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `posts_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `revisions`
--

DROP TABLE IF EXISTS `revisions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `revisions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `revisionable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revisionable_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `key` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_value` text COLLATE utf8mb4_unicode_ci,
  `new_value` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `revisions_revisionable_id_revisionable_type_index` (`revisionable_id`,`revisionable_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `revisions`
--

LOCK TABLES `revisions` WRITE;
/*!40000 ALTER TABLE `revisions` DISABLE KEYS */;
/*!40000 ALTER TABLE `revisions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_users`
--

DROP TABLE IF EXISTS `role_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_users` (
  `user_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `role_users_user_id_index` (`user_id`),
  KEY `role_users_role_id_index` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_users`
--

LOCK TABLES `role_users` WRITE;
/*!40000 ALTER TABLE `role_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `description` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_default` tinyint unsigned NOT NULL DEFAULT '0',
  `created_by` bigint unsigned NOT NULL,
  `updated_by` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_slug_unique` (`slug`),
  KEY `roles_created_by_index` (`created_by`),
  KEY `roles_updated_by_index` (`updated_by`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin','Admin','{\"users.index\":true,\"users.create\":true,\"users.edit\":true,\"users.destroy\":true,\"roles.index\":true,\"roles.create\":true,\"roles.edit\":true,\"roles.destroy\":true,\"core.system\":true,\"core.cms\":true,\"core.manage.license\":true,\"systems.cronjob\":true,\"core.tools\":true,\"tools.data-synchronize\":true,\"media.index\":true,\"files.index\":true,\"files.create\":true,\"files.edit\":true,\"files.trash\":true,\"files.destroy\":true,\"folders.index\":true,\"folders.create\":true,\"folders.edit\":true,\"folders.trash\":true,\"folders.destroy\":true,\"settings.index\":true,\"settings.common\":true,\"settings.options\":true,\"settings.email\":true,\"settings.media\":true,\"settings.admin-appearance\":true,\"settings.cache\":true,\"settings.datatables\":true,\"settings.email.rules\":true,\"settings.others\":true,\"menus.index\":true,\"menus.create\":true,\"menus.edit\":true,\"menus.destroy\":true,\"optimize.settings\":true,\"pages.index\":true,\"pages.create\":true,\"pages.edit\":true,\"pages.destroy\":true,\"plugins.index\":true,\"plugins.edit\":true,\"plugins.remove\":true,\"plugins.marketplace\":true,\"core.appearance\":true,\"theme.index\":true,\"theme.activate\":true,\"theme.remove\":true,\"theme.options\":true,\"theme.custom-css\":true,\"theme.custom-js\":true,\"theme.custom-html\":true,\"theme.robots-txt\":true,\"settings.website-tracking\":true,\"widgets.index\":true,\"analytics.general\":true,\"analytics.page\":true,\"analytics.browser\":true,\"analytics.referrer\":true,\"analytics.settings\":true,\"announcements.index\":true,\"announcements.create\":true,\"announcements.edit\":true,\"announcements.destroy\":true,\"announcements.settings\":true,\"audit-log.index\":true,\"audit-log.destroy\":true,\"backups.index\":true,\"backups.create\":true,\"backups.restore\":true,\"backups.destroy\":true,\"plugins.blog\":true,\"posts.index\":true,\"posts.create\":true,\"posts.edit\":true,\"posts.destroy\":true,\"categories.index\":true,\"categories.create\":true,\"categories.edit\":true,\"categories.destroy\":true,\"tags.index\":true,\"tags.create\":true,\"tags.edit\":true,\"tags.destroy\":true,\"blog.settings\":true,\"posts.export\":true,\"posts.import\":true,\"captcha.settings\":true,\"careers.index\":true,\"careers.create\":true,\"careers.edit\":true,\"careers.destroy\":true,\"contacts.index\":true,\"contacts.edit\":true,\"contacts.destroy\":true,\"contact.custom-fields\":true,\"contact.settings\":true,\"plugin.faq\":true,\"faq.index\":true,\"faq.create\":true,\"faq.edit\":true,\"faq.destroy\":true,\"faq_category.index\":true,\"faq_category.create\":true,\"faq_category.edit\":true,\"faq_category.destroy\":true,\"faqs.settings\":true,\"galleries.index\":true,\"galleries.create\":true,\"galleries.edit\":true,\"galleries.destroy\":true,\"languages.index\":true,\"languages.create\":true,\"languages.edit\":true,\"languages.destroy\":true,\"newsletter.index\":true,\"newsletter.destroy\":true,\"newsletter.settings\":true,\"plugins.portfolio\":true,\"portfolio.projects.index\":true,\"portfolio.projects.create\":true,\"portfolio.projects.edit\":true,\"portfolio.projects.destroy\":true,\"portfolio.service-categories.index\":true,\"portfolio.service-categories.create\":true,\"portfolio.service-categories.edit\":true,\"portfolio.service-categories.destroy\":true,\"portfolio.services.index\":true,\"portfolio.services.create\":true,\"portfolio.services.edit\":true,\"portfolio.services.destroy\":true,\"portfolio.packages.index\":true,\"portfolio.packages.create\":true,\"portfolio.packages.edit\":true,\"portfolio.packages.destroy\":true,\"portfolio.quotation-requests.index\":true,\"portfolio.quotation-requests.create\":true,\"portfolio.quotation-requests.edit\":true,\"portfolio.quotation-requests.destroy\":true,\"portfolio.custom-fields.index\":true,\"portfolio.custom-fields.create\":true,\"portfolio.custom-fields.edit\":true,\"portfolio.custom-fields.destroy\":true,\"team.index\":true,\"team.create\":true,\"team.edit\":true,\"team.destroy\":true,\"testimonial.index\":true,\"testimonial.create\":true,\"testimonial.edit\":true,\"testimonial.destroy\":true,\"plugins.translation\":true,\"translations.locales\":true,\"translations.theme-translations\":true,\"translations.index\":true,\"theme-translations.export\":true,\"other-translations.export\":true,\"theme-translations.import\":true,\"other-translations.import\":true,\"api.settings\":true,\"api.sanctum-token.index\":true,\"api.sanctum-token.create\":true,\"api.sanctum-token.destroy\":true}','Admin users role',1,1,1,'2025-01-28 00:59:05','2025-01-28 00:59:05');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'media_random_hash','401be6ed2121a432ff07e7a2712eaae0',NULL,'2025-01-28 00:59:14'),(2,'api_enabled','0',NULL,'2025-01-28 00:59:14'),(3,'analytics_dashboard_widgets','0','2025-01-28 00:59:04','2025-01-28 00:59:04'),(4,'activated_plugins','[\"language\",\"language-advanced\",\"analytics\",\"announcement\",\"audit-log\",\"backup\",\"blog\",\"captcha\",\"career\",\"contact\",\"cookie-consent\",\"faq\",\"gallery\",\"newsletter\",\"portfolio\",\"team\",\"testimonial\",\"translation\"]',NULL,'2025-01-28 00:59:14'),(5,'enable_recaptcha_botble_contact_forms_fronts_contact_form','1','2025-01-28 00:59:04','2025-01-28 00:59:04'),(6,'enable_recaptcha_botble_newsletter_forms_fronts_newsletter_form','1','2025-01-28 00:59:04','2025-01-28 00:59:04'),(7,'theme','gerow',NULL,'2025-01-28 00:59:14'),(8,'show_admin_bar','1',NULL,'2025-01-28 00:59:14'),(9,'language_hide_default','1',NULL,'2025-01-28 00:59:14'),(10,'language_switcher_display','dropdown',NULL,'2025-01-28 00:59:14'),(11,'language_display','all',NULL,'2025-01-28 00:59:14'),(12,'language_hide_languages','[]',NULL,'2025-01-28 00:59:14'),(13,'theme-gerow-site_title','Gerow - Business Consulting',NULL,'2025-01-28 00:59:14'),(14,'theme-gerow-seo_description','With experience, we make sure to get every project done very fast and in time with high quality using our Botble CMS https://1.envato.market/LWRBY',NULL,'2025-01-28 00:59:14'),(15,'theme-gerow-favicon','general/favicon.png',NULL,'2025-01-28 00:59:14'),(16,'theme-gerow-website','https://botble.com',NULL,'2025-01-28 00:59:14'),(17,'theme-gerow-contact_email','support@botble.com',NULL,'2025-01-28 00:59:14'),(18,'theme-gerow-site_description','At Gerow, we specialize in comprehensive business solutions designed to enhance your operational efficiency and supply chain excellence. Whether you’re a seasoned entrepreneur looking to fine-tune your strategies, a startup seeking guidance, or a business professional looking for insights and solutions, our platform is your one-stop destination. Our team of experts and a wealth of resources are here to empower your journey towards business excellence. Explore our offerings and discover how we can be your partner in success.',NULL,'2025-01-28 00:59:14'),(19,'theme-gerow-phone','+01-246-357',NULL,'2025-01-28 00:59:14'),(20,'theme-gerow-address','4517 Washington Ave. Manchester, Kentucky 39495',NULL,'2025-01-28 00:59:14'),(21,'theme-gerow-cookie_consent_message','Your experience on this site will be improved by allowing cookies ',NULL,'2025-01-28 00:59:14'),(22,'theme-gerow-cookie_consent_learn_more_url','/cookie-policy',NULL,'2025-01-28 00:59:14'),(23,'theme-gerow-cookie_consent_learn_more_text','Cookie Policy',NULL,'2025-01-28 00:59:14'),(24,'theme-gerow-homepage_id','1',NULL,'2025-01-28 00:59:14'),(25,'theme-gerow-logo','general/logo.png',NULL,'2025-01-28 00:59:14'),(26,'theme-gerow-primary_color','#0055FF',NULL,'2025-01-28 00:59:14'),(27,'theme-gerow-primary_hover_color','#0049DC',NULL,'2025-01-28 00:59:14'),(28,'theme-gerow-secondary_color','#00194C',NULL,'2025-01-28 00:59:14'),(29,'theme-gerow-heading_color','#00194C',NULL,'2025-01-28 00:59:14'),(30,'theme-gerow-text_color','#334770',NULL,'2025-01-28 00:59:14'),(31,'theme-gerow-heading_font','Urbanist',NULL,'2025-01-28 00:59:14'),(32,'theme-gerow-primary_font','Plus Jakarta Sans',NULL,'2025-01-28 00:59:14'),(33,'theme-gerow-blog_page_id','19',NULL,'2025-01-28 00:59:14'),(34,'theme-gerow-breadcrumb_background','general/breadcrumb-bg.png',NULL,'2025-01-28 00:59:14'),(35,'theme-gerow-breadcrumb_first_shape_image','backgrounds/breadcrumb-shape01.png',NULL,'2025-01-28 00:59:14'),(36,'theme-gerow-breadcrumb_second_shape_image','backgrounds/breadcrumb-shape02.png',NULL,'2025-01-28 00:59:14'),(37,'theme-gerow-footer_background_image','backgrounds/bg-footer.png',NULL,'2025-01-28 00:59:14'),(38,'theme-gerow-footer_background_color','#fff',NULL,'2025-01-28 00:59:14'),(39,'theme-gerow-footer_text_color','#00194C',NULL,'2025-01-28 00:59:14'),(40,'theme-gerow-footer_text_muted_color','#334770',NULL,'2025-01-28 00:59:14'),(41,'theme-gerow-footer_border_color','#0055FF',NULL,'2025-01-28 00:59:14'),(42,'theme-gerow-footer_bottom_background_color','#fff',NULL,'2025-01-28 00:59:14'),(43,'theme-gerow-preloader_version','v1',NULL,'2025-01-28 00:59:14'),(44,'theme-gerow-lazy_load_images','1',NULL,'2025-01-28 00:59:14'),(45,'theme-gerow-lazy_load_placeholder_image','general/placeholder.png',NULL,'2025-01-28 00:59:14'),(46,'theme-gerow-social_links','[[{\"key\":\"social-name\",\"value\":\"Facebook\"},{\"key\":\"social-icon\",\"value\":\"ti ti-brand-facebook\"},{\"key\":\"social-url\",\"value\":\"https:\\/\\/www.facebook.com\\/\"}],[{\"key\":\"social-name\",\"value\":\"Instagram\"},{\"key\":\"social-icon\",\"value\":\"ti ti-brand-instagram\"},{\"key\":\"social-url\",\"value\":\"https:\\/\\/www.instagram.com\\/\"}],[{\"key\":\"social-name\",\"value\":\"X (Twitter)\"},{\"key\":\"social-icon\",\"value\":\"ti ti-brand-x\"},{\"key\":\"social-url\",\"value\":\"https:\\/\\/www.x.com\\/\"}],[{\"key\":\"social-name\",\"value\":\"YouTube\"},{\"key\":\"social-icon\",\"value\":\"ti ti-brand-youtube\"},{\"key\":\"social-url\",\"value\":\"https:\\/\\/www.youtube.com\\/\"}],[{\"key\":\"social-name\",\"value\":\"Pinterest\"},{\"key\":\"social-icon\",\"value\":\"ti ti-brand-pinterest\"},{\"key\":\"social-url\",\"value\":\"https:\\/\\/www.pinterest.com\\/\"}]]',NULL,'2025-01-28 00:59:14'),(47,'theme-gerow-newsletter_popup_enable','1',NULL,'2025-01-28 00:59:14'),(48,'theme-gerow-newsletter_popup_image','general/newsletter-popup.jpg',NULL,'2025-01-28 00:59:14'),(49,'theme-gerow-newsletter_popup_title','Subscribe Now',NULL,'2025-01-28 00:59:14'),(50,'theme-gerow-newsletter_popup_subtitle','Newsletter',NULL,'2025-01-28 00:59:14'),(51,'theme-gerow-newsletter_popup_description','Stay in the Loop: Sign Up for Our Newsletter!',NULL,'2025-01-28 00:59:14'),(52,'theme-gerow-show_service_image_at_the_top_of_service_page','no',NULL,'2025-01-28 00:59:14'),(53,'admin_logo','general/logo-white.png',NULL,'2025-01-28 00:59:14'),(54,'admin_favicon','general/favicon.png',NULL,'2025-01-28 00:59:14'),(55,'permalink-botble-blog-models-post','blog',NULL,'2025-01-28 00:59:14'),(56,'permalink-botble-blog-models-category','blog',NULL,'2025-01-28 00:59:14'),(57,'announcement_lazy_loading','1',NULL,'2025-01-28 00:59:14'),(58,'announcement_max_width','1280',NULL,NULL),(59,'announcement_text_color','#00194C',NULL,NULL),(60,'announcement_background_color','#FFE7BB',NULL,NULL),(61,'announcement_text_alignment','start',NULL,NULL),(62,'announcement_dismissible','1',NULL,NULL);
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slugs`
--

DROP TABLE IF EXISTS `slugs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `slugs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference_id` bigint unsigned NOT NULL,
  `reference_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prefix` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `slugs_reference_id_index` (`reference_id`),
  KEY `slugs_key_index` (`key`),
  KEY `slugs_prefix_index` (`prefix`),
  KEY `slugs_reference_index` (`reference_id`,`reference_type`)
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slugs`
--

LOCK TABLES `slugs` WRITE;
/*!40000 ALTER TABLE `slugs` DISABLE KEYS */;
INSERT INTO `slugs` VALUES (1,'home',1,'Botble\\Page\\Models\\Page','','2025-01-28 00:59:10','2025-01-28 00:59:10'),(2,'consulting',2,'Botble\\Page\\Models\\Page','','2025-01-28 00:59:10','2025-01-28 00:59:10'),(3,'insurance',3,'Botble\\Page\\Models\\Page','','2025-01-28 00:59:10','2025-01-28 00:59:10'),(4,'digital-agency',4,'Botble\\Page\\Models\\Page','','2025-01-28 00:59:10','2025-01-28 00:59:10'),(5,'business',5,'Botble\\Page\\Models\\Page','','2025-01-28 00:59:10','2025-01-28 00:59:10'),(6,'about',6,'Botble\\Page\\Models\\Page','','2025-01-28 00:59:10','2025-01-28 00:59:10'),(7,'about-2',7,'Botble\\Page\\Models\\Page','','2025-01-28 00:59:10','2025-01-28 00:59:10'),(8,'about-3',8,'Botble\\Page\\Models\\Page','','2025-01-28 00:59:10','2025-01-28 00:59:10'),(9,'about-4',9,'Botble\\Page\\Models\\Page','','2025-01-28 00:59:10','2025-01-28 00:59:10'),(10,'about-5',10,'Botble\\Page\\Models\\Page','','2025-01-28 00:59:10','2025-01-28 00:59:10'),(11,'services',11,'Botble\\Page\\Models\\Page','','2025-01-28 00:59:10','2025-01-28 00:59:10'),(12,'services-2',12,'Botble\\Page\\Models\\Page','','2025-01-28 00:59:10','2025-01-28 00:59:10'),(13,'services-3',13,'Botble\\Page\\Models\\Page','','2025-01-28 00:59:10','2025-01-28 00:59:10'),(14,'services-4',14,'Botble\\Page\\Models\\Page','','2025-01-28 00:59:10','2025-01-28 00:59:10'),(15,'services-5',15,'Botble\\Page\\Models\\Page','','2025-01-28 00:59:10','2025-01-28 00:59:10'),(16,'cookies',16,'Botble\\Page\\Models\\Page','','2025-01-28 00:59:10','2025-01-28 00:59:10'),(17,'terms-of-service',17,'Botble\\Page\\Models\\Page','','2025-01-28 00:59:10','2025-01-28 00:59:10'),(18,'privacy-policy',18,'Botble\\Page\\Models\\Page','','2025-01-28 00:59:10','2025-01-28 00:59:10'),(19,'blog',19,'Botble\\Page\\Models\\Page','','2025-01-28 00:59:10','2025-01-28 00:59:10'),(20,'contact',20,'Botble\\Page\\Models\\Page','','2025-01-28 00:59:10','2025-01-28 00:59:10'),(21,'company',21,'Botble\\Page\\Models\\Page','','2025-01-28 00:59:10','2025-01-28 00:59:10'),(22,'case-studies',22,'Botble\\Page\\Models\\Page','','2025-01-28 00:59:10','2025-01-28 00:59:10'),(23,'how-it-work',23,'Botble\\Page\\Models\\Page','','2025-01-28 00:59:10','2025-01-28 00:59:10'),(24,'partners',24,'Botble\\Page\\Models\\Page','','2025-01-28 00:59:10','2025-01-28 00:59:10'),(25,'pricing',25,'Botble\\Page\\Models\\Page','','2025-01-28 00:59:10','2025-01-28 00:59:10'),(26,'testimonials',26,'Botble\\Page\\Models\\Page','','2025-01-28 00:59:10','2025-01-28 00:59:10'),(27,'projects',27,'Botble\\Page\\Models\\Page','','2025-01-28 00:59:10','2025-01-28 00:59:10'),(28,'faqs',28,'Botble\\Page\\Models\\Page','','2025-01-28 00:59:11','2025-01-28 00:59:11'),(29,'coming-soon',29,'Botble\\Page\\Models\\Page','','2025-01-28 00:59:11','2025-01-28 00:59:11'),(30,'business',1,'Botble\\Gallery\\Models\\Gallery','galleries','2025-01-28 00:59:11','2025-01-28 00:59:11'),(31,'innovation',2,'Botble\\Gallery\\Models\\Gallery','galleries','2025-01-28 00:59:11','2025-01-28 00:59:11'),(32,'leadership',3,'Botble\\Gallery\\Models\\Gallery','galleries','2025-01-28 00:59:11','2025-01-28 00:59:11'),(33,'technology',4,'Botble\\Gallery\\Models\\Gallery','galleries','2025-01-28 00:59:11','2025-01-28 00:59:11'),(34,'success',5,'Botble\\Gallery\\Models\\Gallery','galleries','2025-01-28 00:59:11','2025-01-28 00:59:11'),(35,'entrepreneurship',6,'Botble\\Gallery\\Models\\Gallery','galleries','2025-01-28 00:59:11','2025-01-28 00:59:11'),(36,'business-strategy',1,'Botble\\Blog\\Models\\Category','blog','2025-01-28 00:59:12','2025-01-28 00:59:14'),(37,'market-research',2,'Botble\\Blog\\Models\\Category','blog','2025-01-28 00:59:12','2025-01-28 00:59:14'),(38,'financial-management',3,'Botble\\Blog\\Models\\Category','blog','2025-01-28 00:59:12','2025-01-28 00:59:14'),(39,'entrepreneurship',4,'Botble\\Blog\\Models\\Category','blog','2025-01-28 00:59:12','2025-01-28 00:59:14'),(40,'career-development',5,'Botble\\Blog\\Models\\Category','blog','2025-01-28 00:59:12','2025-01-28 00:59:14'),(41,'startups',6,'Botble\\Blog\\Models\\Category','blog','2025-01-28 00:59:12','2025-01-28 00:59:14'),(42,'success-stories',7,'Botble\\Blog\\Models\\Category','blog','2025-01-28 00:59:12','2025-01-28 00:59:14'),(43,'industry-insights',8,'Botble\\Blog\\Models\\Category','blog','2025-01-28 00:59:12','2025-01-28 00:59:14'),(44,'human-resources',9,'Botble\\Blog\\Models\\Category','blog','2025-01-28 00:59:12','2025-01-28 00:59:14'),(45,'strategy',1,'Botble\\Blog\\Models\\Tag','tag','2025-01-28 00:59:12','2025-01-28 00:59:12'),(46,'marketing',2,'Botble\\Blog\\Models\\Tag','tag','2025-01-28 00:59:12','2025-01-28 00:59:12'),(47,'finance',3,'Botble\\Blog\\Models\\Tag','tag','2025-01-28 00:59:12','2025-01-28 00:59:12'),(48,'management',4,'Botble\\Blog\\Models\\Tag','tag','2025-01-28 00:59:12','2025-01-28 00:59:12'),(49,'networking',5,'Botble\\Blog\\Models\\Tag','tag','2025-01-28 00:59:12','2025-01-28 00:59:12'),(50,'leadership',6,'Botble\\Blog\\Models\\Tag','tag','2025-01-28 00:59:12','2025-01-28 00:59:12'),(51,'technology',7,'Botble\\Blog\\Models\\Tag','tag','2025-01-28 00:59:12','2025-01-28 00:59:12'),(52,'investment',8,'Botble\\Blog\\Models\\Tag','tag','2025-01-28 00:59:12','2025-01-28 00:59:12'),(53,'branding',9,'Botble\\Blog\\Models\\Tag','tag','2025-01-28 00:59:12','2025-01-28 00:59:12'),(54,'sales',10,'Botble\\Blog\\Models\\Tag','tag','2025-01-28 00:59:12','2025-01-28 00:59:12'),(55,'sustainability',11,'Botble\\Blog\\Models\\Tag','tag','2025-01-28 00:59:12','2025-01-28 00:59:12'),(56,'10-strategies-for-business-growth-in-2023',1,'Botble\\Blog\\Models\\Post','blog','2025-01-28 00:59:12','2025-01-28 00:59:14'),(57,'navigating-tax-season-tips-for-small-businesses',2,'Botble\\Blog\\Models\\Post','blog','2025-01-28 00:59:12','2025-01-28 00:59:14'),(58,'the-power-of-data-analytics-in-business-decision-making',3,'Botble\\Blog\\Models\\Post','blog','2025-01-28 00:59:12','2025-01-28 00:59:14'),(59,'how-to-create-a-winning-marketing-plan',4,'Botble\\Blog\\Models\\Post','blog','2025-01-28 00:59:12','2025-01-28 00:59:14'),(60,'mastering-the-art-of-financial-planning-for-entrepreneurs',5,'Botble\\Blog\\Models\\Post','blog','2025-01-28 00:59:12','2025-01-28 00:59:14'),(61,'the-role-of-innovation-in-modern-business',6,'Botble\\Blog\\Models\\Post','blog','2025-01-28 00:59:12','2025-01-28 00:59:14'),(62,'startup-success-stories-lessons-from-industry-leaders',7,'Botble\\Blog\\Models\\Post','blog','2025-01-28 00:59:12','2025-01-28 00:59:14'),(63,'balancing-act-work-life-integration-for-business-owners',8,'Botble\\Blog\\Models\\Post','blog','2025-01-28 00:59:12','2025-01-28 00:59:14'),(64,'the-impact-of-sustainable-practices-on-business-sustainability',9,'Botble\\Blog\\Models\\Post','blog','2025-01-28 00:59:12','2025-01-28 00:59:14'),(65,'building-a-strong-employer-brand-for-talent-acquisition',10,'Botble\\Blog\\Models\\Post','blog','2025-01-28 00:59:12','2025-01-28 00:59:14'),(66,'productivity-hacks-for-busy-entrepreneurs',11,'Botble\\Blog\\Models\\Post','blog','2025-01-28 00:59:12','2025-01-28 00:59:14'),(67,'the-human-factor-hr-best-practices-for-businesses',12,'Botble\\Blog\\Models\\Post','blog','2025-01-28 00:59:12','2025-01-28 00:59:14'),(68,'brooklyn-simmons',1,'Botble\\Team\\Models\\Team','teams','2025-01-28 00:59:13','2025-01-28 00:59:13'),(69,'jenny-wilson',2,'Botble\\Team\\Models\\Team','teams','2025-01-28 00:59:13','2025-01-28 00:59:13'),(70,'devon-lane',3,'Botble\\Team\\Models\\Team','teams','2025-01-28 00:59:13','2025-01-28 00:59:13'),(71,'marvin-mckinney',4,'Botble\\Team\\Models\\Team','teams','2025-01-28 00:59:13','2025-01-28 00:59:13'),(72,'financial-analysis',1,'Botble\\Portfolio\\Models\\ServiceCategory','service-categories','2025-01-28 00:59:14','2025-01-28 00:59:14'),(73,'tax-strategy',2,'Botble\\Portfolio\\Models\\ServiceCategory','service-categories','2025-01-28 00:59:14','2025-01-28 00:59:14'),(74,'market-research',3,'Botble\\Portfolio\\Models\\ServiceCategory','service-categories','2025-01-28 00:59:14','2025-01-28 00:59:14'),(75,'business-strategy',4,'Botble\\Portfolio\\Models\\ServiceCategory','service-categories','2025-01-28 00:59:14','2025-01-28 00:59:14'),(76,'data-analyst',1,'Botble\\Portfolio\\Models\\Service','services','2025-01-28 00:59:14','2025-01-28 00:59:14'),(77,'liability-planner',2,'Botble\\Portfolio\\Models\\Service','services','2025-01-28 00:59:14','2025-01-28 00:59:14'),(78,'growth-planner',3,'Botble\\Portfolio\\Models\\Service','services','2025-01-28 00:59:14','2025-01-28 00:59:14'),(79,'risk-manager',4,'Botble\\Portfolio\\Models\\Service','services','2025-01-28 00:59:14','2025-01-28 00:59:14'),(80,'retirement-planner',5,'Botble\\Portfolio\\Models\\Service','services','2025-01-28 00:59:14','2025-01-28 00:59:14'),(81,'risk-analyst',6,'Botble\\Portfolio\\Models\\Service','services','2025-01-28 00:59:14','2025-01-28 00:59:14'),(82,'insurance-expert',7,'Botble\\Portfolio\\Models\\Service','services','2025-01-28 00:59:14','2025-01-28 00:59:14'),(83,'budget-manager',8,'Botble\\Portfolio\\Models\\Service','services','2025-01-28 00:59:14','2025-01-28 00:59:14'),(84,'strategy-adviser',9,'Botble\\Portfolio\\Models\\Service','services','2025-01-28 00:59:14','2025-01-28 00:59:14'),(85,'operations-expert',10,'Botble\\Portfolio\\Models\\Service','services','2025-01-28 00:59:14','2025-01-28 00:59:14'),(86,'profit-strategist',11,'Botble\\Portfolio\\Models\\Service','services','2025-01-28 00:59:14','2025-01-28 00:59:14'),(87,'objective-planner',12,'Botble\\Portfolio\\Models\\Service','services','2025-01-28 00:59:14','2025-01-28 00:59:14'),(88,'goal-specialist',13,'Botble\\Portfolio\\Models\\Service','services','2025-01-28 00:59:14','2025-01-28 00:59:14'),(89,'basic-plan',1,'Botble\\Portfolio\\Models\\Package','packages','2025-01-28 00:59:14','2025-01-28 00:59:14'),(90,'team-plan',2,'Botble\\Portfolio\\Models\\Package','packages','2025-01-28 00:59:14','2025-01-28 00:59:14'),(91,'enterprise-plan',3,'Botble\\Portfolio\\Models\\Package','packages','2025-01-28 00:59:14','2025-01-28 00:59:14'),(92,'innovation-hub-navigating-the-future',1,'Botble\\Portfolio\\Models\\Project','projects','2025-01-28 00:59:14','2025-01-28 00:59:14'),(93,'leadership-excellence-initiative',2,'Botble\\Portfolio\\Models\\Project','projects','2025-01-28 00:59:14','2025-01-28 00:59:14'),(94,'startup-accelerator-program',3,'Botble\\Portfolio\\Models\\Project','projects','2025-01-28 00:59:14','2025-01-28 00:59:14'),(95,'marketing-mastery-series',4,'Botble\\Portfolio\\Models\\Project','projects','2025-01-28 00:59:14','2025-01-28 00:59:14'),(96,'illustration-design',5,'Botble\\Portfolio\\Models\\Project','projects','2025-01-28 00:59:14','2025-01-28 00:59:14'),(97,'design-development',6,'Botble\\Portfolio\\Models\\Project','projects','2025-01-28 00:59:14','2025-01-28 00:59:14'),(98,'marketing-consultancy',7,'Botble\\Portfolio\\Models\\Project','projects','2025-01-28 00:59:14','2025-01-28 00:59:14'),(99,'digital-marketing',8,'Botble\\Portfolio\\Models\\Project','projects','2025-01-28 00:59:14','2025-01-28 00:59:14'),(100,'strategic-planning',9,'Botble\\Portfolio\\Models\\Project','projects','2025-01-28 00:59:14','2025-01-28 00:59:14'),(101,'senior-full-stack-engineer-creator-success-full-time',1,'ArchiElite\\Career\\Models\\Career','careers','2025-01-28 00:59:14','2025-01-28 00:59:14'),(102,'data-science-specialist-analytics-division',2,'ArchiElite\\Career\\Models\\Career','careers','2025-01-28 00:59:14','2025-01-28 00:59:14'),(103,'product-marketing-manager-growth-team',3,'ArchiElite\\Career\\Models\\Career','careers','2025-01-28 00:59:14','2025-01-28 00:59:14'),(104,'uxui-designer-user-experience-team',4,'ArchiElite\\Career\\Models\\Career','careers','2025-01-28 00:59:14','2025-01-28 00:59:14'),(105,'operations-manager-supply-chain-division',5,'ArchiElite\\Career\\Models\\Career','careers','2025-01-28 00:59:14','2025-01-28 00:59:14'),(106,'financial-analyst-investment-group',6,'ArchiElite\\Career\\Models\\Career','careers','2025-01-28 00:59:14','2025-01-28 00:59:14');
/*!40000 ALTER TABLE `slugs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slugs_translations`
--

DROP TABLE IF EXISTS `slugs_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `slugs_translations` (
  `lang_code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slugs_id` bigint unsigned NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prefix` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT '',
  PRIMARY KEY (`lang_code`,`slugs_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slugs_translations`
--

LOCK TABLES `slugs_translations` WRITE;
/*!40000 ALTER TABLE `slugs_translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `slugs_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_id` bigint unsigned DEFAULT NULL,
  `author_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` VALUES (1,'Strategy',1,'Botble\\ACL\\Models\\User',NULL,'published','2025-01-28 00:59:12','2025-01-28 00:59:12'),(2,'Marketing',1,'Botble\\ACL\\Models\\User',NULL,'published','2025-01-28 00:59:12','2025-01-28 00:59:12'),(3,'Finance',1,'Botble\\ACL\\Models\\User',NULL,'published','2025-01-28 00:59:12','2025-01-28 00:59:12'),(4,'Management',1,'Botble\\ACL\\Models\\User',NULL,'published','2025-01-28 00:59:12','2025-01-28 00:59:12'),(5,'Networking',1,'Botble\\ACL\\Models\\User',NULL,'published','2025-01-28 00:59:12','2025-01-28 00:59:12'),(6,'Leadership',1,'Botble\\ACL\\Models\\User',NULL,'published','2025-01-28 00:59:12','2025-01-28 00:59:12'),(7,'Technology',1,'Botble\\ACL\\Models\\User',NULL,'published','2025-01-28 00:59:12','2025-01-28 00:59:12'),(8,'Investment',1,'Botble\\ACL\\Models\\User',NULL,'published','2025-01-28 00:59:12','2025-01-28 00:59:12'),(9,'Branding',1,'Botble\\ACL\\Models\\User',NULL,'published','2025-01-28 00:59:12','2025-01-28 00:59:12'),(10,'Sales',1,'Botble\\ACL\\Models\\User',NULL,'published','2025-01-28 00:59:12','2025-01-28 00:59:12'),(11,'Sustainability',1,'Botble\\ACL\\Models\\User',NULL,'published','2025-01-28 00:59:12','2025-01-28 00:59:12');
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags_translations`
--

DROP TABLE IF EXISTS `tags_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags_translations` (
  `lang_code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags_id` bigint unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`lang_code`,`tags_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags_translations`
--

LOCK TABLES `tags_translations` WRITE;
/*!40000 ALTER TABLE `tags_translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `tags_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teams`
--

DROP TABLE IF EXISTS `teams`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teams` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `socials` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teams`
--

LOCK TABLES `teams` WRITE;
/*!40000 ALTER TABLE `teams` DISABLE KEYS */;
INSERT INTO `teams` VALUES (1,'Brooklyn Simmons','teams/3-1.png','Founder / CEO','USA','{\"facebook\":\"https:\\/\\/www.facebook.com\\/\",\"twitter\":\"https:\\/\\/twitter.com\\/\",\"instagram\":\"https:\\/\\/www.instagram.com\\/\"}','published','2025-01-28 00:59:13','2025-01-28 00:59:13','<div>[team-skill title=\"My Expertise & Skills\" description=\"We are united by a shared passion for excellence and a commitment to providing innovative solutions for your business needs. Get to know the faces driving our success and learn how their expertise can contribute to yours.\" quantity=\"3\" title_1=\"Finance Consultancy\" index_1=\"65\" title_2=\"Business\" index_2=\"80\" title_3=\"Marketing\" index_3=\"90\"][/team-skill]</div><p>Our diverse team of experts brings a wealth of knowledge and experience across various industries. We are united by a shared passion for excellence and a commitment to providing innovative solutions for your business needs. Get to know the faces driving our success and learn how their expertise can contribute to yours.</p>','0888952423','simonss@gmail.com','22301 Havard BLVD Torrance CA',NULL,'Sharing content online allows you to craft an online persona that reflects your personal values and professional skills. Even if you only use social media occasionally'),(2,'Jenny Wilson','teams/3-2.png','Finance Advisor','Qatar','{\"facebook\":\"https:\\/\\/www.facebook.com\\/\",\"twitter\":\"https:\\/\\/twitter.com\\/\",\"instagram\":\"https:\\/\\/www.instagram.com\\/\"}','published','2025-01-28 00:59:13','2025-01-28 00:59:13','<div>[team-skill title=\"My Expertise & Skills\" description=\"We are united by a shared passion for excellence and a commitment to providing innovative solutions for your business needs. Get to know the faces driving our success and learn how their expertise can contribute to yours.\" quantity=\"3\" title_1=\"Finance Consultancy\" index_1=\"65\" title_2=\"Business\" index_2=\"80\" title_3=\"Marketing\" index_3=\"90\"][/team-skill]</div><p>Our diverse team of experts brings a wealth of knowledge and experience across various industries. We are united by a shared passion for excellence and a commitment to providing innovative solutions for your business needs. Get to know the faces driving our success and learn how their expertise can contribute to yours.</p>','009744848000','jenniwilson152@gmail.com','West Bay Lagoon, P.O',NULL,'Sharing content online allows you to craft an online persona that reflects your personal values and professional skills. Even if you only use social media occasionally'),(3,'Devon Lane','teams/3-3.png','Sales Agent','India','{\"facebook\":\"https:\\/\\/www.facebook.com\\/\",\"twitter\":\"https:\\/\\/twitter.com\\/\",\"instagram\":\"https:\\/\\/www.instagram.com\\/\"}','published','2025-01-28 00:59:13','2025-01-28 00:59:13','<div>[team-skill title=\"My Expertise & Skills\" description=\"We are united by a shared passion for excellence and a commitment to providing innovative solutions for your business needs. Get to know the faces driving our success and learn how their expertise can contribute to yours.\" quantity=\"3\" title_1=\"Finance Consultancy\" index_1=\"65\" title_2=\"Business\" index_2=\"80\" title_3=\"Marketing\" index_3=\"90\"][/team-skill]</div><p>Our diverse team of experts brings a wealth of knowledge and experience across various industries. We are united by a shared passion for excellence and a commitment to providing innovative solutions for your business needs. Get to know the faces driving our success and learn how their expertise can contribute to yours.</p>','01123259241','devonsoland111@gmail.com','4855, 24, Ansari Road, Darya Ganj',NULL,'Sharing content online allows you to craft an online persona that reflects your personal values and professional skills. Even if you only use social media occasionally'),(4,'Marvin McKinney','teams/3-4.png','Business Manager','Thailand','{\"facebook\":\"https:\\/\\/www.facebook.com\\/\",\"twitter\":\"https:\\/\\/twitter.com\\/\",\"instagram\":\"https:\\/\\/www.instagram.com\\/\"}','published','2025-01-28 00:59:13','2025-01-28 00:59:13','<div>[team-skill title=\"My Expertise & Skills\" description=\"We are united by a shared passion for excellence and a commitment to providing innovative solutions for your business needs. Get to know the faces driving our success and learn how their expertise can contribute to yours.\" quantity=\"3\" title_1=\"Finance Consultancy\" index_1=\"65\" title_2=\"Business\" index_2=\"80\" title_3=\"Marketing\" index_3=\"90\"][/team-skill]</div><p>Our diverse team of experts brings a wealth of knowledge and experience across various industries. We are united by a shared passion for excellence and a commitment to providing innovative solutions for your business needs. Get to know the faces driving our success and learn how their expertise can contribute to yours.</p>','6623742088','marvinkensy@gmail.com','849 Sukhapibal 1 Klong Chan Bang Kapi',NULL,'Sharing content online allows you to craft an online persona that reflects your personal values and professional skills. Even if you only use social media occasionally');
/*!40000 ALTER TABLE `teams` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teams_translations`
--

DROP TABLE IF EXISTS `teams_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teams_translations` (
  `lang_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teams_id` int NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`lang_code`,`teams_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teams_translations`
--

LOCK TABLES `teams_translations` WRITE;
/*!40000 ALTER TABLE `teams_translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `teams_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `testimonials` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testimonials`
--

LOCK TABLES `testimonials` WRITE;
/*!40000 ALTER TABLE `testimonials` DISABLE KEYS */;
INSERT INTO `testimonials` VALUES (1,'Guy Hawkins','Exceptional service! Gerow’s attention to detail and reliability have been instrumental in our supply chain success.','testimonials/1.png','Rodriguez Enterprises','published','2025-01-28 00:59:12','2025-01-28 00:59:12'),(2,'Eleanor Pena','Gerow has consistently met and exceeded our logistics needs. Their dedication to excellence is truly commendable.','testimonials/2.png','ChenTech Solutions','published','2025-01-28 00:59:12','2025-01-28 00:59:12'),(3,'Cody Fisher','Their team is a valuable asset to our business operations. Gerow’s efficient service has saved us time and money.','testimonials/3.png','Foster &amp; Co.','published','2025-01-28 00:59:12','2025-01-28 00:59:12'),(4,'Albert Flores','Gerow’s attention to detail and professionalism have made them our preferred logistics partner. Highly recommended!','testimonials/4.png','Bank of America','published','2025-01-28 00:59:12','2025-01-28 00:59:12');
/*!40000 ALTER TABLE `testimonials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testimonials_translations`
--

DROP TABLE IF EXISTS `testimonials_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `testimonials_translations` (
  `lang_code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonials_id` bigint unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `company` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`lang_code`,`testimonials_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testimonials_translations`
--

LOCK TABLES `testimonials_translations` WRITE;
/*!40000 ALTER TABLE `testimonials_translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `testimonials_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_meta`
--

DROP TABLE IF EXISTS `user_meta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_meta` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_meta_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_meta`
--

LOCK TABLES `user_meta` WRITE;
/*!40000 ALTER TABLE `user_meta` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_meta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `first_name` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar_id` bigint unsigned DEFAULT NULL,
  `super_user` tinyint(1) NOT NULL DEFAULT '0',
  `manage_supers` tinyint(1) NOT NULL DEFAULT '0',
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `last_login` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'rollin05@tromp.com',NULL,'$2y$12$89/AGaFU3D8BR36IIL/2aOvpkqrr4f6ilYUqXjEC4Oeq8CQFj0H56',NULL,'2025-01-28 00:59:05','2025-01-28 00:59:13','Lue','Grady','admin',141,1,1,NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `widgets`
--

DROP TABLE IF EXISTS `widgets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `widgets` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `widget_id` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sidebar_id` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `theme` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` tinyint unsigned NOT NULL DEFAULT '0',
  `data` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `widgets`
--

LOCK TABLES `widgets` WRITE;
/*!40000 ALTER TABLE `widgets` DISABLE KEYS */;
INSERT INTO `widgets` VALUES (1,'ContactInfoWidget','header_top_sidebar_style_1','gerow',0,'{\"id\":\"ContactInfoWidget\",\"address\":\"1247\\/Plot No. 39, 15th Phase, Kanpur\",\"email\":\"contact@example.com\"}','2025-01-28 00:59:12','2025-01-28 00:59:12'),(2,'SocialLinksWidget','header_top_sidebar_style_1','gerow',1,'{\"id\":\"SocialLinksWidget\",\"button_label\":\"Free Consulting\",\"button_url\":\"\\/contact\"}','2025-01-28 00:59:12','2025-01-28 00:59:12'),(3,'HeaderActionButtonWidget','header_top_sidebar_style_1','gerow',2,'{\"content\":\"Free Consulting\",\"link\":\"\\/contact\",\"icon\":\"flaticon-briefcase\"}','2025-01-28 00:59:12','2025-01-28 00:59:12'),(4,'SiteInformationWidget','footer_sidebar','gerow',0,'{\"id\":\"SiteInformationWidget\",\"title\":\"Information\",\"logo\":null,\"description\":\"When An Unknown Printer Took A Galley Of Type Aawer Awtnd Scrambled It To Make A Type Specimen Book.\",\"hotline\":\"+123456789\",\"opening_hours\":\"Mon \\u2013 Sat: 8 am \\u2013 5 pm, <br> Sunday: <span>CLOSED<\\/span>\"}','2025-01-28 00:59:12','2025-01-28 00:59:12'),(5,'Botble\\Widget\\Widgets\\CoreSimpleMenu','footer_sidebar','gerow',1,'{\"id\":\"Botble\\\\Widget\\\\Widgets\\\\CoreSimpleMenu\",\"name\":\"Menu\",\"items\":[[{\"key\":\"label\",\"value\":\"Company\"},{\"key\":\"url\",\"value\":\"\\/company\"}],[{\"key\":\"label\",\"value\":\"Careers\"},{\"key\":\"url\",\"value\":\"\\/careers\"}],[{\"key\":\"label\",\"value\":\"Press Media\"},{\"key\":\"url\",\"value\":\"\\/galleries\"}],[{\"key\":\"label\",\"value\":\"Our Blog\"},{\"key\":\"url\",\"value\":\"\\/blog\"}],[{\"key\":\"label\",\"value\":\"Privacy Policy\"},{\"key\":\"url\",\"value\":\"\\/privacy-policy\"}]]}','2025-01-28 00:59:12','2025-01-28 00:59:12'),(6,'Botble\\Widget\\Widgets\\CoreSimpleMenu','footer_sidebar','gerow',2,'{\"id\":\"Botble\\\\Widget\\\\Widgets\\\\CoreSimpleMenu\",\"name\":\"Quick Links\",\"items\":[[{\"key\":\"label\",\"value\":\"How it work\"},{\"key\":\"url\",\"value\":\"\\/how-it-work\"}],[{\"key\":\"label\",\"value\":\"Partners\"},{\"key\":\"url\",\"value\":\"\\/partners\"}],[{\"key\":\"label\",\"value\":\"Testimonials\"},{\"key\":\"url\",\"value\":\"\\/testimonials\"}],[{\"key\":\"label\",\"value\":\"Case Studies\"},{\"key\":\"url\",\"value\":\"\\/case-studies\"}],[{\"key\":\"label\",\"value\":\"Pricing\"},{\"key\":\"url\",\"value\":\"\\/pricing\"}]]}','2025-01-28 00:59:12','2025-01-28 00:59:12'),(7,'NewsletterWidget','footer_sidebar','gerow',3,'{\"id\":\"NewsletterWidget\",\"name\":\"Our Newsletters\",\"description\":\"\\ud83d\\udce9 Stay in the Loop: Sign Up for Our Newsletter! \\ud83d\\udce9\"}','2025-01-28 00:59:12','2025-01-28 00:59:12'),(8,'SiteCopyrightWidget','footer_bottom','gerow',0,'{\"id\":\"SiteCopyrightWidget\",\"name\":\"Site Copyright\",\"copyright\":\"\\u00a9 2025 Botble Technologies. All right reserved.\"}','2025-01-28 00:59:12','2025-01-28 00:59:12'),(9,'ContactFormWidget','pre_footer_sidebar','gerow',0,'{\"id\":\"ContactFormWidget\",\"name\":\"Request a call back\",\"description\":\"Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Come To Mind? Oftentimes\",\"background_image_1\":\"backgrounds\\/shape01.png\",\"background_image_2\":\"backgrounds\\/shape02.png\"}','2025-01-28 00:59:12','2025-01-28 00:59:12'),(10,'SidebarInformationWidget','side_sidebar','gerow',0,'{\"id\":\"SidebarInformationWidget\",\"name\":\"Site Copyright\",\"address\":\"123\\/A, Miranda City Likaoli <br\\/> Prikano, Dope\",\"phone_number\":\"+0989 7876 9865 9 <br\\/> +(090) 8765 86543 85\",\"email\":\"info@example.com <br\\/> example.mail@hum.com\"}','2025-01-28 00:59:12','2025-01-28 00:59:12'),(11,'GalleriesWidget','side_sidebar','gerow',1,'{\"id\":\"GalleriesWidget\",\"name\":\"Galleries Widget\",\"gallery_id\":3}','2025-01-28 00:59:12','2025-01-28 00:59:12'),(12,'ContactInfoWidget','header_top_sidebar_style_2','gerow',0,'{\"id\":\"ContactInfoWidget\",\"address\":\"256 Avenue, Mark Street, New York City\",\"email\":\"gerow@gmail.com\"}','2025-01-28 00:59:12','2025-01-28 00:59:12'),(13,'SocialLinksWidget','header_top_sidebar_style_2','gerow',1,'{\"id\":\"SocialLinksWidget\",\"content\":\"+123 8989 444\",\"icon\":\"flaticon-phone-call\"}','2025-01-28 00:59:12','2025-01-28 00:59:12'),(14,'HeaderLogoWidget','header_style_1','gerow',0,'{\"id\":\"HeaderLogoWidget\",\"logo_image\":null}','2025-01-28 00:59:12','2025-01-28 00:59:12'),(15,'HeaderMainMenuWidget','header_style_1','gerow',1,'{\"direction\":\"left\"}','2025-01-28 00:59:12','2025-01-28 00:59:12'),(16,'HeaderActionContactWidget','header_style_1','gerow',3,'{\"content\":\"Hotline Number\",\"detail\":\"+123 8989 444\",\"icon\":\"flaticon-phone-call\"}','2025-01-28 00:59:12','2025-01-28 00:59:12'),(17,'HeaderActionSearchWidget','header_style_1','gerow',4,'[]','2025-01-28 00:59:12','2025-01-28 00:59:12'),(18,'HeaderActionMenuButtonWidget','header_style_1','gerow',5,'[]','2025-01-28 00:59:12','2025-01-28 00:59:12'),(19,'HeaderLogoWidget','header_style_2','gerow',0,'{\"id\":\"HeaderLogoWidget\",\"logo_image\":null}','2025-01-28 00:59:12','2025-01-28 00:59:12'),(20,'HeaderMainMenuWidget','header_style_2','gerow',1,'{\"direction\":\"center\"}','2025-01-28 00:59:12','2025-01-28 00:59:12'),(21,'HeaderActionSearchWidget','header_style_2','gerow',3,'[]','2025-01-28 00:59:12','2025-01-28 00:59:12'),(22,'HeaderActionMenuButtonWidget','header_style_2','gerow',4,'[]','2025-01-28 00:59:12','2025-01-28 00:59:12'),(23,'HeaderActionContactWidget','header_style_2','gerow',5,'{\"content\":\"Hotline Number\",\"detail\":\"+123 8989 444\",\"icon\":\"flaticon-phone-call\"}','2025-01-28 00:59:12','2025-01-28 00:59:12'),(24,'HeaderLogoWidget','header_style_3','gerow',0,'{\"id\":\"HeaderLogoWidget\",\"logo_image\":null}','2025-01-28 00:59:12','2025-01-28 00:59:12'),(25,'HeaderMainMenuWidget','header_style_3','gerow',1,'{\"direction\":\"center\"}','2025-01-28 00:59:12','2025-01-28 00:59:12'),(26,'HeaderActionSearchWidget','header_style_3','gerow',3,'[]','2025-01-28 00:59:12','2025-01-28 00:59:12'),(27,'HeaderActionButtonWidget','header_style_3','gerow',4,'{\"content\":\"GET A QUOTE\",\"link\":\"\\/contact\"}','2025-01-28 00:59:12','2025-01-28 00:59:12'),(28,'BlogSearchWidget','blog_sidebar','gerow',0,'{\"id\":\"BlogSearchWidget\",\"name\":\"Blog Search\"}','2025-01-28 00:59:12','2025-01-28 00:59:12'),(29,'BlogCategoriesWidget','blog_sidebar','gerow',1,'{\"id\":\"BlogCategoriesWidget\",\"name\":\"Blog Categories\"}','2025-01-28 00:59:12','2025-01-28 00:59:12'),(30,'BlogPostsWidget','blog_sidebar','gerow',2,'{\"id\":\"BlogPostsWidget\",\"name\":\"Blog Posts\",\"type\":\"recent\",\"limit\":5}','2025-01-28 00:59:12','2025-01-28 00:59:12'),(31,'BlogTagsWidget','blog_sidebar','gerow',3,'{\"id\":\"BlogTagsWidget\",\"name\":\"Blog Tags\"}','2025-01-28 00:59:12','2025-01-28 00:59:12'),(32,'SiteInformationWidget','footer_sidebar_style_1','gerow',0,'{\"id\":\"SiteInformationWidget\",\"title\":\"Information\",\"description\":\"When An Unknown Printer Took A Galley Of Type Aawer Awtnd Scrambled It To Make A Type Specimen Book.\",\"logo\":null,\"address\":\"58 Street Commercial Road Fratton, Australia\",\"hotline\":\"+123456789\",\"opening_hours\":\"Mon \\u2013 Sat: 8 am \\u2013 5 pm, <br> Sunday: <span>CLOSED<\\/span>\"}','2025-01-28 00:59:12','2025-01-28 00:59:12'),(33,'Botble\\Widget\\Widgets\\CoreSimpleMenu','footer_sidebar_style_1','gerow',1,'{\"id\":\"Botble\\\\Widget\\\\Widgets\\\\CoreSimpleMenu\",\"name\":\"Menu\",\"items\":[[{\"key\":\"label\",\"value\":\"Company\"},{\"key\":\"url\",\"value\":\"\\/company\"}],[{\"key\":\"label\",\"value\":\"Careers\"},{\"key\":\"url\",\"value\":\"\\/careers\"}],[{\"key\":\"label\",\"value\":\"Press Media\"},{\"key\":\"url\",\"value\":\"\\/galleries\"}],[{\"key\":\"label\",\"value\":\"Our Blog\"},{\"key\":\"url\",\"value\":\"\\/blog\"}],[{\"key\":\"label\",\"value\":\"Privacy Policy\"},{\"key\":\"url\",\"value\":\"\\/privacy-policy\"}]]}','2025-01-28 00:59:12','2025-01-28 00:59:12'),(34,'Botble\\Widget\\Widgets\\CoreSimpleMenu','footer_sidebar_style_1','gerow',2,'{\"id\":\"Botble\\\\Widget\\\\Widgets\\\\CoreSimpleMenu\",\"name\":\"Quick Links\",\"items\":[[{\"key\":\"label\",\"value\":\"How it work\"},{\"key\":\"url\",\"value\":\"\\/how-it-work\"}],[{\"key\":\"label\",\"value\":\"Partners\"},{\"key\":\"url\",\"value\":\"\\/partners\"}],[{\"key\":\"label\",\"value\":\"Testimonials\"},{\"key\":\"url\",\"value\":\"\\/testimonials\"}],[{\"key\":\"label\",\"value\":\"Case Studies\"},{\"key\":\"url\",\"value\":\"\\/case-studies\"}],[{\"key\":\"label\",\"value\":\"Pricing\"},{\"key\":\"url\",\"value\":\"\\/pricing\"}]]}','2025-01-28 00:59:12','2025-01-28 00:59:12'),(35,'NewsletterWidget','footer_sidebar_style_1','gerow',3,'{\"id\":\"NewsletterWidget\",\"name\":\"Our Newsletters\",\"description\":\"Add A Newsletter To Your Widget Area.\"}','2025-01-28 00:59:12','2025-01-28 00:59:12'),(36,'SiteCopyrightWidget','footer_bottom_style_1','gerow',0,'{\"id\":\"SiteCopyrightWidget\",\"name\":\"Site Copyright\",\"logo\":\"general\\/logo-white.png\",\"copyright\":\"\\u00a9 2025 Botble Technologies. All right reserved.\",\"style\":\"style-1\"}','2025-01-28 00:59:12','2025-01-28 00:59:12'),(37,'SocialLinksWidget','footer_bottom_style_1','gerow',1,'{\"id\":\"SocialLinksWidget\",\"name\":\"Social Links\"}','2025-01-28 00:59:12','2025-01-28 00:59:12'),(38,'ServicesListWidget','service_detail_sidebar','gerow',0,'{\"id\":\"ServicesListWidget\",\"title\":\"Our Services\",\"limit\":\"7\",\"style\":\"style-1\"}','2025-01-28 00:59:12','2025-01-28 00:59:12'),(39,'ServiceActionWidget','service_detail_sidebar','gerow',1,'{\"id\":\"ServiceActionWidget\",\"title\":\"If You Need Any Help Contact Us\",\"label\":\" +91 705 2101 786\",\"link\":\"tel:0123456789\",\"button_color\":\"0055ff\",\"icon\":\"flaticon-phone-call\",\"background_color\":\"#334770\"}','2025-01-28 00:59:12','2025-01-28 00:59:12'),(40,'ServiceGetAQuoteWidget','service_detail_sidebar','gerow',2,'{\"id\":\"ServiceGetAQuoteWidget\",\"title\":\"Get A Free Quote\"}','2025-01-28 00:59:12','2025-01-28 00:59:12'),(41,'BrandsWidget','service_detail_bottom_sidebar','gerow',0,'{\"id\":\"BrandsWidget\",\"name_1\":\"Zelus\",\"logo_1\":\"brands\\/brand-img04.png\",\"link_1\":\"https:\\/\\/zelus.com\",\"name_2\":\"The bird\",\"logo_2\":\"brands\\/brand-img05.png\",\"link_2\":\"https:\\/\\/thebird.com\",\"name_3\":\"Nature Wave\",\"logo_3\":\"brands\\/brand-img03.png\",\"link_3\":\"https:\\/\\/naturewave.com\",\"name_4\":\"Finance\",\"logo_4\":\"brands\\/brand-img02.png\",\"link_4\":\"https:\\/\\/finance.com\",\"name_5\":\"Start\",\"logo_5\":\"brands\\/brand-img01.png\",\"link_5\":\"https:\\/\\/start.com\",\"name_6\":\"Zelus\",\"logo_6\":\"brands\\/brand-img04.png\",\"link_6\":\"https:\\/\\/zelus.com\"}','2025-01-28 00:59:12','2025-01-28 00:59:12'),(42,'BrandsWidget','project_detail_bottom_sidebar','gerow',0,'{\"id\":\"BrandsWidget\",\"name_1\":\"Zelus\",\"logo_1\":\"brands\\/brand-img04.png\",\"link_1\":\"https:\\/\\/zelus.com\",\"name_2\":\"The bird\",\"logo_2\":\"brands\\/brand-img05.png\",\"link_2\":\"https:\\/\\/thebird.com\",\"name_3\":\"Nature Wave\",\"logo_3\":\"brands\\/brand-img03.png\",\"link_3\":\"https:\\/\\/naturewave.com\",\"name_4\":\"Finance\",\"logo_4\":\"brands\\/brand-img02.png\",\"link_4\":\"https:\\/\\/finance.com\",\"name_5\":\"Start\",\"logo_5\":\"brands\\/brand-img01.png\",\"link_5\":\"https:\\/\\/start.com\",\"name_6\":\"Zelus\",\"logo_6\":\"brands\\/brand-img04.png\",\"link_6\":\"https:\\/\\/zelus.com\"}','2025-01-28 00:59:12','2025-01-28 00:59:12'),(43,'ContactFormWidget','pre_footer_sidebar_1','gerow',0,'{\"id\":\"ContactFormWidget\",\"name\":\"Request a call back\",\"description\":\"Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Come To Mind? Oftentimes\",\"background_image_1\":\"backgrounds\\/shape01.png\",\"background_image_2\":\"backgrounds\\/shape02.png\"}','2025-01-28 00:59:12','2025-01-28 00:59:12'),(44,'BrandsWidget','pre_footer_sidebar_1','gerow',1,'{\"id\":\"BrandsWidget\",\"name_1\":\"Zelus\",\"logo_1\":\"brands\\/brand-img04.png\",\"link_1\":\"https:\\/\\/zelus.com\",\"name_2\":\"The bird\",\"logo_2\":\"brands\\/brand-img05.png\",\"link_2\":\"https:\\/\\/thebird.com\",\"name_3\":\"Nature Wave\",\"logo_3\":\"brands\\/brand-img03.png\",\"link_3\":\"https:\\/\\/naturewave.com\",\"name_4\":\"Finance\",\"logo_4\":\"brands\\/brand-img02.png\",\"link_4\":\"https:\\/\\/finance.com\",\"name_5\":\"Start\",\"logo_5\":\"brands\\/brand-img01.png\",\"link_5\":\"https:\\/\\/start.com\",\"name_6\":\"Zelus\",\"logo_6\":\"brands\\/brand-img04.png\",\"link_6\":\"https:\\/\\/zelus.com\"}','2025-01-28 00:59:12','2025-01-28 00:59:12'),(45,'LanguageSwitcherWidget','header_style_1','gerow',2,'{\"id\":\"LanguageSwitcherWidget\",\"name\":\"Language switcher\"}','2025-01-28 00:59:12','2025-01-28 00:59:12'),(46,'LanguageSwitcherWidget','header_style_2','gerow',2,'{\"id\":\"LanguageSwitcherWidget\",\"name\":\"Language switcher\"}','2025-01-28 00:59:12','2025-01-28 00:59:12'),(47,'LanguageSwitcherWidget','header_style_3','gerow',2,'{\"id\":\"LanguageSwitcherWidget\",\"name\":\"Language switcher\"}','2025-01-28 00:59:12','2025-01-28 00:59:12');
/*!40000 ALTER TABLE `widgets` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-01-28 14:59:15
