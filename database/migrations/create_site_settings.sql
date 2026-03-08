-- ================================================
-- Create site_settings table for menu PDF management
-- Run this via: docker exec -i laravel-db mysql -uroot -proot thornton_db < create_site_settings.sql
-- ================================================

USE thornton_db;

CREATE TABLE IF NOT EXISTS `site_settings` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `key` varchar(191) NOT NULL,
  `value` text DEFAULT NULL,
  `type` varchar(191) NOT NULL DEFAULT 'text',
  `label` varchar(191) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `site_settings_key_unique` (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insert default menu PDF setting
INSERT INTO `site_settings` (`key`, `value`, `type`, `label`, `description`, `created_at`, `updated_at`) VALUES
('menu_pdf_path', '/Uploads/menu_of_the_year/MenuOfTheYear.pdf', 'file', 'Menu of the Year PDF', 'Upload the annual menu PDF file', NOW(), NOW())
ON DUPLICATE KEY UPDATE `updated_at` = NOW();

-- Verify the table
SELECT * FROM site_settings;

SELECT 'Site settings table created successfully!' AS status;
