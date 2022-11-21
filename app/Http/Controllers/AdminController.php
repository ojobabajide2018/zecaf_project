<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Gallery;
use App\Models\GoverningBody;
use App\Models\SliderImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    //


    public function admin(){

        $images = SliderImage::get();

        $city_name = 'Zaria';
        $api_key = 'c8be8b0178292fbdbcb36d58b0affed6';
        $result = Http::get('https://api.openweathermap.org/data/2.5/weather?q='.$city_name.'&appid='.$api_key);


        $temperature = $result['main']['temp'];
        $location = $result['name'];

        $temperature_in_celcius = round($temperature - 273.15);

        return view('admin.admin', ([
            'temperature_in_celcius' => $temperature_in_celcius,
            'location' => $location
        ]));

    }


    public function slider(){

        $slider_image = SliderImage::select('image')->latest()->first();



        return view('admin.upload-slider', ([
            'slider_image' => $slider_image
        ]));
    }

    public function uploadSlider(Request $request){

        $this->validate($request, [

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]);

        $input['image'] = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $input['image']);

        $input['name'] = Str::random(10);;
        SliderImage::create($input);

        return back()
            ->with('success','Slider Uploaded successfully.');
    }

    public function governingBody(){


        $governing_bodies = GoverningBody::all();

        return view('admin.governing-body', ([
            'governing_bodies' => $governing_bodies
        ]));
    }

    public function uploadGoverningBody(Request $request){

        if ($request->name == ""){
            return back() ->with('error','Error, You did not enter a name');
        }
        if ($request->position == ""){
            return back() ->with('error','Error, You did not enter position');
        }
        if ($request->image == ""){
            return back() ->with('error','Error, You did not import an image');
        }

        $input['image'] = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $input['image']);



        GoverningBody::create([
            'name' => $request->name,
            'position' => $request->position,
            'image' => $input['image'],
        ]);

        return back()
            ->with('success','Governing Body Updated successfully.');
    }

    public function blogPost(){

        $posts = BlogPost::all();
        return view('admin.blog-post', ([
            'posts' => $posts
        ]));
    }

    public function uploadBlogPost(Request $request){

        if ($request->title == ""){
            return back() ->with('error','Error, You did not enter the post title');
        }
        if ($request->paragraph == ""){
            return back() ->with('error','Error, You did not enter the post paragraph');
        }
        if ($request->image == ""){
            return back() ->with('error','Error, You did not import an image');
        }

        $input['image'] = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $input['image']);


        BlogPost::create([
            'blog_title' => $request->title,
            'blog_paragraph' => $request->paragraph,
            'blog_image' => $input['image'],
        ]);

        return back()
            ->with('success','Blog Post have been updated successfully.');
    }

    public function blogSingle(Request $request){


        $blog_single = BlogPost::where('id', $request->id)->first();
        $recent_posts = BlogPost::latest()->take(2)->get();
        return view('blog-single', ([
            'blog_single' => $blog_single,
            'recent_posts' => $recent_posts
        ]));
    }

    public function gallery(Request $request){

        $images = Gallery::all();
        return view('admin.gallery', ([
            'images' => $images
        ]));
    }

    public function uploadGallery(Request $request){

        /*if ($request->caption == ""){
            return back() ->with('error','Error, You did not enter the caption');
        }*/
        if ($request->image == ""){
            return back() ->with('error','Error, You did not import an image');
        }

        $input['image'] = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $input['image']);


        Gallery::create([
            'image' => $input['image'],
            'caption' => $request->caption,
        ]);

        return back()
            ->with('success','Gallery have been updated successfully.');
    }


}
