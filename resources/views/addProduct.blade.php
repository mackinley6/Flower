@extends('layout')

@section('content')
    <div>
        <form class="bg-dark table table-dark inputForm" action="{{ route('addProduct') }}" method="post">
            @csrf
            
                
                        <label for="first_name">Product Name</label>
                        <input type="text" name="product_name">
                        @error('product_name')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                   
                        <label for="last_name">Product Description</label>
                        <textarea name="product_description" cols="30" rows="1"></textarea>
                        @error('product_description')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    
                        <label for="first_name">Quantity</label>
                        <input type="number" name="quantity">
                        @error('quantity')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    
                        <label for="first_name">Price</label>
                        <input type="number" step='0.01' name="price">
                        @error('price')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    
                        <button class="btn btn-primary" type="submit">Add</button>
              
        </form>
    </div>
@endsection