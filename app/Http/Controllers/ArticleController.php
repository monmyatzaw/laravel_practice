<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class ArticleController extends Controller
{
  public function index()
  {return "Article List";}
 public function detail($id)
 {  // 	 return "Controller - Article Detail - $id";}

// public function index()
// {return view('articles.index');
 $data = [
 [ "id" => 1, "title" => "First Article" ],
 [ "id" => 2, "title" => "Second Article" ],
 ];
 return view('articles.index', [
 'articles' => $data  
// articles is template in view, $data is data in Array Format in controller
// 'articles' => $data လို့ ရေးထားတဲ့အတွက် $data ကို articles အနေနဲ့ပေးလိုက်တာပါ။ 
// ဒီလိုပေးလိုက်တဲ့အတွက်Template မှာ $articles Variable ကို သုံးလို့ရသွားပါလိမ့်မယ်။
  ]);
}
}