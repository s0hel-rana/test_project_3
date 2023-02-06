@extends('backend.master')
@section('contain')
<div class="container pt-3">
    <div class="card">
        <div class="card-header">
         Edit Category
          </div>
        <div class="card-body">
            <form action="{{route('category_update',$data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="exampleFormControlInput1">Category Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name',$data->name)}}" placeholder="Category Name"
                        >


                        @error('name')
                        <p class="invalid-feedback">{{ $message}}</p>

                        @enderror

                      </div>
                      {{-- <div class="form-group mb-3">
                        <label for="exampleFormControlSelect1">Select Category</label>
                        <select class="form-control" name="select_cat" id="exampleFormControlSelect1">
                          <option value="Monitor">Monitor</option>
                          <option value="Printor">Printor</option>
                          <option value="Motherboard">Motherboard</option>
                          <option value="Mouse">Mouse</option>
                          <option value="Ram">Ram</option>
                        </select>
                      </div> --}}

                      <div class="form-group mb-3">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" value="{{ old('description',$data->description)}}" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                        @error('description')
                        <p class="invalid-feedback">{{ $message}}</p>
                        @enderror

                      </div>

                      <button type="submit" class="btn btn-info">Update</button>

                </div>

              </form>

        </div>
    </div>
</div>
@endsection

