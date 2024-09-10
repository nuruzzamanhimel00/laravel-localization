<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LangController extends Controller
{
    public function index()
    {
        return view('lang');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function change(Request $request)
    {
        // // dd($request->lang);
        // App::setLocale($request->lang);

        // session(['locale' => $request->lang]);
        // session()->put('locale1', $request->lang);

        // // Session::get('locale1');
        // // dd('ssesstion get', session('locale'));
        // return redirect()->back();
        $locale = $request->input('locale');
        // dd(in_array($locale, config('app.supported_locales')));

        // Validate if the locale exists in the supported locales
        if (in_array($locale, config('app.supported_locales'))) {
            Session::put('locale', $locale);
            App::setLocale($locale);
        }

        return redirect()->back();
    }
}
