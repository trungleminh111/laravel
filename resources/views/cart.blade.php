@extends('layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Giỏ hàng</div>

                    <div class="card-body">
                        @if(session('cart'))
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Tên sản phẩm</th>
                                    <th scope="col">Hình ảnh</th>
                                    <th scope="col">Đơn giá</th>
                                    <th scope="col">Số lượng</th>
                                    <th scope="col">Thành tiền</th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach(session('cart') as $id => $item)
                                    <tr>
                                        <td>{{ $item['name'] }}</td>
                                        <td><img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" height="50"></td>
                                        <td>{{ number_format($item['price']) }} đ</td>
                                        <td>
                                            <form action="{{ route('cart.update', $id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="input-group">
                                                    <input type="number" name="quantity" value="{{ $item['quantity'] }}" class="form-control">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-secondary" type="submit">Cập nhật</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </td>
                                        <td>{{ number_format($item['price'] * $item['quantity']) }} đ</td>
                                        <td>
                                            <form action="{{ route('cart.remove', $id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Xóa</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td colspan="4"></td>
                                    <td><b>Tổng tiền:</b></td>
                                    <td><b>{{ number_format($total) }} đ</b></td>
                                </tr>
                                </tbody>
                            </table>

                            <div class="text-center">
                                <a href="{{ route('checkout') }}" class="btn btn-primary">Thanh toán</a>
                                <form action="{{ route('cart.clear') }}" method="POST" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger">Xóa giỏ hàng</button>
                                </form>
                            </div>
                        @else
                            <div class="alert alert-info">Giỏ hàng trống!</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
