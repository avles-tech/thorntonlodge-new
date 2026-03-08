-- ================================================
-- Complete fix for staff_categories order on server
-- Ensures Management Team appears at the top
-- ================================================

-- Step 1: Delete unused/duplicate entries
DELETE FROM `staff_categories` WHERE `id` = 8 AND `name` = 'Assistant Manager';
DELETE FROM `staff_categories` WHERE `id` = 9 AND `name` = 'Deputy Manager' AND `parent_section` IS NULL;

-- Step 2: Update order values for proper display
-- Management Team (should appear first with orders 1-3)
UPDATE `staff_categories` SET `order` = 1 WHERE `id` = 11 AND `name` = 'Managing Director';
UPDATE `staff_categories` SET `order` = 2 WHERE `id` = 10 AND `name` = 'Deputy Managing Director';
UPDATE `staff_categories` SET `order` = 3 WHERE `id` = 13 AND `name` = 'Home Manager';

-- Standalone sections (order 4-8)
UPDATE `staff_categories` SET `order` = 4 WHERE `id` = 1 AND `name` = 'Administrative Team';
UPDATE `staff_categories` SET `order` = 5 WHERE `id` = 12 AND `name` = 'Maintenance Team';
UPDATE `staff_categories` SET `order` = 6 WHERE `id` = 5 AND `name` = 'Primary Senior Care';
UPDATE `staff_categories` SET `order` = 7 WHERE `id` = 4 AND `name` = 'Senior Care Assistants';
UPDATE `staff_categories` SET `order` = 8 WHERE `id` = 7 AND `name` = 'Culinary Team';

-- Step 3: Verify the final result
SELECT
    `id`,
    `name`,
    `section_title`,
    `parent_section`,
    `display_type`,
    `order`,
    `is_active`
FROM `staff_categories`
WHERE `is_active` = 1
ORDER BY `order` ASC;

-- Expected result:
-- order 1: Managing Director (Management Team)
-- order 2: Deputy Managing Director (Management Team)
-- order 3: Home Manager (Management Team)
-- order 4: Administrative Team (standalone)
-- order 5: Maintenance Team (standalone)
-- order 6: Primary Senior Care (standalone)
-- order 7: Senior Care Assistants (standalone)
-- order 8: Culinary Team (standalone)
