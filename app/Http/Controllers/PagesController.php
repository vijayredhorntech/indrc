<?php

namespace App\Http\Controllers;

use App\Models\BannerStats;
use App\Models\Menu;
use App\Models\Notification;
use App\Models\Page;
use App\Models\Programme;
use App\Models\StudentAchievements;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {

        $notifications = Notification::orderBy('notification_date', 'asc')->get();
        // get all programs which are not expired
        $programmes = Programme::where('programme_date', '>=', date('Y-m-d'))->orderBy('programme_date', 'asc')->get();

        $bannerStats = BannerStats::where('status', 1)->take(6)->get();

        $achievements = StudentAchievements::all();

        return view('frontend.index')
            ->with('notifications', $notifications)
            ->with('programmes', $programmes)
            ->with('bannerStats', $bannerStats)
            ->with('achievements', $achievements);
    }
    public function aboutIiser()
    {
        return view('frontend.aboutIiser');
    }
    public function whether()
    {
        return view('frontend.whether');
    }
    public function sponsorship()
    {
        return view('frontend.sponsorship');
    }
    public function codeOfConduct()
    {
        return view('frontend.codeOfConduct');
    }
    public function howToReach()
    {
        return view('frontend.howToReach');
    }

    public function localAttractions()
    {
        return view('frontend.localAttractions');
    }

    public function gallery()
    {
        return view('frontend.gallery');
    }

    public function program()
    {
        return view('frontend.program');
    }
    public function speakers()
    {
        return view('frontend.speakers');
    }
    public function posterPresentation()
    {
        return view('frontend.posterPresentation');
    }
    public function accommodation()
    {
        return view('frontend.accommodation');
    }

    public function awards()
    {
        return view('frontend.awards');
    }
    public function registration()
    {
        return view('frontend.registration');
    }

    public function page($id)
    {

        $menu = Menu::where('id', $id)->first();

        $page = Page::where('slug', $menu->link)->first();
        if ($menu->is_file)
        {
            $path = asset( $menu->link);
            return view('frontend.pdf')->with('path',$path)->with('title', $menu->title);
        }
        if ($menu->is_link) {
            return redirect()->away($menu->link);
        }
        return view('frontend.page')->with('page',$page);
    }

    public function announcements(){
        $announcements = Notification::orderBy('notification_date', 'asc')->get();
        return view('frontend.announcements')->with('announcements', $announcements);
    }
    public function events(){
        $events = Programme::orderBy('programme_date', 'desc')->get();
        return view('frontend.events')->with('events', $events);
    }

    public function studentAchievements(){
        $achievements = StudentAchievements::all();
        return view('frontend.studentAchievements')->with('achievements', $achievements);
    }

    public function contact()
    {
        return view('frontend.contact');
    }
    public function helpDesk()
    {
        return view('frontend.helpDesk');
    }

    public function news()
    {
        return view('frontend.news');
    }

    public function opportunities()
    {
        return view('frontend.opportunities');
    }


//    public function view()
//    {
//        return view
//    }
}
