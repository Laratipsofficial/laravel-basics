# Laravel Basics

## Introduction

Every Video in the [YouTube playlist](https://www.youtube.com/watch?v=Hzma7qHnAfI&list=PL2DahmvUpeutUtHy8OvaytrxQhM8qbtaN) has its own branch. The master branch always contains the latest code.

If you want to look at the code of the ["Laravel 8 - Validation"](https://www.youtube.com/watch?v=34tBHVVgXt0) video, then checkout to that branch specific for that video and you will be able to see all the codes there. E.g.

```sh
git checkout validation
```

## Installation

Run the following commands to install the project and get started

```sh
git clone https://github.com/Laratipsofficial/laravel-basics.git

cd laravel-basics

composer install

cp .env.example .env

php artisan key:generate

php artisan serve
```
