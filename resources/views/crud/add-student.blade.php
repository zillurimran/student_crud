@extends('crud.master')
@section('content')
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="card mt-5">
                            <div class="card-header">
                                <h3>Add Student</h3>
                            </div>
                            <div class="card-body">
                                <form action="{{route('new.student')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label  class="form-label">Student Name</label>
                                        <input type="text" class="form-control" name="s_name">
                                    </div>
                                    <div class="mb-3">
                                        <label  class="form-label">Phone</label>
                                        <input type="text" class="form-control" name="phone">
                                    </div>
                                    <div class="mb-3">
                                        <label  class="form-label">Email</label>
                                        <input type="text" class="form-control" name="email">
                                    </div>

                                    <div class="mb-3">
                                        <label  class="form-label ">Department ID</label>
                                         <select name="d_id" id="" class="form-control form-select">
                                             @foreach($departments as $department)
                                            <option value="{{$department->id}}">{{$department->d_name}}</option>
                                             @endforeach
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label  class="form-label">Section Id</label>
                                        <select name="s_id" id="" class="form-control form-select">
                                            @foreach($sections as $section)
                                                <option value="{{$section->id}}">{{$section->sec_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label  class="form-label"> Address</label>
                                        <input type="text" class="form-control" name="address">
                                    </div>
                                    <div class="mb-3">
                                        <label  class="form-label">Image</label>
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                    <div class="mb-3">

                                        <input type="submit" class="form-control btn btn-danger" value="submit">
                                    </div>
                                 </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
