-- Manual Migration: Add display settings to staff_categories table
-- Run this directly in your MySQL database

-- Add new columns to staff_categories table
ALTER TABLE staff_categories
    ADD COLUMN section_title VARCHAR(255) NULL AFTER name,
    ADD COLUMN parent_section VARCHAR(255) NULL AFTER section_title,
    ADD COLUMN display_type ENUM('card-grid', 'name-list', 'individual-cards') DEFAULT 'card-grid' AFTER parent_section,
    ADD COLUMN is_active BOOLEAN DEFAULT TRUE AFTER display_type,
    ADD COLUMN description TEXT NULL AFTER is_active;

-- Now populate the categories with current team structure
INSERT INTO staff_categories (name, slug, section_title, parent_section, display_type, is_active, `order`, created_at, updated_at)
VALUES
('Managing Director', 'managing-director', 'Managing Director', 'Management Team', 'individual-cards', 1, 1, NOW(), NOW()),
('Deputy Managing Director', 'deputy-managing-director', 'Deputy Managing Director', 'Management Team', 'individual-cards', 1, 2, NOW(), NOW()),
('Home Manager', 'home-manager', 'Home Manager', 'Management Team', 'individual-cards', 1, 3, NOW(), NOW()),
('Administrative Team', 'administrative-team', 'Administrative Team', NULL, 'card-grid', 1, 4, NOW(), NOW()),
('Maintenance Team', 'maintenance-team', 'Maintenance Team', NULL, 'card-grid', 1, 5, NOW(), NOW()),
('Primary Senior Care', 'primary-senior-care', 'Primary Senior Care', NULL, 'card-grid', 1, 6, NOW(), NOW()),
('Senior Care Assistants', 'senior-care-assistants', 'Senior Care Assistants', NULL, 'name-list', 1, 7, NOW(), NOW()),
('Culinary Team', 'culinary-team', 'Culinary Team', NULL, 'card-grid', 1, 8, NOW(), NOW())
ON DUPLICATE KEY UPDATE
    section_title = VALUES(section_title),
    parent_section = VALUES(parent_section),
    display_type = VALUES(display_type),
    is_active = VALUES(is_active),
    `order` = VALUES(`order`),
    updated_at = NOW();

-- Verify the changes
SELECT id, name, section_title, parent_section, display_type, is_active, `order`
FROM staff_categories
ORDER BY `order`;
