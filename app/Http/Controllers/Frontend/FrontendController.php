<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Blog;
use App\Models\Career;
use App\Models\OurTeam;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Setting;
use App\Models\PowerSolution;
use App\Models\Service;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FrontendController extends Controller
{
    public function Index()
    {
        $services = Service::where('status', 'active')
            ->whereHas('serviceDetail.category', function ($q) {
                $q->where('name', 'home');
            })
            ->latest()
            ->take(8)
            ->get();

        $blog = Blog::where('status', 'active')->latest()->take(3)->get();

        return view('frontend.index', compact('services', 'blog'));
    } // End Method

    public function ProductList()
    {
        $category = NULL;
        $products = Product::where('status', 'active')->latest()->get();
        return view('frontend.pages.products', compact('products', 'category'));
    } // End Method



    public function CatWiseProductList($slug)
    {
        $name = Str::title(str_replace('-', ' ', $slug));
        $category = ProductCategory::where('name', $name)->first();
        $products = Product::where('status', 'active')->where('category_id', $category->id)->latest()->get();
        return view('frontend.pages.products', compact('products', 'category'));
    } // End Method



    public function ProductDetails($slug)
    {
        $product = Product::where('slug', $slug)->first();
        return view('frontend.details.product_details', compact('product'));
    } // End Method

    public function ContactUs()
    {
        return view('frontend.pages.contact_us');
    } // End Method

    public function AboutUs()
    {
        $abouts = AboutUs::first();
        return view('frontend.pages.about_us', compact('abouts'));
    } // End Method

    public function AfterSales()
    {
        return view('frontend.pages.after_sales');
    } // End Method



    public function BlogList()
    {
        $blog = Blog::where('status', 'active')->latest()->get();
        return view('frontend.pages.our_blog', compact('blog'));
    } // End Method

    public function BlogDetails($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        $author = User::where('id', $blog->created_by)->first()->name;
        return view('frontend.details.blog_details', compact('blog', 'author'));
    } // End Method

    public function PrivacyPolicy()
    {
        return view('frontend.pages.privacy_policy');
    } // End Method

    public function TermsConditions()
    {
        return view('frontend.pages.terms_conditions');
    } // End Method

    public function TeamList()
    {
        $team = OurTeam::where('status', 'active')->latest()->get();
        return view('frontend.pages.our_team', compact('team'));
    } // End Method

    public function CareerList()
    {
        $career = Career::where('status', 'active')->latest()->get();
        return view('frontend.pages.career', compact('career'));
    } // End Method

    public function CareerDetails($slug)
    {
        $job_application = Career::where('slug', $slug)->first();
        return view('frontend.details.job_details', compact('job_application'));
    } // End Method

    public function PowerSolutionDetails($slug)
    {
        $powerSolution = PowerSolution::where('slug', $slug)->first();
        return view('frontend.details.power_details', compact('powerSolution'));
    } // End Method

    public function PowerSolution()
    {
        $powerSolutions = PowerSolution::get();
        return view('frontend.pages.power_solution', compact('powerSolutions'));
    } // End Method


    public function ServiceList(){
        $services = Service::where('status', 'active')->get();
        return view('frontend.pages.our_service', compact('services'));
    }

    public function ServiceDetails($slug){
        $service = Service::where('slug', $slug)->first();
        $services = Service::all();
        return view('frontend.details.service_details', compact('service', 'services'));
    }

    public function ProjectList(){
        $firstProject = Project::first();
        $projects = Project::get();
        return view('frontend.pages.projects', compact('projects', 'firstProject'));
    }
}
