<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;

class HomeController extends Controller
{
    public function index()
    {
        $product=Product::paginate(4);
        return view('home.userpage',compact('product'));
    }
    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if($usertype=='1')
        {
            return view ('admin.home');
        }

        else
        {
            $product=Product::paginate(4);
            return view('home.userpage',compact('product'));
            // return view ('dashboard');
        }
        }

        public function product_details($id)
        {
            $product=Product::find($id);
            return view('home.product_details',compact('product'));
        }

        public function add_cart(Request $request,$id)
        {
             if (Auth::id())
             {
                $user= Auth::user(); //get the current login user details
                $product=product::find($id);
                $cart = new cart;
                $cart->name = $user->name; // get the current cart 
                $cart->email = $user->email; 
                $cart->phone = $user->phone; 
                $cart->address = $user->address; 
                $cart->user_id = $user->id; 
                $cart->product_title = $product->title;

                if($product->discount_price != null)
                {
                    $cart->price = $product-> discount_price *  $request->quantity; //get the price of the product and multiply with the quantity

                }
                else
                { 
                    $cart->price = $product-> price * $request->quantity; //get the price of the product and multiply with the quantity

                }

                $cart->image = $product->image;
                $cart -> Product_id = $product->id;
                $cart->quantity = $request->quantity;
                $cart ->save();
                return redirect()->back()->with('message','Product added to cart successfully');
             }
             else
             {
                return redirect('login');
             }

        }

        public function show_cart()
        {
            $id=Auth::user()->id;
            $cart=cart::where('user_id','=',$id)->get();
            return view ('home.showcart',compact('cart'));
        }

       
        public function remove_cart($id)
        
        {
            $cart = cart::find($id);
            $cart->delete();
            return redirect()->back()->with('message','Product removed from cart successfully');

        }

        public function cash_order()
        {

            $user = Auth::user();
            $userid = $user->id;
            // dd($userid);

            $data = cart::where('user_id','=', $userid)->get();
            // dd($data);

            foreach ($data as $data)
            {
                $order = new order;
                $order->name = $data->name;
                $order->email = $data->email;
                $order->phone = $data->phone;
                $order->address = $data->address;
                $order->user_id = $data->user_id;
                $order->product_title = $data->product_title;
                $order->price = $data->price;
                $order->quantity = $data->quantity;
                $order->image = $data->image;
                $order->product_id = $data->Product_id;

                $order->payment_status = 'cash on delivery';
                $order->delivery_status = 'processing';

                $order -> save();

                $cart_id = $data->id;

                $cart = cart::find($cart_id);

                $cart->delete();

            }

            return redirect()->back()->with('message','Order placed successfully');

        }



    }

