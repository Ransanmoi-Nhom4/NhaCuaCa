# WordPress Example Site

This is a sample WordPress website including both source code and database.

## 📁 Folder structure

- `source/`: WordPress source files
- `database/wordpress.sql`: Exported database

## 🚀 How to install

1. Clone this repo:
git clone https://github.com/your-username/wordpress-example-site.git

2. Copy `source/` contents to your server (`htdocs` for XAMPP)

3. Import the database via phpMyAdmin:
- Create a new database (e.g. `wordpress`)
- Import `database/wordpress.sql`

4. Create your own `wp-config.php` based on your DB settings.

5. Visit `http://localhost` to see your site.

---

Feel free to modify themes or plugins in `wp-content/`.
