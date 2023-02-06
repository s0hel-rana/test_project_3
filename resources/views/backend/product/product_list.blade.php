@extends('backend.master')
@section('contain')
<div class="card mb-4">
    <div class="card-header">
        Product List
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Sub Category</th>
                    <th>Code</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Action</th>



                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Sub Category</th>
                    <th>Code</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Action</th>

                </tr>
            </tfoot>
            <tbody>
                @foreach($c_list as $data)
					<tr>

						<td>{{$loop->iteration}}</td>
						<td>{{$data->name}}</td>
                        <td>{{$data->sub_category}}</td>
						<td>{{$data->code}}</td>
                        <td>{{$data->image}}</td>
                        <td>{{$data->price}}</td>

                        <td>
							{{-- <a href="" class="btn btn-info btn-xs" > <i class="fas fa-pencil-alt"></i></a>
							<a href="" class="btn btn-danger btn-xs" > <i class="fas fa-trash-alt"></i></a> --}}
                            <form action="" method="post">
                                {{-- {{ route('delete')}}" id="delete" --}}
                                @csrf
                            <a href="" class="btn btn-info btn-xs" > <i class="fas fa-pencil-alt"></i></a>
                            {{-- {{ route('category_edit',$data->id)}} --}}
                                <input type="hidden" name="category_id" value="{{ $data->id }}">
                                <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure, You want to delete this?')">
                            </form>

                    </td>
                    </tr>
					@endforeach
					</tbody>
            </tbody>
        </table>

    </div>
</div>
@endsection

