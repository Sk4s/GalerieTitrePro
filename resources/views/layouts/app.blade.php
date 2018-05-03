<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gallery</title>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="node_modules/mdbootstrap/css/mdb.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>
    html, body {
      background-color: #fff;
      color: #636b6f;
      font-family: 'Raleway', sans-serif;
      font-weight: 100;
      height: 100vh;
      margin: 0;
    }

    .full-height {
      height: 100vh;
    }

    .flex-center {
      align-items: center;
      display: flex;
      justify-content: center;
    }

    .position-ref {
      position: relative;
    }

    .top-right {
      position: absolute;
      right: 10px;
      top: 18px;
    }

    .content {
      text-align: center;
    }

    .title {
      font-size: 84px;
    }

    .links > a {
      color: #636b6f;
      padding: 0 25px;
      font-size: 12px;
      font-weight: 600;
      letter-spacing: .1rem;
      text-decoration: none;
      text-transform: uppercase;
    }

    .m-b-md {
      margin-bottom: 30px;
    }

    .fa-power-off {
          color: red;
        }

    .fa-home {
          color: LightCyan;
        }

    .glyphicon-log-in {
          color: Lime;
    }

    .glyphicon-user {
          color: LightCyan;
    }

    .flex {
      display: flex;
      justify-content: space-around;
    }

  </style>
</head>

<body>
  <nav class="navbar navbar-inverse" style="opacity: 0.8;">
    <div class="container-fluid flex">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ route('/') }}">Home</a></li>
        
        <li><a href="{{ route('espace-avatar') }}"><span class="fa fa fa-user-circle"></span> EspaceAvatar</a></li>
        <li><a href="{{ route('to-do-list') }}"><span class="fa fa-list-alt"></span> ToDoList</a></li>
        <li><a href="{{ route('gallery') }}"><span class="fa fa-photo"></span> Gallery</a></li>
        <li><a href="{{ route('social-network') }}"><span class="fa fa fa-user-circle-o"></span> SocialNetwork</a></li>
        <li><a href="{{ route('vue-chat') }}"><span class="fa fa fa-user-o"></span> vueChat</a></li>
        <li><a href="{{ route('milolib') }}"><span class="fa fa fa-user"></span> Milolib</a></li>
      </ul>
    </div>
  </nav>

  @yield('content')
</body>
</html>

