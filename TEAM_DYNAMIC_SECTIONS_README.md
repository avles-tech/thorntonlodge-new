# Dynamic Team Sections - Setup Guide

This guide explains how to use the new dynamic team sections system that replaces hardcoded sections with database-driven configuration.

## Overview

The team page now supports dynamic sections configured via the `staff_categories` table. You can:
- Add/remove team sections without changing code
- Control display order
- Choose how each section displays (grid, list, or individual cards)
- Group categories under parent sections (like "Management Team")
- Show/hide sections

## Setup Steps

### 1. Run the Migration

```bash
php artisan migrate
```

This adds the following fields to `staff_categories`:
- `section_title` - Custom title for the section
- `parent_section` - Group categories under a parent (e.g., "Management Team")
- `display_type` - How to display: `card-grid`, `name-list`, or `individual-cards`
- `is_active` - Show/hide the section
- `description` - Optional section description

### 2. Populate Staff Categories

Run the SQL seeder to populate your categories:

```bash
mysql -u your_username -p your_database < database/seeders/StaffCategorySeeder.sql
```

Or manually insert/update categories in your database admin panel.

### 3. Update Your Team View (Optional)

You can now use the dynamic section rendering. Here's an example of how to update `team.blade.php`:

#### Example: Dynamic Rendering

```php
@foreach($sections as $parentSection => $categories)
    @if($parentSection)
        {{-- Render parent section (e.g., "Management Team") --}}
        <div class="team-section scroll-animate-zoom" style="margin-bottom: 60px;">
            <h3 class="team-category-title">{{ $parentSection }}</h3>

            @foreach($categories as $category)
                @if($category->staffs->count() > 0)
                    @include('pages.partials.team-section', [
                        'sectionTitle' => $category->section_title ?? $category->name,
                        'categoryName' => $category->name,
                        'displayType' => $category->display_type,
                        'description' => $category->description,
                        'staffMembers' => $category->staffs
                    ])
                @endif
            @endforeach
        </div>
    @else
        {{-- Render standalone categories (no parent section) --}}
        @foreach($categories as $category)
            @if($category->staffs->count() > 0)
                @include('pages.partials.team-section', [
                    'sectionTitle' => $category->section_title ?? $category->name,
                    'categoryName' => $category->name,
                    'displayType' => $category->display_type,
                    'description' => $category->description,
                    'staffMembers' => $category->staffs
                ])
            @endif
        @endforeach
    @endif
@endforeach
```

## Database Field Reference

### staff_categories Table

| Field | Type | Description | Example |
|-------|------|-------------|---------|
| `name` | string | Category name | "Managing Director" |
| `slug` | string | URL-friendly slug | "managing-director" |
| `section_title` | string | Display title (optional) | "Managing Director" |
| `parent_section` | string | Group under parent | "Management Team" |
| `display_type` | enum | Display style | "individual-cards" |
| `is_active` | boolean | Show/hide | true |
| `description` | text | Section description | null |
| `order` | integer | Display order | 1 |

### Display Types

1. **`card-grid`** - Grid of cards with photos (default)
   - Best for: Administrative Team, Maintenance Team, etc.
   - Shows: Photo, name, qualification, expandable bio

2. **`individual-cards`** - Centered individual cards
   - Best for: Management positions (Director, Manager)
   - Shows: Larger cards, centered layout

3. **`name-list`** - Simple text list of names
   - Best for: Large teams like Senior Care Assistants
   - Shows: Names and qualifications only

## Managing Categories

### Add a New Section

```sql
INSERT INTO staff_categories (name, slug, section_title, parent_section, display_type, is_active, `order`, created_at, updated_at)
VALUES ('Nursing Team', 'nursing-team', 'Nursing Team', NULL, 'card-grid', 1, 9, NOW(), NOW());
```

### Update Display Type

```sql
UPDATE staff_categories
SET display_type = 'individual-cards'
WHERE name = 'Administrative Team';
```

### Change Order

```sql
UPDATE staff_categories
SET `order` = 10
WHERE name = 'Culinary Team';
```

### Hide a Section

```sql
UPDATE staff_categories
SET is_active = 0
WHERE name = 'Maintenance Team';
```

### Group Under Parent Section

```sql
UPDATE staff_categories
SET parent_section = 'Management Team'
WHERE name IN ('Managing Director', 'Deputy Managing Director', 'Home Manager');
```

## Controller Variables

The `PageController@team` method now provides:

- `$categories` - All active categories with their staff members
- `$sections` - Categories grouped by parent_section
- `$staffs` - Legacy flat list (for backward compatibility)

## Benefits

✅ No code changes needed to add/remove sections
✅ Easy to reorder sections via database
✅ Flexible display options
✅ Can group related categories together
✅ Simple to show/hide sections temporarily
✅ Admin panel can easily manage this

## Next Steps

1. Run the migration
2. Populate categories with the SQL seeder
3. Test the team page
4. Optionally, update the view to use dynamic rendering
5. Create an admin panel to manage categories (optional)

## Admin Panel (Future Enhancement)

You can create an admin interface to manage staff categories with these features:
- Drag-and-drop reordering
- Toggle active/inactive
- Change display type via dropdown
- Assign parent sections
- Preview changes before saving
