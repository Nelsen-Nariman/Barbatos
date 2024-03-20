@extends('template.layout')

@section('title')
    updateForm
@endsection

@section('styling')
    
@endsection

{{-- Body --}}
@section('content')

    <div class="back-btn" style="padding-left: 16rem; margin-top: 3rem;">
        <a href="{{ route('admin.home') }}" style=" text-decoration: none !important;
        color: white !important;">
        <button class="btn btn-secondary">
            Back
        </button>
        </a>
    </div>

    <div class="subtitle" style="padding-inline: 16rem; margin-top: 1rem">
        <h5 style="background-color: rgb(210, 208, 208); padding-inline: 1rem; padding-block: 0.5rem; border-radius: 3px;">Update Product</h5> 
    </div>

    <form action="{{ route('admin.updating', $product->id) }}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PATCH')
        <div class="background" style="padding-inline: 16rem; padding-bottom: 2rem;">
            <div class="border" style="padding-inline: 1rem; padding-block: 0.5rem; border: 2px solid; border-radius: 3px;">
                
                <div class="mb-3">
                    <label for="exampleInputName1" class="form-label">Name</label>
                    <input type="text" class="form-control @error('productName') is-invalid @enderror" id="exampleInputName1" aria-describedby="nameHelp" name="productName" value="{{old('productName', $product->name)}}">
                    @error('productName')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    {{-- <label for="exampleSelect1" class="form-select-label">Category</label> --}}
                    <label for="exampleInputName1" class="form-label">Category</label>
                    <select class="form-select @error('productCategory') is-invalid @enderror" aria-label="Default select example" name="productCategory" id="productCategory">
                        <option selected>Select a Category</option>
                        <option value="1" @if (old('productCategory', $product->category_id) == "1") {{ 'selected' }} @endif>Beauty</option>
                        <option value="2" @if (old('productCategory', $product->category_id) == "2") {{ 'selected' }} @endif>Technology</option>
                        <option value="3" @if (old('productCategory', $product->category_id) == "3") {{ 'selected' }} @endif>Food and Beverages</option>
                        <option value="4" @if (old('productCategory', $product->category_id) == "4") {{ 'selected' }} @endif>Book</option>
                        <option value="5" @if (old('productCategory', $product->category_id) == "5") {{ 'selected' }} @endif>Sport</option>
                        <option value="6" @if (old('productCategory', $product->category_id) == "6") {{ 'selected' }} @endif>Furniture</option>
                        <option value="7" @if (old('productCategory', $product->category_id) == "7") {{ 'selected' }} @endif>Gaming</option>
                        <option value="8" @if (old('productCategory', $product->category_id) == "8") {{ 'selected' }} @endif>Health Care</option>
                    </select>
                    @error('productCategory')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Detail</label>
                    <textarea class="form-control @error('productDetail') is-invalid @enderror" id="exampleFormControlTextarea1" rows="12" name="productDetail">{{old('productDetail', $product->detail)}}</textarea>
                    @error('productDetail')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleInputPrice1" class="form-label">Price</label>
                    <input type="text" class="form-control @error('productPrice') is-invalid @enderror" id="exampleInputPrice1" aria-describedby="priceHelp" name="productPrice" value="{{old('productPrice', $product->price)}}">
                    @error('productPrice')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Photo</label>
                    <input class="form-control @error('productPhoto') is-invalid @enderror" type="file" id="formFile" name="productPhoto" value="{{old('productPhoto', $product->photo)}}">
                    @error('productPhoto')
                    <div class="invalid-feedback">
                        {{ $message }} 
                    </div>
                @enderror
                </div>

                <button type="submit" class="btn btn-outline-secondary mt-4">Update</button>

            </div>
        </div>
    </form>
    
@endsection