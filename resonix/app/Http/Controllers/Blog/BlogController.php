<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class BlogController extends Controller
{
  public function blog()
  {
    return view('blog.blog');
  }
  public function viewCategoryPost( string $category_slug)
  {
    $category = Category::where('slug',$category_slug)->where('status','0')->first();
    if($category)
    {
      $post = Post::where('category_id',$category->id)->where('status','0')->paginate(10);
      return view('blog.index',compact('post','category'));
    }
    else
    {
      return redirect('blog.blog');
    }
    
    
  }

  public function viewPost(string $category_slug,string $post_slug)
  {
    $category = Category::where('slug',$category_slug)->where('status','0')->first();
    if($category)
    {
      $post = Post::where('category_id',$category->id)->where('slug',$post_slug)->where('status','0')->first();
      $latest_posts = Post::where('category_id',$category->id)->where('status','0')->orderBy('created_at','DESC')->get()->take(7);
      return view('blog.view',compact('post','latest_posts'));
    }
    else
    {
      return redirect('blog.blog');
    }
  }
 
}
