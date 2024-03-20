<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function addCart(Request $request, $product_id)
    {
        $product = Product::findOrFail($product_id);

        $cart = session("cart");
        $cart[$product_id] = [
            'photo' => $product->photo,
            'name' => $product->name,
            'quantity' => $request->qtyInput,
            'price' => $product->price
        ];

        session(['cart' => $cart]);
        return redirect(route('cart.view'));
    }

    public function viewCart()
    {
        $cart = session("cart");

        return view('product.cart')->with('cart', $cart);
    }

    public function deleteCart($product_id)
    {
        $cart = session("cart");
        unset($cart[$product_id]);

        session(['cart' => $cart]);
        return back();
    }

    public function createTransaction()
    {
        $cart = session("cart");
        $headerTransactionID = Transaction::createHeaderTransaction();

        foreach ($cart as $ct => $product) {
            TransactionDetail::create([
                'transaction_id' => $headerTransactionID,
                'product_id' => $ct,
                'quantity' => $product["quantity"]
            ]);
        }

        session()->forget("cart");

        return redirect('/');
    }

    public function viewTransactionHistory()
    {
        $currUserID = auth()->user()->id;
        $transactions = Transaction::where('user_id', $currUserID)
                        ->orderBy('transaction_date', 'DESC')->get();

        return view('transaction.history', compact('transactions'));

    }

}
