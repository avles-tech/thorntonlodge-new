-- ================================================
-- Fix staff_categories order for server
-- This will ensure Management Team appears at the top
-- ================================================

-- Delete Assistant Manager if it's not being used (has order=0)
DELETE FROM `staff_categories` WHERE `id` = 8 AND `name` = 'Assistant Manager';

-- Fix Deputy Manager - either delete it or move it under Management Team
-- Option 1: Delete it if duplicate
DELETE FROM `staff_categories` WHERE `id` = 9 AND `name` = 'Deputy Manager' AND `parent_section` IS NULL;

-- OR Option 2: If you want to keep it, move it under Management Team
-- UPDATE `staff_categories` SET `parent_section` = 'Management Team', `order` = 2.5 WHERE `id` = 9;

-- Fix Home Manager order (change from 3 to ensure proper ordering)
UPDATE `staff_categories` SET `order` = 3 WHERE `id` = 13 AND `name` = 'Home Manager';

-- Verify the final order
SELECT `id`, `name`, `parent_section`, `order`, `is_active`
FROM `staff_categories`
WHERE `is_active` = 1
ORDER BY `order` ASC;
