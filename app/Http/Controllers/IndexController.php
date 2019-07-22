<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Service;
use App\Portfolio;
use App\People;
use DB;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    //
    public function execute(Request $request){
    	if($request->isMethod('post')){

    		$messages = [

    			'required'=>'Поле :attribute обязательно к заполнению!',
    			'email'=>'Поле :attribute должно соответсвовать email адресу!',
    			'max'=>'Поле :attribute не должно превышать 255 символов!'

    		];

    		$this->validate($request,[

    			'name'=>'required|max:255',
    			'email'=>'required|email',
    			'text'=>'required'

    		],$messages);

    		$data = $request->all();
    		//email
    		$result = Mail::send('site.email',['data'=>$data],function($message) use ($data){
    			//$mail_admin = env('MAIL_ADMIN');

    			$message->from($data['email'],$data['name']);

    			$message->to('mastertoy50@gmail.com')->subject('Question');

    		});

    		if(count(Mail::failures()) == 0){
    			
    			//session(['status'=>'Email is send!!!']);
    			return redirect()->route('home')->with('status','Email is send!');
    		}




    	}
    	$pages = Page::All();
    	$portfolios  = Portfolio::get(['name','filter','images']);
    	$services = Service::where('id','<',20)->get();
    	$peoples = People::take(3)->get();

    	$tags = DB::table('portfolios')->distinct()->pluck('filter');

    	$menu = [];
    	foreach($pages as $page){
    		$item = ['title'=>$page->name,'alias'=>$page->alias];
    		array_push($menu,$item);
    	}

    	$item = ['title'=>'Services','alias'=>'service'];
    		array_push($menu,$item);
    	$item = ['title'=>'Portfolio','alias'=>'Portfolio'];
    		array_push($menu,$item);
    	$item = ['title'=>'Team','alias'=>'team'];
    		array_push($menu,$item);
    	$item = ['title'=>'Contact','alias'=>'contact'];
    		array_push($menu,$item);



    	return view('site.index',[

    		'menu'=>$menu,
    		'pages'=>$pages,
    		'services'=>$services,
    		'portfolios'=>$portfolios,
    		'peoples'=>$peoples,
    		'tags'=>$tags

    	]);
    }
}
