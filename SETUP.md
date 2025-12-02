# Setup Instructions

## Step 1: Install Laravel Dependencies

```bash
composer install
```

## Step 2: Environment Configuration

Copy `.env.example` to `.env`:
```bash
cp .env.example .env
```

Generate application key:
```bash
php artisan key:generate
```

## Step 3: Database Setup

1. Create a MySQL database named `portfolio_db` (or your preferred name)
2. Update `.env` file with your database credentials:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=portfolio_db
DB_USERNAME=root
DB_PASSWORD=your_password
```

## Step 4: Run Migrations

```bash
php artisan migrate
```

## Step 5: Create Admin User

Run the seeder to create the default admin user:
```bash
php artisan db:seed
```

**Default Admin Credentials:**
- Email: `admin@admin.com`
- Password: `password`

**Important:** Change the password after first login!

## Step 6: Setup Storage Link

Create a symbolic link from `storage/app/public` to `public/storage`:
```bash
php artisan storage:link
```

## Step 7: Move Assets

Copy your existing assets to the public folder:

**Windows:**
```powershell
Copy-Item -Path "css" -Destination "public\css" -Recurse
Copy-Item -Path "js" -Destination "public\js" -Recurse
Copy-Item -Path "assets" -Destination "public\assets" -Recurse
```

**Linux/Mac:**
```bash
cp -r css public/
cp -r js public/
cp -r assets public/
```

## Step 8: Set Permissions (Linux/Mac only)

```bash
chmod -R 775 storage
chmod -R 775 bootstrap/cache
```

## Step 9: Start Development Server

```bash
php artisan serve
```

The application will be available at: `http://localhost:8000`

## Step 10: Access Admin Panel

Navigate to: `http://localhost:8000/admin/login`

## First Steps After Setup

1. Login to admin panel
2. Update settings in Admin → Settings
3. Add your projects in Admin → Projects
4. Add skills in Admin → Skills
5. Add experiences in Admin → Experiences
6. Test the contact form

## File Upload

- Project images will be stored in `storage/app/public/projects/`
- Profile images will be stored in `storage/app/public/profile/`
- Resume files will be stored in `storage/app/public/resume/`

Make sure these directories exist and have write permissions.


