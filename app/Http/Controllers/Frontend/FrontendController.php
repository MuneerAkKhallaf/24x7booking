<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use App\Models\Holiday;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\HolidayCategory;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index()
    {
return view('frontend.index');
    }

    public function holiday()
    {
return view('frontend.holiday');
    }

    public function hotel()
    {
return view('frontend.hotel');
    }

    public function   viewCategoryPost($category_slug)
    {
        $category = Category::where('slug',$category_slug)->where('status','0')->first();
        
        if($category)
        {
        $post = Post::where('category_id',$category->id)->where('status','0')->get();
        return view('frontend.post.index', compact('post','category'));
        }
        else
        {
            return redirect('/');
        }
    }

    public function show($category_slug, $post_slug)
    {

        $category = Category::where('slug',$category_slug)->where('status','0')->first();
        
        if($category)
        {
          $post = Post::where('category_id',$category->id)->where('slug',$post_slug)->where('status','0')->first();
          return view('frontend.post.view', compact('post'));
        }
        else
        {
            return redirect('/');
        }

    }

    public function showHoliday($category_slug, $holiday_slug)
    {

        $category = HolidayCategory::where('slug',$category_slug)->where('status','0')->first();
        
        if($category)
        {
          $holiday = Holiday::where('category_id',$category->id)->where('slug',$holiday_slug)->where('status','0')->first();
          return view('frontend.holiday.views', compact('holiday'));
        }
        else
        {
            return redirect('/');
        }

    }


    public function   viewCategoryHoliday($category_slug)
    {
        $category = HolidayCategory::where('slug',$category_slug)->where('status','0')->first();
        
        if($category)
        {
        $holiday = Holiday::where('category_id',$category->id)->where('status','0')->get();
        return view('frontend.holiday.index', compact('holiday','category'));
        }
        else
        {
            return redirect('/');
        }
    }
}
