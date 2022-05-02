<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>flowerstore</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
              rel="stylesheet" 
              integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
              crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
                crossorigin="anonymous"></script>
        <style>
            body{
                background: lightgray;
                width: auto;
                height: 100vh;
                display: flex;
                justify-content: center;
                text-align: center;
            }
            .inputForm{
                display: flex;
                flex-direction: row;
                text-align: left;

            }
            .navList{
                display: flex;
                justify-content: space-evenly;
            }
            .navBars{
                text-decoration: none;
                color: black;
            }
        </style>
    </head>
    <body>
        <div>
            <nav class="navBar">
                <h1 class="title">Flower Store</h1>
                
            </nav>
            <div class="navList">
                <a class="navBars" href="{{ route('allProduct') }}"><h5>All Products</h5></a> 
                <a class="navBars" href="{{ route('addProduct') }}"><h5>Add products</h5></a>
                <a class="navBars" href="orders"><h5>Orders</h5></a>
            </div>
            @yield('content')
            <table class="table table-dark">
            <tr>
                        <th>Product Name</th>
                        <th>Product Description</th>
                        <th> Quantity</th>
                        <th>Price</th>
                        <td>Actions</td>
                    </tr>
                @php
                    $products = DB::table('products')->select('product_name','product_description','quantity','price')->get();
                @endphp
                @foreach($products as $prod)
                    
                    <tr>
                        <td>{{$prod->product_name}}</td>
                        <td>{{$prod->product_description}}</td>
                        <td>{{$prod->quantity}}</td>
                        <td>Php {{$prod->price}}</td>
                        <td><a class="btn btn-danger" href="">delete</a></td>
                    </tr>
                @endforeach
            </table>
         </div>
    </body>
</html>
