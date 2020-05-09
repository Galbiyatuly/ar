

<nav   class="navbar navbar-expand-lg navbar-dark  bg-warning  fixed-top  ">
    <a style="margin-left: 250px" class="navbar-brand" href="/" ><img  style="width: 150px" src="https://s.allright.io/assets/images/logos/logo-pink-color-595e37292d67805fe6593c912db50c52.webp"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>


    <div style="margin-left: 700px" class=" collapse navbar-collapse" id="navbarNav">

        </br></br>
        <ul class="navbar-nav  mr-auto" >

            <li class="nav-item active">
                <a style="font-weight: bold" class="nav-link" href="#"><h4>Teachers</h4> <span class="sr-only">(current)</span></a>
            </li></br>
            <li class="nav-item">
                <a style="font-weight: bold" class="nav-link" href="/price" ><h4>Price</h4></a>
            </li></br>
            <li class="nav-item">
                <a style="font-weight: bold" class="nav-link" href="#"><h4>Teach process</h4></a>
            </li></br>
        </ul>

        <div>
            <img style="width: 30px" src="https://icons.iconarchive.com/icons/froyoshark/enkel/512/Telegram-icon.png">
            <img style="width: 30px" src="https://cdn3.iconfinder.com/data/icons/popular-services-brands/512/whatsapp-512.png">
            <img style="width: 30px" src="https://cdn0.iconfinder.com/data/icons/social-media-2071/100/social-06-512.png">

        </div>
        </br></br>

        @if (Route::has('login'))
            <div>
                @auth
                    <a href="{{ url('/home') }}"><h4>Dashboard</h4></a>
                @else
                    <ul class="nav navbar-nav navbar-left">
                        <a class="btn btn-primary bg-dark ember-view" href="/login"><strong>Log in</strong> </a>
                    </ul>
                @endauth
            </div>
        @endif


    </div>

</nav>
</br></br>
</br>

