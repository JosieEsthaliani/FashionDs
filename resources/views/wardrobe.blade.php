@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center my-5">
        <p class="txtPageTitle">Wardrobe</p>
    </div>
    <div class="row justify-content-center my-5 d-flex justify-content-end">
        <div class="col-md-6 homeText ms-auto">

        </div>
        <div class="col-md-6 homeText ms-auto">
            <div class="row justify-content-center my-5 d-flex justify-content-end">
                <div class="col-md-3 homeText ">
                    <div class="dropdown show">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Type of Category
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Casual</a>
                            <a class="dropdown-item" href="#">Formal</a>
                            <a class="dropdown-item" href="#">Beach</a>
                            <a class="dropdown-item" href="#">Sport</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 homeText ">
                    <div class="dropdown show dropd">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Type of clothes
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Top</a>
                            <a class="dropdown-item" href="#">Pants</a>
                            <a class="dropdown-item" href="#">Shorts</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center my-5">
        <p class="txtPageTitle"></p>
    </div>

</div>

@endsection