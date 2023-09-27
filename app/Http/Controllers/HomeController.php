<?php

namespace App\Http\Controllers;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function handleLang(Request $request, Closure $next)
    {
        $locale = $request->get('locale', App::getLocale());

        App::setLocale($locale);

        return $next($request);
    }

    public function index()
    {
        $response = Http::get('https://api-web.eyefire.vn/app/post/get-post-new?sign=vi&page=1&limit=5&category_id=12');
        if ($response->getStatusCode() === 200) {
            $news = $response->json();
            return view('pages.home', compact('news'));
        } else {
            return abort(404);
        }
    }

    public function contact(Request $request)
    {
        $input = $request->all();
        // Contact::add($input);
        return redirect()->route('contact')->with('success', 'binh luan thanh cong');
       return view('pages.contact');
    }

}
