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
            'image' => $request->image,
            'heading' => $request->heading,
            'description' => $request->description,
            'date' => $request->date,
            'author' => $request->author,
            'catogry' => $request->catogry,
            'content' => $request->content,
            'parahead2' => $request->parahead2,
            'paracontent2' => $request->paracontent2,
            'parahead3' => $request->parahead3,
            'paracontent3' => $request->paracontent3,
            'parahead4' => $request->parahead4,
            'paracontent4' => $request->paracontent4,
            'parahead5' => $request->parahead5,
            'paracontent5' => $request->paracontent5,
            'parahead6' => $request->parahead6,
            'paracontent6' => $request->paracontent6,
            'parahead7' => $request->parahead7,
            'paracontent7' => $request->paracontent7,
            'parahead8' => $request->parahead8,
            'paracontent8' => $request->paracontent8,
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
            'image' => $request->image,
            'heading' => $request->heading,
            'description' => $request->description,
            'date' => $request->date,
            'author' => $request->author,
            'catogry' => $request->catogry,
            'content' => $request->content,
            'parahead2' => $request->parahead2,
            'paracontent2' => $request->paracontent2,
            'parahead3' => $request->parahead3,
            'paracontent3' => $request->paracontent3,
            'parahead4' => $request->parahead4,
            'paracontent4' => $request->paracontent4,
            'parahead5' => $request->parahead5,
            'paracontent5' => $request->paracontent5,
            'parahead6' => $request->parahead6,
            'paracontent6' => $request->paracontent6,
            'parahead7' => $request->parahead7,
            'paracontent7' => $request->paracontent7,
            'parahead8' => $request->parahead8,
            'paracontent8' => $request->paracontent8,

        ]);
        $request->session()->flash('mssg', 'Post has been updated Successfully');
        return redirect('/blog');
    }
    public function viewBlog($id)
    {
        $post = DB::table('blog')->where('id', $id)->get();
        return view('viewlargeblog', compact('post'));
    }
}
