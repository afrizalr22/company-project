<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAppointmentRequest;
use App\Models\AboutTim;
use App\Models\Appointment;
use App\Models\Blog;
use App\Models\BuildWebsite;
use App\Models\CompanyAbout;
use App\Models\CompanyStatistic;
use App\Models\Gallery;
use App\Models\HeroSection;
use App\Models\ItSolutions;
use App\Models\NeedsSolution;
use App\Models\OurPrinciple;
use App\Models\OurTeam;
use App\Models\Product;
use App\Models\ProjectClient;
use App\Models\SupportMaintenance;
use App\Models\TechnologySolution;
use App\Models\Testimonial;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::orderByDesc('id')->take(4)->get();
        $statistics = CompanyStatistic::take(4)->get();
        $principles = OurPrinciple::take(4)->get();
        $products = Product::take(3)->get();
        $teams = OurTeam::take(3)->get();
        $hero_sections = HeroSection::take(1)->get();
        $about_tims = AboutTim::take(1)->get();
        $needs_solutions = NeedsSolution::take(1)->get();
        $clients = ProjectClient::all();
        $gallerys = Gallery::take(3)->get();
        $blog = Blog::take(3)->get();
        $technology_solutions = TechnologySolution::take(1)->get();
        $it_solutions = ItSolutions::take(1)->get();
        $support_maintenance = SupportMaintenance::take(2)->get();
        $build_website = BuildWebsite::take(2)->get();
        return view('front.index', compact('statistics', 'principles', 'products', 'teams', 'testimonials', 'hero_sections', 'about_tims', 'needs_solutions', 'technology_solutions', 'clients', 'gallerys', 'blog', 'it_solutions', 'support_maintenance', 'build_website'));
    }

    // public function team()
    // {
    //     $teams = OurTeam::take(3)->get();
    //     $statistics = CompanyStatistic::take(4)->get();
    //     return view('front.team', compact('teams', 'statistics'));
    // }

    public function about()
    {
        $statistics = CompanyStatistic::take(4)->get();
        $abouts = CompanyAbout::take(2)->get();
        return view('front.about', compact('statistics', 'abouts'));
    }

    public function appointment()
    {
        $testimonials = Testimonial::take(4)->get();
        $products = Product::take(3)->get();
        return view('front.appointment', compact('testimonials', 'products'));
    }

    public function appointment_store(StoreAppointmentRequest $request)
    {
        DB::transaction(function () use ($request) {
            $validated = $request->validated();
            $newAppointment = Appointment::create($validated);
        });
        return redirect()->route('front.index');
    }

    public function it_solutions()
    {
        $it_solutions = ItSolutions::take(1)->get();
        return view('front.itsolutions', compact('it_solutions'));
    }

    public function support_maintenance()
    {
        $support_maintenance = SupportMaintenance::take(2)->get();
        return view('front.maintenance', compact('support_maintenance'));
    }

    public function build_website()
    {
        $build_website = BuildWebsite::take(3)->get();
        return view('front.website', compact('build_website'));
    }

    public function footer_team()
    {
        $footer_team = OurTeam::all();
        return view('footer.team', compact('footer_team'));
    }

    public function gallery()
    {
        $gallerys = Gallery::all();
        return view('front.gallery', compact('gallerys'));
    }

    public function product()
    {
        $products = Product::all();
        return view('front.product', compact('products'));
    }
}
