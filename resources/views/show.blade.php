<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stripe Payment</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container"><br>
        <h1>E-Commerce Products</h1><br><br>
        @if(Session::has('success'))
          <div class="alert alert-success">
             {{ Session::get('success') }}
             @php
                Session::forget('success')
             @endphp
          </div>
        @endif
        <div class="row">
            <div class="col-md-4">
            <div class="card" style="width:20rem">
                <img src="{{ url('img/product.jfif') }}" class="card-image-top">
                <div class="card-body">
                    <h5 class="card-title">Price $10</h5>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis distinctio dolor, quas commodi tempora exercitationem. Odio ipsa delectus temporibus quas, blanditiis nemo quasi sint voluptas, similique, eius incidunt veniam recusandae!
                    </p>
                    <a href="{{ route('stripe.checkout', ['price'=>10, 'product'=>'silver']) }}"><button class="btn btn-success">Add To Cart</button></a>
                </div>
            </div>
            </div>

            <div class="col-md-4">
            <div class="card" style="width:20rem">
                <img src="{{ url('img/product1.png') }}" class="card-image-top">
                <div class="card-body">
                    <h5 class="card-title">Price $100</h5>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis distinctio dolor, quas commodi tempora exercitationem. Odio ipsa delectus temporibus quas, blanditiis nemo quasi sint voluptas, similique, eius incidunt veniam recusandae!
                    </p>
                    <a href="{{ route('stripe.checkout', ['price'=>100, 'product'=>'gold']) }}"><button class="btn btn-success">Add To Cart</button></a>
                </div>
            </div>
            </div>

            <div class="col-md-4">
            <div class="card" style="width:20rem">
                <img src="{{ url('img/product2.jfif') }}" class="card-image-top">
                <div class="card-body">
                    <h5 class="card-title">Price $150</h5>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis distinctio dolor, quas commodi tempora exercitationem. Odio ipsa delectus temporibus quas, blanditiis nemo quasi sint voluptas, similique, eius incidunt veniam recusandae!
                    </p>
                    <a href="{{ route('stripe.checkout', ['price'=>150, 'product'=>'platinum']) }}"><button class="btn btn-success">Add To Cart</button></a>
                </div>
            </div>
            </div>
        </div>
    </div>
</body>
</html>
