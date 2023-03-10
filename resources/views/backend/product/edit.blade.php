@extends('backend.master')
@section('contain')
<div class="container p-3">
    <div class="card-header">
        Product Edit
    </div>
    <div class="card-body">
        <form action="{{route('product_update', $data->id)}}" method="post" enctype="multipart/form-data">
            @csrf

            {{-- name --}}
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="exampleFormControlInput1">Product Name</label>
                    <input type="text" name="name" class="form-control"  placeholder="Enter Product Name">
                </div>
                {{-- Sub Category --}}
                <div class="form-group mb-3">
                    <label for="exampleFormControlSelect1">Sub Category</label>
                    <select class="form-control"  name="sub_category"id="exampleFormControlSelect1">
                        <option >Select</option>
                        <option value="Mouse">Mouse</option>
                      <option value="Pinter">Pinter</option>
                      <option value="Ram">Ram</option>
                      <option value="Motherboard">Motherboard</option>
                      <option value="Harddex">Harddex</option>
                    </select>
                  </div>
                  {{-- Code --}}
                  <div class="form-group mb-3">
                    <label for="exampleFormControlInput1">Code</label>
                    <input type="text" name="code" class="form-control" id="exampleFormControlInput1" placeholder="Code">
                  </div>
                  {{-- Price --}}
                  <div class="form-group mb-3">
                    <label for="exampleFormControlInput1">Price</label>
                    <input type="text" name="price" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Price">
                  </div>

                  <div class="mb-3">
                    <label for="formFileSm" class="form-label">Small file input example</label>
                    <img width="100" height="50" src="{{asset($data->image)}}" alt="" srcset="">
                    <input class="form-control form-control-sm" name="image" id="formFileSm" type="file">
                  </div>

                  <button type="submit" class="btn btn-info">Update</button>
            </div>
          </form>

    </div>
</div>

    </div>

</div>
@endsection
