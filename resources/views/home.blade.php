@extends('template.layout')

@section('title')
    Home
@endsection

@section('styling')
    <link rel="stylesheet" href="{{ asset('css/general-style.css') }}">
@endsection

{{-- Body --}}
@section('content')
    <form action="{{ route('product.search') }}">
        @csrf
        <div class="input-group mb-3" id="searchInput">
            <input type="text" class="form-control" name="search" placeholder="Find something here.." aria-label="Product Search" aria-describedby="button-addon2">
            <button class="btn btn-outline-dark" type="submit" id="button-addon2">Search</button>
        </div>
    </form>

    @foreach ($categories as $category)
        <div class="product-part">
            <div id="product-top">
                <p>{{ $category->name }}</p>
                <a href="{{ route('product.category', ['category_id' => $category->id]) }}">View All</a>
            </div>

            <div id="product-bottom">
                @foreach ($category->products->slice(0, 8) as $product)
                    <a href="{{ route('product.detail', ['product_id' => $product->id]) }}">
                        <div class="card" id="product-card" style="width: 15rem;">
                            @if(file_exists(public_path().'\storage/'.$product->photo))
                                <img src="{{ asset('storage/'.$product->photo) }}" class="card-img-top" alt="product name's image">
                            @else
                                <img src="{{ $product->photo }}" class="card-img-top" alt="product name's image">
                            @endif
                            <div class="card-body">
                                <p class="text" id="card-text">
                                    {{-- if else -> subtract + concat "..." --}}
                                    @if (strlen($product->name) > 22)
                                        @php
                                            $oldName = $product->name;
                                            $subsName = substr($oldName, 0, 22);
                                        @endphp
                                        
                                        {{ $subsName . "..." }}
                                    @else
                                        {{ $product->name }}
                                    @endif
                                    <br>
                                    <b>
                                        IDR {{ $product->price }}
                                    </b>
                                </p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    @endforeach
@endsection