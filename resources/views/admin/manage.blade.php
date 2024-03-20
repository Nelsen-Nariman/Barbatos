@extends('template.layout')

@section('title')
    adminHome
@endsection

@section('styling')
    
@endsection

{{-- Body --}}
@section('content')


<div class="heading" style="display: flex; justify-content: center; gap: 21.5rem; margin-top: 3rem;">
    <form action="{{ route('searchAdmin') }}">
        @csrf
        <div class="search" style="display: flex;">
            <div class="form-outline">
              <input type="search" name="search" id="form1" class="form-control" placeholder="Product Name"/>
            </div>
            <div class="btn1">
                <button type="submit" class="btn btn-secondary">
                  <i class="fas fa-search">Search</i>
                </button>
            </div>
        </div>
    </form>

        <div class="btn1">
            <a href="{{ route('admin.addForm') }}" style="text-decoration: none !important;
            color: white !important;">
                <button type="button" class="btn btn-secondary">
                        Add Product
                </button>
            </a>
        </div>
</div>


@foreach ($products as $product)
<div class="centering" style="display: flex; justify-content: center; margin-top: 1rem;">
    <div class="card mb-3" style="width: 740px;">
        <div class="row g-0">
          <div class="col-md-3">
            @if(file_exists(public_path().'\storage/'.$product->photo))
                <img src="{{ asset('storage/'.$product->photo) }}" class="card-img-top" alt="product name's image">
            @else
                <img src="{{ $product->photo }}" class="img-fluid rounded-start" alt="...">
            @endif

          </div>
          <div class="col-md-9">
            <div class="card-body">
                <div class="layouting" style="display: flex; justify-content: space-between;">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <div class="modified" style="display: flex; justify-content: space-evenly; gap: 1rem">
                        <a href="{{ route('admin.update', $product->id) }}" style="text-decoration: none !important;
                            color: black !important;">
                            <p>Update</p>
                        </a>
                        <form action="{{ route('admin.delete', $product->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button style="border: none; background-color: white;">
                                Delete
                            </button>  
                        </form>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>
</div>
@endforeach

<div style="margin: 2rem 0">
    {{$products->links()}}
</div>
    
@endsection