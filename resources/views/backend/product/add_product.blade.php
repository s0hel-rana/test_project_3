@extends('backend.master')
@section('contain')
<div class="container pt-3">
    <div class="card">
        <div class="card-header">
         Add Product
          </div>
        <div class="card-body">
            <form action="{{route('product_store')}}" method="Post" enctype="multipart/form-data">
                @csrf

                {{-- name --}}
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="exampleFormControlInput1">Product Name</label>
                        <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror" value="{{ old('name')}}"  placeholder="Enter Product Name">
                        @error('name')
                        <p class="invalid-feedback">{{ $message}}</p>

                        @enderror
                    </div>
                    {{-- Sub Category --}}
                    <div class="form-group mb-3">
                        <label for="exampleFormControlSelect1">Sub Category</label>
                        <select class="form-control @error('sub_category') is-invalid @enderror" value="{{ old('sub_category')}}"  name="sub_category"id="exampleFormControlSelect1">
                            <option >Select</option>
                            <option value="Mouse">Mouse</option>
                          <option value="Pinter">Pinter</option>
                          <option value="Ram">Ram</option>
                          <option value="Motherboard">Motherboard</option>
                          <option value="Harddex">Harddex</option>
                        </select>
                        @error('sub_category')
                        <p class="invalid-feedback">{{ $message}}</p>

                        @enderror
                      </div>
                      {{-- Code --}}
                      <div class="form-group mb-3">
                        <label for="exampleFormControlInput1">Code</label>
                        <input type="text" name="code" class="form-control @error('code') is-invalid @enderror" value="{{ old('code')}}" id="exampleFormControlInput1" placeholder="Code">
                        @error('code')
                        <p class="invalid-feedback">{{ $message}}</p>

                        @enderror
                      </div>

                      {{-- Price --}}
                      <div class="form-group mb-3">
                        <label for="exampleFormControlInput1">Price</label>
                        <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price')}}" id="exampleFormControlInput1" placeholder="Enter Your Price">
                        @error('price')
                        <p class="invalid-feedback">{{ $message}}</p>

                        @enderror
                      </div>

                      <div class="mb-3">
                        <label for="formFileSm" class="form-label">Small file input example</label>
                        <input class="form-control form-control-sm @error('image') is-invalid @enderror" value="{{ old('image')}}" name="image" id="formFileSm" type="file">
                        
                        @error('image  ')
                        <p class="invalid-feedback">{{ $message}}</p>

                        @enderror
                      </div>

                      <button type="submit" class="btn btn-info">Submit</button>
                </div>
              </form>

        </div>
    </div>

@endsection
