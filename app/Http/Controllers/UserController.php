<?php
namespace App\Http\Controllers;

Use Laravel\Lumen\Routing\Controller;
class UserController extends Controller
{
    
    public function welcome($user)
    {
        $user = 'Michel';
        $hello = 'Hello' .' '. $user; 
        return view('page.welcome')->with('results',$hello);
    }
}