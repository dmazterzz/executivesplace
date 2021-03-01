  
@extends('layout.app')

@section('title', 'Add New User')

@section('content')

<div class="container">
    <div class="content">
      <div class="row">
        <div class="col-md-5">
          <h3>Add New User</h3>
        </div>
        <div class="col-md-7 page-action text-right">
        </div>
      </div>

      @if($errors->any())
        <div class="alert alert-danger">
          @foreach ($errors->all() as $error)
            {{ $error }} <br/>
          @endforeach
        </div>
      @endif

      @if(Session::has('info'))
        <div class="row">
            <div class="col-md-12">
                <p class="alert alert-info">{{ Session::get('info') }}</p>
            </div>
        </div>
    @endif

      <div class="row">
        <div class="col-lg-12">
          <form method="post" action="">
            {!! csrf_field() !!}
            <div class="field">
                <label class="label">Name</label>
                <div class="control">
                    <input class="input" type="text"  name="name"   placeholder="Name">
                </div>
            </div>
            <div class="field">
                <label class="label">Email</label>
                <div class="control">
                    <input class="input" type="email"  name="email"   placeholder="email">
                </div>
            </div>

            <div class="field">
                <label class="label">Rate</label>
                <div class="control">
                    <input class="input" type="text"  name="rate"   placeholder="rate">
                </div>
            </div>
            <div class="field">
                <label class="label">Currency</label>
                <div class="control">
                    <div class="select">
                    <select name="currency">
                        <option value="GBP">GBP</option>
                        <option value="USD">USD</option>
                        <option value="EUR">EUR</option>
                    </select>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>



@endsection

