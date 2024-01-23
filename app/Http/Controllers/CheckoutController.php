<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        $cart = Cart::instance(Auth::user()->id)->content();

        $total = 0;
        $has_carriage_cost = false;
        $carriage_cost = 0;

        foreach ($cart as $c) {
            $total += $c->qty * $c->price;
            if ($c->options->carriage) {
                $has_carriage_cost = true;
            }
        }

        if ($has_carriage_cost) {
            $total += env('CARRIAGE');
            $carriage_cost = env('CARRIAGE');
        }

        return view('checkout.index', compact('cart', 'total', 'carriage_cost'));
    }

    public function store(Request $request)
    {
        $cart = Cart::instance(Auth::user()->id)->content();

        $has_carriage_cost = false;

        foreach ($cart as $product) {
            if ($product->options->carriage) {
                $has_carriage_cost = true;
            }
        }

        Stripe::setApiKey(env('STRIPE_SECRET'));

        $line_items = [];

        foreach ($cart as $product) {
            $line_items[] = [
                'price_data' => [
                    'currency' => 'jpy',
                    'product_data' => [
                        'name' => $product->name,
                    ],
                    'unit_amount' => $product->price,
                ],
                'quantity' => $product->qty,
            ];
        }

        if ($has_carriage_cost) {
            $line_items[] = [
                'price_data' => [
                    'currency' => 'jpy',
                    'product_data' => [
                        'name' => '送料',
                    ],
                    'unit_amount' => env('CARRIAGE'),
                ],
                'quantity' => 1,
            ];
        }

        $checkout_session = Session::create([
            'line_items' => $line_items, //支払い対象となる商品
            'mode' => 'payment',  //支払いモード
            'success_url' => route('checkout.success'), //決済成功時のリダイレクト先URL
            'cancel_url' => route('checkout.index'),  //決済キャンセル時のリダイレクト先URL
        ]);

        return redirect($checkout_session->url);
    }

    public function success()
    {
        return view('checkout.success');
    }
}