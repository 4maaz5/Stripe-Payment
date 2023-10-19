<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe;
class StripeController extends Controller
{
    public function stripe(){
        return view('show');
    }
    public function stripeCheckout(Request $request){
        //Creating an instance The $Stripe variable would be used throughout the program to interact with stripe Api...
        $stripe= new \Stripe\StripeClient(env('STRIPE_SECRET'));
        //in context of stripe checkout_session_id is used to generates session id for a specific user transaction...This code of line will redirect user back to show page after successfull transaction...
        $redirecturl=route('stripe.checkout.success').'?session_id={CHECKOUT_SESSION_ID}';
        $response=$stripe->checkout->sessions->create([
            'success_url' =>  $redirecturl,
            // 'customer_email' => 'admin@gmail.com',
            // 'payment_method_types' => ['link', 'card'],
            'line_items' =>[
                [
                    'price_data' => [
                        'product_data' => [
                        'name' => $request->product,
                        ],
                        'unit_amount'=> 100*$request->price,
                        'currency'=>'USD',
                    ],
                    'quantity'=>1
                ],
            ],
            'mode' => 'payment',
            'allow_promotion_codes'=>true,
        ]);
        return redirect($response['url']);
    }

    public function StripeCheckoutSuccess(Request $request){
        $stripe= new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $response=$stripe->checkout->sessions->retrieve($request->session_id);
        return redirect()->route('stripe.index')->with('success','Payment Successfull.');
    }
}
