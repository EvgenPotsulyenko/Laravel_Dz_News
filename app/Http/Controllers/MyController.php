<?php

namespace App\Http\Controllers;

use  App\Http\Requests\NewsRequest;
use App\Models\NewMod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MyController extends Controller
{
    function index()
    {
        $NewMods = DB::table('News')->select('*')->get();
        $Short_descriptions = DB::table('News')->select('Short_description')->get();
        return view('welcome',compact('NewMods'),compact('Short_descriptions'));
    }
    function create_news(NewsRequest $NewsRequest) //Отправляет данные в таблицу News ,$Short_description,$Full_text
    {
          //return ($NewsRequest->Summary);
        return DB::table('News')->insert(['Summary' => $NewsRequest->Summary,'Short_description' => $NewsRequest->Short_description,'Full_text' => $NewsRequest->Full_text]);
    }
    function create()
    {
        return view('create');
    }
    function open(NewsRequest $NewsRequest) //
    {

        $NewMods = DB::table('News')->select('*')->get();
        foreach ($NewMods as $NewMod)
        {
            if($NewsRequest->Summary == $NewMod->Summary)
            {
               $sh =  $NewMod->Short_description;
               $ar =  $NewMod->Full_text;
            }
        }
        return view('Open',['sum' => $NewsRequest->Summary,'short' => $sh,'art' => $ar]);
    }
    function deleteView()
    {
        return view('delete');
    }
    function delete(NewsRequest $NewsRequest)
    {
        return DB::table('News')->where('Summary', '=', $NewsRequest->Summary)->delete();
    }
}
