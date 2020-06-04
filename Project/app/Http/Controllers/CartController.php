<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Cart;
use App\Product;
use Session;

class CartController extends Controller
{
    public function index()
    {
        $cartCollection = \Cart::getContent();

        return view('pages.cart')->with(['cartCollection' => $cartCollection]);
    }

    public function addToCart($id)
    {
        $product = Product::find($id);

        $cart = \Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $product->quantity,
            'attributes' => [
                'image' => $product->image,
                'slug' => $product->slug
            ]
        ]);

        Session::flash('message', 'Add to cart successfully!');

        return redirect()->back()->with('message', 'Add to cart successfully!');
    }

    public function removeProductFromCart($productId)
    {
        \Cart::remove($productId);

        Session::flash('message', 'Remove item in cart successfully!');

        return redirect()->back()->with('message', 'Remove item in cart successfully!');
    }

    public function destroyCart()
    {
        \Cart::destroy();

        return redirect()->back()->with('sucess', 'Remove cart successfully!');
    }
}
