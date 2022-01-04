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

        <div class="container mt-4">

            <form method="POST" enctype="multipart/form-data" id="upload-image" action="{{ url('upload-image') }}">

                <div class="row">

                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="file" name="image" placeholder="Choose image" id="image">
                            @error('image')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12 mb-2">
                        <img id="preview-image-before-upload" src="https://www.riobeauty.co.uk/images/product_image_not_found.gif" alt="preview image" style="max-height: 250px;">
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function(e) {


                $('#image').change(function() {

                    let reader = new FileReader();

                    reader.onload = (e) => {

                        $('#preview-image-before-upload').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(this.files[0]);

                });

            });
        </script>
    </div>
</div>


</div>

@endsection