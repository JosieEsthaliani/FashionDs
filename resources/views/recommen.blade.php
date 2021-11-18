@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center my-5">
        <p class="txtPageTitle">Recommendation</p>
    </div>
    <div class="row justify-content-center my-5">
        <p class="txtRecom">Pick Your Category</p>
        <div class="row">
            <div class="col-md-3">
                <div class="custom-control custom-checkbox image-checkbox">
                    <input type="checkbox" class="custom-control-input" id="ck1a">
                    <label class="custom-control-label" for="ck1a">
                        <img src="{{ asset('img/701.jpg') }}" alt="#" class="img-fluid recomPic">
                    </label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="custom-control custom-checkbox image-checkbox">
                    <input type="checkbox" class="custom-control-input" id="ck1b">
                    <label class="custom-control-label" for="ck1b">
                        <img src="{{ asset('img/349.jpg') }}" alt="#" class="img-fluid recomPic">
                    </label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="custom-control custom-checkbox image-checkbox">
                    <input type="checkbox" class="custom-control-input" id="ck1c">
                    <label class="custom-control-label" for="ck1c">
                        <img src="{{ asset('img/60030.jpg') }}" alt="#" class="img-fluid recomPic">
                    </label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="custom-control custom-checkbox image-checkbox">
                    <input type="checkbox" class="custom-control-input" id="ck1d">
                    <label class="custom-control-label" for="ck1d">
                        <img src="{{ asset('img/185.jpg') }}" alt="#" class="img-fluid recomPic">
                    </label>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center my-5">
        <p class="txtRecom">Upload Your Image</p>
    </div>


</div>

@endsection