-- ================================================
-- Revert 'display_order' column back to 'order'
-- Run this via: docker exec -i laravel-db mysql -uroot -proot thornton_db < revert_to_order_column.sql
-- ================================================

USE thornton_db;

-- Rename 'display_order' back to 'order' in staff_categories table
ALTER TABLE `staff_categories`
CHANGE COLUMN `display_order` `order` INT(11) NOT NULL DEFAULT 0;

-- Rename 'display_order' back to 'order' in staffs table
ALTER TABLE `staffs`
CHANGE COLUMN `display_order` `order` INT(11) NOT NULL DEFAULT 0;

-- Verify the changes
DESCRIBE staff_categories;
DESCRIBE staffs;

SELECT 'Revert completed successfully! Column renamed back to order' AS status;
