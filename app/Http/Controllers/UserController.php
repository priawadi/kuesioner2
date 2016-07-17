<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{

 public function index() 
 {
 	$users = User:all();
 	return View::make('users.index', compact('users'));
 }   

 public function create()
 {
 	//
 }

 public function store()
 {
 	//
 }

 public function show($id)
 {
 	//
 }

 public function edit($id)
 {
 	//
 }

 public function destroy()
 {
 	//
 }

}
