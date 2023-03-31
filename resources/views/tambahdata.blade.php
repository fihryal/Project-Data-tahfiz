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
                        <h1 class="text-3xl text-center mb-10">Tambah Data Serotan</h1>
                        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="/insertdata" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                    Nama Lengkap
                                </label>
                                @error('name')
                                <span class="text-red-600">
                                    {{$message}}
                                </span>
                                @enderror
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="name" type="text" name="name" placeholder="Username" value="{{old('name')}}">
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="status">
                                    status
                                </label>
                                @error('status')
                                <span class="text-red-600">
                                    {{$message}}
                                </span>
                                @enderror
                                <div class="relative">
                                    <select
                                        class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="grid-state" name="status">
                                        <option>{{old('status')}}</option>
                                        <option>Berhasil</option>
                                        <option>Gagal</option>
                                    </select>
                                </div>
                                <div class="mb-4 mt-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="surat">
                                        Surat
                                    </label>
                                    @error('surat')
                                    <span class="text-red-600">
                                        {{$message}}
                                    </span>
                                    @enderror
                                    <input
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="surat" type="text" name="surat" placeholder="al-fatihah" value="{{old('baris')}}">
                                </div>
                                <div class="flex items-center justify-between">
                                    <button
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                        type="submit">
                                        Submit
                                    </button>
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
