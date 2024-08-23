
# Laravel Customers API

This is a Laravel application that provides a REST API for listing customer data. The application includes endpoints for listing customers with pagination and sorting capabilities.

## Prerequisites

- PHP >= 8.0
- Composer
- MySQL or any other supported database
- Node.js & npm (for installing dependencies)

## Setup Instructions

1. **Clone the Repository:**

   ```bash
   git clone https://github.com/umerchohan8/customers-api-laravel.git
   cd customers-api-laravel
   ```

2. **Install Dependencies:**

   ```bash
   composer install
   ```

3. **Environment Setup:**

   Copy the `.env.example` file to `.env` and configure your database and other environment variables.

   ```bash
   cp .env.example .env
   ```

   Generate an application key:

   ```bash
   php artisan key:generate
   ```

4. **Database Setup:**

   Run the following command to migrate the database and seed it with fake customer data:

   ```bash
   php artisan migrate --seed
   ```

5. **Run the Application:**

   Start the local development server:

   ```bash
   php artisan serve
   ```

   The API should now be accessible at `http://localhost:8000`.

6. **API Endpoints:**

   - `GET /api/customers` - Get a list of customers with pagination and sorting options.

   You can test the API using Postman or any other API testing tool.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
