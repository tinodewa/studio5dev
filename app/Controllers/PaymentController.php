<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Midtrans\Config as MidtransConfig;
use Midtrans\Snap;

class PaymentController extends BaseController
{
    public function index()
    {
        //Set Midtrans configuration
        $midtransConfig = new \Config\Midtrans();
        MidtransConfig::$serverKey = $midtransConfig->serverKey;
        MidtransConfig::$isProduction = $midtransConfig->isProduction;

        #Item details
        $params = array(
            'transaction_details' => array(
                'order_id' => 'ORDER-' . time(),
                'gross_amount' => 100000,
            )
        );

        //Generate Snap token
        $snapToken = Snap::getSnapToken($params);

        //Load payment view with Snap token
        return View('pages/user/payment', ['snapToken' => $snapToken]);
    }
}
