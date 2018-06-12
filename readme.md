<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Abstract
A blog  is a discussion or informational website published on the World Wide Web consisting of discrete, often informal diary-style text entries ("posts"). Posts are typically displayed in reverse chronological order, so that the most recent post appears first, at the top of the web page and user can like and dislike the post 


## Overview
-	Everyone can register into the site through the login panel
-	Login is easy  at any point of time once it is registered
-	Creating/Reading/Editing/Deleting of post  can be done by any user 
-	User can like or dislike any post 
-	Logout facility is provided
-	Maintenance of account is also  possible

## Database Design
 - Tbl_users
    - id	            - integer
    - time	          - timestamp
    - email     	    - varchar
    - First_name	    - varchar
    - password	      - varchar
    - Remember_token	- varchar
 - Tbl_likes
    - id	            - integer
    - time	          - timestamp
    - User_id	       - integer
    - Post_id	       - integer
    - like	          - integer
  
 - Tbl_post
    - id	            - integer
    - time	          - timestamp
    - body	          - varchar
    - User_id	       - integer
## Technology Used
 - Laravel
 - Php
 - Bootstrap
 - Html
 - Css
 - Javascript


## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).
Link for the vides- https://www.youtube.com/playlist?list=PL55RiY5tL51oloSGk5XdO2MGjPqc0BxGV



## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
# Laravel-Social-Blog
