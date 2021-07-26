DROP TABLE IF EXISTS `generator`;

CREATE TABLE `generator` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `random_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `generator` (`id`, `deleted_at`, `random_number`, `created_at`, `updated_at`) VALUES
(1, NULL, '109', '2021-07-25 06:25:10', '2021-07-25 06:25:10'),
(2, NULL, '132', '2021-07-25 06:25:28', '2021-07-25 06:25:28');





