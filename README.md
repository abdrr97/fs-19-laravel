<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework">
<img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

# created
# $post = new App\Models\Post();
# $post->title = 'title 1';
# $post->content = 'content 1';
# $post->save();

### query Elequent ORM (object relational mapper)

Post::orderBy('updated_at' , 'DESC')->get();
Post::latest()->get();

Post::find(id) // == null
Post::findOrFail(id) // ==  404 NOT FOUND
Post::where('id' , 1)->get()
Post::where('is_active' , true)->latest()->get()
Post::all()

Laravel 
    - Routes Views & Layouts
    - Views routes parameters & Rendering data in views
    - Named routes and generating URLs 
    - Controller Basics 
    - Database configuration and enviroment variables
    - Introduction to database migrations
    - Creating and migrating migrations
    - Laravel Tinker and Elequent Models



select * from users where id = 1


title
content
active

-- m 1
$p = new App\Models\Post();
$p->title = 'title 1';
$p->content = 'content 1';
$p->save();

-- m2

App\Models\Post::create([
'title' => 'title 1',
'content' => 'content 1',
]);

--

$post = App\Models\Post::find(1);
$post->title = 'title 1 updated';
$post->save();

--
$post = App\Models\Post::find(1);
$post->update([
    'title' => 'title 1 updated'
]);