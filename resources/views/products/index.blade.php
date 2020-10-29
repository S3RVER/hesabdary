@extends('layouts.app', [
    'title' => 'Products list'
])

@section('content')
    <section class="tables">
        <div class="container-fluid">
            @include('layouts.messages')
            <div class="row">
                <div class="col-lg-12">
                    <a href="{{ route('products.create') }}" class="btn btn-success mb-2">Create Product</a>

                    <div class="card">
                        <div class="card-close">
                            <div class="dropdown">
                                <button type="button" id="closeCard2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                <div aria-labelledby="closeCard2" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                            </div>
                        </div>
                        <div class="card-header d-flex align-items-center">
                            <h3 class="h4">Products List</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Code</th>
                                        <th>Color</th>
                                        <th>Category</th>
                                        <th>Brand</th>
                                        <th>Count</th>
                                        <th>User</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $product)
                                        <tr>
                                            <th scope="row">{{ $product->id }}</th>
                                            <td>{{$product->title}}</td>
                                            <td>{{$product->code}}</td>
                                            <td>{{$product->color->name}}</td>
                                            <td>{{$product->category->title}}</td>
                                            <td>{{$product->brand->title}}</td>
                                            <td>
                                                <a href="{{ route('products.decrement', $product->id) }}" class="btn btn-danger btn-sm">-</a>
                                                {{isset($product->productcount->count) ? $product->productcount->count : 0 }}
                                                <a href="{{ route('products.increment', $product->id) }}" class="btn btn-success btn-sm">+</a>
                                            </td>
                                            <td>{{$product->user->user_id}}</td>

                                            <td>
                                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-info">Edit</a>
                                            </td>
                                            <td>
                                                <form onclick="this.submit()" action="{{ route('products.destroy', $product->id) }}" method="post" class="btn btn-danger">
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
