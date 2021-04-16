# SCHOOL WEB APP

## What is school management system?

This is a system that cam be used by teachers to store students data and retrieve whenever rerquired. It has a space where  teachers can add marks, fees, and names of the students so that could be used in the future.
I used codeigniter framework to help this system work well  i.e. avoid repetition and increase development guidelines.

## Installation & updates

Glone this project here into `htdocs` if you are using XAMPP in windows or copy to `www` folder in apache server if you are using linux system (LAMPP).

## Setup

Copy `env` to `.env` and tailor for your app, specifically the baseURL
and any database settings.

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Bugs and problems

For any problems encountered, feel free to inquire here. I am ready to here from you.
Problems with it can be raised on our forum, or as issues in the main repository.

## Server Requirements

PHP version 7.3 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)
- xml (enabled by default - don't turn it off)
