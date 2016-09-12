# Dekidz
Web app for managing kindergarten

# Installation Guide
- Copy .env.example to .env
- Change database name, username, password in .env
- Run: 
	composer install
	php artisan vendor:publish --provider="Pingpong\Admin\AdminServiceProvider"
	php artisan admin:install
	php artisan db:seed
- Set up virtual host local.dekidz.com

# User Guide
- Link to admin local.dekidz.com/admin
- Admin account: admin@mail.com pass: admin123
