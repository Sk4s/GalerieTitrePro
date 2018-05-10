@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gallery</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="css/thumbnail.css">

</head>
<body>

<div class="container gallery-container-Gallery">

    <h1>Gallery</h1>

    <p class="page-description text-center"><a href="https://github.com/KBSimplon/Gallery" target="_blank">https://github.com/KBSimplon/Gallery</a></p>
    
    <div class="tz-gallery">

        <div class="row">

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="Gallery/home.png">
                        <img src="Gallery/home.png" alt="Sample">
                    </a>
                    <div class="caption">
                        <h3>Home</h3>
                        <!-- <p>...</p> -->
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="Gallery/gallery1.png">
                        <img src="Gallery/gallery1.png" alt="Sample">
                    </a>
                    <div class="caption">
                        <h3>Gallery 1</h3>
                        <!-- <p>...</p> -->
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="Gallery/gallery1zoom.png">
                        <img src="Gallery/gallery1zoom.png" alt="Sample">
                    </a>
                    <div class="caption">
                        <h3>Gallery 1 Zoom</h3>
                        <!-- <p>...</p> -->
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="Gallery/gallery2.png">
                        <img src="Gallery/gallery2.png" alt="Sample">
                    </a>
                    <div class="caption">
                        <h3>Gallery 2</h3>
                        <!-- <p>...</p> -->
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="Gallery/gallery2zoom.png">
                        <img src="Gallery/gallery2zoom.png" alt="Sample">
                    </a>
                    <div class="caption">
                        <h3>Gallery 2 Zoom</h3>
                        <!-- <p>...</p> -->
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="Gallery/gallery3.png">
                        <img src="Gallery/gallery3.png" alt="Sample">
                    </a>
                    <div class="caption">
                        <h3>Gallery 3</h3>
                        <!-- <p>...</p> -->
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="Gallery/gallery3zoom.png">
                        <img src="Gallery/gallery3zoom.png" alt="Sample">
                    </a>
                    <div class="caption">
                        <h3>Gallery 3 Zoom</h3>
                        <!-- <p>...</p> -->
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
</body>
</html>
@endsection