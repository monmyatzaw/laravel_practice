<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Article;
class ArticleController extends Controller
{
  public function index()
  {
    //$data = Article::all();
    //$data =Article::find(5);
    // $data =Article::where('category_id', 1)->get();
    // $data =Article::where('title', 'sample_title')->first();
    // $data =Article::orderBy('id', 'desc')->get();
    // $data =Article::pluck('title');
    // $data =Article::create([
    // 'title' => 'New Article',
    // 'body' => 'This is content',
    // 'category_id' => '6']);
    // $data = Article::find(21);
    // $data->update(['title' => 'Updated']);
     $data =Article::find(13)->delete();


    dd($data);
    return view('articles.index', ['articles' => $data]);
  }

public function a_detail()
{ $data = Article::all();
  return view('articles.index', ['articles' => $data]);}

public function create()
{return view('articles.create');}

public function store(Request $request)
  {
    // Request $request saves data from form in table columns
      // Validate form data
    $validated = $request->validate([
        'title' => 'required|min:3',
        'body' => 'required|min:10',
        'category_id' => 'required|integer',
    // validate [] checks form data
    // only runs Article::create() after validation pass
    // if fails, laravel auto redir & error msg
    ]);

    // Save to database
    Article::create($validated);

    // Redirect back to create page
    return redirect('/articles/create')->with('success', 'Article created successfully!');
// redirect back to create article page
  }

 public function detail($id)
 {  // 	 return "Controller - Article Detail - $id";}

// public function index()
// {return view('articles.index');
 $data = [
 [ "id" => 1, "title" => "First Article" ],
 [ "id" => 2, "title" => "Second Article" ],
 ];
 return view('articles.index', ['articles' => $data  
// articles is template in view, $data is data in Array Format in controller
// 'articles' => $data လို့ ရေးထားတဲ့အတွက် $data ကို articles အနေနဲ့ပေးလိုက်တာပါ။ 
// ဒီလိုပေးလိုက်တဲ့အတွက်Template မှာ $articles Variable ကို သုံးလို့ရသွားပါလိမ့်မယ်။
  ]);
}
}