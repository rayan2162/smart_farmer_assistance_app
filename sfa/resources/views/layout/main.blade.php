   <!DOCTYPE html>
   <html lang="en">
   <head>
       <!-- Required meta tags -->
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

       <link rel="stylesheet" href="/css/app.css">
   
       <!-- Bootstrap CSS -->
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
       {{-- Font --}}
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
       <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
       <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,500,0,0" />
 
       <style>
           *{
               font-family: "Nunito", sans-serif;
               font-optical-sizing: auto;
               font-weight: <weight>;
               font-style: normal;
           }
           .icon-circle {
            width: 140px;
            height: 140px;
            background-color: #4B6F44;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            font-size: 72px; /* Adjust as needed */
            margin: 0 auto;
        }
        .custom-dropdown {
        background-color: #4B6F44;
    }
    .custom-dropdown .dropdown-item:hover {
        background-color: #365A32; /* Slightly darker shade for hover */
    }
        </style>
   </head>
   <body>

    @yield('navbar')
    @yield('carousel')
    @yield('content')
    @yield('jumbotron')
    


{{-- Footer --}}
    <!-- FOOTER -->
    <div style="background: #4B6F44; color: white; padding: 20px;">
        <p class="float-right" style="margin-bottom: 0;"><a href="#" style="color: white;">Back to top</a></p>
        <p style="margin-bottom: 0;">&copy; 2024 Smart Farmer Assistant Application (Made with Laravel 10 ❤️) <br> For 6th Semester Software Development Course.</p>
    </div>
    


       <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   </body>
</html>
