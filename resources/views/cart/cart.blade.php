@extends('layout')

@section('content')
    <div class="container">
        <h2>Your Cart</h2>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if($carts->isEmpty())
            <div class="alert alert-warning">
                Your cart is empty!
            </div>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($carts as $cart)
                        <tr>
                            <td>{{ $cart->product->name }}</td>
                            <td>${{ $cart->product->price }}</td>
                            <td>{{ $cart->quantity }}</td>
                            <td>${{ $cart->product->price * $cart->quantity }}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="3"><strong>Total</strong></td>
                        <td>${{ $total }}</td>
                    </tr>
                </tbody>
            </table>
            <a href="#" class="btn btn-primary">Checkout</a>
        @endif
    </div>
@endsection
