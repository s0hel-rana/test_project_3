@extends('backend.master')
@section('contain')
<div class="card mb-4">
    <div class="card-header">
        Category List
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Category Name</th>
                    <th>Category Item</th>
                    <th>Description</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>SL</th>
                    <th>Category Name</th>
                    <th>Category Item</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach($c_list as $data)
					<tr>

						<td>{{$loop->iteration}}</td>
						<td>{{$data->name}}</td>
                        <td>{{$data->select_cat}}</td>
						<td>{{$data->description}}</td>

                        <td>

							<a href="" class="btn btn-info btn-xs" > <i class="fas fa-pencil-alt"></i></a>
							<a href="" class="btn btn-danger btn-xs" > <i class="fas fa-trash-alt"></i></a>
                    </td>
                    </tr>
					@endforeach
					</tbody>
            </tbody>
        </table>

    </div>
</div>

@endsection

