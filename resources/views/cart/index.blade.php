<!-- resources/views/cart/index.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
    <title>Keranjang Belanja</title>
</head>

<body>
    @include('partial.promotion')
    @include('partial.header')

    <div class="container mx-auto px-4 py-8">
        <h2 class="text-2xl font-bold mb-4">Keranjang Belanja</h2>
        @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
        @endif

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="py-2">Gambar</th>
                        <th class="py-2">Produk</th>
                        <th class="py-2">Harga</th>
                        <th class="py-2">Kuantitas</th>
                        <th class="py-2">Total</th>
                        <th class="py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($cartItems as $item)
                    <tr class="border-b">
                        <td class="py-2 px-4">
                            <img src="{{ asset($item->product->image_product) }}" alt="{{ $item->product->name_product }}" class="h-16 w-16 object-cover">
                        </td>
                        <td class="py-2 px-4">{{ $item->product->name_product }}</td>
                        <td class="py-2 px-4">Rp{{ number_format($item->product->price_product, 0, ',', '.') }}</td>
                        <td class="py-2 px-4">
                            <div class="flex items-center">
                                <form action="{{ route('cart.update', $item->id) }}" method="POST" class="flex">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" name="decrease" value="1" class="bg-gray-200 px-2 py-1">-</button>
                                    <input type="number" name="quantity" value="{{ $item->quantity }}" class="w-16 text-center mx-2" min="1" />
                                    <button type="submit" name="increase" value="1" class="bg-gray-200 px-2 py-1">+</button>
                                </form>
                            </div>
                        </td>
                        <td class="py-2 px-4">Rp{{ number_format($item->product->price_product * $item->quantity, 0, ',', '.') }}</td>
                        <td class="py-2 px-4">
                            <form action="{{ route('cart.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="py-2 px-4 text-center">Keranjang belanja Anda kosong.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if(!$cartItems->isEmpty())
        <div class="mt-4 flex justify-between items-center">
            <a href="{{ route('product.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Lanjut Belanja</a>
            <a href="{{ route('checkout.index') }}" class="bg-green-500 text-white px-4 py-2 rounded">Lanjut Pembayaran</a>
        </div>
        @endif
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>
</body>

</html>
