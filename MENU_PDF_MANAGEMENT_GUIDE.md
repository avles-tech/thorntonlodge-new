# Menu PDF Management System

## ✅ Setup Complete!

The "Menu of the Year" button on the Cuisine page is now dynamically managed from the admin dashboard.

## How It Works

### Database
- New `site_settings` table stores configurable site settings
- Current setting: `menu_pdf_path` (default: `/Uploads/menu_of_the_year/MenuOfTheYear.pdf`)

### Admin Interface
- Navigate to: **Dashboard → Settings → Menu PDF**
- URL: `/site-settings`

## How to Update the Menu PDF

### Step 1: Access the Settings Page
1. Login to the admin dashboard
2. Click on **Settings** in the left sidebar
3. Click on **Menu PDF**

### Step 2: Upload New Menu
1. Click "Choose a PDF file"
2. Select your menu PDF (max 10MB)
3. Click "Upload New Menu PDF"
4. Success message will confirm the upload

### Step 3: Verify
1. Click "Preview" to view the uploaded PDF
2. Visit the Cuisine page on the website
3. Click "View Menu of the Year" button to test

## File Location
- PDFs are stored in: `public/Uploads/menu_of_the_year/`
- Filename: `MenuOfTheYear.pdf` (automatically maintained)

## Technical Details

### Files Created/Modified:

**1. Database:**
- `database/migrations/2026_02_22_000000_create_site_settings_table.php`
- `database/migrations/create_site_settings.sql`

**2. Models:**
- `app/SiteSetting.php` - Model for site settings

**3. Controllers:**
- `app/Http/Controllers/SiteSettingController.php` - Handles menu PDF uploads
- `app/Http/Controllers/PageController.php` - Updated to pass menu path to cuisine view

**4. Views:**
- `resources/views/settings/index.blade.php` - Admin interface for menu upload
- `resources/views/pages/cuisine.blade.php` - Updated to use dynamic menu path
- `resources/views/inc/adminNavTop.blade.php` - Added Settings menu item

**5. Routes:**
- `routes/web.php` - Added `/site-settings` routes

### Code Changes:

**Cuisine Page (Before):**
```html
<a href="javascript:void(0);" onclick="window.open('/Uploads/menu_of_the_year/MenuOfTheYear.pdf', '_blank');">
```

**Cuisine Page (After):**
```html
<a href="javascript:void(0);" onclick="window.open('{{ $menu_pdf_path }}', '_blank');">
```

## Helper Functions

The `SiteSetting` model provides convenient methods:

```php
// Get a setting value
$value = SiteSetting::get('menu_pdf_path', $default);

// Set a setting value
SiteSetting::set('menu_pdf_path', '/path/to/new/menu.pdf');
```

## Future Enhancements

This system can be extended to manage other site settings:
- Footer text
- Contact information
- Social media links
- Banner images
- Email templates

Simply add new rows to the `site_settings` table and create corresponding upload/edit interfaces.

## Troubleshooting

### Upload fails
- Check file size is under 10MB
- Ensure the file is a valid PDF
- Verify the `public/Uploads/menu_of_the_year/` directory exists and is writable

### Menu doesn't appear on Cuisine page
- Clear browser cache
- Check the file exists at the path shown in settings
- Verify the setting value in the database:
  ```sql
  SELECT * FROM site_settings WHERE `key` = 'menu_pdf_path';
  ```

### Permission errors
- Ensure directory has correct permissions:
  ```bash
  chmod 755 public/Uploads/menu_of_the_year/
  ```

## Benefits

✅ **No Code Changes** - Update menu PDF without touching code
✅ **User Friendly** - Simple drag-and-drop interface
✅ **Instant Updates** - Changes reflect immediately on the website
✅ **Preview** - View the PDF before publishing
✅ **Audit Trail** - Timestamps track when menu was last updated
✅ **Scalable** - Easy to add more configurable settings

---

**Your Menu PDF is now manageable from the dashboard!** 🚀
