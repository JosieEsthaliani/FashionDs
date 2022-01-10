@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center my-5">
        <div class="col">
            <p class="txtPageTitle">Here's your recomendation</p>
        </div>
    </div>

    <div class="row justify-content-center my-5">
        <button type="button" onclick="window.location='/resbeach'" class="btn tombol4">Get another recommendation</button>
    </div>


</div>

@endsection