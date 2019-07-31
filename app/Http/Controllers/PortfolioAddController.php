<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Portfolio;

class PortfolioAddController extends Controller
{
    //
    public function execute(Request $request){

    	if($request->isMethod('post')){

    		$input = $request->except('_token');

    		$messages = [

    			'required'=>'Поле :attribute обязательно к заполению!',
    			'max'=>'ПОле :attribute не может быть более 255 символов!',
    			'unique'=>'ПОле :attribute уже занято придумайте другое!'


    		];


    		$validator = Validator::make($input,[

    			'name'=>'required|max:255',
    			'filter'=>'required|unique:portfolios|max:255',

    		],$messages);

    		if($validator->fails()){
    			return redirect()->route('portfolioAdd')->withErrors($validator)->withInput();
    		}

    		if($request->hasFile('images')){
    			$file = $request->file('images');
	    		$input['images'] = $file->getClientOriginalName();
	    		
	    		$file->move(public_path().'/assets/img',$input['images']);
    		}

    		$portfolio = new Portfolio;

    		$portfolio->fill($input);
    		if($portfolio->save()){
    			return redirect('admin')->with('status','Страница добавлена');
    		}

    	}

    	if(view()->exists('admin.portfolio_add')){
    		$data = ['title'=>'Новое Портфолио'];
    		return view('admin.portfolio_add',$data);
    	}
    	abort(404);
    }
}
