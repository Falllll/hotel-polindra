<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

<head>
    <title>Daftar</title>
</head>


<div class="container">
    <div class="card bg-light">
    <article class="card-body mx-auto" style="max-width: 400px;">
	    <h4 class="card-title mt-3 text-center">
            <a href="{{url ('/')}}">Grand Trisula Hotel</a>
        </h4>
	    <p class="text-center">Get started with your free account</p>
        <form action="{{route('simpanregister')}}" method="post">
            {{ csrf_field() }}
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
            </div>
            <input name="name" class="form-control" placeholder="Full name" type="text" autocomplete="off" required>
        </div> <!-- form-group// -->
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
            </div>
            <input name="email" class="form-control" placeholder="Email address" type="email" required>
        </div> <!-- form-group// -->
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
            </div>
            <input class="form-control" name="password" placeholder="Create password" type="password" required>
        </div> <!-- form-group// -->                                    
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block"> Create Account  </button>
        </div> <!-- form-group// -->      
        <p class="text-center">Have an account? <a href="{{url ('/login')}}">Log In</a> </p>                                                                 
    </form>
    </article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@include('sweet::alert')