<p align="center"><a href="https://injection-tracker.com" target="_blank"><img src="https://github.com/jonkemm/Injection-tracker/blob/master/public/img/logo-png.png" width="200"><br />
Injection Tracker</a></p>

## About Injection Tracker

Injection tracker is a web application to help those of us using injections to help control an illness. Injection tracker was created by it's programmer Jono to store photos of body parts and keep track of injections into those parts, be it subcontaiinously (into fatty layer just under the skin) or deeper into muscle. Jono used it with his Multiple Sclerosis but hopes it will be used by people with other illnesses.  
It has features such as:

- Built safe & secure using a Laravel framework
- Simple, easy to use UI
- Social login [1]
- Practice image loaded in for each new user
- Images stored with AWS [2]

[1] Only for Google, I was also going to add Facebook, possibly Apple & Microsoft but they are pigs to impliment [2] i'd like to store them in the browser.

## Screenshots
<p align="center">
<img src="https://github.com/jonkemm/Injection-tracker/blob/master/public/img/thigh-front-2.png" width="400">
    <br><br><br> Add / choose location of injecton on your body
<img src="https://github.com/jonkemm/Injection-tracker/blob/master/public/img/thigh-front.png" width="400">
    <br><br><br> Add injections to the locations and rate them
</p>

## Technologies

- Bootstrap 5
- Font Awesome 4
- Laravel 8
- PHP 8
- JQuery
- AWS S32
- SASS

## Some installation instructions
(not all of them but enough to help out...)

```
composer require league/flysystem-aws-s3-v3 ^1.0.29
composer require laravel/breeze --dev
php artisan breeze:install
npm install
npm run dev
php artisan migrate
php artisan db:seed
```

## Future plans
* Even though images uploaded to AWS are given a unique filename, for increased privacy I'd like to store them in Local Storage in the browser
* I'd like to tidy up the javascript and bring it all together in the js file.

## License

Injection tracker is released as open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
