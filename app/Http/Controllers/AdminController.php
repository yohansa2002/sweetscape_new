<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;


class AdminController extends Controller
{
    public function view_category()
    {

        $data=category::all();

        return view('admin.category',compact('data'));                 //get the data from the database and stores all the category data in data variable and send the data to view 
    }

    public function add_category(Request $request)
    {
        $data=new category;

        $data->category_name=$request->category;

        $data->save();

        return redirect()->back()->with('message','Category added successfully');

    }

    public function delete_category($id)
    {
        $data=category::find($id);
        
        if (!$data) {
            // Category not found, handle the error (e.g., show an error message)
            return redirect()->back()->with('error', 'Category not found.');
        }

        $data->delete();
        return redirect()->back()->with('message','Category deleted successfully');

    }

    public function view_product()
    {
        $category=category::all();
        return view('admin.product',compact('category'));
    }

    public function add_product(Request $request)
    {
          $product=new product;
          $product->title=$request->title;
          $product->descritpion=$request->description;
          $product->price=$request->price;
          $product->quantity=$request->quantity;
          $product->discount_price=$request->dis_price;
          $product->category=$request->category;

          $image=$request->image;                                //gets the image and stores it in a variable
          $imagename=time().'.'.$image->getClientOriginalExtension();    //gives the image unique name using the time function
          $request->image->move('product',$imagename);                   //in product folder stores the image

          $product->image=$imagename;
          $product->save();

          return redirect()->back()->with('message', 'Product added successfully');

        
    }

    public function show_product()
    {
        $product=product::all();
        return view('admin.show_product',compact('product'));
    }

    public function delete_product($id)
    {
        $product=product::find($id);
        $product->delete();
        return redirect()->back()->with('message','Product deleted successfully');
    }

    public function update_product($id)
    {
        $product=product::find($id);
        $category=category::all();
        return view('admin.update_product',compact('product','category'));
    }

    public function update_product_confirm(Request $request,$id)
    {
        $product=product::find($id);
        $product->title=$request->title;
        $product->descritpion=$request->description;
        $product->price=$request->price;
        $product->discount_price=$request->dis_price;
        $product->category=$request->category;
        $product->quantity=$request->quantity;

        $image=$request->image;

        if($image)
        {

        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product',$imagename);

        $product->image=$imagename;

        }


        $product->save();

        return redirect()->back()->with('message','Product updated successfully');

    }
}
