# Reimbursement Management System

This project is one of my contributions during my internship at PT ICON+ KP NTT. It is designed to facilitate employees, particularly those responsible for reimbursements, in efficiently recording and managing reimbursement requests.

The Reimbursement Management System aims to simplify the reimbursement process by providing an intuitive platform where employees can submit and categorize their requests, and administrators can track and manage all reimbursements effectively. This system is particularly beneficial for employees in the field to ensure seamless recording and monitoring of their expenses.

This project is tailored to meet the needs of the company by:

-   Ensuring accurate and categorized tracking of reimbursements.
-   Streamlining the process for both employees and super admins.
-   Providing visual insights through widgets and summaries for better financial oversight.

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

## Technologies Used

### Languages & Frameworks

-   Backend: Laravel (PHP 8)
-   Frontend: Filament (Laravel Admin Panel)
-   Database: MySQL

### Plugins & Tools

-   Filament: For managing admin panel resources and forms.
-   Livewire: For creating interactive components.
-   Chart.js: For rendering dynamic charts in widgets.
-   Tailwind CSS: For UI styling.
-   Composer: For PHP dependency management.
-   NPM: For JavaScript dependency management.

## Features

-   Reimbursement Submission
-   widgets for Displaying Data
-   Role-Based Access Control
-   Flexible Filters
-   Real Time Notifications
-   Export Data to Excel

## Installation

1. Clone this Repo to your terminal:

```
git clone https://github.com/C-BESSY/Reimbursement-IconPlus.git
```

2. Go to the cloned repository and run

```
cd reimbursement-system
```

3. Install dependencies with

```
composer install
```

4. Then run

```
npm install && npm run dev
```

5. Copy .env.example to .env

```
cp .env.example .env
```

6. Update your .env file with your database credentials

```
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

7. Migrate and seed with

```
php artisan migrate --seed
```

8. Run

```
php artisan serve
```

## Contact

If you have any questions, critiques, suggestions, or if there is Security Vulnerabilities, feel free to reach out:
[Charisty](mailto:charistyfirst@gmail.com)

<!-- ### Note of Thanks -->

<!-- -   **[Vehikl](https://vehikl.com/)** -->
<!-- -   **[Redberry](https://redberry.international/laravel/)** -->
<!-- -   **[Active Logic](https://activelogic.com)** -->
<!-- -   **[byte5](https://byte5.de)** -->

```
GBU😇
```
