

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## RANDOM NUMBER GENERATOR
It is  a REST API created using the laravel framework  to  generate a random number. Each number is assigned a unique id, using which the generation result can be retrieved.it is wrapped in a docker container, delivery organized via docker-compose.<br>
Comes with:
<li>An app service running PHP7.4-FPM;</li>
<li>A db service running MySQL 5.7;</li>
<li>An nginx service : nginx:1.17-alpine</li>

## SETUP

<li>git clone https://github.com/reanbrenda/random-numbers-generator.git</li>
<li>cd random-numbers-generator</li>
<li>cp .env.example .env</li>
<li>docker-compose build app</li>
<li>docker-compose up -d</li>
<li>docker-compose exec app ls -l</li>
<li>docker exec app composer install</li>
<li>docker-compose exec app php artisan key:generate</li>

## Now go to your browser 

<li>http://localhost:8000</li>
<li>generate random number:http://localhost:8000/generate</li>
<li>retrieve random number:http://localhost:8000/get-random-number/{id}</li>

### Questions and Improvements
For any question or emprovement please send an e-mail:mukindiabrenda67@gmail.com



## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
