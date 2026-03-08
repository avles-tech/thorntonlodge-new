-- ================================================
-- Rename 'order' column to 'display_order'
-- Avoiding MySQL reserved keyword
-- Run this via: docker exec -i laravel-db mysql -uroot -proot thornton_db < rename_order_column.sql
-- ================================================

USE thornton_db;

-- Rename 'order' to 'display_order' in staff_categories table
ALTER TABLE `staff_categories`
CHANGE COLUMN `order` `display_order` INT(11) NOT NULL DEFAULT 0;

-- Rename 'order' to 'display_order' in staffs table
ALTER TABLE `staffs`
CHANGE COLUMN `order` `display_order` INT(11) NOT NULL DEFAULT 0;

-- Verify the changes
DESCRIBE staff_categories;
DESCRIBE staffs;

SELECT 'Migration completed successfully! Column renamed from order to display_order' AS status;
