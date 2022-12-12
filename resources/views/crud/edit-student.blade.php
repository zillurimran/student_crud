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

                            <form action="{{route('update.student')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <input type="hidden" name="stu_id" value="{{$student->id}}">
                                    <label  class="form-label">Student Name</label>
                                    <input type="text" class="form-control" name="s_name" value="{{$student->s_name}}">
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Phone</label>
                                    <input type="text" class="form-control" name="phone" value="{{$student->phone}}">
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Email</label>
                                    <input type="text" class="form-control" name="email" value="{{$student->email}}">
                                </div>

                                <div class="mb-3">
                                    <label  class="form-label ">Department ID</label>
                                    <select name="d_id" id="" class="form-select">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label  class="form-label">Section Id</label>
                                    <select name="s_id" id="" class="form-select">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label"> Address</label>
                                    <input type="text" class="form-control" name="address" value="{{$student->address}}">
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Image</label>
                                    <input type="file" class="form-control" name="image">
                                </div>

                                <div class="mb-3">
                                    <img src="{{asset($student->image)}}" alt="" height="50px" width="50px">
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

