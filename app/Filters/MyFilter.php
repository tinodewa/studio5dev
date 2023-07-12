<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Pembayaran;
use App\Models\PesananWithUserPaketAndPembayaran;
use Midtrans\Config as MidtransConfig;
use Midtrans\Transaction;

class MyFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();
        $pembayaran = new Pembayaran();

        // //Set Midtrans configuration
        $midtransConfig = new \Config\Midtrans();
        MidtransConfig::$serverKey = $midtransConfig->serverKey;
        MidtransConfig::$isProduction = $midtransConfig->isProduction;


        $pesananUserPaketAndPembayaran = new PesananWithUserPaketAndPembayaran();
        $data['pesanans'] = $pesananUserPaketAndPembayaran->getPendingPesanan();

        foreach ($data['pesanans'] as $pesanan) {
            if ($pesanan->status != 'dalam proses') {
                $status = Transaction::status($pesanan->order_id);

                if ($status->transaction_status == 'settlement') {
                    $dataPembayaran = [
                        'status' => 'dalam proses',
                    ];

                    $pembayaran->update($pesanan->id_pembayaran, $dataPembayaran);
                } else if ($status->transaction_status == 'expire') {
                    $dataPembayaran = [
                        'status' => $status->transaction_status,
                    ];

                    $pembayaran->update($pesanan->id_pembayaran, $dataPembayaran);
                }
            }
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // This method will be executed after each route
        // Perform your logic here
    }
}
