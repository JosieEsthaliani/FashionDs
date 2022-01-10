@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center my-5">
        <div class="col homeText ms-auto">
            <p class="txtPageTitle">Upload Image to Your Wardrobe</p>
        </div>
        
    </div>
    <div class="row justify-content-center my-5">
        <div class="col btn-col ms-auto">
            <button type="button" onclick="window.location='/wardrobe'" class="btn tombol4">add to wardrobe</button>
        </div>
    </div>

</div>

@endsection