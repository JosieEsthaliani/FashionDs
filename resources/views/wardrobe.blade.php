@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center my-5">
        <p class="txtPageTitle">Wardrobe</p>
    </div>
    <div class="row justify-content-center my-5 d-flex justify-content-end">
        <div class="col-md-6 homeText ms-auto">
            <button type="button" onclick="window.location='/upload'" class="btn tombol3">add wardrobe</button>
        </div>
        <div class="col-md-6 homeText ms-auto">
            <div class="row justify-content-center d-flex justify-content-end">
                <div class="col-md-3 homeText ">
                    <!-- <div class="dropdown show">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Type of Category
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Casual</a>
                            <a class="dropdown-item" href="#">Formal</a>
                            <a class="dropdown-item" href="#">Beach</a>
                            <a class="dropdown-item" href="#">Sport</a>
                        </div>
                    </div> -->
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                            Type of clothes
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Casual</a>
                            <a class="dropdown-item" href="#">Formal</a>
                            <a class="dropdown-item" href="#">Beach</a>
                            <a class="dropdown-item" href="#">Sport</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 homeText ">
                    <!-- <div class="dropdown show dropd">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Type of clothes
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Top</a>
                            <a class="dropdown-item" href="#">Pants</a>
                            <a class="dropdown-item" href="#">Shorts</a>
                        </div>
                    </div> -->
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                            Type of clothes
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
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
        <p class="wardrobe"></p>
        <iframe src="https://drive.google.com/embeddedfolderview?id=1z11wD_z0VfwqhmJgApexXME1RSomwsYp#grid" style="width:100%; height:1000px; border:-1px;"></iframe>
    </div>
</div>
@endsection