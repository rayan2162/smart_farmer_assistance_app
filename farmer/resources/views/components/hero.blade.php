<div class="jumbotron" style="background-image: url('{{ $backgroundImage }}'); background-size: cover; background-position: center; height: 80vh;">
    <div class="row" style="background: rgba(0, 0, 0, 0.5); padding: 20px; border-radius: 10px;">
        <!-- Left Column -->
            <div class="col-md-7" style="padding: 20px; border-radius: 10px;">
                <h1 class="display-5 text-white">{{ $title }}</h1>
                <p class="lead text-white">{{ $leadText }}</p>
                <hr class="my-4 text-dark">
                <p class="text-white">{{ $description }}</p>
            </div>
        <!-- Right Column -->
        <div class="col-md-5">
                @yield('heroContent')
        </div>
    </div>
</div>
