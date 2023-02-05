@extends('backend.master')
@section('contain')
<div class="container pt-3">
    <div class="card">
        <div class="card-header">
        Customer List
          </div>
        <div class="card-body">
            <form action="{{route('customer_store')}}" method="Post">
                @csrf

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="exampleFormControlInput1">Name</label>
                        <input type="text" name="name" class="form-control"  placeholder="Enter Your Name">
                      </div>
                      <div class="form-group mb-3">
                        <label for="exampleFormControlSelect1">Status</label>
                        <select class="form-control" name="status" id="exampleFormControlSelect1">
                          <option value="1">Active</option>
                          <option value="2">Deactive</option>
                        </select>
                      </div>
                      <div class="form-group mb-3">
                        <label for="exampleFormControlSelect1">select District</label>
                        <select class="form-control"  name="district"id="exampleFormControlSelect1">
                            <option >Select</option>

                            <option value="dhaka">Dhaka</option>
                          <option value="khulna">KHulna</option>
                          <option value="sherpur">Sherpur</option>
                          <option value="jamalpur">Jamalpur</option>
                          <option value="mymensing">Mymensing</option>
                        </select>
                      </div>
                      <div class="form-group mb-3">
                        <label for="exampleFormControlInput1">Code</label>
                        <input type="text" name="code" class="form-control" id="exampleFormControlInput1" placeholder="Code">
                      </div>
                      <button type="submit" class="btn btn-info">Submit</button>
                </div>
              </form>
        </div>
      </div>

</div>

@endsection

