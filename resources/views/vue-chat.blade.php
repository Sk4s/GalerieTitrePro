@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gallery vueChat</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="css/thumbnail.css">

</head>
<body>

<div class="container gallery-container-vueChat">

    <h1>vueChat</h1>

    <p class="page-description text-center"><a href="https://github.com/HanP77/vueChat" target="_blank">https://github.com/HanP77/vueChat</a></p>
    
    <div class="tz-gallery">

        <div class="row">

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="vueChat/login.png">
                        <img src="vueChat/login.png" alt="Sample">
                    </a>
                    <div class="caption">
                        <h3>Login</h3>
                        <!-- <p>...</p> -->
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="vueChat/register.png">
                        <img src="vueChat/register.png" alt="Sample">
                    </a>
                    <div class="caption">
                        <h3>Register</h3>
                        <!-- <p>...</p> -->
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="vueChat/home.png">
                        <img src="vueChat/home.png" alt="Sample">
                    </a>
                    <div class="caption">
                        <h3>Home</h3>
                        <!-- <p>...</p> -->
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="vueChat/user-list.png">
                        <img src="vueChat/user-list.png" alt="Sample">
                    </a>
                    <div class="caption">
                        <h3>User List</h3>
                        <!-- <p>...</p> -->
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="vueChat/user-detail.png">
                        <img src="vueChat/user-detail.png" alt="Sample">
                    </a>
                    <div class="caption">
                        <h3>User Detail</h3>
                        <!-- <p>...</p> -->
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="vueChat/message-list.png">
                        <img src="vueChat/message-list.png" alt="Sample">
                    </a>
                    <div class="caption">
                        <h3>Message List</h3>
                        <!-- <p>...</p> -->
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="vueChat/message-detail.png">
                        <img src="vueChat/message-detail.png" alt="Sample">
                    </a>
                    <div class="caption">
                        <h3>Message Detail</h3>
                        <!-- <p>...</p> -->
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="vueChat/send-message.png">
                        <img src="vueChat/send-message.png" alt="Sample">
                    </a>
                    <div class="caption">
                        <h3>Send Message</h3>
                        <!-- <p>...</p> -->
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="vueChat/profile-edit.png">
                        <img src="vueChat/profile-edit.png" alt="Sample">
                    </a>
                    <div class="caption">
                        <h3>Profile Edit</h3>
                        <!-- <p>...</p> -->
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="vueChat/create-product.png">
                        <img src="vueChat/create-product.png" alt="Sample">
                    </a>
                    <div class="caption">
                        <h3>Create Product</h3>
                        <!-- <p>...</p> -->
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="vueChat/product-list.png">
                        <img src="vueChat/product-list.png" alt="Sample">
                    </a>
                    <div class="caption">
                        <h3>Product List</h3>
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