# Laravel Deployment Guide for cPanel

## Complete Step-by-Step Deployment Instructions

---

## Before You Start

### Prerequisites:
- ✅ cPanel hosting account with SSH access (optional but recommended)
- ✅ PHP 8.0+ installed on your hosting
- ✅ MySQL database access
- ✅ Domain/subdomain configured

---

## Step 1: Prepare Your Application Locally

### 1.1 Update Configuration Files

**Update `.env` file for production:**
```bash
APP_NAME="Thornton Lodge"
APP_ENV=production
APP_KEY=your-app-key-here
APP_DEBUG=false
APP_URL=https://your-domain.com

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
```

**Important:** Set `APP_DEBUG=false` for production!

### 1.2 Optimize Application

Run these commands locally before uploading:

```bash
# Clear and cache configurations
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Optimize autoload
composer install --optimize-autoloader --no-dev
```

### 1.3 Create a Deployment Package

**Option A: Using Git (Recommended)**
```bash
# Create a .gitignore if not exists
git add .
git commit -m "Prepare for production"
git push origin main
```

**Option B: Create ZIP Archive**
```bash
# Exclude unnecessary files
zip -r thorntonlodge-deploy.zip . \
  -x "node_modules/*" \
  -x ".git/*" \
  -x "storage/logs/*" \
  -x ".env" \
  -x "*.log"
```

---

## Step 2: Upload Files to cPanel

### Method 1: Using SSH + Git (Recommended)

1. **SSH into your server:**
   ```bash
   ssh your-username@your-domain.com
   ```

2. **Navigate to your directory:**
   ```bash
   cd public_html
   # or
   cd ~/domains/your-domain.com
   ```

3. **Clone your repository:**
   ```bash
   git clone https://github.com/your-username/thorntonlodge.git
   cd thorntonlodge
   ```

4. **Install dependencies:**
   ```bash
   composer install --optimize-autoloader --no-dev
   ```

### Method 2: Using cPanel File Manager

1. **Login to cPanel**
2. **Go to File Manager**
3. **Navigate to public_html** (or your domain directory)
4. **Upload your ZIP file**
5. **Extract the files**

---

## Step 3: Set Up Database

### 3.1 Create Database in cPanel

1. **Login to cPanel**
2. **Go to MySQL Databases**
3. **Create a new database:**
   - Database name: `thornton_db`
4. **Create a new user:**
   - Username: `thornton_user`
   - Password: (generate a strong password)
5. **Add user to database with ALL PRIVILEGES**
6. **Note down:**
   - Database name
   - Username
   - Password

### 3.2 Import Database

**Option A: Using phpMyAdmin**
1. Open phpMyAdmin from cPanel
2. Select your database
3. Click "Import"
4. Upload your SQL backup file
5. Click "Go"

**Option B: Using SSH**
```bash
mysql -u thornton_user -p thornton_db < database_backup.sql
```

### 3.3 Run Migrations (if no backup)

```bash
php artisan migrate --force
```

---

## Step 4: Configure Environment

### 4.1 Update .env File

1. **In cPanel File Manager:**
   - Navigate to your application root
   - Edit `.env` file (or create if not exists)
   - Update the following:

```env
APP_NAME="Thornton Lodge"
APP_ENV=production
APP_KEY=base64:your-generated-key-here
APP_DEBUG=false
APP_URL=https://your-domain.com

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=thornton_db
DB_USERNAME=thornton_user
DB_PASSWORD=your-strong-password

CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_CONNECTION=sync

MAIL_MAILER=smtp
MAIL_HOST=smtp.your-email.com
MAIL_PORT=587
MAIL_USERNAME=your-email@domain.com
MAIL_PASSWORD=your-email-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@your-domain.com
MAIL_FROM_NAME="Thornton Lodge"
```

### 4.2 Generate Application Key (if not done)

```bash
php artisan key:generate
```

---

## Step 5: Configure Web Root

### Option A: Domain Points to public folder (Recommended)

1. **In cPanel, go to "Domains"**
2. **Click on your domain**
3. **Change "Document Root" to:**
   ```
   /home/username/public_html/thorntonlodge/public
   ```
4. **Save**

### Option B: Create .htaccess redirect

If you cannot change document root, create `.htaccess` in public_html:

```apache
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteRule ^(.*)$ public/$1 [L]
</IfModule>
```

### Option C: Move files (Not Recommended)

```bash
# Move all files except public to a level up
mv * ../laravel-app/
mv public/* ./
```

---

## Step 6: Set File Permissions

### Using File Manager:
1. Select `storage` folder → Permissions → Set to **755**
2. Select `bootstrap/cache` folder → Permissions → Set to **755**
3. Apply to all subdirectories and files

### Using SSH:
```bash
chmod -R 755 storage
chmod -R 755 bootstrap/cache
chown -R username:username storage bootstrap/cache
```

---

## Step 7: Configure PHP Settings

### 7.1 Select PHP Version
1. **In cPanel → "Select PHP Version"**
2. **Select PHP 8.0 or higher**
3. **Enable required extensions:**
   - ✅ mbstring
   - ✅ openssl
   - ✅ pdo
   - ✅ pdo_mysql
   - ✅ tokenizer
   - ✅ xml
   - ✅ ctype
   - ✅ json
   - ✅ bcmath
   - ✅ fileinfo

### 7.2 Update PHP Settings (if needed)

Create `php.ini` or `.user.ini` in root:

```ini
upload_max_filesize = 64M
post_max_size = 64M
max_execution_time = 300
memory_limit = 512M
```

---

## Step 8: Optimize for Production

### Via SSH:
```bash
# Cache everything
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Optimize composer autoload
composer dump-autoload -o
```

### Create cron job for scheduler (if needed):
1. **cPanel → Cron Jobs**
2. **Add:**
   ```
   * * * * * cd /home/username/public_html/thorntonlodge && php artisan schedule:run >> /dev/null 2>&1
   ```

---

## Step 9: Security Checklist

### ✅ Checklist:
- [ ] Set `APP_DEBUG=false` in .env
- [ ] Set strong `APP_KEY`
- [ ] Hide `.env` file (should not be in public folder)
- [ ] Set correct file permissions (755 for folders, 644 for files)
- [ ] Delete `/install` or `/setup` directories if any
- [ ] Configure SSL certificate (Let's Encrypt in cPanel)
- [ ] Set up database backups
- [ ] Configure firewall rules
- [ ] Enable HTTPS redirect

### Force HTTPS Redirect

Add to `public/.htaccess` (top of file):

```apache
<IfModule mod_rewrite.c>
    RewriteEngine On

    # Force HTTPS
    RewriteCond %{HTTPS} off
    RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]

    # Laravel routing
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [L]
</IfModule>
```

---

## Step 10: Test Your Deployment

### Test these URLs:
1. ✅ Homepage: `https://your-domain.com/`
2. ✅ Team page: `https://your-domain.com/team`
3. ✅ Admin login: `https://your-domain.com/login`
4. ✅ Images loading: Check staff photos, gallery
5. ✅ Database connection: Check if data displays
6. ✅ Forms: Test contact forms

---

## Troubleshooting Common Issues

### Issue 1: 500 Internal Server Error

**Solution:**
1. Check `.env` file exists and is configured
2. Run: `php artisan key:generate`
3. Clear cache: `php artisan cache:clear`
4. Check file permissions: `chmod -R 755 storage bootstrap/cache`
5. Check error logs in `storage/logs/laravel.log`

### Issue 2: Composer Not Found

**Solution:**
```bash
# Install composer locally
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php
php -r "unlink('composer-setup.php');"

# Use it
php composer.phar install --no-dev --optimize-autoloader
```

### Issue 3: Database Connection Error

**Solution:**
1. Verify database credentials in `.env`
2. Check database exists in cPanel
3. Verify user has permissions
4. Test connection:
   ```bash
   mysql -u username -p database_name
   ```

### Issue 4: Images/CSS Not Loading

**Solution:**
1. Check document root points to `/public` folder
2. Run: `php artisan storage:link`
3. Check `.htaccess` in public folder exists
4. Verify file permissions

### Issue 5: Class Not Found / Autoload Error

**Solution:**
```bash
composer dump-autoload
php artisan clear-compiled
php artisan optimize
```

### Issue 6: Too Many Redirects

**Solution:**
Check your `.htaccess` file and remove duplicate redirect rules.

---

## Post-Deployment Tasks

### 1. Set Up Backups
- **Database:** cPanel → Backup → Download Database Backup
- **Files:** cPanel → Backup → Download Home Directory
- **Automated:** Set up cPanel automatic backups

### 2. Set Up Email
- Configure SMTP in `.env`
- Test contact forms
- Set up email accounts in cPanel

### 3. Set Up SSL Certificate
1. cPanel → SSL/TLS Status
2. Install Let's Encrypt certificate
3. Enable "Force HTTPS Redirect"

### 4. Monitor Performance
- Enable error logging
- Set up uptime monitoring
- Configure Google Analytics

### 5. Maintenance Mode
```bash
# Enable maintenance mode
php artisan down --message="We're upgrading!" --retry=60

# Disable maintenance mode
php artisan up
```

---

## Updating the Application

### Method 1: Using Git
```bash
cd /path/to/application
git pull origin main
composer install --no-dev --optimize-autoloader
php artisan migrate --force
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### Method 2: Manual Upload
1. Enable maintenance mode
2. Upload new files (overwrite)
3. Update database if needed
4. Clear cache
5. Disable maintenance mode

---

## Quick Reference Commands

```bash
# Clear all cache
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Optimize for production
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan optimize

# Run migrations
php artisan migrate --force

# Create storage link
php artisan storage:link

# Check application status
php artisan about
```

---

## Support Resources

- **Laravel Docs:** https://laravel.com/docs
- **cPanel Docs:** https://docs.cpanel.net/
- **Community:** https://laracasts.com/discuss

---

## Deployment Checklist

Before going live, ensure:

- [ ] All environment variables are set in `.env`
- [ ] `APP_DEBUG` is set to `false`
- [ ] Database is imported and working
- [ ] File permissions are correct (755/644)
- [ ] SSL certificate is installed
- [ ] HTTPS redirect is enabled
- [ ] All pages load correctly
- [ ] Admin panel is accessible
- [ ] Images and assets load properly
- [ ] Contact forms work
- [ ] Email sending works
- [ ] Backups are configured
- [ ] Error logging is enabled
- [ ] Performance is optimized (cached)

---

**Your application should now be live and running!** 🚀

For issues specific to Thornton Lodge features (team sections, staff management, etc.), refer to the other documentation files.
