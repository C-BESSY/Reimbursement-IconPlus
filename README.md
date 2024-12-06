<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Reimbursement Management System

This project is one of my contributions during my internship at PT ICON+ KP NTT. It is designed to facilitate employees, particularly those responsible for reimbursements, in efficiently recording and managing reimbursement requests.

The Reimbursement Management System aims to simplify the reimbursement process by providing an intuitive platform where employees can submit and categorize their requests, and administrators can track and manage all reimbursements effectively. This system is particularly beneficial for employees in the field to ensure seamless recording and monitoring of their expenses.

This project is tailored to meet the needs of the company by:
- Ensuring accurate and categorized tracking of reimbursements.
- Streamlining the process for both employees and super admins.
- Providing visual insights through widgets and summaries for better financial oversight.

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).


## Tech Used
### Languages & Frameworks

- Backend: Laravel (PHP 8)
- Frontend: Filament (Laravel Admin Panel)
- Database: MySQL

### Plugins & Tools

- Filament: For managing admin panel resources and forms.
- Livewire: For creating interactive components.
- Chart.js: For rendering dynamic charts in widgets.
- Tailwind CSS: For UI styling.
- Composer: For PHP dependency management.
- NPM: For JavaScript dependency management.

## Features

- Reimbursement Submission
- widgets for Displaying Data
- Role-Based Access Control
- Flexible Filters
- Real Time Notifications


## Installation

1. ```git clone https://github.com/your-repo/reimbursement-system.git```
2. ```cd reimbursement-system```
3. ```composer install```. Then run ```npm install && npm run dev```
4. ```cp .env.example .env```
5. Update your .env file with your database credentials
6. ```php artisan migrate --seed```
7. ```php artisan serve```

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
