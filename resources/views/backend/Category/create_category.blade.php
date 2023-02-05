@extends('backend.master')
@section('contain')
<div class="container pt-3">
    <div class="card">
        <div class="card-header">
         Create Category
          </div>
        <div class="card-body">
            <form action="{{route('category_store')}}" method="post">
                @csrf
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="exampleFormControlInput1">Category Name</label>
                        <input type="text" name="name" class="form-control"placeholder="Category Name">
                      </div>
                      <div class="form-group mb-3">
                        <label for="exampleFormControlSelect1">Select Category</label>
                        <select class="form-control" name="select_cat" id="exampleFormControlSelect1">
                          <option value="Monitor">Monitor</option>
                          <option value="Printor">Printor</option>
                          <option value="Motherboard">Motherboard</option>
                          <option value="Mouse">Mouse</option>
                          <option value="Ram">Ram</option>
                        </select>
                      </div>

                      <div class="form-group mb-3">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>

                      <button type="submit" class="btn btn-info">Submit</button>

                </div>

              </form>

        </div>
    </div>
</div>
@endsection

