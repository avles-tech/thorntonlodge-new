# Dynamic Team Sections - Usage Guide

## ✅ Setup Complete!

Your team page now uses dynamic rendering based on database configuration. All sections are controlled via the `staff_categories` table.

## How It Works

### Current Structure

The system automatically renders sections based on:
1. **`parent_section`** - Groups categories together (e.g., "Management Team")
2. **`display_type`** - How to display the section:
   - `card-grid` - Grid of photo cards
   - `individual-cards` - Centered cards for management
   - `name-list` - Simple text list of names
3. **`order`** - Display order on the page
4. **`is_active`** - Show/hide the section

## Managing Sections

### Add a New Team Section

```sql
INSERT INTO staff_categories
(name, slug, section_title, parent_section, display_type, is_active, `order`, created_at, updated_at)
VALUES
('Nursing Team', 'nursing-team', 'Nursing Team', NULL, 'card-grid', 1, 9, NOW(), NOW());
```

Then add staff members with `category_id` pointing to this new category.

### Reorder Sections

Simply change the `order` field:

```sql
-- Move Culinary Team to position 4
UPDATE staff_categories SET `order` = 4 WHERE name = 'Culinary Team';

-- Move Administrative Team to position 8
UPDATE staff_categories SET `order` = 8 WHERE name = 'Administrative Team';
```

Refresh the page and sections will appear in the new order!

### Hide a Section Temporarily

```sql
UPDATE staff_categories SET is_active = 0 WHERE name = 'Maintenance Team';
```

To show it again:
```sql
UPDATE staff_categories SET is_active = 1 WHERE name = 'Maintenance Team';
```

### Change Display Style

```sql
-- Change Administrative Team from grid to list
UPDATE staff_categories
SET display_type = 'name-list'
WHERE name = 'Administrative Team';

-- Change Primary Senior Care to individual cards
UPDATE staff_categories
SET display_type = 'individual-cards'
WHERE name = 'Primary Senior Care';
```

### Group Categories Under a Parent

```sql
-- Add "Deputy Manager" under Management Team
UPDATE staff_categories
SET parent_section = 'Management Team',
    display_type = 'individual-cards',
    `order` = 3.5
WHERE name = 'Deputy Manager';
```

### Add Section Description

```sql
UPDATE staff_categories
SET description = 'Our dedicated administrative staff handle all office operations and resident support services.'
WHERE name = 'Administrative Team';
```

## Staff Members

Staff members are linked to categories via `category_id`. The system will automatically:
- Show staff in the correct section
- Display them in the right format (grid, list, or cards)
- Sort them by their `order` field within each section

### Add a New Staff Member

```sql
INSERT INTO staffs
(category_id, name, position, description, image, bio, `order`, status, created_at, updated_at)
VALUES
(
    (SELECT id FROM staff_categories WHERE name = 'Administrative Team'),
    'John Smith',
    NULL,
    'Office Manager',
    'john-smith.jpg',
    'John has over 10 years of experience in healthcare administration...',
    1,
    'ACTIVE',
    NOW(),
    NOW()
);
```

## Special Features

### Team Group Photos (for name-list display)

For sections using `name-list` display type, you can show a group photo by:
1. Naming the image file: `{category-slug}.jpg`
2. Placing it in: `public/Uploads/staff_images/`

Example: For "Senior Care Assistants" with slug "senior-care-assistants":
- Save image as: `senior-care-assistants.jpg`
- Upload to: `public/Uploads/staff_images/senior-care-assistants.jpg`

The system will automatically display it above the names list.

### Expandable Bio Cards

Staff members with a `bio` field will automatically show:
- A blue `+` icon on their card
- Clicking expands the card to show the bio
- Clicking again collapses it
- Only one card can be expanded at a time

## Current Configuration

Your current sections (as configured):

| Order | Section | Parent | Display Type | Active |
|-------|---------|--------|--------------|--------|
| 1 | Managing Director | Management Team | individual-cards | ✓ |
| 2 | Deputy Managing Director | Management Team | individual-cards | ✓ |
| 3 | Home Manager | Management Team | individual-cards | ✓ |
| 4 | Administrative Team | - | card-grid | ✓ |
| 5 | Maintenance Team | - | card-grid | ✓ |
| 6 | Primary Senior Care | - | card-grid | ✓ |
| 7 | Senior Care Assistants | - | name-list | ✓ |
| 8 | Culinary Team | - | card-grid | ✓ |

## Benefits

✅ **No Code Changes** - Add/remove/reorder sections via database only
✅ **Flexible Display** - Choose how each section appears
✅ **Easy Management** - Simple SQL queries or admin panel
✅ **Grouped Sections** - Group related categories together
✅ **Show/Hide** - Temporarily hide sections without deleting
✅ **Scalable** - Add unlimited categories and staff members

## Next Steps

### Option 1: Manual Management (Current)
Continue managing via SQL queries directly in the database.

### Option 2: Build Admin Panel (Future)
Create an admin interface with:
- Drag-and-drop section reordering
- Toggle active/inactive buttons
- Display type dropdown selectors
- Visual preview of changes
- CRUD operations for staff and categories

The foundation is ready for an admin panel whenever you're ready to build it!

## Testing

Visit your team page to see the dynamic rendering in action:
```
http://your-domain.com/team
```

Try making changes to the database and refresh the page to see them instantly!
