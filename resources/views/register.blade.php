<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ini bukan laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!--added a cdn link by searching font awesome4 cdn and getting this link from https://www.bootstrapcdn.com/fontawesome/ this url*/-->
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    @include('partial.header')
    <div class="account-page">
        <div class="container">
            <div class="flex justify-center gap-24">
                <div class="  ">
                    <img class="h-96 w-96"
                        src="https://images.unsplash.com/photo-1472851294608-062f824d29cc?q=80&w=2304&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                </div>
                <div class="">
                    <div class="form-container">
                        <h1 class="fw-bold mt-2 fs-2">Register</h1>
                        @if(Session::has('success'))

                            <div class="alert alert-success" role="alert">
                                {{ Session::get('success') }}
                            </div>

                        @endif

                        <form action="{{ route('register') }}" method="POST" id="RegForm">
                            @csrf
                            <div class="ml-6">
                                <Label for="name"></Label>
                                <input id="name" name="name" type="text" placeholder="Rehan susilo" required>
                            </div>
                            <div class="ml-6">
                                <Label for="email"></Label>
                                <input id="email" name="email" type="email" placeholder="Rehan@gmail.com" required>
                            </div>
                            <div class="ml-6">
                                <Label for="password"></Label>
                                <input id="password" name="password" type="password" placeholder="password" required>
                            </div>
                            <h2 class="flex justify-end" >Sudah Punya Akun?<a href="{{ route('login') }}" class="text-primary fs-6" >Login</a></h2>

                            <button   type="submit" class="btn btn-warning">Register</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @include('partial.footer')
</body>

</html>