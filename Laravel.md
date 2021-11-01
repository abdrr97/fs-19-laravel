
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