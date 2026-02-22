-- SQL to populate staff_categories with the current team structure
-- Run this after migrating: php artisan migrate

-- First, run the migration to add the new columns
-- Then insert/update the categories

-- Management Team Categories
INSERT INTO staff_categories (name, slug, section_title, parent_section, display_type, is_active, `order`, created_at, updated_at)
VALUES
('Managing Director', 'managing-director', 'Managing Director', 'Management Team', 'individual-cards', 1, 1, NOW(), NOW()),
('Deputy Managing Director', 'deputy-managing-director', 'Deputy Managing Director', 'Management Team', 'individual-cards', 1, 2, NOW(), NOW()),
('Home Manager', 'home-manager', 'Home Manager', 'Management Team', 'individual-cards', 1, 3, NOW(), NOW())
ON DUPLICATE KEY UPDATE
    section_title = VALUES(section_title),
    parent_section = VALUES(parent_section),
    display_type = VALUES(display_type),
    is_active = VALUES(is_active),
    `order` = VALUES(`order`),
    updated_at = NOW();

-- Staff Team Categories
INSERT INTO staff_categories (name, slug, section_title, parent_section, display_type, is_active, `order`, created_at, updated_at)
VALUES
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

-- Alternative: If you want to update existing categories instead of inserting new ones
-- UPDATE staff_categories SET
--     section_title = 'Managing Director',
--     parent_section = 'Management Team',
--     display_type = 'individual-cards',
--     is_active = 1,
--     `order` = 1
-- WHERE name = 'Managing Director';
