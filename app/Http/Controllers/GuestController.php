<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use Mail;

class GuestController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function welcome()
    {
        $projects = Project::inRandomOrder()->limit(6)->get();
        return view('welcome', compact('projects'));
    }

    /**
     * Show the cv page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function cv()
    {
        return view('cv');
    }

    /**
     * Show the contact page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contact()
    {
        return view('contact');
    }

    /**
     * Show the terms page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function terms()
    {
        return view('terms');
    }

    /**
     * Show the search results page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function searchResults()
    {
        $projects = Project::where('title', 'LIKE' ,'%' . request('phrase') . '%')->orWhere('content', 'LIKE' ,'%' . request('phrase') . '%')->get();
        $title = "Search Results";

        return view('projects', compact('projects', 'title'));
    }

    /**
     * Send email
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function mail(Request $request)
    {
        $to_name = 'Bojan Kolano';
        $to_email = 'bokiepic19941@gmail.com';
        $data = array(
            'first_name'=>$request->firstname,
            'last_name'=>$request->lastname,
            'email_address'=>$request->email,
            'country'=>$request->country,
            'subject'=>$request->subject,
        );

        Mail::send('mail', $data,
            function ($message) use ($to_email) {
                $message->to($to_email)
                    ->from('bokiepic19941@gmail.com', 'Bojan Kolano')
                    ->subject('WEBSITE EMAIL');
        });

        return back()->with('success', 'Email sucessfully sent.');
    }
}
