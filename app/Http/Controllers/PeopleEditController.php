<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\People;
use Validator;

class PeopleEditController extends Controller
{
    //
    public function execute(People $people,Request $request){

        if($request->isMEthod('delete')){
            $people->delete();
            return redirect('admin')->with('status','Данные о члене команды удалены!');
        }

        if($request->isMethod('post')){
            $input = $request->except('_token');

            $validator = Validator::make($input,[

                'name'=>'required|max:255',
                'position'=>'required',
                'text'=>'required'

            ]);

            if($validator->fails()){
                return redirect()
                ->route('peopleEdit',['people'=>$input['id']])
                ->withErrors($validator);
            }
            // dd($request->hasFile('images'));
           if($request->hasFile('images')){
                $file = $request->file('images');
                $file->move(public_path().'/assets/img',$file->getClientOriginalName());
                $input['images'] = $file->getClientOriginalName();
            } else {
                $input['images'] = $input['old_images'];
            }


            unset($input['old_images']);

            $people->fill($input);

            if($people->update()){
                return redirect('admin')->with('status','Данные члена команды отредактированы!');
            }
        }

    	$old = $people->toArray();
    	if(view()->exists('admin.people_edit')){
    		$data = [

    			'title'=>'Редактирования члена команды - '.$old['name'],
    			'data'=>$old

    		];
    		return view('admin.people_edit',$data);
    	}
    }
}
