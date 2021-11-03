<p align="center">
<a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400">
</a>
</p>

- Laravel 
    - Routes Views & Layouts
    - Views routes parameters & Rendering data in views
    - Named routes and generating URLs 
    - Controller Basics 
    - Database configuration and enviroment variables
    - Introduction to database migrations
    - Creating and migrating migrations
    - Laravel Tinker and Elequent Models

```php

    // Storing a single post in Database
    
    // Method 1
    $post = new App\Models\Post(); // post model instance
    $post->title = "Post Title 1";
    $post->content = "Post Content 1";
    $post->active = true;
    $post->save();

    //Method 2
    App\Models\Post::create([
        'title' => 'Post Title 1',
        'content' => 'Post Content 1',
        'active' => true
    ]);

    // Updating a single post 

    // Method 1
    $post = App\Models\Post::find(1);
    $post->title = 'title 1 updated';
    $post->save();

    //Method 2
    $post = App\Models\Post::find(1);
    $post->update([
        'title' => 'Post Title 1 Updated'
    ]);


```

### Elequent ORM (object relational mapper)


```php 
// getting posts data from database
// using Elequent Model 

Post::orderBy('updated_at' , 'DESC')->get();
Post::latest()->get(); // shorter synthax

Post::find($id) // get one post
Post::findOrFail($id) // get one post (if not found it will throw an error)
Post::where('id' , 1)->get() 
Post::where('active' , true)->latest()->get()
Post::all() // getting all posts

``` 