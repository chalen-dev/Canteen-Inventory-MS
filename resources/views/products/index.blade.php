@extends('app')

@section('title', 'Products')

@section('content')
    <table>
        <tr>
            <th>ID</th>
            <th>Product Code</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Current Stock</th>
            <th>Action</th>
        </tr>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->product_code }}</td>
            <td>{{ $product_name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->current_stock }}</td>
            <td></td>
        </tr>
        @endforeach

    </table>
@endsection
