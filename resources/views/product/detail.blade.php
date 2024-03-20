@extends('template.layout')

@section('title')
    {{ $product->name }}
@endsection

@section('styling')
    <link rel="stylesheet" href="{{ asset('css/general-style.css') }}">
@endsection

{{-- Body --}}
@section('content')
    <div class="d-flex justify-contents-center align-items-center mt-4 product-data" id="product-data">
        @if(file_exists(public_path().'\storage/'.$product->photo))
            <img src="{{ asset('storage/'.$product->photo) }}" class="cart-img" alt="product name's image">
        @else
            <img src="{{ $product->photo }}" class="cart-img" alt="product name's image">
        @endif

        <div class="product-detail">
            <h1>{{ $product->name }}</h1>
            
            <table style="width: 100%">
                <tr>
                    <td class="title">Detail</td>
                    <td class="description" style="width: 70%">
                        {{ $product->detail }}
                    </td>
                </tr>
                <tr>
                    <td class="title">Price</td>
                    <td class="description">
                        IDR {{ $product->price }}
                    </td>
                </tr>
                @auth
                    @if (auth()->user()->role === "Customer")
                        <form action="{{ route('cart.add', ['product_id' => $product->id]) }}">
                            <tr>
                                <td class="title">
                                    Qty
                                </td>
                                <td>
                                    <input name="qtyInput" type="number" class="form-control" min="1" value="{{ old('qtyInput') }}">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="submit" class="btn btn-outline-dark mt-4">Purchase</button>
                                </td>
                            </tr>
                        </form>
                    @endif
                @endauth
            </table>
        </div>
    </div>
@endsection