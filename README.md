Status: Not ready to use

# Ad Manager

Laravel project for dashboard for managing ads.

## Setup
- Configure Database in `.env` file:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ad_manager
DB_USERNAME=root
DB_PASSWORD=

ADMIN_NAME=name
ADMIN_EMAIL=email
ADMIN_USERNAME=username
ADMIN_PASSWORD=password
```
- Install Composer and Node on your system
- Intsall Composer dependecies: `$composer install`
- Install Node Dependencies: `$npm install`
- Compile all CSS and JS: `$npm run dev`

- Migrate Database: `$php artisan migrate`

## CSS Framework
[TailwindCSS](https://tailwindcss.com/docs/container)

## Plugins used
1. [Debug Bar](https://github.com/barryvdh/laravel-debugbar)

# Stage 0:
There will be a dashboard to manage ads.

### Manage ads
- Ads can be created, updated, removed, disabled and enabled.
- Ads can be of different type but in the begining it will have image type with link
- Ads can be grouped in a ad group.
- Ads will be served with JavaScript widget 
## Types of user
1. Viewer: Can see all things in the dashboard but can't add, edit or delete anything
1. Creator: Can create, edit and delete content created by him/her but can't publish
1. Admin: Can create, edit and delete content created by anyone and by himself/herself and can publish them also. Admin can create viewer account and creator accounts.

### Tasks
- Create an admin on database migrate from environment variable
- Login page. Redirect to dashboard after login. Otherwise show error
- Divide the layout into navbar, sidebar and main area
- Design navbar
- Design sidebar
- Create a database migration for ad types with fields id and name (unique)
- Create a database migration for ads with fields id, name (unique), image_url, ad_type.
- Create a database migration for ad groups with fields id and name (unique). Add soft delete.There will be many to many relationship between ads and ad groups
- Create a simple layout of an ad with and link
- Create a route to serve single ad
- Create a route to serve ads from single ad group
- Create a JavaScript widget