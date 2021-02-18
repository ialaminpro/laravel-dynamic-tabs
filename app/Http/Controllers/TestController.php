<?php
namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {   
        $category = Category::with('products')->get();

    	return view()->exists('welcome') ? view('welcome',compact('category')) : '';
    }
}
?>