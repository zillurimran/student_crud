@extends('crud.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="card mt-5">
                    <div class="card-header">
                        <h3>Manage Student</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Sl</th>
                                <th>Student Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Dept id</th>
                                <th>Dept Name</th>
                                <th>Sec id</th>
                                <th>Sec Name</th>
                                <th>Address</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            @php $i=1 @endphp
                            @foreach($students as $student)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$student->s_name}}</td>
                                <td>{{$student->phone}}</td>
                                <td>{{$student->email}}</td>
                                <td>{{$student->d_id}}</td>
                                <td>{{$student->d_name}}</td>
                                <td>{{$student->s_id}}</td>
                                <td>{{$student->sec_name}}</td>
                                <td>{{$student->address}}</td>
                                <td>
                                    <img src="{{$student->image}}" alt="" height="50px" width="50px">
                                </td>
                                <td class="d-flex">
                                    <a href="{{route('edit.student',[ 'id'=> $student->id ])}}" class="btn btn-warning mx-1" style="width:40%">Edit</a>

                                    <!-- <a href="{{route('delete.student',[ 'id'=>$student->id])}}" class="btn btn-danger">Delete</a> -->


                                    <form action="{{route('delete.student')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="student_id" value="{{ $student->id }}">
                                        <input type="submit" class="btn btn-danger" value="Delete" >
                                    </form>


                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
