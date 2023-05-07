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
  public function viewCategoryPost($category_slug)
  {
    $category = Category::where('slug',$category_slug)->where('status','0')->first();
    if($category)
    {
      $post = Post::where('category_id',$category->id)->where('status','0')->get();
      return view('blog.index',compact('post','category'));
    }
    else
    {
      return redirect('blog.blog');
    }
    
    
  }
 
}
