<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pembayaran</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include Snap.js library -->
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-vr-SIa3W6nh_dkMD"></script>
</head>

<body>
    <button id="pay-button">Pay Now</button>

    <script type="text/javascript">
        document.getElementById('pay-button').onclick = function() {
            // Call Midtrans Snap API to open the payment popup
            snap.pay('<?php echo $snapToken; ?>');
        };
    </script>
</body>

</html>