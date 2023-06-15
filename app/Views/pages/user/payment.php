<!DOCTYPE html>
<html>

<head>
    <title>Payment Page</title>
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