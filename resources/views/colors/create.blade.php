@extends('layouts.app', [
    'title' => 'Colors list'
])

@section('content')
    <section class="forms">
        <div class="container-fluid">
            @include('layouts.messages')
            <div class="row">
                <!-- Basic Form-->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-close">
                            <div class="dropdown">
                                <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                            </div>
                        </div>
                        <div class="card-header d-flex align-items-center">
                            <h3 class="h4">Create Color</h3>
                        </div>
                        <div class="card-body">
                            <p>Create New Color</p>
                            <form action="{{ route('colors.store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label class="form-control-label">Name</label>
                                    <input type="text" name="name" placeholder="Name Color" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Color</label>
                                    <input type="text" name="color" placeholder="Code Color" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Send" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection