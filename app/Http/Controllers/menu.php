<?php

namespace App\Http\Controllers;
use APP\Http\Controller\simple_html_dom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class menu extends Controller
{
    public function index(){
      $menu['name']="";
      $users=DB::table('users')->select('name', 'id')
            ->get();
            $data = array(
        'users' =>$users,
        'menu'=>$menu,
        );

      return view('dashboard',$data);
    }



    public function indexpost(Request $request){
      $users=DB::table('users')->select('name', 'id')
            ->get();
        $menu=menucreate();
        $person=$request->fruits;
        $data = array(
        'users' =>$users,
        'menu'=>$menu,
        'person'=>$person,

        );
        return view('dashboard',$data);



    }

    public function insertmenu(Request $request){

    $time = date("Y-m-d H:i:s");
    foreach ($request->get('person') as $user)
        {
          DB::table('menu')->insert([
         'user_id' =>  $user,
         'restourant_name' => $request->get('name'),
         'maindish' => $request->get('maindish'),
         'dessert' => $request->get('dessert'),
         'drink' => $request->get('drink'),
         'created_at'=>$time,
         ]);

        }

        $menu['name']="";
        $users=DB::table('users')->select('name', 'id')
              ->get();

        $data = array(
        'users' =>$users,
        'menu'=>$menu,
        );
        return view('dashboard',$data);


    }


    public function menus(){
      $id = Auth::id();
      $userscount = DB::table('menu')->where('user_id', '=', $id)->count();
      if($userscount>0){
      $menus=DB::table('menu')->select('restourant_name', 'maindish','drink','dessert','created_at')->where('user_id', '=', $id)
            ->get();
            $data = array(
        'menus' =>$menus,
        'count' =>"1",

        );

      return view('menu_table',$data);
    }
    else{
      $data = array(
  'count' =>"0"

  );
  return view('menu_table',$data);
    }
    }



}
