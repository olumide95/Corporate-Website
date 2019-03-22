<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Page;
class PageController extends Controller
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


    public function about(Request $request)
    {

    	if ($request->isMethod('post')) {
    	 
    	  if ($request->rollback == 1) {
             $page = \App\Page::where('route','=','about')->latest()->first();
             if(isset($page)){ $page->delete();}
             return redirect()->route('about.edit');
         }
    	 if ($request->content == '') {
    	 	 return back();
    	 }
    	 $page = new Page();
    	 $page->fill(['route'=> 'about', 'content' => $request->content]);
    	 $page->save();
    	 
    	}
    	
    	$request->session()->put('edit', '1');
    	return view('about');
    }


    public function home(Request $request)
    {

        if ($request->isMethod('post')) {
            
         if ($request->rollback == 1) {
              $page = \App\Page::where('route','=','home')->latest()->first();
             if(isset($page)){ $page->delete();}
              return redirect()->route('home.edit');
         }
         
         if ($request->content == '') {
             return back();
         }
         $route = Route::currentRouteName();
         $page = new Page();
         $page->fill(['route'=> 'home', 'content' => $request->content]);
         $page->save();
         
        }
        
        $request->session()->put('edit', '1');
        return view('home');
    }

    public function contact(Request $request)
    {

        if ($request->isMethod('post')) {
        if ($request->rollback == 1) {
             $page = \App\Page::where('route','=','contact')->latest()->first();
             if(isset($page)){ $page->delete();}
             return redirect()->route('contact.edit');
         }
         if ($request->content == '') {
             return back();
         }
         $route = Route::currentRouteName();
         $page = new Page();
         $page->fill(['route'=> 'contact', 'content' => $request->content]);
         $page->save();
         
        }
        
        $request->session()->put('edit', '1');
        return view('contact');
    }


    public function operation_installation_maintenance(Request $request)
    {

        if ($request->isMethod('post')) {
        if ($request->rollback == 1) {
             $page = \App\Page::where('route','=','operation-installation-maintenance')->latest()->first();
             if(isset($page)){ $page->delete();}
              return redirect()->route('operation-installation-maintenance.edit');
         }
         if ($request->content == '') {
             return back();
         }
         $route = Route::currentRouteName();
         $page = new Page();
         $page->fill(['route'=> 'operation-installation-maintenance', 'content' => $request->content]);
         $page->save();
         
        }
        
        $request->session()->put('edit', '1');
        return view('operation-installation-maintenance');
    }

    public function procurement_supply(Request $request)
    {

        if ($request->isMethod('post')) {
            
         if ($request->rollback == 1) {
            $page = \App\Page::where('route','=','procurement-supply')->latest()->first();
             if(isset($page)){ $page->delete();}
             return redirect()->route('procurement-supply.edit');
         }
         
         if ($request->content == '') {
             return back();
         }
         $route = Route::currentRouteName();
         $page = new Page();
         $page->fill(['route'=> 'procurement-supply', 'content' => $request->content]);
         $page->save();
         
        }
        
        $request->session()->put('edit', '1');
        return view('procurement-supply');
    }


    public function image_upload(Request $request)
    {
        $photoName = time().'.'.$request->content_image->getClientOriginalExtension();
        $request->content_image->move('uploads', $photoName);
        return json_encode(["link"=> app('url')->asset("uploads").'/'.$photoName]);
    }
}
