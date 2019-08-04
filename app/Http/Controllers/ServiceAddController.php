<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Service;

class ServiceAddController extends Controller
{
    //

    public function execute(Request $request){

    if($request->isMEthod('post')){
        $input = $request->except('_token');
        $messages = [

            'required'=>'Поле :attribute обязательно к заполнению!',
            'max'=>'Поле :attribute не может быть более 255 символов!'

        ];

        $validator = Validator::make($input,[

            'name'=>'required|max:255',
            'text'=>'required',
            'icon'=>'required|max:255'

        ],$messages);

        if($validator->fails()){
            return redirect()->route('serviceAdd')->withErrors($validator)->withInput();
        }
        $service = new Service();

        $service->fill($input);
        if($service->save()){
            return redirect('admin')->with('status','Сервис добавлен!');
        }


    }

    if(view()->exists('admin.service_add'))
        $data = [
            'title'=>'Новое Портфолио'
        ];

        return view('admin.service_add',$data);
    }
}
