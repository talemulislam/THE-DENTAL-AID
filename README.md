# [THE DENTAL AID](http://dc.talemul.com/)

A simple THE DENTAL AID application with Laravel.

## Installation

It's a Laravel `7.0` application with a very little functionality. You can install it as any other laravel 8 application. Here are the commands you need to run one by one-

```
git clone https://github.com/talemulislam/THE-DENTAL-AID.git
cd url
composer install
npm install
npm run dev
cp .env.example .env
php artisan key:generate
```

Then you need to put your database credentials in the .env file. I used MySQL in this project, but any [Eloquent](https://laravel.com/docs/7.x/eloquent) supported relational database can be used. After that run these-

```
php artisan migrate
```

Then to run the development server, run this-

```
php artisan serve
```

Then you can visit the THE DENTAL AID in this url- `http://127.0.0.1:8000`. Yon can also visit : [http://dc.talemul.com/](http://dc.talemul.com/) to view.

**You should also give write permission to the `storage` folder**

This project has following pages-
 
1.2	LOGIN PAGE:	 
1.3	ADMIN PANEL:	 
1.3.1	User management	 
1.3.2	ADDING NEW USER DETAILS:	 
1.3.3	User role:	 
1.3.4	New Role	 
1.3.5	Permissions	 
1.3.6	New Permissions	 
1.3.7	Menu	 
1.4	Doctor module:	 
1.4.1	Adding doctor	 
1.5	Department details	 
1.6	Adding Appointment	 
1.7	Patient details	 
1.7.1	Add new Patient	 
1.8	Create prescription	 


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
