@extends('layouts.app', [
    'title' => 'Brands list'
])

@section('content')
    <section class="tables">
        <div class="container-fluid">
            @include('layouts.messages')
            <div class="row">
                <div class="col-lg-12">
                    <a href="{{ route('brands.create') }}" class="btn btn-success mb-2">Create Brand</a>

                    <div class="card">
                        <div class="card-close">
                            <div class="dropdown">
                                <button type="button" id="closeCard2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                <div aria-labelledby="closeCard2" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                            </div>
                        </div>
                        <div class="card-header d-flex align-items-center">
                            <h3 class="h4">Brands List</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($brands as $brand)
                                        <tr>
                                            <th scope="row">{{ $brand->id }}</th>
                                            <td>{{$brand->title}}</td>
                                            <td>
                                                <a href="{{ route('brands.edit', $brand->id) }}" class="btn btn-info">Edit</a>
                                            </td>
                                            <td>
                                                <form onclick="this.submit()" action="{{ route('brands.destroy', $brand->id) }}" method="post" class="btn btn-danger">
                                                    @csrf
                                                    @method('delete')
                                                    Delete
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
