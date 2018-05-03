@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gallery SocialNetwork</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="css/thumbnail.css">

</head>
<body>

<div class="container gallery-container-SocialNetwork">

    <h1>SocialNetwork</h1>

    <p class="page-description text-center">https://github.com/KBSimplon/SocialNetwork</p>
    
    <div class="tz-gallery">

        <div class="row">

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="SocialNetwork/home.png">
                        <img src="SocialNetwork/home.png" alt="Sample">
                    </a>
                    <div class="caption">
                        <h3>Home</h3>
                        <!-- <p>...</p> -->
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="SocialNetwork/register.png">
                        <img src="SocialNetwork/register.png" alt="Sample">
                    </a>
                    <div class="caption">
                        <h3>Register</h3>
                        <!-- <p>...</p> -->
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="SocialNetwork/login.png">
                        <img src="SocialNetwork/login.png" alt="Sample">
                    </a>
                    <div class="caption">
                        <h3>Login</h3>
                        <!-- <p>...</p> -->
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="SocialNetwork/profile.png">
                        <img src="SocialNetwork/profile.png" alt="Sample">
                    </a>
                    <div class="caption">
                        <h3>Profile</h3>
                        <!-- <p>...</p> -->
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="SocialNetwork/posts.png">
                        <img src="SocialNetwork/posts.png" alt="Sample">
                    </a>
                    <div class="caption">
                        <h3>Posts</h3>
                        <!-- <p>...</p> -->
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="SocialNetwork/categories.png">
                        <img src="SocialNetwork/categories.png" alt="Sample">
                    </a>
                    <div class="caption">
                        <h3>Categories</h3>
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