# Admin Panel Access Guide - বাংলা

## Admin Panel এ কিভাবে Login করবেন

### Step 1: Admin Panel URL
Browser এ এই URL এ যান:
```
http://localhost:8000/admin/login
```

### Step 2: Login Credentials
- **Email**: `mdjulfikerhasan191212@gmail.com`
- **Password**: `Hasan2233`

---

## Admin Panel থেকে কি কি Control করতে পারবেন

### 1. **Dashboard** (`/admin/dashboard`)
- Overview statistics দেখতে পারবেন
- Total projects, messages, skills, experiences count

### 2. **Projects Management** (`/admin/projects`)
Portfolio-এর সব projects manage করতে পারবেন:

**Add New Project:**
- Title, Description
- Project Image upload
- Tech Tags (comma separated)
- Category, Project URL
- Order (display order)
- Featured (হ্যাঁ/না)
- Active (হ্যাঁ/না)

**Edit/Delete Projects:**
- কোনো project edit করতে পারবেন
- Delete করতে পারবেন

### 3. **Skills Management** (`/admin/skills`)
About page-এ skills add/edit করতে পারবেন:
- Icon (emoji)
- Title
- Description
- Order

### 4. **Experiences Management** (`/admin/experiences`)
About page-এ experiences add/edit করতে পারবেন:
- Icon (emoji)
- Title
- Description
- Order

### 5. **Contact Messages** (`/admin/messages`)
- Contact form থেকে আসা messages দেখতে পারবেন
- Messages read/unread mark করতে পারবেন
- Messages delete করতে পারবেন

### 6. **Settings** (`/admin/settings`)
Portfolio-এর সব settings control করতে পারবেন:

**Profile Settings:**
- Profile Name
- Profile Role (UI/UX DESIGNER)
- Profile Bio
- Profile Image upload
- Resume File upload

**Statistics:**
- Experience Years (1.5)
- Clients Count (5)
- Projects Count (12+)

**About Page Content:**
- About Text 1
- About Text 2
- About Text 3

**Contact Information:**
- Email
- Phone
- Location

**Social Links:**
- Behance URL
- LinkedIn URL
- Dribbble URL
- GitHub URL

---

## কিভাবে Database Setup করবেন

### Option 1: SQLite (সহজ - Database file)

`.env` file এ:
```
DB_CONNECTION=sqlite
```

তারপর run করুন:
```bash
php artisan migrate
php artisan db:seed
```

### Option 2: MySQL

`.env` file এ:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=portfolio_db
DB_USERNAME=root
DB_PASSWORD=your_password
```

তারপর run করুন:
```bash
php artisan migrate
php artisan db:seed
```

---

## Dynamic Content কিভাবে Change করবেন

### Home Page Content:
1. Admin panel login করুন
2. **Settings** → Profile settings edit করুন
3. Save করুন → Automatically home page এ update হবে

### Projects:
1. **Projects** → Add New Project
2. Image upload করুন
3. Details fill up করুন
4. Save করুন → Works page এ automatically show হবে

### Skills & Experiences:
1. **Skills** বা **Experiences** → Add New
2. Details add করুন
3. Save করুন → About page এ automatically show হবে

### Statistics:
1. **Settings** → Statistics section
2. Numbers update করুন
3. Save করুন → Home page এ automatically update হবে

---

## Password Change কিভাবে করবেন

### Option 1: Database থেকে
```bash
php artisan tinker
```
তারপর:
```php
$user = App\Models\User::where('email', 'admin@admin.com')->first();
$user->password = Hash::make('your_new_password');
$user->save();
exit
```

### Option 2: Code থেকে
`database/seeders/DatabaseSeeder.php` file edit করে নতুন password set করুন

---

## Important Notes

1. **File Uploads:**
   - Project images: `storage/app/public/projects/`
   - Profile images: `storage/app/public/profile/`
   - Resume files: `storage/app/public/resume/`

2. **Storage Link:**
   - `php artisan storage:link` run করতে হবে প্রথম setup-এ

3. **Cache Clear:**
   - Settings change করার পর:
     ```bash
     php artisan config:clear
     php artisan cache:clear
     php artisan view:clear
     ```

4. **All Changes are Dynamic:**
   - কোনো code change ছাড়াই
   - Admin panel থেকে সব control করতে পারবেন
   - Changes immediately website-এ reflect হবে

---

## Quick Access Links

- **Homepage**: http://localhost:8000
- **About**: http://localhost:8000/about
- **Works**: http://localhost:8000/works
- **Contact**: http://localhost:8000/contact
- **Admin Login**: http://localhost:8000/admin/login
- **Admin Dashboard**: http://localhost:8000/admin/dashboard

---

## Troubleshooting

### Admin panel login না হলে:
1. Database migrate করলেন? → `php artisan migrate`
2. Admin user seed করলেন? → `php artisan db:seed`
3. Cache clear করুন

### Images upload না হলে:
1. Storage link check করুন → `php artisan storage:link`
2. Folder permissions check করুন
3. `.env` file এ `APP_URL` correct আছে কিনা

### Changes reflect না হলে:
1. Browser cache clear করুন (Ctrl+Shift+R)
2. Laravel cache clear করুন:
   ```bash
   php artisan config:clear
   php artisan cache:clear
   php artisan view:clear
   ```
