@extends('layouts.app', [
    'title' => 'Products Create'
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
                            <h3 class="h4">Create Product</h3>
                        </div>
                        <div class="card-body">
                            <p>Create New Product</p>
                            <form action="{{ route('products.store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label class="form-control-label">Title</label>
                                    <input type="text" name="title" placeholder="Title" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Code</label>
                                    <input type="text" name="code" placeholder="Code" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Count</label>
                                    <input type="text" name="count" placeholder="Count" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Color</label>
                                    <select  name="color" class="form-control">
                                        @foreach($colors as $color)
                                            <option value="{{$color->id}}">{{$color->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Category</label>
                                    <select  name="category" class="form-control">
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Brand</label>
                                    <select  name="brand" class="form-control">
                                        @foreach($brands as $brand)
                                        <option value="{{$brand->id}}">{{$brand->title}}</option>
                                        @endforeach
                                    </select>
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
