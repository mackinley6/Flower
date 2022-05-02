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
            <table class="table table-dark">
                <tr>
                    <th>Order ID</th>
                    <th>Product Name</th>
                    <th>Price</th>
                </tr>
                
                @php
                $orders = DB::table('orders')
                ->leftJoin('products', 'orders.product_id', '=', 'products.id')
                ->get();
                @endphp
                @foreach($orders as $ord)
                <tr>
                    <td>
                    {{$ord->id}}
                    </td>
                    <td>
                    {{$ord->product_name}}
                    </td>
                    <td>
                    {{$ord->price}}
                    </td>
                </tr>
                @endforeach
            

                
                
                
                
            </table>
         </div>
    </body>
</html>


