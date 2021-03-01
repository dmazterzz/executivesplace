  
@extends('layout.app')

@section('title', 'View User')

@section('content')

<div class="container">

<div class="row">
        <div class="col-lg-12">
          <form method="get" action="/convertCurrency/{{ $user->id }}">
            {!! csrf_field() !!}
            <div class="field">
                <label class="label">Name</label>
                <div class="control">
                    <input class="input" type="text"  name="name" value="{{$user->id}}"  placeholder="Name">
                </div>
            </div>
            <div class="field">
                <label class="label">Email</label>
                <div class="control">
                    <input class="input" type="email"  name="email"   value="{{$user->email}}"  placeholder="email">
                </div>
            </div>

            <div class="field">
                <label class="label">Rate</label>
                <div class="control">
                    <input class="input" type="text"  name="rate"   value="{{$user->rate}}"  placeholder="rate">
                </div>
            </div>
            <div class="field">
                <label class="label">Current Currency</label>
                <div class="control">
                    <div class="select">
                    <select name="currency">
                    <option value="GBP" {{$user->currency == "GBP"  ? 'selected' : ''}}>GBP</option>
                        <option value="USD" {{$user->currency == "USD"  ? 'selected' : ''}}>USD</option>
                        <option value="EUR" {{$user->currency == "EUR"  ? 'selected' : ''}}>EUR</option>
                    </select>
                    </div>
                </div>
            </div>

            <div class="field">
                <label class="label">Convert to Currency</label>
                <div class="control">
                    <div class="select">
                    <select name="tocurrency">
                    <option value="GBP">GBP</option>
                        <option value="USD">USD</option>
                        <option value="EUR">EUR</option>
                    </select>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Convert</button>
          </form>
        </div>
      </div>

      <pre>
        {{$converted ?? ''}}
      </pre>

@endsection