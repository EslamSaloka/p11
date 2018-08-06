<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Saloka\Paytabs\PaytabsData;

class PayController extends Controller
{

    /*
        Client Information
        $X['cc_first_name']
        $X['cc_last_name']
        $X['email']
        $X['cc_phone_number']
        $X['phone_number']
        //////////////////////////
        $X['billing_address']
        $X['city']
        $X['state']
        $X['postal_code']
        $X['country']
        //////////////////////////
        $X['address_shipping']
        $X['city_shipping'] 
        $X['state_shipping']
        $X['postal_code_shipping'] 
        $X['country_shipping'] 
        //////////////////////////
        $X['products_per_title']    //Product title of the product. If multiple products then add “||” separator
        $X['currency']             //Currency of the amount stated. 3 character ISO currency code 
        $X['unit_price']          //Unit price of the product. If multiple products then add “||” separator.
        $X['quantity']           //Quantity of products. If multiple products then add “||” separator
        $X['other_charges']     //Additional charges. e.g.: shipping charges, taxes, VAT, etc.
        $X['amount']           //Amount of the products and other charges, it should be equal to: amount = (sum of all products’ (unit_price * quantity)) + other_charges
        //////////////////////////
        $X['discount']			//Discount of the transaction. The Total amount of the invoice will be= amount - discount
        $X['reference_no']      // Order Number In Your System
    */ 

    public function index() {
        $array['cc_first_name']         = "eslam";
        $array['cc_last_name']          = "Mohsen";
        $array['email']                 = "eslammohsenhandousa@gmail.com";
        $array['cc_phone_number']       = "002";
        $array['phone_number']          = "01025261808";
        $array['billing_address']       = "test";
        $array['city']                  = "test";
        $array['state']                 = "test";
        $array['postal_code']           = "test";
        $array['country']               = "BHR";  //IOS Country
        $array['address_shipping']      = "test";
        $array['city_shipping']         = "test";
        $array['state_shipping']        = "test";
        $array['postal_code_shipping']  = "test";
        $array['country_shipping']      = "BHR"; //IOS Country Shipping
        $array['products_per_title']    = "Iphone X";
        $array['currency']              = "SAR";    //IOS Currency
        $array['unit_price']            = "100000";
        $array['quantity']              = "1";  
        $array['other_charges']         = "0";
        $array['amount']                = "100000";
        $array['discount']          	= "0";
        $array['reference_no']          = "120011";
        $new = new PaytabsData();
        $nn = $new->RunPaytabs($array);
        return $nn;
    }
    public function PaymentReturn() {
        $Request = Request()->all();
        dd($Request);
    }
}
