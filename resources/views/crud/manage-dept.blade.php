@extends('crud.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <h3>Manage Department</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Sl</th>
                                <th>Department Name</th>
                                <th>Department Code</th>

{{--                                <th>Action</th>--}}
                            </tr>
                            @php $i=1 @endphp
                            @foreach($departments as $department)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$department->d_name}}</td>
                                    <td>{{$department->d_code}}</td>

{{--                                    <td class="d-flex">--}}
{{--                                        <a href="{{route('edit.department',[ 'id'=> $department->id ])}}" class="btn btn-warning mx-1">Edit</a>--}}

{{--                                   --}}


{{--                                        <form action="{{route('delete.department')}}" method="post">--}}
{{--                                            @csrf--}}
{{--                                            <input type="hidden" name="student_id" value="{{ $department->id }}">--}}
{{--                                            <input type="submit" class="btn btn-danger" value="Delete" >--}}
{{--                                        </form>--}}


{{--                                    </td>--}}
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

