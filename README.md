# Artfolio Studio

A lightweight PHP/HTML/CSS/JavaScript portfolio-template project focused on reusable profile cards, visual layouts, and simple server-rendered pages.

## What it demonstrates

- Responsive portfolio-style page layouts
- Reusable card and profile templates
- Vanilla JavaScript interactions
- Small PHP entry points for search and authentication-related pages
- Optional MySQL integration
- Asset organization for images, styles, and page-specific components

## Project structure

~~~text
.
├── index.php              # Main entry point
├── sign.php               # Sign-in/sign-up page
├── sear.php               # Search page
├── database_setup.sql     # Optional database schema
├── img/                   # Visual assets and examples
├── js/                    # Client-side JavaScript
├── pro/                   # Page/component styles
└── sign/                  # Authentication/database-related PHP
~~~

## Local development

### Prerequisites

- PHP 8+
- MySQL (only if database features are enabled)

Start a local PHP server:

~~~bash
php -S localhost:8000
~~~

Then open:

~~~text
http://localhost:8000/index.php
~~~

## Optional database configuration

The repository includes a starter MySQL schema in database_setup.sql.

Database connection settings are read from environment variables:

~~~text
ARTFOLIO_DB_HOST=localhost
ARTFOLIO_DB_NAME=artfolio_db
ARTFOLIO_DB_USER=your_database_user
ARTFOLIO_DB_PASSWORD=your_database_password
~~~

Local database connection files and real credentials should remain untracked.
