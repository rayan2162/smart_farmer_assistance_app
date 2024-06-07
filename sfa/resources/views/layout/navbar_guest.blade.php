<nav class="navbar navbar-expand-lg navbar-light" style="background: #4B6F44">
    <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}" style="color: white">
        <span class="material-icons" style="color:white" >
            agriculture
        </span>
        Farmer
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="btn" href="{{ route('register') }}" style="background: white; color:#4B6F44; font-weight:bold">Registration</a>
            </li>
            <li class="nav-item ml-lg-2">
                <a class="btn" href="{{ route('login') }}" style="background: white; color:#4B6F44; font-weight:bold">Login</a>
            </li>
        </ul>
    </div>
</nav>

