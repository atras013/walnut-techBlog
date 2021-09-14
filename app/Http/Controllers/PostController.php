<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;



class PostController extends Controller
{
    //

    public function index() {
      
         if(auth()->user()->isAdmin()) {

            $posts = Post::all();

            
         }else {

            $posts = auth()->user()->posts;
         }

         return view('admin.posts.index' , [ 'posts' => $posts ]);

    }

    public function create() {   
         
         $categories = Category::all();
         $tags = Tag::all();


        return view('admin.posts.create-post', [ 'categories' => $categories , 'tags' => $tags ]);
    }
    public function show(Post $post) {   
         
         $categories = Category::all();
         $tags = Tag::all();

         

        return view('blog-post' , ['post' => $post ]);
    }

    public function edit(Post $post) {   
         
         $categories = Category::all();
         $tags = Tag::all();
        return view('admin.posts.edit-post', ['post' => $post , 'categories' => $categories , 'tags' => $tags ]);
    }


    public function update(Request $request , Post $post) {   
         
           $inputs = $request->validate([ 

                  'title' => ['required' , 'string' , 'max:255'] , 
                  'body'  => ['required' , 'string'],
                  'post_image' => ['file'], 
                 
           ]);

           if( $request['post_image'] ) {
        
               $inputs['post_image'] = $request['post_image']->store('images'); 
              
           }

           $post->update( $inputs );
           $post->categories()->attach($request['categories']);  
           $post->tags()->attach( $request['tags'] );  
          
            notify()->success('پست شما با موفقیت اپدیت شد!' , 'تبریک' );
            
           return redirect( )->back();
    }
       
    public function destroy( Post $post) {  

          
          $post->delete();
          
          return redirect()->back();
    }
       

     
    public function store(Request $request) {
       
         $inputs = $request->validate([ 

            'title' => "required|string|max:255",
            'body'  => "required|string" , 
            'post_image' => "file",
           
         ]);
         
         if(request('post_image')) { 
           
             $inputs['post_image'] = request('post_image')->store('images');
             
         }
      
        $post =  auth()->user()->posts()->create($inputs);
        $post->categories()->attach($request['categories']);
        $post->tags()->attach($request['tags']);
        
        notify()->success('پست شما با موفقیت ایجاد شد.' , "تبریک!");
        
        return redirect()->back();
    

         
    }
}
