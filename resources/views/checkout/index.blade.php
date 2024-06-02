<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_key') }}"></script>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h2 class="text-2xl font-bold mb-4">Checkout</h2>
        <div class="flex flex-col lg:flex-row -mx-4">
            <div class="w-full lg:w-2/3 px-4 mb-8 lg:mb-0">
                <div class="bg-white p-6 rounded shadow">
                    <h3 class="text-xl font-semibold mb-4">Billing Information</h3>
                    @if(session('success'))
                        <div class="bg-green-100 text-green-700 p-4 mb-4">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('checkout.store') }}" method="POST" id="payment-form">
                        @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label for="firstName" class="block text-sm font-medium text-gray-700">First
                                    Name</label>
                                <input type="text" id="firstName" name="firstName"
                                    class="mt-1 block w-full rounded border-gray-300 shadow-sm" required>
                            </div>
                            <div>
                                <label for="lastName" class="block text-sm font-medium text-gray-700">Last Name</label>
                                <input type="text" id="lastName" name="lastName"
                                    class="mt-1 block w-full rounded border-gray-300 shadow-sm" required>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" id="email" name="email"
                                class="mt-1 block w-full rounded border-gray-300 shadow-sm" required>
                        </div>
                        <div class="mb-4">
                            <label for="phone" class="block text-sm font-medium text-gray-700">Nomor Telepon</label>
                            <input type="phone" id="phone" name="phone"
                                class="mt-1 block w-full rounded border-gray-300 shadow-sm" required>
                        </div>
                        <div class="mb-4">
                            <label for="province" class="block text-sm font-medium text-gray-700">Provinsi:</label>
                            <select id="province" name="province" class="form-select mt-1 block w-full">
                                <option value="">Pilih Provinsi</option>
                                <!-- Options will be populated by JavaScript -->
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="regency" class="block text-sm font-medium text-gray-700">Kabupaten:</label>
                            <select id="regency" name="regency" class="form-select mt-1 block w-full">
                                <option value="">Pilih Kabupaten</option>
                                <!-- Options will be populated by JavaScript -->
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="district" class="block text-sm font-medium text-gray-700">Kecamatan:</label>
                            <select id="district" name="district" class="form-select mt-1 block w-full">
                                <option value="">Pilih Kecamatan</option>
                                <!-- Options will be populated by JavaScript -->
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="village" class="block text-sm font-medium text-gray-700">Kelurahan:</label>
                            <select id="village" name="village" class="form-select mt-1 block w-full">
                                <option value="">Pilih Kelurahan</option>
                                <!-- Options will be populated by JavaScript -->
                            </select>
                        </div>
                        <button type="button" id="pay-button"
                            class="bg-blue-500 text-white px-4 py-2 rounded mt-4">Place Order</button>
                    </form>
                </div>
            </div>
            <div class="w-full lg:w-1/3 px-4">
                <div class="bg-white p-6 rounded shadow">
                    <h3 class="text-xl font-semibold mb-4">Order Summary</h3>
                    <div class="border-b border-gray-200 mb-4">
                        @foreach($cartItems as $item)
                            <div class="flex justify-between items-center py-2">
                                <div class="flex items-center">
                                    <img src="{{ asset($item->product->image_product) }}"
                                        alt="{{ $item->product->name_product }}" class="h-16 w-16 object-cover mr-4">
                                    <div>
                                        <h4 class="font-semibold">{{ $item->product->name_product }}</h4>
                                        <p class="text-sm text-gray-500">Qty: {{ $item->quantity }}</p>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <p>Rp{{ number_format($item->product->price_product * $item->quantity, 0, ',', '.') }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="flex justify-between py-2">
                        <p class="font-semibold">Subtotal</p>
                        <p>Rp{{ number_format($subtotal, 0, ',', '.') }}</p>
                    </div>
                    <div class="flex justify-between py-2">
                        <p class="font-semibold">VAT</p>
                        <p>Rp{{ number_format($vat, 0, ',', '.') }}</p>
                    </div>
                    <div class="flex justify-between py-2">
                        <p class="font-semibold">Total</p>
                        <p class="font-bold">Rp{{ number_format($total, 0, ',', '.') }}</p>
                    </div>
                    <a href="{{ route('cart.index') }}"
                        class="bg-blue-500 text-white px-4 py-2 rounded mt-4 inline-block">Back to Cart</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            console.log('Document is ready');

            // Fetch and populate provinces
            $.ajax({
                url: '/api/api/provinces',
                method: 'GET',
                success: function (data) {
                    console.log('Provinces data:', data);
                    data.forEach(function (province) {
                        $('#province').append(`<option value="${province.id}">${province.name}</option>`);
                    });
                },
                error: function (xhr, status, error) {
                    console.error('Error fetching provinces:', error);
                }
            });

            // Fetch and populate regencies based on selected province
            $('#province').change(function () {
                console.log('Province changed');
                var provinceId = $(this).val();
                $('#regency').empty().append('<option value="">Pilih Kabupaten</option>');
                $('#district').empty().append('<option value="">Pilih Kecamatan</option>');
                $('#village').empty().append('<option value="">Pilih Kelurahan</option>');

                $.ajax({
                    url: `/api/api/regencies/${provinceId}`,
                    method: 'GET',
                    success: function (data) {
                        console.log('Regencies data:', data);
                        data.forEach(function (regency) {
                            $('#regency').append(`<option value="${regency.id}">${regency.name}</option>`);
                        });
                    },
                    error: function (xhr, status, error) {
                        console.error('Error fetching regencies:', error);
                    }
                });
            });

            // Fetch and populate districts based on selected regency
            $('#regency').change(function () {
                console.log('Regency changed');
                var regencyId = $(this).val();
                $('#district').empty().append('<option value="">Pilih Kecamatan</option>');
                $('#village').empty().append('<option value="">Pilih Kelurahan</option>');

                $.ajax({
                    url: `/api/api/districts/${regencyId}`,
                    method: 'GET',
                    success: function (data) {
                        console.log('Districts data:', data);
                        data.forEach(function (district) {
                            $('#district').append(`<option value="${district.id}">${district.name}</option>`);
                        });
                    },
                    error: function (xhr, status, error) {
                        console.error('Error fetching districts:', error);
                    }
                });
            });

            // Fetch and populate villages based on selected district
            $('#district').change(function () {
                console.log('District changed');
                var districtId = $(this).val();
                $('#village').empty().append('<option value="">Pilih Kelurahan</option>');

                $.ajax({
                    url: `/api/api/villages/${districtId}`,
                    method: 'GET',
                    success: function (data) {
                        console.log('Villages data:', data);
                        data.forEach(function (village) {
                            $('#village').append(`<option value="${village.id}">${village.name}</option>`);
                        });
                    },
                    error: function (xhr, status, error) {
                        console.error('Error fetching villages:', error);
                    }
                });
            });
        });

        // Midtrans Snap Payment
        $('#pay-button').click(function (event) {
            event.preventDefault();
            var form = $('#payment-form');
            $.ajax({
                url: form.attr('action'),
                method: form.attr('method'),
                data: form.serialize(),
                success: function (response) {
                    snap.pay(response.snapToken, {
                        onSuccess: function (result) {
                            console.log(result);
                            window.location.href = '/checkout/success';
                        },
                        onPending: function (result) {
                            console.log(result);
                            window.location.href = '/checkout/pending';
                        },
                        onError: function (result) {
                            console.error(result);
                            window.location.href = '/checkout/error';
                        }
                    });
                },
                error: function (xhr, status, error) {
                    console.error('Error processing payment:', error);
                }
            });
        });
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>
</body>

</html>