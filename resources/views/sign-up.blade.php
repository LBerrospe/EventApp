@extends('_templates/template-signed')

@section('content')
<div class="container">
  <form class="form-signup">
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
    <div class="form-group">
      <label class="sr-only" for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="row">
      <div class="form-group col-md-6">
        <label class="sr-only" for="inputPassword4">Password</label>
        <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
      </div>
      <div class="form-group col-md-6">
        <label class="sr-only" for="inputPassword4">Password</label>
        <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
      </div>
    </div>
    <label class="sr-only">Birthday</label>
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
      <div class="form-group col-md-6">
        <label class="sr-only" for="phone">Phone</label>
        <input type="tel" class="form-control" id="phone" placeholder="Phone">
      </div>
      <div class="form-group col-md-6">
        <label class="sr-only" for="gender">Gender</label>
        <select id="gender" class="form-control">
          <option selected>I am...</option>
          <option>Female</option>
          <option>Male</option>
          <option>Other</option>
          <option>Rather not say</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="sr-only" for="inputAddress">Address</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
    </div>
    <div class="form-group">
      <label class="sr-only" for="inputAddress2">Address 2</label>
      <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
    </div>
    <div class="row">
      <div class="form-group col-md-6">
        <label class="sr-only" for="inputCity">City</label>
        <input type="text" class="form-control" id="inputCity" placeholder="City">
      </div>
      <div class="form-group col-md-4">
        <label class="sr-only" for="inputState">State</label>
        <select id="inputState" class="form-control">
          <option selected>State</option>
          <option>...</option>
        </select>
      </div>
      <div class="form-group col-md-2">
        <label class="sr-only" for="inputZip">Zip</label>
        <input type="text" class="form-control" id="inputZip" placeholder="Zip">
      </div>
    </div>
    <div class="form-group">
      <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox"> I agree to terms
        </label>
      </div>
    </div>
    <button class="btn btn-lg btn-outline-success btn-block" type="submit">signin in</button>
  </form>
</div>
@endsection
