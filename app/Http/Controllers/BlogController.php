<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view('index');
    }
    public function blog(Request $request){
        $blog=new Blog();
        $blog->blog_title = $request->blog_title;
        $blog->author = $request->author;
        $blog->category_name = $request->category_name;
        $blog->description = $request->description;
        $blog->image =$this->saveImage($request);
        $blog->save();
        return redirect('/all-blog')->with('message','Success');
    }

    private function saveImage($request){
        $image=$request->file('image');
        $imageName=rand().'.'.$image->getClientOriginalExtension();
        $directory='frontEndAsset/blog-image/';
        $imgUrl=$directory.$imageName;
        $image->move($directory,$imageName);
        return $imgUrl;
    }
    public function allBlog(){
        return view('all-blog',[
            'blogs'=>Blog::all()
        ]);
    }
    public function editblog($id){
        return view('edit-blog',[
            'blog'=>Blog::find($id)
        ]);

    }
    public function deleteblog(Request $request){
        $blog=Blog::find($request->blog_id);
        if ($blog->image){
            unlink($blog->image);
        }
        $blog->delete();
        return back()->with('message','Deleted');

    }
    public function updateBlog( Request $request){

        $blog=Blog::find($request->blog_id);
        $blog->blog_title = $request->blog_title;
        $blog->author = $request->author;
        $blog->category_name = $request->category_name;
        $blog->description = $request->description;
        if ($request->file('image')){
            if ($blog->image){
                unlink($blog->image);
            }
            $blog->image =$this->saveImage($request);
        }
        $blog->save();
        return redirect('/all-blog')->with('message','Update');
    }


}
