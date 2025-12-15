<?php
namespace App\Http\Controllers\Testing;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class FirstEgController extends Controller
{
    public function products()
  {return view('practice.list');}

 public function detail_id($id)
 {
    //return "Controller - Product Detail - $id";}
    $num_data = [
 [ "id" => 1, "title" => "MacBook" ],
 [ "id" => 2, "title" => "iPhone" ],
 ];
 return view('practice.detail-id', [
 'detailid' => $num_data ]);
}
public function detail()
{return view('practice.detail');}
}
