<!doctype html>
<html lang="en" data-theme="cupcake">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>docs</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.50.0/dist/full.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2/dist/tailwind.min.css" rel="stylesheet" type="text/css" />

</head>

<body class="m-5">


    <div class="container mt-4 ">
        <div class="row">
            <div class="card">
                <div class="card-body flex items-center justify-center">
                    <div class="w-full max-w-xs">
                        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{route('login')}}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                                    Email
                                </label>
                                @error('email')
                                <span class="text-red-600">
                                    {{$message}}
                                </span>
                                @enderror
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="email" type="email" name="email" placeholder="Email" value="{{old('email')}}">
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                                    Password
                                </label>
                                @error('password')
                                <span class="text-red-600">
                                    {{$message}}
                                </span>
                                @enderror
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    type="password" name="password" placeholder="Password" value="{{old('password')}}">
                            </div>
                            
                                <div class="flex items-center justify-between pt-2">
                                    <button
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                        type="submit">
                                        Submit
                                    </button>
                                    <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800"
                                        href="{{route('password.request')}}">
                                        Forgot Password?
                                    </a>
                                </div>
                                <div class="flex items-center justify-center mt-8">
                                    <a class="inline-block align-baseline font-bold text-sm text-warning hover:text-yellow-800 text-center"
                                            href="{{route('register')}}">
                                            don't have account?
                                        </a>
                                </div>
                        </form>
                    </div>
                    <p class="text-center text-gray-500 text-xs">
                        &copy;2023 fihryal faqiy. All rights reserved.
                    </p>

                </div>
            </div>
        </div>
    </div>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
