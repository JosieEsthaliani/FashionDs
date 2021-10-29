@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="row justify-content-center my-5">
    <div class="col-md-6">
      <img src="{{ asset('img/home.jpg') }}" class="mx-auto d-block" style="width:50%">
    </div>
    <div class="col-md-6 homeText ms-auto">
      <p class="font-weight-bold">Help You With your</p>
      <p class="font-weight-bold">Fashion Needs</p>
    </div>
  </div>
  <div class="row bg-image d-flex justify-content-center align-items-center" style="
    background-image: url('img/homeCol.jpg');
    height: 100vh; background-size: cover;">
    <p class="txtPageTitle ">Categorical Recommendation</p>
    <div class="col-md-6 homeText ms-auto">
      <div class="row">
        <button type="button" class="btn tombol2">Primary</button>
      </div>
      <div class="row">
        <button type="button" class="btn tombol2">Primary</button>
      </div>
    </div>
    <div class="col-md-6 homeText ms-auto">
      <div class="row">
        <button type="button" class="btn tombol2">Primary</button>
      </div>
      <div class="row">
        <button type="button" class="btn tombol2">Primary</button>
      </div>
    </div>
  </div>
</div>

@endsection