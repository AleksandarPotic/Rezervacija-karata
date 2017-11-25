-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2017 at 10:32 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fkpobeda-laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'user.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `lastName`, `email`, `password`, `status`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Aleksadnar', 'Potic', 'aleksandar1995potic@gmail.com', '$2y$10$XZ75AutaMJIpqsOzn5llp.TUWMwsbmalyhLYXcEqIQYNomtuQgNdO', 1, '11692624_856287031092246_21453409499001685_n.jpg', '2017-10-09 12:41:43', '2017-10-27 06:51:22'),
(2, 'Petar', 'Petrovic', 'petarpetrovic@gmail.com', '$2y$10$XZ75AutaMJIpqsOzn5llp.TUWMwsbmalyhLYXcEqIQYNomtuQgNdO', 1, 'user.png', '2017-10-06 11:49:09', '2017-10-06 11:49:09'),
(3, 'Nikola', 'Nikolic', 'nikolanikolic@gmail.com', '$2y$10$4n6T1FgBMSjQxVpGSmJsFOGJ/Pjg3g2cjy0jl7TghwF2/svKsSIUa', 1, 'user.png', '2017-10-06 11:49:45', '2017-10-06 11:49:45');

-- --------------------------------------------------------

--
-- Table structure for table `admin_role`
--

CREATE TABLE `admin_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_role`
--

INSERT INTO `admin_role` (`id`, `admin_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 2, NULL, NULL),
(3, 3, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `nameHome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageHome` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nameAway` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageAway` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ticketsForOne` int(191) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`id`, `date`, `time`, `nameHome`, `imageHome`, `nameAway`, `imageAway`, `ticketsForOne`, `status`, `created_at`, `updated_at`) VALUES
(6, '2018-03-03', '15:00:00', 'FK Lokomotiva', '2.png', 'FK Pobeda', '1.png', 5, 1, '2017-11-07 14:53:47', '2017-11-07 14:53:47'),
(9, '2017-12-29', '13:45:00', 'FK Pobeda', '1.png', 'FK Senjak', '5.png', 6, 1, '2017-11-08 11:12:27', '2017-11-08 11:12:27'),
(8, '2018-03-17', '15:30:00', 'FK Napredak', '1184.png', 'FK Pobeda', '1.png', 4, 1, '2017-11-07 15:05:18', '2017-11-07 15:05:18');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `title`, `body`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Aleksandar Potic', 'aleksandar1995potic@gmail.com', 'Naslov', 'Ova je probna poruka, da vidimo da li rade poruke na naslovnoj strani administratora. Veliki pozdrav!!!', NULL, '2017-10-13 13:16:02', '2017-10-13 13:16:02'),
(3, 'Nikola Nikolic', 'nikolanikolic@gmail.com', 'Naslov', 'Imam problem oko rezervacije karata za utakmicu. Ovo je treca poruka. Pozdra!', NULL, '2017-10-13 13:47:40', '2017-10-13 13:47:40'),
(4, 'Aleksandar Potic', 'aleksandar1995potic@gmail.com', 'Naslov', 'Poslata poruka vezana za poruku koja se ispisuje na kontakt strani na front delu!', NULL, '2017-10-13 13:54:30', '2017-10-13 13:54:30');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_09_06_215543_create_messages_table', 1),
(4, '2017_09_06_220520_create_matches_table', 1),
(5, '2017_09_06_220813_create_sectors_table', 1),
(6, '2017_09_06_221339_create_reservations_table', 1),
(7, '2017_09_06_221555_create_admins_table', 1),
(8, '2017_09_06_222212_create_roles_table', 1),
(9, '2017_09_06_222259_create_admin_roles_table', 1),
(10, '2017_09_06_223624_create_tidings_table', 1),
(11, '2017_09_26_150529_create_permissions_table', 1),
(12, '2017_10_02_180822_create_requests_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `for` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `for`, `created_at`, `updated_at`) VALUES
(1, 'Utakmice - Create', 'match', NULL, NULL),
(2, 'Utakmice - Update', 'match', NULL, NULL),
(3, 'Utakmice - Delete', 'match', NULL, NULL),
(4, 'Utakmice - View', 'match', NULL, NULL),
(5, 'Sektori - Create', 'sector', NULL, NULL),
(6, 'Sektori - Update', 'sector', NULL, NULL),
(7, 'Sektori - Delete', 'sector', NULL, NULL),
(8, 'Sektori - View', 'sector', NULL, NULL),
(26, 'Klijenti - view', 'other', '2017-11-09 11:48:07', '2017-11-09 11:48:07'),
(10, 'Rezervacije - Update', 'reservation', NULL, NULL),
(11, 'Rezervacije - Delete', 'reservation', NULL, NULL),
(12, 'Rezervacije - View', 'reservation', NULL, NULL),
(13, 'Vesti - Create', 'tiding', NULL, NULL),
(14, 'Vesti - Update', 'tiding', NULL, NULL),
(15, 'Vesti - Delete', 'tiding', NULL, NULL),
(16, 'Vesti - View', 'tiding', NULL, NULL),
(17, 'Admin - Create', 'user', NULL, '2017-11-20 11:36:57'),
(18, 'Admin - Update', 'user', NULL, '2017-11-20 11:37:14'),
(19, 'Admin - Delete', 'user', NULL, '2017-11-20 11:37:29'),
(20, 'Admin - View', 'user', NULL, '2017-11-20 11:37:45'),
(21, 'Uloge - View', 'other', NULL, NULL),
(22, 'Dozvole - View', 'other', NULL, NULL),
(23, 'Poruke - View', 'other', NULL, NULL),
(24, 'Zahtevi - View', 'other', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES
(1, 21),
(1, 22),
(1, 23),
(1, 26),
(1, 12),
(1, 11),
(1, 8),
(1, 7),
(1, 6),
(1, 5),
(1, 16),
(1, 15),
(1, 14),
(1, 13),
(1, 20),
(1, 19),
(1, 18),
(1, 24),
(1, 4),
(1, 3),
(1, 2),
(1, 1),
(1, 10),
(2, 1),
(2, 2),
(2, 3),
(2, 4),
(2, 5),
(2, 6),
(2, 7),
(2, 8),
(2, 12),
(3, 13),
(3, 14),
(3, 15),
(3, 16),
(3, 4),
(3, 8),
(3, 23),
(2, 20),
(2, 16),
(1, 17);

-- --------------------------------------------------------

--
-- Table structure for table `requirements`
--

CREATE TABLE `requirements` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `match_id` int(191) NOT NULL,
  `sector_id` int(10) UNSIGNED NOT NULL,
  `tickets` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `requirements`
--

INSERT INTO `requirements` (`id`, `user_id`, `match_id`, `sector_id`, `tickets`, `created_at`, `updated_at`) VALUES
(61, 5, 6, 9, '1', '2017-11-20 15:01:39', '2017-11-20 15:01:39');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `match_id` int(191) NOT NULL,
  `sector_id` int(10) UNSIGNED NOT NULL,
  `tickets` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalPrice` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `securityCode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `user_id`, `match_id`, `sector_id`, `tickets`, `totalPrice`, `status`, `securityCode`, `created_at`, `updated_at`) VALUES
(11, 6, 8, 11, '3', '3000', 'Poslato', 'DWKLGS', '2017-11-08 08:29:30', '2017-11-20 11:30:44'),
(12, 6, 9, 12, '4', '4000', 'Rezervisano', 'YG1QCE', '2017-11-09 11:04:10', '2017-11-09 11:04:10'),
(14, 5, 9, 14, '6', '9000', 'Rezervisano', 'L2XAVC', '2017-11-20 11:32:02', '2017-11-20 11:32:02');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', '2017-10-06 10:35:05', '2017-10-06 10:35:05'),
(2, 'Editor', '2017-10-06 11:40:43', '2017-10-06 11:40:43'),
(3, 'Reporter', '2017-10-06 11:41:27', '2017-10-06 11:41:27');

-- --------------------------------------------------------

--
-- Table structure for table `sectors`
--

CREATE TABLE `sectors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `match_id` int(11) NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `viewer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalViewer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `procent` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sectors`
--

INSERT INTO `sectors` (`id`, `name`, `match_id`, `price`, `viewer`, `totalViewer`, `procent`, `status`, `created_at`, `updated_at`) VALUES
(11, 'Sever', 8, '1000', '20', '7', 35, 1, '2017-11-07 15:06:10', '2017-11-09 12:08:21'),
(10, 'Istok', 6, '500', '2000', '0', 0, 1, '2017-11-07 14:58:21', '2017-11-07 14:58:21'),
(9, 'Sever', 6, '300', '2000', '0', 0, 1, '2017-11-07 14:54:43', '2017-11-08 07:51:32'),
(13, 'Jug', 9, '1200', '2500', '550', 22, 1, '2017-11-08 11:13:27', '2017-11-08 11:13:27'),
(12, 'Sever', 9, '1000', '2000', '684', 34, 1, '2017-11-08 11:13:06', '2017-11-09 11:04:10'),
(14, 'Istok', 9, '1500', '3000', '2016', 67, 1, '2017-11-08 11:13:51', '2017-11-20 11:32:02'),
(15, 'Zapad', 9, '2000', '4000', '4000', 100, 1, '2017-11-08 11:14:13', '2017-11-08 11:14:13');

-- --------------------------------------------------------

--
-- Table structure for table `tidings`
--

CREATE TABLE `tidings` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `like` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dislike` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tidings`
--

INSERT INTO `tidings` (`id`, `title`, `subtitle`, `slug`, `image`, `date`, `body`, `status`, `like`, `dislike`, `created_at`, `updated_at`) VALUES
(1, 'Lajović nije uspeo da zakaže srpski derbi u Sankt Peterburgu', 'Lajović nije uspeo da zakaže srpski derbi u Sankt Peterburgu...', 'lajovic-nije-uspeo-da-zakaze-srpski-derbi-u-sankt', '2.jpg', '2017-07-19', '<p>\r\n\r\n</p><div>Овог јутра изабраници Владана Милојевића истрчали су на терен у Брежицама. За разлику од јучерашњег тренинга, данас се готово све време радило са лоптом. </div><div>&nbsp;</div><div>Након петоминутног трчања на самом почетку прешло се на индивидуалне вежбе загревања са лоптом. Фокус је био на усавршавању контроле лопте и покрета. </div><div>&nbsp;</div><div>Пошто су одрадили получасовно загревање играчи су подељени у три групе радили на техничко-такатичкој припреми кроз разне игре са лоптом. Тренинг је завршен игром на два гола на скраћеном терену.</div><div>&nbsp;</div><div>Фудбалери Црвене звезде презадовољни су условима које имају у Термама Чатеж. </div><div>&nbsp;</div><div><strong>- Након неколико дана одмора уследио је јак темпо рада. Данас имамо два тренинга и то ће нам добро доћи да се припремимо физички. Такође, одмор нам је врло битан у овом тренутку. Ја сам први пут сам у Термама Чатеж и овде имамо и одличне услове и за релаксацију пред паклени ритам у наставку сезоне који је пред нама</strong>&nbsp;- рекао је Пешић.</div>\r\n\r\n<br><p></p>', 1, NULL, NULL, '2017-10-05 15:22:35', '2017-10-05 15:22:35'),
(2, 'Rad na taktici u Termama', 'Izabranici Vladana Milojevića odradili su i drugi trening drugog dana mini priprema u Termama Čatež.', 'Rad-na-taktici-u-Termama', '3.jpg', '2017-10-05', '<p>\r\n\r\n</p><div>Nakon kraćeg odmora fudbaleri Crvene zvezde u 16 časova i 30 minuta izašli su na teren u Brežicama. Sačekalo ih je sunčano vreme, a 20 stepeni i slab vetar bili su prijatni za rad. Na poštedi su, zbog lakših povreda bili kapiten Nenad Milijaš i Mičel Donald.</div><div>&nbsp;</div><div>Umor od prepodnevnog treninga nije se video na našim prvotimcima. Nakon petnaestiminutnog zagrevanja fudbaleri Crvene zvezde podeljeni u dve grupe prešli su na rad sa loptom. Uslediledila je ševa u kojoj naši igrači uživaju i koja često izmami smeh. </div>\r\n\r\n<br><p></p>', 1, NULL, NULL, '2017-10-05 15:23:45', '2017-10-05 15:23:45'),
(3, 'Prepodnevni trening u Brežicama', 'Fudbaleri Crvene zvezde odradili su prvi jutarnji trening na mini priprema u Sloveniji.', 'prepodnevni-trening-u-brezicama', '4.jpg', '2017-10-05', '<p>\r\n\r\n</p><div>Ovog jutra izabranici Vladana Milojevića istrčali su na teren u Brežicama. Za razliku od jučerašnjeg treninga, danas se gotovo sve vreme radilo sa loptom. </div><div>&nbsp;</div><div>Nakon petominutnog trčanja na samom početku prešlo se na individualne vežbe zagrevanja sa loptom. Fokus je bio na usavršavanju kontrole lopte i pokreta. </div><div>&nbsp;</div><div>Pošto su odradili polučasovno zagrevanje igrači su podeljeni u tri grupe radili na tehničko-takatičkoj pripremi kroz razne igre sa loptom. Trening je završen igrom na dva gola na skraćenom terenu.</div><div>&nbsp;</div><div>Fudbaleri Crvene zvezde prezadovoljni su uslovima koje imaju u Termama Čatež. </div><div>&nbsp;</div><div><strong>- Nakon nekoliko dana odmora usledio je jak tempo rada. Danas imamo dva treninga i to će nam dobro doći da se pripremimo fizički. Takođe, odmor nam je vrlo bitan u ovom trenutku. Ja sam prvi put sam u Termama Čatež i ovde imamo i odlične uslove i za relaksaciju pred pakleni ritam u nastavku sezone koji je pred nama</strong>&nbsp;- rekao je Pešić.</div>\r\n\r\n<br><p></p>', 1, NULL, NULL, '2017-10-05 15:24:30', '2017-10-05 15:24:30'),
(4, 'Odrađen prvi trening u Sloveniji', 'Fudbaleri Crvene zvezde u popodnevnim časovima odradili su prvi trening po dolasku u Sloveniju u svojoj staroj bazi.', 'odraen-prvi-trening-u-sloveniji', '22688803_1563897583649323_8610135157612099505_n.jpg', '2017-10-05', '<p>\r\n\r\n</p><div>Odlični uslovi dočekali su naše fudbalere po izlasku na teren Termi Čatež. Trening je otpočeo laganim trčanjem u grupi, a potom se prešlo na vežbe zagrevanja. </div><div>Nakon što su se igrači podelili u dve grupe nastavili su sa trčanjem. Zajedno sa fudbalerima u jednoj je radio i šef stručnog štaba Vladan Milojević. Nakon polučasovnog trčanja, ponovo podeljeni u dve ekipe, igrači su prešli na igru sa loptom. Ovoga puta igrala se ševa. </div><div>&nbsp;</div><div>Golmani su jedan deo svog treninga takođe posvetili trčanju, da bi poslednjih pola sata trojica čuvara mreže sa svojim trenerom vežbali dodavanje u krugu. </div><div>&nbsp;</div><div>&nbsp;</div><div>Atmosfera na treningu je bila fantastična, pa su tako naši fudbaleri sve napore prvog dana nakon odmora izneli sa osmehom na licu. </div><div>&nbsp;</div><div>- Svima nam je prijalo što smo imali nekoliko dana odmora i sada nastavljamo sa pripremama za nastavak prvenstva. Imamo fenomenalne uslove, odličan smeštaj, hranu, terene. Boravak ovde će nam sigurno biti jako lep. Moramo da se pripremimo za nastavak sezone, da nastavimo sa odličnim igrama kao i do sada. Sa dobrim treninzima dolaze i dobre utakmice - rekao je Borjan.</div><div>&nbsp;</div><div>Izabranici Vladana Milojevića nastavljaju da rade punom snagom, te ih sutra očekuju dva treninga.</div>\r\n\r\n<br><p></p>', 1, NULL, NULL, '2017-10-05 15:25:19', '2017-10-30 08:34:07'),
(5, 'Veterani Zvezde gostovali u Crnoj Gori', 'Veterani FK Crvena zvezda su u ponedeljak, 02. oktobra, gostovali u Beranama i protiv FK Partizan iz Beograda izvojevali pobedu od 1:0, (0:0).', 'veterani-zvezde-gostovali-u-crnoj-gori', '22688803_1563897583649323_8610135157612099505_n.jpg', '2017-10-05', '<p>\r\n\r\n</p><p>FK Berane iz Crne Gore osnovan je daleke 1920. godine. Lokalna samouprava, opština Berane i njihov predsednik Dragoslav Šćekić, sekretar za sport Zoran Jojić, bili su domićini ovoj svečanosti povodom otvaranja nove pokrivene tribine sa novim stolicama.</p><p>U svečanoj, domaćinskoj i bratskoj atmosferi veterani Zvezde, Budućnosti i Partizana dočekani su toplo i srdačno na severu Crne Gore. U delegaciji veterana Zvezde bilo je mnogo legendi kluba: Jovan Aćimović, Stanislav Karasi, Miloš Šestić, Aleksandar Marković, Branimir Kantar, dr. Ranko Todorović, Božidar Đorđević, Baja Mandrapa iz Bjele, novinar Branislav Jocić i snimatelj Nenad sa SOS kanala.</p><p>U svojoj kući posle utakmice goste iz Beograda ugostio je Rade Barjaktarović, čovek koji je crveno-bela ikona Berana, Crne Gore i eks Jugoslavije. Uz zakusku i piće pozdravili su se stari prijatelji i u bratskom razgovoru obnovili lepe uspomene i nove Zvezdine uspehe.</p><p>U Berane nije došla ekipa veterana FK Železničar iz Sarajeva iz tehničkih razloga, tako da su kao četvrta ekipa nastupili veterani FK Berane. Žrebom je odlučeno da se u prvoj utakmici sastanu FK Budućnosti i FK Berane, a u drugoj pravi beogradski derbi između veterana FK Crvena zvezda i FK Partizan. U prvoj utakmici velika nadmoć i bolja igra gostiju iz Podgorice, utakmica se završila rezultatom 5:1 za FK Budućnost. Golove su postigli Nikezić 3 i Radonjić 2 gola, počasni gol za domaćina  postigao je Cimbaljević.</p><p>Predvođena kapitenom Zdravkom Borovnicom i sa velikim pojačanjem iz Podgorice, bivšim igračem Zvezde Sanibalom Orahovcem, veterani Zvezde su današnji derbi koji se odigrao posle dugog niz godina, uspeli da završe u svoju korist. Kao gost u ekipi veterana Partizana nastupio je Presednik opštine Berana gos. Dragoslav Šćekić, koji je i veliki navijač Partizana, trudio se Šćekić da da svoj maksimum i u tome je uspeo, zamenio ga je Antić. Na Gradskom stadionu uz svečanu i opuštenu atmosferu, utakmica protekla u fer i korektnoj igri, na momente igralo se oštro naročito u drugogm poluvremenu posle vođstva Crvene zvezde od 1:0, kome je doprineo i golgeter Vladimir Tintor u 15. minutu drugog poluvremena.</p><p>Naročito u drugom poluvremenu igra se potpuno otvorila sa obe strane, Zvezda je u nastavku delovala da čuva rezultat, preko odličnih kontranapada  Orahovca,Tintora &nbsp;i Vanića, još nekoliko puta je ugrozila gol Partizana. Partizan je pokušao u nekoliko navrata preko brzih prodora Radojčića i Žunića da ugrozi gol Radulovića, ali je Zvezdina odbrana delovala sigurno i odlučno, predvođena odličnim Vasiljevićem, Z. Nikolićem i Dabićem. Po prvi put su veterani Zvezde i Partizana igrali jedni protiv drugih u Beranama i to je kod publike ostavilo snažan utisak, jer i jednu i drugi imaju brojne navijače na severu Crne Gore. Ova utakmica i gostovanje &nbsp;dugo će se pamtiti.</p><p>FK Crvena Zvezda igrala je u sastavu: Radulović, Z. Nikolić, Dabić, B. Nikolić, Vasiljević, Borovnica, Mirilović, Vanić, S. Orahovac, Tintor i Bursać. Igrali su još : Panović, Ristanović, Krnjevac &nbsp;i Đaković. Trener J. Aćimović.</p><p>FK Partizan nastupio je u sastavu: Lučić, Đelić, Žunić, Mitrović, Babeu, Ž.Radojčić, Šćekić, Serafimović, Jocić, G. Radojčić i B. Brnović. Igrali su još : Kuzmanović, Pučuča i Antić. Trener Goran Kadenić.</p><p>Druženje je nastavljeno na večeri uz prisustvo svih učesnika ove sportske manifestacije. Posle dugog niza godina sreli su se sportski prijatelji iz Srbije i Crne Gore, uz razmenu prigodnih poklona od strane domaćina i predstavnika veterana Zvezde. Sve prisutne je pozdravio predsednik opštine Berane, gos. Dragoslav Šćekić. Muzika u restoranu Hotela „ Berane“ u Beranima, uveseljavala je goste do kosno u noć.</p>\r\n\r\n<br><p></p>', 1, NULL, NULL, '2017-10-05 15:26:12', '2017-10-30 08:33:29'),
(6, 'Stojković - „Dobro znaj!“', 'U zvaničnom programu meča koji se prodaje na stadionu „Rajko Mitić“ uoči svake utakmice koju naši prvotimci igraju kao domaćini možete saznati mnogo interesantnih stvari o našim prvotimcima.', 'stojkovic-dobro-znaj', '22728980_1563896276982787_5625161726067169393_n.jpg', '2017-10-05', '<p>\r\n\r\n</p><div>Ovog puta prenosimo vam kako je na zanimljiva pitanja iz rubrike „Leksikon” odgovarao Filip Stojković.</div><div>&nbsp;</div><div><br><p>1. Srećan broj</p><p><strong>22.</strong></p><p>&nbsp;</p><p>2. Omiljena hrana</p><p><strong>Punjene paprike.</strong></p><p>&nbsp;</p><p>3. Omiljeno piće</p><p><strong>Ceđeno voće.</strong></p><p>&nbsp;</p><p>4. Šta ne jedeš i ne piješ</p><p><strong>Ne volim da jedem masline, a pijem sve.</strong></p><p>&nbsp;</p><p>5. Šta uvek imaš u frižideru</p><p><strong>Hladnu vodu.</strong></p><p>&nbsp;</p><p>6. Kako se snalaziš u kuhinji i šta najbolje spremaš</p><p><strong>Dosta sam naučio u kuhinji u poslednjih godinu dana kada sam živeo sam u Nemačkoj, a najbolje spremam piletinu sa krompirom.</strong></p><p>&nbsp;</p><p>7. Omiljeni crtani junak</p><p><strong>Tom i Džeri.</strong></p><p>&nbsp;</p><p>8. Omiljena dečja emisija kada si bio klinac</p><p><strong>Branko Kockica.</strong></p><p>&nbsp;</p><p>9. Da li imaš kućnog ljubimca</p><p><strong>Nemam.</strong></p><p>&nbsp;</p><p>10. Koga bi voleo da upoznaš</p><p><strong>Brazilca Ronalda.</strong></p><p>&nbsp;</p><p>11. Koji sport pratiš pored fudbala</p><p><strong>Košarku.</strong></p><p>&nbsp;</p><p>12. Šta radiš u slobodno vreme</p><p><strong>Pijem kafu sa Vujadinom Savićem.</strong></p><p>&nbsp;</p><p>13. Imaš li neki strah</p><p><strong>Nemam.</strong></p><p>&nbsp;</p><p>14. Najlepši grad u kojem si bio</p><p><strong>Minhen.</strong></p><p>&nbsp;</p><p>15. Kako si potrošio prvu platu</p><p><strong>Ugostio sam trojicu drugara u Minhenu.</strong></p><p>&nbsp;</p><p>16. Prva utakmica na kojoj si bio</p><p><strong>Prva koju pamtim je Zvezda protiv Lacija na Marakani.</strong></p><p>&nbsp;</p><p>17. Omiljeni saigrač</p><p><strong>Vujadin Savić.</strong></p><p>&nbsp;</p><p>18. Ko najlepše proslavlja gol</p><p><strong>Boaći.</strong></p><p>&nbsp;</p><p>19. Omiljeni stih iz Zvezdine pesme</p><p><strong>„Dobro znaj da uvek tu sam ja”.</strong><br>&nbsp;</p><p>20. Poruka za navijače</p><p><strong>Daćemo sve od sebe da vratimo titulu na Marakanu</strong><br>&nbsp;</p><p>21. Šta je Zvezda za tebe</p><p><strong>Za mene je Zvezda sve.</strong></p></div>\r\n\r\n<br><p></p>', 1, NULL, NULL, '2017-10-05 15:27:15', '2017-10-30 08:33:10'),
(7, 'Boaći - Prelepa asistencija Pešića', 'U pobedi nad Zemunom od 1:0 Ričmond Boaći postigao je 30. gol u crveno-belom dresu.', 'Boaci-Prelepa-asistencija-Pesica', '22688803_1563897583649323_8610135157612099505_n.jpg', '2017-10-30', '<p>\r\n\r\n<strong>- Pešić je odličnom asistencijom koju mi je uputio uradio ogroman deo posla kod gola. Bio je to prelep potez. Stalno ističem koliko je timska igra bitna, jer bez nje nema rezultata. Pojedinac nikada nije ispred ekipe. Imao sam šanse i pre pogotka, ali u 81. minutu Bog me je postavio na pravo mesto i ispostavilo se da sam iskoristio najvažniju šansu koja nam je donela pobedu </strong>- rekao je Boaći.<br><br>Boaći je na prethodnoj utakmici ušao u istoriju kluba kao strani igrač koji je postigao najviše golova u Crvenoj zvezdi sa 29 pogodaka. Ovog puta dodao je još jedan gol na tu listu.<br><br><strong>- Veoma sam srećan što se ostvaruje plan koji Bog ima za mene. Velika je privilegija i čast za mene kao fudbalera što sam postigao 30 golova za ovako veliki klub od početka godine. Ipak, uvek se fokusiram na ono što mi tek predstoji i trudim se da ne obraćam pažnju na sve što se govori. Bitno mi je da ostanem maksimalno fokusiran, lepo je sve što sam uradio do sada, ali znam da me naporan posao tek čeka.</strong><br><br>Zvezdin napadač osvrnuo se na meč sa Zemunom.<br><br><strong>- Bila je ovo teška utakmica i zahvaljujem se Bogu što smo uspeli da ostvarimo pobedu. Bilo nam je izuzetno važno da osvojimo nova tri boda i da završimo prvi deo prvenstva u dobrom raspoloženju i na prvom mestu na tabeli. Prvi put sam igrao protiv Zemuna, kao i većina mojih saigrača i oni su zaista pružili jak otpor i pokazali se u dobrom svetlu. Morali smo dosta da trčimo i napadamo danas i to nam se na kraju i isplatilo. Fudbal je takva igra, nekada možete da imate mnogo šansi, da postignete tri gola, ali da na kraju bude 3:3. Bitno je da iskoristite onu pravu kao što smo mi danas uradili. Jedan gol bio je dovoljan za pobedu.</strong><br><br>Izabranike Vladana Milojevića u četvrtak očekuje susret sa Arsenalom u okviru Lige Evrope.<br><br><strong>- Uvak igram sa namerom da pobedim, ne igram samo radi igre. Želim da moj tim bude najbolji. Želim da pobeđujemo i da osvajamo trofeje. Otići ćemo u London da igramo kao što smo i do sada, već smo pobeđivali velike ekipe. Arsenal jeste veliki klub, ali sve je moguće. Na nama je da se fokusiramo i odigramo najbolje što umemo</strong>&nbsp;- poručio je Boaći.\r\n\r\n<br></p>', 1, NULL, NULL, '2017-10-30 08:23:48', '2017-10-30 08:30:21'),
(8, 'Milojević - Ponosan sam', 'Šef stručnog štaba Crvene zvezde Vladan Milojević bio je zadovoljan nakon ostvarene pobede protiv Zemuna.', 'milojevic-ponosan-sam', '22552467_1563897156982699_6874933190587015174_n.jpg', '2017-10-30', '<p>\r\n\r\n</p><p>Zvezdin trener je istakao da je veoma ponosan na svoje fudbalere.</p><p><strong>— Spremili smo se za ovu utakmicu dobro iako smo imali samo jedan pravi trening pripreme. Sa druge strane, ni Zemun nije imao više vremena od nas. I u najavi sam rekao koliko poštujem ekipu Zemuna i njihovog trenera, i to ću uvek ponavljati. Samo neka nastave ovako da rade. Pokušali smo danas da nametnemo naš ritam od samog početka utakmice. Zbog toga smo malo i promenili sistem igre naš, igrali smo nešto što nismo igrali do sada. Pokušali smo da uspostavimo dominaciju na terenu, ali trebalo nam je malo vremena da se prilagodimo kako samom terenu koji nije bio ideaalan ni za nas ni za domaćina, tako i postavci Zemuna. Lošiji teren je pre svega uticao na završni pas</strong>&nbsp;— objasnio je Milojević.</p><p>Ipak, Zvezda je bila uporna, Zvezda je napadala i na kraju stigla do tri boda.</p><p><strong>— U druom delu igre smo nastavili sa pritiskom, pojačali smo ga, verovali smo u sebe i uspeli smo da pobedimo. Bili smo bolji za taj jedan gol, verujem da je i umor kod igrača Zemuna bilo nešto što nam je išlo u prilog. Ponoviću još jednom da sam ponosan na moje momke. Oni su prepametni igrači, svaku moju misao prenesu i na teren i zbog toga sam veoma ponosan na njih. Hvala i našim navijačima, lepo je videti ovakvu sliku jer mislim da su momci zaslužili podršku, daju sve od sebe na svakoj utakmici </strong>— rekao je Milojević.</p>\r\n\r\n<br><p></p>', 1, NULL, NULL, '2017-10-30 08:31:37', '2017-10-30 08:31:37'),
(9, 'Zvezda na nivou finala Lige šampiona', 'Prema dobijenim parametrima nakon izvršene analize, fudbaleri Crvene zvezde susret Lige Evrope sa Arsenalom odigrali su na nivou ovogodišnjeg finala Lige šampiona.', 'zvezda-na-nivou-finala-lige-sampiona', '22554801_1563896743649407_3673087230265312480_n.jpg', '2017-10-30', '<p>\r\n\r\n</p><p><strong>- Nakon analize utakmice sa Arsenalom možemo da kažemo da smo meč odigrali na visokom evropskom nivou. Što se samog intenziteta utakmice tiče on je bio na nivou prošlogodišnjeg finala Lige šampiona. U maksimalnim i sprinterskim zonama imali smo značajno bolje parameter od Arsenala. U ofanzivnom trčanju smo ostvarili mnogo bolji rezultat od našeg rivala. Kada bismo to prikazali kroz brojke, ostvarili smo 631 ubrzanje, za razliku od protivnika koji je imao 541. Takođe, imali smo 117 sprinteva uz pretrčanih 2196 metara, za razliku od londonskog kluba koji je imao i manje sprinteva i manju metražu, odnosno 104 sprinteva i 1772 pretrčana metra</strong>&nbsp;– rekao je Janković.</p><p>Analiza meča umnogome će pomoći stručnom štabu Crvene zvezde da unapredi igru svoje ekipe.</p><p><strong>- Vrlo je interesantan podatak da smo od svih parametara koje smo merili imali jedino manje pešačenja od protivnika. To ukazuje na njihovu racionalnost u kretanju i iz toga smo izvukli pozitivne zaključke. Jako je važno što smo, pored odličnih parametara koje smo ostvarili kada je trčanje u pitanju, bili jako dobri u broju dobijenih duela, tu smo izjednačeni sa Arsenalom, s tim što je njihov intenzitet duela jači od našeg.</strong></p><p>Iako fudbaleri Crvene zvezde nisu uspeli da zatresu protivničku mrežu, imali su više udaraca na gol nego londonski tim.</p><p><strong>- Sve može da raduje činjenica da smo ostvarili veliku ofanzivnost u igri koja se ogleda u broju izvršenih napada i udaraca na gol. Ostvarili smo veći koeficijent napada koje smo završili udarcima na gol od Arsenala.  Takođe, odličan je i koeficijent brzine napadačkih akcija, jako smo bili brzi u napadima. To su neke od najvidljivijih karakteristika iz utakmice sa Arsenalom</strong>&nbsp;–zaključio je Janković.</p>\r\n\r\n<br><p></p>', 1, NULL, NULL, '2017-10-30 08:32:40', '2017-10-30 08:34:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verifyToken` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'user.png',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lastName`, `email`, `password`, `verifyToken`, `status`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'Aleksadnar', 'Potic', 'aleksandar1995potic@gmail.com', '$2y$10$W3MuMRcTXJkbKTLluMNpSO0CFy4vKznfJq0z5BwYZYkCrNyFfonIa', NULL, 1, '14907273_1143296492391297_3762356383715606804_n.jpg', 'wYqf6xnligbnme1q17BuGjPedw0t74ymuoZXBdPoORcJcLSr3QmV97o8w1c8', '2017-11-08 08:23:18', '2017-11-19 15:49:31'),
(6, 'Nikola', 'Nikolic', 'nikolanikolic@gmail.com', '$2y$10$W3MuMRcTXJkbKTLluMNpSO0CFy4vKznfJq0z5BwYZYkCrNyFfonIa', NULL, 1, 'Bruno-Mars-Curly-Hair.jpg', 'EgrjqV434JhvAEPzTk9vEDnxTy088NV54apB94WyR73uIYR16YCkgCQKO9QG', NULL, '2017-11-09 11:45:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `admin_role`
--
ALTER TABLE `admin_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requirements`
--
ALTER TABLE `requirements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `requests_sector_id_index` (`sector_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservations_sector_id_index` (`sector_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sectors`
--
ALTER TABLE `sectors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tidings`
--
ALTER TABLE `tidings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `admin_role`
--
ALTER TABLE `admin_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `requirements`
--
ALTER TABLE `requirements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sectors`
--
ALTER TABLE `sectors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tidings`
--
ALTER TABLE `tidings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
