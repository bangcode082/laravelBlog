<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;

class UserController extends Controller
{
	public function index(Request $request, Builder $htmlBuilder){

		if($request->ajax()){
			$user=User::select(['id','name','email','role']);
			return Datatables::of($user)->addColumn('action',function($user){
				return view('datatables._action',[
					'model'=>$user,
					'edit_url'=>route('user.edit',$user->id),
					]);
			})->make(true);
		}

		$html=$htmlBuilder->columns([
			['data' => 'name', 'name' => 'name', 'title' => 'Nama'],
			['data' => 'email', 'name' => 'email', 'title' => 'Email'],
			['data' => 'role', 'name' => 'role', 'title' => 'Role']              
			])->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'', 'orderable'=>false, '\
			searchable'=>false]);

			return view('auth.index')->with(compact('html'));

		}

		public function edit(){
			return "untuk edit";
		}


	}
