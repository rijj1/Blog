<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
      return view('home');
    }

    public function contact(){
      return view('contact');
    }

    public function blogpost($id,$welcome=1){
      $pages=[
        1=> ['title'=>"Page 1", 'content'=>' from Page 1'],
        2=> ['title'=>"Page 2", 'content'=>' from Page 2'],
        3=> ['title'=>"Page 3", 'content'=>' from Page 3'],
      ];
    
      $welcomes=[1=>'<strong>Hello</strong>',2=>'<strong>Welcome</strong >'];
    
      return view('blog-post',[
        'data'=>$pages[$id],'welcome'=>$welcomes[$welcome]
      ]);
    }
}
