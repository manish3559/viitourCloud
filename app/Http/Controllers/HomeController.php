<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Blog;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function homepage()
    {
        dd('22');
        return view('homepage');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $data = User::all();
        return view('home',compact('data'));
    }
    public function create($id)
    {
        $update = User::find($id);
         return view('create',compact('update'));   
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $userData  = User::find($data['id']);
        $userData->first_name = $data['first_name'];
        $userData->last_name = $data['last_name'];
        $userData->dob = $data['dob'];
        $userData->email = $data['email'];
        $userData->save();

        return redirect('homepage');
    }
    public function dashboard(Request $request)
    {
        $user = auth()->user();
        // $userBlogData = Blog::with('blogUsers')->get();
        $userBlogData = Blog::where('user_id',$user->id)->get();
        return  view('blogUserData',compact('userBlogData'));
    }

    public function refreshCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
}
