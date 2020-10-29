@if(!empty(session('success')))
    <div class="alert alert-info">{{ session('success') }}</div>
@endif

@if(!empty(session('fail')))
    <div class="alert alert-danger">{{ session('fail') }}</div>
@endif


@if($errors->any())
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{ $error }}
            <br>
        </div>
    @endforeach
@endif