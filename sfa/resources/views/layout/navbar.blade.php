<nav class="navbar navbar-expand-lg navbar-light" style="background: #4B6F44">
    <a class="navbar-brand disable d-flex align-items-center" href="{{ url('/') }}" style="color: white">
        <span class="material-icons">
            agriculture
        </span>
        Farmer
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Notice</a>
            </li>
  
            <!-- Crop Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link text-white" href="#" id="cropDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Crop
                </a>
            </li>
  
            <!-- Agroforestry Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link text-white" href="#" id="agroforestryDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Agroforestry
                </a>
            </li>
  
            <!-- Livestock Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link text-white" href="#" id="livestockDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Livestock
                </a>
            </li>
  
            <!-- Silo Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link text-white" href="#" id="siloDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Silo
                </a>
            </li>
  
            <!-- Equipment Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link text-white" href="#" id="equipmentDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Equipment
                </a>
            </li>
  
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Weather</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="btn" href="{{ url('/') }}" style="background: white; color:#4B6F44; font-weight:bold">Profile</a>
            </li>
            <li class="nav-item ml-lg-2">
                <a class="btn" href="{{ url('/') }}" style="background: white; color:#4B6F44; font-weight:bold">Logout</a>
            </li>
        </ul>
    </div>
  </nav>