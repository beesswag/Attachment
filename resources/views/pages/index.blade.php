<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/frontend/css/main.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/scroll-out/dist/scroll-out.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-md">
        <a class="navbar-brand" href="/index">{{config('app.name')}}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span><img src="{{asset('/frontend/img/menu.png')}}" alt=""></span>
            <!--<span class="navbar-toggler-icon"></span>-->
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="/register">Register</a></li>
                <li class="nav-item"><a class="nav-link" href="/about">About Us</a></li>    
            </ul>
        </div>  
    </nav>
    
    <div class="hero">
        <div class="col-lg-12 text-center">
            <h1>myStudyBuddy</h1>
            <a href="/login"><button id="login">Login</button></a>
            <a href="/register"><button id="register">Become A StudBud</button></a>
        </div>
        
    </div>
        

    <section id="sec-2">
        <div class="container">
            
            <div class="row">
                <div class="col-xl-6">
                    <h3 data-scroll>What <br> is <br> myStudyBuddy?</h3>
                </div>
                <div class="col-md-6">
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum voluptates velit alias a 
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum voluptates velit alias a
                    </p>
                    <img class="img-fluid rounded-circle" src="{{asset('/frontend/img/1.jpg')}}" alt="">
                </div>
            </div>
            
            <div class="row" data-scroll>
                <div class="col-lg-12 text-center"><h1 style="padding:50px;" data-scroll>Our Content</h1></div>
                <div id="course-grid" class="col-lg-12">
                    <div id="c1"><a href=""><span></span></a><p>Programming</p></div>
                    <div id="c2"><a href=""><span></span></a><p>calculus</p></div>
                    <div id="c3"><a href=""><span></span></a><p>accounting</p></div>
                </div>
                
            </div>

        </div>
    </section>
    
    
    




    <script>
        ScrollOut();
    </script>
</body>
</html>