<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AboutService;
use App\Models\AboutTeam;
use App\Models\ContactInformation;
use App\Models\HomeAbout;
use App\Models\HomeFeatures;
use App\Models\HomeService;
use App\Models\HomeSlider;
use App\Models\HomeTestimonials;
use App\Models\Services;
use App\Models\Contacts;
use App\Models\Quotes;
use App\Models\Projects;
use App\Models\Categorys;
use App\Models\Brands;
use Illuminate\Http\Request;

/*use Illuminate\Http\Request;
use Illuminate\Support\Str;*/

class FrontendController extends Controller
{
    public function index(){
        // Home Slider
        $homeslider = HomeSlider::query()
            ->where('active', 1)
            ->orderBy('desk', 'ASC')
            ->get();
        $homeabout = HomeAbout::find(1);
        $homeservice = HomeService::query()->get();
        $homefeatures = HomeFeatures::query()->get();
        $hometestimonials = HomeTestimonials::query()->get();
        $services = Services::query()->get();
        $projects = Projects::query()->get();
        $categorys = Categorys::query()->get();

        return view('frontend.pages.index', compact(
            'homeslider',
            'homeabout',
            'homeservice',
            'homefeatures',
            'hometestimonials',
            'services',
            'projects',
            'categorys'
        ));
    }

    public function about(){
        // About
        $about = About::find(1);
        // About Services
        $aboutservices = AboutService::query()
            ->get();
        // About Team
        $aboutteam = AboutTeam::query()
            ->get();
        $aboutestimonials = HomeTestimonials::query()
            ->get();

        return view('frontend.pages.about', compact(
            'about',
            'aboutservices',
            'aboutteam',
            'aboutestimonials'
        ));
    }
    public function services(){
        // Services
        $services = Services::query()
        ->get();
            // ->paginate(3);


        $testimonials = HomeTestimonials::query()
            ->get();

        return view('frontend.pages.services', compact(
            'services',
            'testimonials'
        ));
    }

    public function servicesdetail($slug){
        // Services Detail
        $servicesdetail = Services::query()->where('slug',$slug)->first() ?? abort(404);
        return view('frontend.pages.services_detail', compact(
            'servicesdetail'
        ));
    }
    
    public function projects(){
        $categorys = Categorys::query()->get();
        $projects = Projects::query()->get();
        return view('frontend.pages.projects', ["projects" => $projects,"categorys" => $categorys]);
    }
    
    public function projectdetail($id){
        $project = Projects::find($id);
        $brands = Brands::query()->get();
        $categorys = Categorys::query()->get();
        return view("frontend.pages.project_detail",['project' => $project, "brands" => $brands, "categorys" => $categorys]);
    }
    
    public function contact(){
        return view('frontend.pages.contact');
    }
    
    public function contactpost(Request $request){

        $contact=new Contacts;
        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->subject=$request->subject;
        $contact->message=$request->message;

        $contact->save();

        return response()->json( ["success" => false, "message" => "Your message has been sent"] );
    }
    
    public function quotepost(Request $request){

        $quote=new Quotes;
        $quote->name=$request->name;
        $quote->email=$request->email;
        $quote->phone=$request->phone;
        $quote->message=$request->message;
        $quote->save();

        return response()->json( ["success" => false, "message" => "Your message has been sent"] );
    }
}
