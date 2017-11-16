@extends('_templates/template-signed')

@section('content')
<div class="container">
  <form action="{{ route('courses.store') }}" method="POST" class="form-signup">
    {{ csrf_field() }}
    <div class="form-group">
      <label class="sr-only" for="title">Title</label>
      <input type="text" class="form-control" id="title" placeholder="Title">
    </div>
    <div class="form-group">
      <label class="sr-only" for="description">Description course...</label>
      <textarea class="form-control" id="description" placeholder="Description course" rows="1"></textarea>
    </div>
    <div class="form-group">
      <label class="sr-only" for="requirements">Requirements...</label>
      <textarea class="form-control" id="requirements" placeholder="Requirements course" rows="2"></textarea>
    </div>
    <div class="form-group">
      <label class="sr-only" for="curriculum">Curriculum...</label>
      <textarea class="form-control" id="curriculum" placeholder="Curriculum course" rows="3"></textarea>
    </div>
    <div class="row">
      <div class="form-group col-6">
        <select id="category" class="form-control">
          <option selected>Category</option>
          <option>...</option>
        </select>
      </div>
      <div class="form-group col-6">
        <select id="subcategory" class="form-control">
          <option selected>Subategory</option>
          <option>...</option>
        </select>
      </div>
    </div>
    <p class="font-weight-bold text-muted">Date</label>
    <div class="row">
      <div class="form-group col-5">
        <select id="month" class="form-control">
          <option selected>Month</option>
          <option>...</option>
        </select>
      </div>
      <div class="form-group col-3">
        <input type="number" class="form-control" id="day" placeholder="Day">
      </div>
      <div class="form-group col-4">
        <input type="number" class="form-control" id="year" placeholder="Year">
      </div>
    </div>
    <div class="row">
      <p class="font-weight-bold text-muted col-6">Author</p>
      <p class="text-success text-right col-6"><i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i></p>
    </div>
    <div class="row">
      <div class="form-group col-md-6">
        <label class="sr-only" for="name">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Name">
      </div>
      <div class="form-group col-md-6">
        <label class="sr-only" for="lastname">Lastname</label>
        <input type="text" class="form-control" id="lastname" placeholder="Lastname">
      </div>
    </div>
    <button class="btn btn-lg btn-outline-success btn-block" type="submit">Add course</button>
  </form>
</div>
@endsection
