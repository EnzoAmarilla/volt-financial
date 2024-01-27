<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\ImageSlider;
use App\Models\TokenGoogleCalendar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class FrontController extends Controller
{
    public function index()
    {
        // $section_id = 1;
        // $images_sliders = ImageSlider::where('section_id', $section_id)->where('type_desktop', 1)->orderBy('order')->get();
        // $images_sliders_mobile = ImageSlider::where('section_id', $section_id)->where('type_desktop', 0)->orderBy('order')->get();

        // return view('/index', compact('images_sliders', 'images_sliders_mobile'));
        return view('/index');
    }

    public function faqs()
    {
        // $faqs = Faq::orderBy('order')->where('language', App::currentLocale())->get();

        // $groupedFaqs = [];
        // $chunkedFaqs = $faqs->chunk(2); // Divide los resultados en grupos de 2

        // foreach ($chunkedFaqs as $chunk) {
        //     $groupedFaqs[] = $chunk->toArray();
        // }

        $faqs = Faq::orderBy('order')->where('language', App::currentLocale())->get();

        return view('/faqs', compact('faqs'));
    }    

    public function volt_projects()
    {
        $section_id = 2;
        $images_sliders = ImageSlider::where('section_id', $section_id)->where('type_desktop', 1)->orderBy('order')->get();
        $images_sliders_mobile = ImageSlider::where('section_id', $section_id)->where('type_desktop', 0)->orderBy('order')->get();

        return view('/volt-projects', compact('images_sliders', 'images_sliders_mobile'));
    }
}
