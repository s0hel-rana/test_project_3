@extends('backend.master')
@section('contain')
<div class="card mb-4">
    <div class="card-header">
        Customer List
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>District</th>
                    <th>Code</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>District</th>
                    <th>Code</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach($c_list as $data)
					<tr>

						<td>{{$loop->iteration}}</td>
						<td>{{$data->name}}</td>
                        <td>{{$data->status== 1 ? 'Active':'Deactive'}}</td>
						<td>{{$data->select_distric}}</td>
						<td>{{$data->code}}</td>
                        <td>


                            {{-- <a href="" class="btn btn-danger btn-xs" > <i class="fas fa-trash-alt"></i></a> --}}
                            <form action="{{ route('delete')}}" id="delete" method="post">
                                @csrf
                                <a href="" class="btn btn-info btn-xs" > <i class="fas fa-pencil-alt"></i></a>
                                <input type="hidden" name="customer_id" value="{{ $data->id }}">
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

