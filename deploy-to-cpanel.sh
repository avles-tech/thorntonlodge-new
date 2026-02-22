#!/bin/bash

##############################################
# Thornton Lodge - cPanel Deployment Script
# Run this script after uploading files to cPanel
##############################################

echo "========================================="
echo "Thornton Lodge Deployment Script"
echo "========================================="
echo ""

# Colors
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
NC='\033[0m' # No Color

# Check if we're in the right directory
if [ ! -f "artisan" ]; then
    echo -e "${RED}Error: artisan file not found. Please run this script from the Laravel root directory.${NC}"
    exit 1
fi

echo -e "${YELLOW}Step 1: Setting file permissions...${NC}"
chmod -R 755 storage
chmod -R 755 bootstrap/cache
echo -e "${GREEN}✓ Permissions set${NC}"
echo ""

echo -e "${YELLOW}Step 2: Installing/Updating Composer dependencies...${NC}"
if command -v composer &> /dev/null; then
    composer install --optimize-autoloader --no-dev
else
    echo -e "${YELLOW}Composer not found globally, checking for composer.phar...${NC}"
    if [ -f "composer.phar" ]; then
        php composer.phar install --optimize-autoloader --no-dev
    else
        echo -e "${RED}Composer not found. Please install composer first.${NC}"
        exit 1
    fi
fi
echo -e "${GREEN}✓ Dependencies installed${NC}"
echo ""

echo -e "${YELLOW}Step 3: Checking .env file...${NC}"
if [ ! -f ".env" ]; then
    echo -e "${YELLOW}No .env file found. Copying from .env.example...${NC}"
    if [ -f ".env.example" ]; then
        cp .env.example .env
        echo -e "${GREEN}✓ .env file created${NC}"
    else
        echo -e "${RED}Error: .env.example not found${NC}"
        exit 1
    fi
else
    echo -e "${GREEN}✓ .env file exists${NC}"
fi
echo ""

echo -e "${YELLOW}Step 4: Generating application key...${NC}"
php artisan key:generate --force
echo -e "${GREEN}✓ Application key generated${NC}"
echo ""

echo -e "${YELLOW}Step 5: Running database migrations...${NC}"
read -p "Do you want to run migrations? (y/n): " -n 1 -r
echo ""
if [[ $REPLY =~ ^[Yy]$ ]]; then
    php artisan migrate --force
    echo -e "${GREEN}✓ Migrations completed${NC}"
else
    echo -e "${YELLOW}⊗ Skipped migrations${NC}"
fi
echo ""

echo -e "${YELLOW}Step 6: Clearing all caches...${NC}"
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
echo -e "${GREEN}✓ Caches cleared${NC}"
echo ""

echo -e "${YELLOW}Step 7: Optimizing for production...${NC}"
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan optimize
echo -e "${GREEN}✓ Optimization complete${NC}"
echo ""

echo -e "${YELLOW}Step 8: Creating storage link...${NC}"
if [ -L "public/storage" ]; then
    echo -e "${YELLOW}Storage link already exists${NC}"
else
    php artisan storage:link
    echo -e "${GREEN}✓ Storage link created${NC}"
fi
echo ""

echo -e "${YELLOW}Step 9: Verifying setup...${NC}"
echo "Checking application status..."
php artisan about
echo ""

echo "========================================="
echo -e "${GREEN}Deployment Complete! 🚀${NC}"
echo "========================================="
echo ""
echo "Next steps:"
echo "1. Visit your website and verify it loads"
echo "2. Test the admin panel login"
echo "3. Check if images are loading correctly"
echo "4. Test the team page at /team"
echo "5. Configure SSL certificate in cPanel"
echo ""
echo "If you encounter issues, check:"
echo "- storage/logs/laravel.log for errors"
echo "- .env file configuration"
echo "- Database connection settings"
echo ""
