<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Blog;
use App\Models\Team;
use App\Models\About;
use App\Models\Slider;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\PageSeo;
use App\Models\Service;
use App\Models\Category;
use App\Models\Referance;
use App\Models\Subscribe;
use App\Models\Appointment;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $slider = Slider::where('lang', app()->getLocale())->where('status', 1)->first();
        $about = About::where('lang', app()->getLocale())->first();
        $categories = Category::where('lang', app()->getLocale())
        ->where('status', 1)
        ->whereNull('parent_id')
        ->get();

        $isFeaturedServices = Service::where('lang', app()->getLocale())
        ->where('status', 1)
        ->where('is_featured', 1)
        ->get();

        $homeServices = Service::where('lang', app()->getLocale())
        ->where('status', 1)
        ->get();

        $referances = Referance::where('status', 1)->get();

        $blogs = Blog::limit(3)->orderBy('id','desc')->get();

        $comments = Comment::where('status', 1)->get();

        $pageSeo = PageSeo::where('page', 'index')->first();

        $seo = [
            'title' => $pageSeo->title ?? __('Berberimiz'),
            'description' => $pageSeo->description ?? __('Berberimiz'),
            'keywords' => $pageSeo->keywords ?? __('Berberimiz'),
            'robots' => $pageSeo->robots ?? 'index, follow',
        ];

        return view('frontend.pages.index', compact(
            'slider',
            'about',
            'categories',
            'isFeaturedServices',
            'homeServices',
            'referances',
            'blogs',
            'comments',
            'seo'
        ));
    }

    public function about()
    {
        $breadcrumbs = [
            [
                'name' => __('Hakkımızda'),
                'url' => route('hakkimizda')
            ],
        ];

        $about = About::where('lang', app()->getLocale())->first();
        $teams = Team::get();

        $pageSeo = PageSeo::where('page', 'hakkimizda')->first();

        $seo = [
            'title' => $pageSeo->title ?? __('Hakkımızda'),
            'description' => $pageSeo->description ?? __('Hakkımızda'),
            'keywords' => $pageSeo->keywords ?? __('Hakkımızda'),
            'robots' => $pageSeo->robots ?? 'index, follow',
        ];
        return view('frontend.pages.about', compact('breadcrumbs','seo', 'about', 'teams'));
    }

    public function services()
    {
        $breadcrumbs = [
            [
                'name' => __('Hizmetler'),
                'url' => route('hizmetler')
            ],
        ];

        $categories = Category::where('lang', app()->getLocale())
        ->where('status', 1)
        ->whereNull('parent_id')
        ->get();


        $pageSeo = PageSeo::where('page', 'hizmetler')->first();

        $seo = [
            'title' => $pageSeo->title ?? __('Hizmetler'),
            'description' => $pageSeo->description ?? __('Hizmetler'),
            'keywords' => $pageSeo->keywords ?? __('Hizmetler'),
            'robots' => $pageSeo->robots ?? 'index, follow',
        ];
        return view('frontend.pages.services', compact('breadcrumbs','seo', 'categories'));
    }

    public function service($slug)
    {
        $service = Service::where('slug', $slug)->firstOrFail();
        $breadcrumbs = [
            [
                'name' => __('Hizmetler'),
                'url' => route('hizmetler')
            ],
            [
                'name' => $service->name,
                'url' => route('hizmet', $slug)
            ],
        ];
        $pageSeo = PageSeo::where('page', $slug)->first();

        $seo = [
            'title' => $pageSeo->title ?? $service->name,
            'description' => $pageSeo->description ?? $service->description,
            'keywords' => $pageSeo->keywords ?? $service->keywords,
            'robots' => $pageSeo->robots ?? 'index, follow',
        ];
        return view('frontend.pages.service', compact('breadcrumbs', 'service'));
    }

    public function contact()
    {
        $breadcrumbs = [
            [
                'name' => __('İletişim'),
                'url' => route('iletisim')
            ],
        ];

        $pageSeo = PageSeo::where('page', 'iletisim')->first();

        $seo = [
            'title' => $pageSeo->title ?? __('İletişim'),
            'description' => $pageSeo->description ?? __('İletişim'),
            'keywords' => $pageSeo->keywords ?? __('İletişim'),
            'robots' => $pageSeo->robots ?? 'index, follow',
        ];
        return view('frontend.pages.contact', compact('breadcrumbs', 'seo'));
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->first();

        $pageSeo = PageSeo::where('page', $slug)->first();

        $seo = [
            'title' => $pageSeo->title ?? $category->name,
            'description' => $pageSeo->description ?? $category->description,
            'keywords' => $pageSeo->keywords ?? $category->keywords,
            'robots' => $pageSeo->robots ?? 'index, follow',
        ];
        return view('frontend.pages.category', compact('category', 'seo'));
    }

    public function team($slug)
    {
        $breadcrumbs = [
            [
                'name' => __('Ekibimiz'),
                'url' => route('ekibimiz')
            ],
            [
                'name' => __('Ekibimiz Detayı'),
                'url' => route('ekibimiz', $slug)
            ],
        ];
        $team = Team::where('slug', $slug)->first();

        $pageSeo = PageSeo::where('page', $slug)->first();

        $seo = [
            'title' => $pageSeo->title ?? __('Ekibimiz'),
            'description' => $pageSeo->description ?? __('Ekibimiz'),
            'keywords' => $pageSeo->keywords ?? __('Ekibimiz'),
            'robots' => $pageSeo->robots ?? 'index, follow',
        ];
        return view('frontend.pages.team', compact('breadcrumbs','team', 'seo'));
    }

    public function blogs()
    {
        $breadcrumbs = [
            [
                'name' => __('Blog'),
                'url' => route('blog')
            ],
        ];
        $blogs = Blog::orderBy('id','desc')->get();

        $pageSeo = PageSeo::where('page', 'blog')->first();

        $seo = [
            'title' => $pageSeo->title ?? __('Blog'),
            'description' => $pageSeo->description ?? __('Blog'),
            'keywords' => $pageSeo->keywords ?? __('Blog'),
            'robots' => $pageSeo->robots ?? 'index, follow',
        ];
        return view('frontend.pages.blogs', compact('breadcrumbs','blogs', 'seo'));
    }

    public function blogDetail($slug)
    {
        $breadcrumbs = [
            [
                'name' => __('Blog'),
                'url' => route('blog')
            ],
            [
                'name' => __('Blog Detayı'),
                'url' => route('blog.detay', $slug)
            ],
        ];

        $blog = Blog::where('slug', $slug)->first();


        $pageSeo = PageSeo::where('page', $slug)->first();

        $seo = [
            'title' => $pageSeo->title ?? __('Blog'),
            'description' => $pageSeo->description ?? __('Blog'),
            'keywords' => $pageSeo->keywords ?? __('Blog'),
            'robots' => $pageSeo->robots ?? 'index, follow',
        ];
        return view('frontend.pages.blog', compact('breadcrumbs','blog', 'seo'));
    }

    public function contactSend(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'subject' => 'required',
                'message' => 'required',
            ],[
                'name.required' => __('Ad Soyad alanı zorunludur.'),
                'email.required' => __('E-posta alanı zorunludur.'),
                'email.email' => __('Geçerli bir e-posta adresi giriniz.'),
                'phone.required' => __('Telefon alanı zorunludur.'),
                'subject.required' => __('Konu alanı zorunludur.'),
                'message.required' => __('Mesaj alanı zorunludur.'),
            ]);

            Contact::create($validated);

            return redirect()
                ->back()
                ->with('success', __('Mesajınız başarıyla gönderildi.'));

        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()
                ->back()
                ->withErrors($e->validator)
                ->withInput();
        }
    }

    public function subscribe(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|unique:subscribes,email',
        ],[
            'email.required' => __('E-posta alanı zorunludur.'),
            'email.email' => __('Geçerli bir e-posta adresi giriniz.'),
            'email.unique' => __('Bu e-posta adresi zaten mevcut.'),
        ]);

        Subscribe::create($validated);

        return redirect()
            ->back()
            ->with('success', __('Abone olduğunuz için teşekkürler.'));

    }

    public function randevu(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'date' => 'required',
            'time' => 'required',
            'service_id' => 'required',
            'team_id' => 'nullable',
        ],[
            'name.required' => __('Ad Soyad alanı zorunludur.'),
            'phone.required' => __('Telefon alanı zorunludur.'),
            'date.required' => __('Tarih alanı zorunludur.'),
            'time.required' => __('Saat alanı zorunludur.'),
            'service_id.required' => __('Hizmet alanı zorunludur.'),
            'team_id.nullable' => __('Ekibimiz alanı isteğe bağlıdır.'),
        ]);

        $formattedDate = Carbon::createFromFormat('d/m/Y', $request->date)
            ->format('Y-m-d');
        $date = $formattedDate . ' ' . $request->time . ':00';

        unset($validated['date']);
        $validated['date'] = $date;
        Appointment::create($validated);

        return redirect()
            ->back()
            ->with('AppointmentSuccess', __('Randevu başarıyla oluşturuldu.'));
    }

}
