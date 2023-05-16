# Laravel JMeter Examples

These are simple examples of using JMeter for a Laravel application.

This is a simple Laravel install with Breeze and some contrived examples. It does not contain any extra unit tests or code standards. It is only for reference / proof of concept stuff.

These may not be the best versions of JMeter - and when I do a project, I do much more targeted stuff using XPath, time, etc. This is just to get someone started.

## Get Started

This is a very simple instruction set. You should not serve items or develop like this.  

Assumes you have Valet and a database created / configured in your `.env` file.

* git checkout into `laravel-jmeter-examples`
* `valet link`
* `php artisan migrate:fresh --seed`
* surf to [http://laravel-jmeter-examples.test](http://laravel-jmeter-examples.test)
* optionally install / open JMeter

## Functionality

## Search and Confirm Results

* Visit `/dogs`
* Search a dog. Note no results for `barf` - but multiple results for `collie`
* Note the test in `jmeter/search-dogs/plan.jmx`

## Authenticate / Login

* Visit `/`
* Click `Log in`
* enter `guy@smiley.com` and `password`
* note you have authenticated
* Note the test in `jmeter/authenticate/plan.jmx`
