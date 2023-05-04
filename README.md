
# Leisure activity satisfaction survey

This is a web-based questionnaire website developed using the Laravel framework. The website is designed to collect data from leisure activities participants, evaluate their satisfaction and demographic factors, and export the data into Power BI for analysis.

# Questionnaire Details
The questionnaire includes the following questions:

- What is your age?
- What is your gender?
- Who did you visit with?
- What is your education level?
- Do you have any disabilities?
- What is your income level?
- What is your leisure budget range?
- What was your emotional experience during the activity?
- How would you rate the quality of service?
- How would you rate the level of organization?
- How would you rate the level of cleanliness?
- How would you rate the staff?
- How would you rate the costs?
- How likely are you to visit again?

# PowerBI Analysis
To view the PowerBI analysis of the collected data, please follow this link: https://app.powerbi.com/view?r=eyJrIjoiZTcxYTk2OWEtYTA3Zi00OTk3LWE2MGMtYTlkZGUyNTE0NzMyIiwidCI6ImNjMjYyNmM1LTcwYjgtNGMzOC05Y2JlLWIzMmIyNzYxNTZiMCJ9.


## Features

- A simple and easy-to-use interface for answering the questionnaire questions
- Data collection for demographic information such as age, gender, education level, income level, and disabilities
- Data collection for activity-related factors such as emotional experience, quality of service, level of organization, cleanliness, staff, and costs.



## Installation

Clone the repository to your local machine:

```bash

git clone https://github.com/ghada0shl/lesurvey.git
```
    
Navigate to the project directory:

```bash
cd comfyq
```
Install dependencies using Composer:
```bash
composer install
```
Copy the .env.example file to .env:
```bash
cp .env.example .env
```

Generate an application key:

```bash
php artisan key:generate
```

Set up the database by editing the .env file with your database information:

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=comfyq
DB_USERNAME=root
DB_PASSWORD=
```

Run the database migrations:

```bash
php artisan migrate
```

Start the web server:

```bash
php artisan serve
```

## Usage

- Visit http://localhost:8000 in your web browser.
- Answer the demographic and leisure activity-related questions.
- Submit the questionnaire.

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
# insighterDash
# insighterDash
