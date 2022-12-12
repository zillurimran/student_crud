@extends('crud.master')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card mt-5">
                        <div class="card-header">
                            <h3>Add Section</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{route('new.section')}}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label  class="form-label">Section Name</label>
                                    <input type="text" class="form-control" name="sec_name">
                                </div>


                                <div class="mb-3">

                                    <input type="submit" class="form-control btn btn-danger" value="Submit">
                                </div>



                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


