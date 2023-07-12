<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Midtrans\Config as MidtransConfig;
use Midtrans\Snap;
use Midtrans\Transaction;

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
            ),
            "callbacks" => array(
                "finish" => "https://tokoecommerce.com/my_custom_finish/?name=Customer01",
            )
        );

        //Generate Snap token
        $snapToken = Snap::getSnapToken($params);

        //Load payment view with Snap token
        return View('pages/user/payment', ['snapToken' => $snapToken]);
    }

    public function checkTransaction()
    {
        // //Set Midtrans configuration
        $midtransConfig = new \Config\Midtrans();
        MidtransConfig::$serverKey = $midtransConfig->serverKey;
        MidtransConfig::$isProduction = $midtransConfig->isProduction;

        $id_pesanan = $this->request->getVar('id_pesanan');
        $order_id = $this->request->getVar('order_id');
        $harga = $this->request->getVar('harga');

        #Item details
        // $params = array(
        //     'transaction_details' => array(
        //         'order_id' => $order_id,
        //         'gross_amount' => $harga,
        //     ),
        //     "callbacks" => array(
        //         "finish" => base_url('list-pesanan/' . $id_pesanan . '/detail'),
        //     )
        // );

        //Generate Snap token
        // $snapToken = Snap::createTransaction($params);

        //Load payment view with Snap token
        // return $this->response->setJSON([
        //     'success' => true,
        //     'snapToken' => $snapToken
        // ]);
    }

    public function handlePaymentNotification()
    {
        //retrieve the POST data from the webhook notification
        $postData = $this->request->getPost();

        //verify the notification using your Midtrans server key
        // $this->veri

        $orderId = $postData['order_id'];
        $paymentStatus = $postData['transaction_status'];

        //update your database status based on the payment status
        if ($paymentStatus === 'settlement') {
            //payment is complete, update the database status
            // $this->updateDatabaseStatus($orderId, 'complete');
        } else {
            //handle other payment statuses accordingly
            //for example, mark it as pending, failed, etc
            // $this->updateDatabaseStatus($orderId, 'pending');
        }
    }

    private function verifyNotification($postData, $serverKey)
    {
        // Perform the necessary verification of the webhook notification
        // You can use the $postData and $serverKey to validate the authenticity of the notification
        // Implement the verification logic as per the Midtrans documentation
    }

    private function updateDatabaseStatus($orderId, $status)
    {
        // Update your database with the new status based on the order ID
        // Implement the database update logic as per your application's requirements
    }
}
