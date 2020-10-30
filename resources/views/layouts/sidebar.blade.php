<nav class="side-navbar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
        <div class="avatar"><img src="{{ asset('distribution/img/avatar-1.jpg') }}" alt="..." class="img-fluid rounded-circle"></div>
        <div class="title">
            <h1 class="h4">{{Auth::user()->username}}</h1>
            <p>Web Designer</p>
        </div>
    </div>
    <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
    <ul class="list-unstyled">
        <li class="active"><a href="{{ route('home') }}"> <i class="icon-home"></i>Home </a></li>
        <li><a href="{{ route('products.index') }}"> <i class="icon-grid"></i>Products </a></li>
        <li><a href="{{ route('categories.index') }}"> <i class="icon-grid"></i>Categories </a></li>
        <li><a href="{{ route('colors.index') }}"> <i class="icon-grid"></i>Colors </a></li>
        <li><a href="{{ route('brands.index') }}"> <i class="icon-grid"></i>Brands </a></li>
    </ul>
</nav>
