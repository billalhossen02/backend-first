<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Symfony\Contracts\Service\Attribute\Required;

class AdminController extends Controller
{
    public function home()
    
    {
        return view('welcome');
    }

    public function register()
    
    {

        return view('register');

    }

    public function addRegister(Request $request)
    
    {

    $data = new User();

    $data->name = $request->name;
    $data->email = $request->email;
    $data->password = $request->password;
    $data->save();

    return back();

    }

    public function show()
    
    {
        $users = User::all();
        return view('showadmin',['users' => $users]);
    }

    public function login()

    {

        return view('login');

    }

    public function userlogin(Request $request)
    {


        $email = $request->email;
        $password = $request->password;

    
        $user = DB::table('users')->where('email', $email)->where('password', $password)->first();

        if(($user)){
            return view('welcome');
        }

        return view('login');

    }

    public function logout()
    {
        Auth::logout();

        return view('login');
    }

    public function addCategory(Request $request)
    
    {
        $category = new Category();
        
        $catImage = $request->file('image');
        $imageDestination = 'CategoryImage';
        $getextention = date('Ymdhis'). '.' . $request->file('image')->getClientOriginalExtension();
        $catImage->move($imageDestination, $getextention);


        $category->name = $request->name;
        $category->image = $getextention;
        $category->description = $request->description;
        $category->save();

        return back();

    }

    public function addProduct(Request $request)
    
    {
        $product = new Product();
        
        $prodImage = $request->file('image');
        $imageDestination = 'ProductImage';
        $getextention = date('Ymdhis'). '.' . $request->file('image')->getClientOriginalExtension();
        $prodImage->move($imageDestination, $getextention);


        $product->name = $request->name;
        $product->image = $getextention;
        $product->price = $request->price;
        $product->category = $request->category;
        $product->description = $request->description;
        $product->save();

        return view('welcome');
    }

    public function allCategory()

    {

        $categories = Category::all();
        return view('product.productadd',compact('categories'));

    }

    public function category()

    {
        return view('category.addcategory');
    }
    
    public function product()

    {
        $categories = Category::all();
        return view('product.productadd',compact('categories'));
    }

    public function showProduct()
    {
        $products = Product::all();
        return view('product.showproduct',['products' => $products]);
    }

    public function editProduct($id)
    {
        $categories = Category::all();
        $product = Product::find($id);
        return view('product.edit',['product' => $product, 'categories' => $categories]);
    }

    public function updateProduct(Request $request, $id)

    {   $product = Product::find($id);
        
        $prodImage = $request->file('image');
        $imageDestination = 'ProductImage';
        $getextention = date('Ymdhis'). '.' . $request->file('image')->getClientOriginalExtension();
        $prodImage->move($imageDestination, $getextention);


        $product->name = $request->name;
        $product->image = $getextention;
        $product->price = $request->price;
        $product->category = $request->category;
        $product->description = $request->description;
        $product->save();

        return view('welcome');
    }

    public function deleteProduct($id)

    {
        $product = Product::find($id)->delete();
        return view('welcome');
    }

    
    public function showCategory()
    {
        $categories = Category::all();
        return view('category.show',['categories' => $categories]);
    }
    public function editCategory($id)
    {
        $category = Category::find($id);
        return view('category.edit',['category' => $category]);
    }
    
    public function updateCategory(Request $request, $id)

    {   
        $category = Category::find($id);
        $catImage = $request->file('image');
        $imageDestination = 'CategoryImage';
        $getextention = date('Ymdhis'). '.' . $request->file('image')->getClientOriginalExtension();
        $catImage->move($imageDestination, $getextention);


        $category->name = $request->name;
        $category->image = $getextention;
        $category->description = $request->description;
        $category->save();

        return view('welcome');
      
    }

    public function deleteCategory($id)

    {
        $category = Category::find($id)->delete();
        return view('welcome');
    }
}
