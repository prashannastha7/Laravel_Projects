# Simple Blog Website

This is a simple blog website built using Laravel Breeze, implementing CRUD operations for managing blog posts.

## Features

- User Authentication: Allows users to register, log in and log out.
- CRUD Operations: Users can create, read, update, and delete blog posts.
- Responsive Design: The website is designed to be responsive and work well on different devices.

## Installation

1. **Clone the repository:**
   ```bash
   git clone https://github.com/yourusername/simple-blog.git
   ```

2. **Navigate to the project directory:**
   ```bash
   cd simple-blog
   ```

3. **Install composer dependencies:**
   ```bash
   composer install
   ```

4. **Copy the `.env.example` file to `.env` and update the database information:**
   ```bash
   cp .env.example .env
   ```

5. **Generate an application key:**
   ```bash
   php artisan key:generate
   ```

6. **Run the migrations and seed the database:**
   ```bash
   php artisan migrate --seed
   ```

7. **Start the development server:**
   ```bash
   php artisan serve
   ```

8. **Visit `http://localhost:8000` in your browser to view the application.**

## Creating a New Laravel Project

To create a new Laravel project, follow these steps:

1. **Open your terminal or command prompt.**
2. **Run the following command:**
   ```bash
   composer create-project laravel/laravel projectname
   ```
   Replace `projectname` with the desired name for your project.

## Installing Laravel Breeze

To install Laravel Breeze, follow these steps:

1. **Open your terminal or command prompt.**
2. **Run the following command:**
   ```bash
   composer require laravel/breeze --dev
   ```
3. **Install Breeze using Artisan:**
   ```bash
   php artisan breeze:install
   ```

After completing these steps, you can proceed with setting up your project and following the installation instructions provided in the README.md file.

## Usage

- Register for an account or log in with the default seeded user.
- Navigate to the Dashboard to create, edit, and delete blog posts.
- View the blog posts on the homepage and click on them to read the full content.

## Contributing

Contributions are welcome! Please fork the repository and submit a pull request with your changes.

