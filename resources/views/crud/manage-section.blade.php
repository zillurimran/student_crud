
@extends('crud.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <h3>Manage Section</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Sl</th>
                                <th>Section Name</th>


                                {{--                                <th>Action</th>--}}
                            </tr>
                            @php $i=1 @endphp
                            @foreach($sections as $section)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$section->sec_name}}</td>


                                    {{--                                    <td class="d-flex">--}}
                                    {{--                                        <a href="{{route('edit.section',[ 'id'=> $section->id ])}}" class="btn btn-warning mx-1">Edit</a>--}}

                                    {{--                                   --}}


                                    {{--                                        <form action="{{route('delete.section')}}" method="post">--}}
                                    {{--                                            @csrf--}}
                                    {{--                                            <input type="hidden" name="student_id" value="{{ $section->id }}">--}}
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

