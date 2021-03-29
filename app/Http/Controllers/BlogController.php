<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function getBlogPost()
    {
        $blogPosts = DB::table('blog')->get();
        return view('/blog', compact('blogPosts'));
    }
    public function addBlogPost()
    {
        return view('/addPost');
    }
    public function addBlogPostSubmitted(Request $request)
    {
        DB::table('blog')->insert([
            'heading' => $request->heading,
            'description' => $request->description,
            'date' => $request->date,
            'content' => $request->content,
        ]);
        $request->session()->flash('msg', 'Post has been created Successfully');
        return redirect('/addPost');
    }

    public function editBlog($id)
    {
        $post = DB::table('blog')->where('id', $id)->first();
        return view('editPost', compact('post'));
    }
    public function deleteBlog(Request $request, $id)
    {
        DB::table('blog')->where('id', $id)->delete();
        $request->session()->flash('msg', 'Post has been deleted Successfully');
        return redirect('/blog');
    }

    public function updateBlog(Request $request)
    {
        DB::table('blog')->where('id', $request->id)->update([
            'heading' => $request->heading,
            'description' => $request->description,
            'date' => $request->date,
            'content' => $request->content,
        ]);
        $request->session()->flash('mssg', 'Post has been updated Successfully');
        return redirect('/blog');
    }
}
