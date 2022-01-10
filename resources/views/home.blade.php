@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="row justify-content-center my-5">
    <div class="col-md-6">
      <img src="{{ asset('img/home.jpg') }}" class="mx-auto d-block" style="width:50%">
    </div>
    <div class="col-md-6 homeText homeTextPos">
      <p class="font-weight-bold ">Help You With your</p>
      <p class="font-weight-bold ">Fashion Needs</p>
    </div>
  </div>
</div>
<div class="container-fluid" style="
    background-image: url('img/homeCol.jpg');
    height: 100vh; background-size: cover;">
<div class="row bg-image justify-content-center align-items-center p-categoriHome" >
    <div class="col py-5">
      <p class="txtCategHome pt-5 mt-5">Categorical Recommendation</p>
    </div>
    
    
  </div>

  <div class="row"> 
    <div class="col"></div>
    <div class="col-md-4 homeText ">
        <div class="row">
          <div class="col">
            <button type="button" class="btn tombol2 my-3" onclick="window.location='/rescasual'">Casual</button>
          </div>
          
        </div>
        <div class="row">
          <div class="col">
            <button type="button" class="btn tombol2 my-3" onclick="window.location='/resformal'">Formal</button>
          </div>
          
        </div>
      </div>
      <div class="col-md-4 homeText  ">
        <div class="row">
          <div class="col">
            <button type="button" class="btn tombol2 my-3" onclick="window.location='/resbeach'">Beach</button>
          </div>
          
        </div>
        <div class="row">
          <div class="col">
            <button type="button" class="btn tombol2 my-3" onclick="window.location='/ressport'">Sport</button>
          </div>
          
        </div>
      </div>
      <div class="col"></div>
    </div>  
</div>

@endsection