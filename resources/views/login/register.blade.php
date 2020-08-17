<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('login.css')}}">
    <title>Document</title>
</head>
<body>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <div class="wrapper fadeInDown">
      <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icon -->
        <div class="fadeIn first">
        </div>

        <!-- Login Form -->
        <form action="/register" method="POSt">
            @csrf
          <input type="text" id="login" class="fadeIn second" name="name" placeholder="username">
          <input type="text" id="email" class="fadeIn third" name="email" placeholder="name">
          <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
          {{-- <input type="text" id="password" class="fadeIn third" name="login" placeholder="password"> --}}
          <input type="submit" class="fadeIn fourth" value="Register">
        </form>

        <!-- Remind Passowrd -->


      </div>
    </div>
</body>
</html>
