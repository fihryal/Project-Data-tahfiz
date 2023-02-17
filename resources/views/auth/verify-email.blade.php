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
                        <div class="mt-5 mx-auto" style="width: 380px">
                            <div class="card-body flex items-center justify-center">
                                <div class="w-full max-w-xs">
                                    <div class="toast toast-top toast-end">
                                        @if (session('status'))
                                        <div class="alert alert-success mb-4">
                                            A Fresh verification link has been sent to your email
                                        </div>
                                        @endif
                                    </div>

                                    Before proceeding, please check your email for verification.
                                    Or <form action="{{ route('verification.send') }}" method="post" class="d-inline">
                                        @csrf
                                        <button class="btn btn-link p-0 m-0 align-baseline" type="submit">
                                            {{ trans('click here to request another') }}
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
