<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h2 class="text-2xl font-bold mb-4">Invoice</h2>
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h3 class="text-xl font-semibold mb-4">Order Summary</h3>
            <div class="mb-4">
                <p class="font-semibold">Order ID: <span>#{{ $order->id }}</span></p>
                <p class="font-semibold">Customer Name: <span>{{ $order->first_name }} {{ $order->last_name }}</span></p>
                <p class="font-semibold">Total Amount: <span>Rp {{ number_format($order->total, 0, ',', '.') }}</span></p>
                <p class="font-semibold">Status: <span>{{ ucfirst($order->status) }}</span></p>
            </div>
            <div class="mb-4">
                <h4 class="font-semibold">Order Items:</h4>
                <ul>
                    @foreach($orderItems as $item)
                        <li>{{ $item->name }} - Quantity: {{ $item->quantity }} - Price: Rp {{ number_format($item->price, 0, ',', '.') }}</li>
                    @endforeach
                </ul>
            </div>
            <a href="{{ route('home') }}" class="bg-blue-500 text-white px-4 py-2 rounded mt-4 inline-block">Back to Home</a>
        </div>
    </div>
</body>
</html>
