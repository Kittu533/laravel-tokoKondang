<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ $clientKey }}"></script>
    <style>
        .countdown {
            font-size: 1.5rem;
            color: #dc2626;
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h2 class="text-2xl font-bold mb-4">Payment Page</h2>
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h3 class="text-xl font-semibold mb-4">Invoice Order</h3>
            <div class="mb-4">
                <p class="font-semibold">Order ID: <span id="order-id">#{{ $orderId }}</span></p>
                <p class="font-semibold">Total Amount: <span id="order-amount">Rp {{ number_format($order->total, 0, ',', '.') }}</span></p>
            </div>
            <div class="mb-4">
                <p class="font-semibold">Please complete your payment within:</p>
                <p class="countdown" id="countdown-timer">05:00</p>
            </div>
            <form id="payment-form" action="{{ route('payment.process') }}" method="POST">
                @csrf
                <input type="hidden" name="order_id" value="{{ $orderId }}">
                <button type="submit" id="pay-button" class="bg-blue-500 text-white px-4 py-2 rounded mt-4 w-full">Pay
                    Now</button>
            </form>
        </div>
    </div>

    <script>
        // Countdown Timer
        function startCountdown(duration, display) {
            var timer = duration, minutes, seconds;
            var countdownInterval = setInterval(function () {
                minutes = parseInt(timer / 60, 10);
                seconds = parseInt(timer % 60, 10);

                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.textContent = minutes + ":" + seconds;

                if (--timer < 0) {
                    clearInterval(countdownInterval);
                    display.textContent = "Time's up!";
                    $('#pay-button').prop('disabled', true).addClass('bg-gray-500').removeClass('bg-blue-500');
                }
            }, 1000);
        }

        // Initialize countdown
        $(document).ready(function () {
            var fiveMinutes = 60 * 5,
                display = document.querySelector('#countdown-timer');
            startCountdown(fiveMinutes, display);
        });

        // Handle form submission
        $('#payment-form').on('submit', function (e) {
            e.preventDefault();
            var snapToken = '{{ $snapToken }}';
            var orderId = $('input[name="order_id"]').val();
            snap.pay(snapToken, {
                onSuccess: function (result) {
                    window.location.href = '{{ route('payment.finish') }}?order_id=' + orderId + '&status_code=' + result.status_code + '&transaction_status=' + result.transaction_status;
                },
                onPending: function (result) {
                    window.location.href = '{{ route('payment.finish') }}?order_id=' + orderId + '&status_code=' + result.status_code + '&transaction_status=' + result.transaction_status;
                },
                onError: function (result) {
                    alert('Payment failed: ' + result.status_message);
                    window.location.href = '{{ route('payment.finish') }}?order_id=' + orderId + '&status_code=' + result.status_code + '&transaction_status=' + result.transaction_status;
                },
                onClose: function () {
                    alert('You closed the popup without finishing the payment');
                }
            });
        });
    </script>
</body>

</html>
