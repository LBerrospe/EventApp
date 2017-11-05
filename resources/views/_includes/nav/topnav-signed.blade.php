@extends('_includes/nav/topnav')
@section('right-content')
  <ul class="navbar-nav">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Username
        <i class="fa fa-cog" aria-hidden="true"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another</a>
        <a class="dropdown-item"  href="#">Something</a>
      </div>
    </li>
  </ul>
@endsection