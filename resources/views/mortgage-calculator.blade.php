<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Calculating Monthly EMI</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center pt-4">
            <div class="col-md-12">
                <div>
                    <h2 class=" text-center text-capitalize m-4">calculating monthly EMI</h2>
                </div>
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('mortgage-calculator.calculate') }}">
                            @csrf

                            {{-- <div>
                                <label for="purchase_price">Purchase Price:</label>
                                <input type="number" name="purchase_price" class="form-control" id="purchase_price" value="{{ old('purchase_price') }}">
                            </div> --}}

                            {{-- <div>
                                <label for="down_payment">Down Payment:</label>
                                <input type="number" name="down_payment" class="form-control" id="down_payment"
                                    value="{{ old('down_payment') }}">
                            </div> --}}

                            {{-- <div>
                                <label for="repayment_time">Repayment Time (in years):</label>
                                <input type="number" name="repayment_time" class="form-control" id="repayment_time"
                                    value="{{ old('repayment_time') }}">
                            </div> --}}

                            {{-- <div>
                                <label for="interest_rate">Interest Rate:</label>
                                <input type="number" step="0.01" name="interest_rate" class="form-control"
                                    id="interest_rate" value="{{ old('interest_rate') }}">
                            </div> --}}

                            {{-- Purchase Price --}}
                            <div class="mb-3">
                                <label for="purchase_price" class="form-label">Purchase Price:</label>
                                <input type="number" class="form-control" name="purchase_price" id="purchase_price"
                                    placeholder="">
                            </div>

                            {{-- Down Payment --}}
                            <div class="mb-3">
                                <label for="down_payment" class="form-label">Down Payment:</label>
                                <input type="number" class="form-control" name="down_payment" id="down_payment"
                                    placeholder="">
                            </div>

                            {{-- Repayment Time (in years): --}}
                            <div class="mb-3">
                                <label for="repayment_time" class="form-label">Repayment Time (in years):</label>
                                <input type="number" class="form-control" name="repayment_time" id="repayment_time"
                                    placeholder="" step="0.5" value="{{ old('repayment_time') }}">
                            </div>

                            {{-- Interest Rate: --}}
                            <div class="mb-3">
                                <label for="interest_rate" class="form-label">Interest Rate:</label>
                                <input type="number" step="0.01" class="form-control" name="interest_rate"
                                    id="interest_rate" placeholder="" value="{{ old('interest_rate') }}">
                            </div>

                            <button type="submit" class="btn btn-primary ">Calculate</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class=" col-md-12 mt-4">
                @if (isset($loanAmount) && isset($monthlyPayment))
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">
                                <div>
                                    <h2>Loan Amount: {{ $loanAmount }}</h2>
                                    <h2>Monthly EMI: {{ $monthlyPayment }}</h2>
                                </div>
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
