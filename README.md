# Portfolio Website - Dynamic Laravel CMS

A modern, dynamic portfolio website built with Laravel framework that allows you to manage all content through an easy-to-use admin panel.

## 📋 Table of Contents

- [Project Overview](#project-overview)
- [Features](#features)
- [Tech Stack](#tech-stack)
- [Installation](#installation)
- [Admin Panel Access](#admin-panel-access)
- [Project Structure](#project-structure)
- [Database](#database)
- [Usage Guide](#usage-guide)
- [Support](#support)

## 🎯 Project Overview

This is a fully dynamic portfolio website converted from static HTML/CSS/JavaScript to a Laravel-based Content Management System (CMS). You can easily manage all portfolio content including projects, skills, experiences, and settings through a beautiful admin panel without touching any code.

**Owner:** Md Julfikar Hasan  
**Type:** Portfolio Website with Admin Panel  
**Status:** Production Ready ✅

## ✨ Features

### Public Website Features
- 🏠 **Home Page** - Dynamic profile information with featured projects
- 👤 **About Page** - Showcase skills, experiences, and professional background
- 💼 **Works Page** - Display all portfolio projects with filtering
- 📧 **Contact Page** - Contact form that saves messages to admin panel

### Admin Panel Features
- 📊 **Dashboard** - Overview statistics (Projects, Messages, Skills, Experiences)
- 📁 **Project Management** - Add, edit, delete, and feature projects
- 🎨 **Skills Management** - Manage skills and expertise
- 💼 **Experience Management** - Add and update work experiences
- ✉️ **Message Management** - View and manage contact form submissions
- ⚙️ **Settings Management** - Update profile info, contact details, social links

### Key Highlights
- ✅ Fully responsive design
- ✅ Modern dark theme admin panel
- ✅ Real-time content updates
- ✅ Image upload support
- ✅ SEO-friendly URLs
- ✅ Secure authentication system

## 🛠 Tech Stack

- **Framework:** Laravel 10
- **Frontend:** HTML, CSS, JavaScript (Original design preserved)
- **Backend:** PHP 8.4+
- **Database:** SQLite (Development) / MySQL (Production)
- **Authentication:** Laravel built-in with custom admin panel

## 🚀 Installation

### Prerequisites
- PHP 8.1 or higher
- Composer
- Web server (Apache/Nginx) or use built-in server
- SQLite extension enabled (or MySQL)

### Step-by-Step Setup

1. **Clone the repository**
```bash
git clone <repository-url>
cd md-julfikar-hasan-v2
```

2. **Install PHP dependencies**
```bash
composer install
```

3. **Configure environment**
```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

4. **Database Configuration**

For SQLite (Development - Already configured):
```env
DB_CONNECTION=sqlite
DB_DATABASE=E:\md-julfikar-hasan-v2\database\database.sqlite
```

For MySQL (Production):
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=portfolio_db
DB_USERNAME=root
DB_PASSWORD=your_password
```

5. **Run database migrations**
```bash
php artisan migrate
```

6. **Seed initial data**
```bash
php artisan db:seed
```

This will create:
- Admin user account
- Sample projects, skills, and experiences
- Default settings

7. **Create storage link**
```bash
php artisan storage:link
```

8. **Start development server**
```bash
php artisan serve
```

The website will be available at: `http://localhost:8000`

## 🔐 Admin Panel Access

### Login URL
```
http://localhost:8000/admin/login
```

### Default Admin Credentials
- **Email:** `mdjulfikerhasan191212@gmail.com`
- **Password:** `Hasan2233`

⚠️ **Important:** Change the password after first login for security!

### Admin Panel Features

#### Dashboard
- View statistics (Total Projects, Unread Messages, Skills, Experiences)
- Quick links to all management sections
- Direct access to website pages

#### Manage Projects
- Add new projects with images
- Edit existing projects
- Set featured projects
- Organize project order
- Add tech tags and categories

#### Manage Skills
- Add/Edit skills with icons
- Organize skill order
- Update descriptions

#### Manage Experiences
- Add/Edit work experiences
- Organize experience order
- Update achievements

#### View Messages
- Read contact form submissions
- Mark messages as read/unread
- Delete messages
- View message details

#### Update Settings
- Profile information (Name, Role, Bio)
- Contact information (Email, Phone, Location)
- Social media links (Behance, LinkedIn, Dribbble, GitHub)
- Upload profile image and resume

## 📁 Project Structure

```
md-julfikar-hasan-v2/
├── app/
│   ├── Http/Controllers/
│   │   ├── HomeController.php
│   │   ├── AboutController.php
│   │   ├── WorksController.php
│   │   ├── ContactController.php
│   │   ├── Auth/LoginController.php
│   │   └── Admin/ (All admin controllers)
│   └── Models/ (Database models)
├── database/
│   ├── migrations/ (Database schema)
│   └── seeders/ (Initial data)
├── resources/
│   └── views/
│       ├── layouts/ (Main layout)
│       ├── pages/ (Public pages)
│       └── admin/ (Admin panel views)
├── routes/
│   └── web.php (Application routes)
├── public/
│   ├── css/ (Stylesheets)
│   ├── js/ (JavaScript files)
│   └── assets/ (Images and other assets)
└── storage/ (Uploaded files)
```

## 🗄 Database

The project uses the following database tables:

- **projects** - Portfolio projects with images and details
- **skills** - Skills and expertise
- **experiences** - Work experiences and achievements
- **contact_messages** - Contact form submissions
- **settings** - Site-wide settings (key-value pairs)
- **users** - Admin user accounts

## 📖 Usage Guide

### For Website Visitors
1. Browse the portfolio at the homepage
2. View projects on the Works page
3. Read about page for skills and experience
4. Send messages through the Contact page

### For Admin Users

1. **Login to Admin Panel**
   - Go to `/admin/login`
   - Enter your credentials

2. **Manage Content**
   - Add/Edit projects from "Projects" section
   - Update skills from "Skills" section
   - Manage experiences from "Experiences" section
   - View messages from "Messages" section

3. **Update Settings**
   - Go to "Settings" section
   - Update profile information
   - Change contact details
   - Update social media links

4. **View Statistics**
   - Check dashboard for overview
   - Monitor unread messages count

### Quick Tips
- Projects can be marked as "Featured" to show on homepage
- Use the "Order" field to control display sequence
- Messages are automatically marked as read when opened
- All changes reflect immediately on the website

## 🎨 Design Features

- Modern dark theme admin panel with green accents
- Responsive design for all devices
- Smooth animations and transitions
- Beautiful card-based layouts
- Intuitive navigation

## 🔒 Security Features

- Secure password hashing
- CSRF protection on all forms
- Authentication required for admin routes
- Input validation on all forms
- SQL injection protection (Laravel Eloquent)

## 📝 Important Notes

1. **File Uploads:** Project images, profile images, and resume files are stored in `storage/app/public/`
2. **Database:** Current setup uses SQLite for easy development. For production, switch to MySQL
3. **Assets:** All CSS, JS, and image files are in the `public/` directory
4. **Cache:** If changes don't appear, clear cache: `php artisan view:clear`

## 🆘 Support

For any issues or questions:
- Check the `ADMIN_PANEL_GUIDE.md` file for detailed admin instructions
- Review the `SETUP.md` file for setup troubleshooting
- Contact the developer for technical support

## 📄 License

This project is proprietary and confidential.

---

**Built with ❤️ using Laravel**
