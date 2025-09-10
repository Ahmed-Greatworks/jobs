# Laravel Example Project

This is a Laravel application demonstrating user management and job seeding. It includes user authentication, job listings, and uses Laravel's database seeder functionality.

## Features

- User registration and authentication
- Job management (seeded via `JobSeeder`)
- Database seeding with example users
- Modern Laravel structure (Models, Seeders, Providers, etc.)

## Getting Started

### Prerequisites

- PHP >= 8.0
- Composer
- Node.js & npm (for frontend assets)
- SQLite (default) or other supported database

### Installation

1. Clone the repository:
    ```sh
    git clone https://github.com/your-username/your-repo.git
    cd your-repo
    ```

2. Install dependencies:
    ```sh
    composer install
    npm install
    ```

3. Copy the example environment file and configure:
    ```sh
    cp .env.example .env
    php artisan key:generate
    ```

4. Run migrations and seed the database:
    ```sh
    php artisan migrate --seed
    ```

5. Start the development server:
    ```sh
    php artisan serve
    ```

### Database Seeding

The main seeder is [`DatabaseSeeder`](database/seeders/DatabaseSeeder.php), which creates a default user and calls [`JobSeeder`](database/seeders/JobSeeder.php).

## Usage

- Access the app at [http://localhost:8000](http://localhost:8000)
- Log in with the seeded user:
    - Email: `test@example.com`
    - Password: (set in your factory or seeder)

## Contributing

Pull requests are welcome. For major changes, please open an issue first.

## License

This project is open-sourced under the [MIT license](https://opensource.org/licenses/MIT).