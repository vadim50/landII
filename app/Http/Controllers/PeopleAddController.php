<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\People;

class PeopleAddController extends Controller
{
    //
    public function execute(Request $request){


    	if($request->isMethod('post')){
			$input = $request->except('_token');

			$messages = [

				'required'=>'Поле :attribute бязательно к заполнению!',
				'max'=>'Поле :attribute не должно содержать более 255 символов!'

			];

			$validator = Validator::make($input,[

				'name'=>'required|max:255',
				'text'=>'required',
				'position'=>'required|max:255'

			],$messages);

			if($validator->fails()){
    			return redirect()->route('peopleAdd')->withErrors($validator)->withInput();
    		}

			if($request->hasFile('images')){
				$file = $request->file('images');
				$input['images'] = $file->getClientOriginalName();

				$file->move(public_path().'/assets/img',$input['images']);
			}

			$people = new People();

			$people->fill($input);
			if($people->save()){
				return redirect('admin')->with('status','Новый член команды добавлен!');
			}
	}

    	if(view()->exists('admin.people_add')){
    		$data = ['title'=>'Новый член команды'];

    		return view('admin.people_add',$data);
    	}
    	abort(404);
    }
}
