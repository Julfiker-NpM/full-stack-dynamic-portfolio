# Push Project to GitHub - Quick Guide

## ✅ Current Status
- ✅ Git repository initialized
- ✅ All files committed
- ✅ Ready to push to GitHub

---

## 🚀 Steps to Push to GitHub

### Step 1: Add Your GitHub Repository as Remote

Replace `YOUR_USERNAME` and `YOUR_REPO_NAME` with your actual GitHub details:

```bash
git remote add origin https://github.com/YOUR_USERNAME/YOUR_REPO_NAME.git
```

**Example:**
```bash
git remote add origin https://github.com/julfikerhasan/portfolio-website.git
```

### Step 2: Rename Branch to Main

```bash
git branch -M main
```

### Step 3: Push to GitHub (Replace All Files)

If your GitHub repository has old files and you want to replace everything:

```bash
git push -u origin main --force
```

**OR** if the repository is empty:

```bash
git push -u origin main
```

---

## 📝 Complete Command Sequence

Copy and run these commands one by one (replace YOUR_REPO_URL):

```bash
# 1. Add remote (replace with your repository URL)
git remote add origin https://github.com/YOUR_USERNAME/YOUR_REPO_NAME.git

# 2. Rename branch to main
git branch -M main

# 3. Push to GitHub (this will replace all files in the repo)
git push -u origin main --force
```

---

## ⚠️ Important Notes

1. **`--force` flag:** This will DELETE all existing files in your GitHub repository and replace them with current project files.

2. **If you don't want to force push:**
   - Delete all files manually from GitHub first
   - Then use: `git push -u origin main` (without --force)

3. **Files NOT pushed to GitHub:**
   - `.env` file (contains sensitive data)
   - `database/database.sqlite` (database file)
   - `vendor/` folder (can be regenerated)
   - Cache and log files

---

## 🔍 Verify Remote

To check if remote is added correctly:

```bash
git remote -v
```

You should see:
```
origin  https://github.com/YOUR_USERNAME/YOUR_REPO_NAME.git (fetch)
origin  https://github.com/YOUR_USERNAME/YOUR_REPO_NAME.git (push)
```

---

## 🆘 Troubleshooting

### If remote already exists:
```bash
git remote remove origin
git remote add origin https://github.com/YOUR_USERNAME/YOUR_REPO_NAME.git
```

### If push fails due to authentication:
- Use GitHub Personal Access Token instead of password
- Or set up SSH keys for GitHub

### To check current branch:
```bash
git branch
```

---

## ✅ After Successful Push

1. Visit your GitHub repository
2. Verify all files are uploaded
3. Check README.md is visible
4. Your project is now on GitHub! 🎉

---

**Need your repository URL?** Go to your GitHub repository page and click the green "Code" button to copy the URL.

