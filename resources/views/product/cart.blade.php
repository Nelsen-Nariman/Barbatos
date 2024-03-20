@extends('template.layout')

@section('title')
    Cart
@endsection

@section('styling')
    <link rel="stylesheet" href="{{ asset('css/general-style.css') }}">
@endsection

@php
    $grandtotal = 0
@endphp

{{-- Body --}}
@section('content')
    @if (empty($cart) || count($cart) == 0)
        There's no product here!
    @else
        @foreach ($cart as $ct => $product)

            <div class="centering" style="display: flex; justify-content: center; margin-top: 1rem;">
                <div class="card mb-3" style="width: 740px;">
                    @php
                        $subtotal = $product["quantity"] * $product["price"]
                    @endphp
                    <div class="row g-0">
                      <div class="col-md-3 cart-img">
                        @if(file_exists(public_path().'\storage/'.$product["photo"]))
                            <img src="{{ asset('storage/'.$product["photo"]) }}" class="card-img-top" alt="product name's image">
                        @else
                            <img src="{{ $product["photo"] }}" class="card-img-top" alt="product name's image">
                        @endif
            
                      </div>
                      <div class="col-md-9">
                        <div class="card-body">
                            <div class="layouting" style="display: flex; justify-content: space-between;">
                                <h5 class="card-title">
                                    @if (strlen($product["name"]) > 28)
                                        @php
                                            $oldName = $product["name"];
                                            $subsName = substr($oldName, 0, 28);
                                        @endphp
            
                                        {{ $subsName . "..." }}
                                    @else
                                        {{ $product["name"] }}
                                    @endif
                                </h5>
                               
                                <a href="{{ route('cart.delete', ['product_id' => $ct]) }}">
                                    <img id="delete-logo" src="{{ asset('/img/Delete.png') }}" alt="">
                                </a>
                            </div>

                            <div class="quantity">
                                <p class="card-text">Quantity: {{ $product["quantity"] }}</p>
                            </div>

                            <div class="totalPrice">
                                <p class="card-text">Total Price: IDR {{ $subtotal }}</p>
                            </div>

                        </div>
                      </div>
                    </div>
                </div>
            </div>

            @php
                $grandtotal+=$subtotal
            @endphp
        @endforeach

        <div style="margin-block: 2rem">
            <br>
        </div>
    @endif
@endsection

<footer class="fixed-bottom ">
    <p class="cart-total">
        Total Price: IDR {{ $grandtotal }}
    </p>
    
    <form action="{{ route('transaction.create') }}" style="margin-bottom: 0">
        <button type="submit" class="btn btn-outline-success">Purchase</button>
    </form>
</footer>