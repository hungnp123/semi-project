<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()

{

return view('signup'); //return register page

}

public function showLogin()

{

return view('login'); //return login page

}

public function login(Request $request)

{

$validator = Validator::make($request->all(), [

'user_name' => 'required|user_name',

'password' => 'required',

]);

if ($validator->fails()) {

return redirect()->back()

->withErrors($validator)

->withInput();

}

$remember = $request->remember;

if (Auth::attempt(['user_name' => $request->user_name, 'password' => $request->password], $remember)) {

if (Auth::user()->role == 2) {

return view('homepage');

} else {

return view('');

}

}

}

public function store(Request $request)

{

if ($request->isMethod('POST')) {

$validator = Validator::make($request->all(), [

'user_name' => 'required|user_name|max:100',

'full_name' => 'required|min:6|max:1000',

// 'avatar' => 'required|image|mimes:jpg,jpeg,png|max:1000',

'password' => 'required|confirmed|max:16|min:6',

]);

if ($validator->fails()) {

return redirect()->back()

->withErrors($validator)

->withInput();

}

// if ($request->hasFile('avatar')) {

// $file = $request->file('avatar');

// $path = public_path('image/avatar');

// $fileName = time() . '_' . $file->getClientOriginalName();

// $file->move($path, $fileName);

// } else {

// $fileName = 'noname.jpg';

// }

$user = DB::table('user')->where('user_name', $request->user_name)->first();

if (!$user) {

$newUser = new User();

$newUser->user_name = $request->user_name;

$newUser->password = $request->password;

$newUser->full_name = $request->full_name;

// $newUser->avatar = $fileName;

$newUser->role = $request->role;

$newUser->save();

return redirect()->route('login')->with('message', 'Create success!');

} else {

return redirect()->route('login')->with('message', 'Create failed!');

}

}

}
}
