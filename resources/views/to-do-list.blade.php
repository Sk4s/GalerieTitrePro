@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gallery ToDoList</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="css/thumbnail.css">

</head>
<body>

<div class="container gallery-container-ToDoList">

    <h1>ToDoList</h1>

    <p class="page-description text-center"><a href="https://github.com/KBSimplon/ToDoList" target="_blank">https://github.com/KBSimplon/ToDoList</a></p>
    
    <div class="tz-gallery">

        <div class="row">

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="ToDoList/home.png">
                        <img src="ToDoList/home.png" alt="Sample">
                    </a>
                    <div class="caption">
                        <h3>Home</h3>
                        <!-- <p>...</p> -->
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="ToDoList/register.png">
                        <img src="ToDoList/register.png" alt="Sample">
                    </a>
                    <div class="caption">
                        <h3>Register</h3>
                        <!-- <p>...</p> -->
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="ToDoList/login.png">
                        <img src="ToDoList/login.png" alt="Sample">
                    </a>
                    <div class="caption">
                        <h3>Login</h3>
                        <!-- <p>...</p> -->
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="ToDoList/profile.png">
                        <img src="ToDoList/profile.png" alt="Sample">
                    </a>
                    <div class="caption">
                        <h3>Profile</h3>
                        <!-- <p>...</p> -->
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="ToDoList/update.png">
                        <img src="ToDoList/update.png" alt="Sample">
                    </a>
                    <div class="caption">
                        <h3>Update</h3>
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