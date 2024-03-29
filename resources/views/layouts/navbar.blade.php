<nav class="navbar navbar-expand-md navbar-dark shadow fixed-top" style="background-color: #4a55a2;">
    <div class="container">
        <a class="navbar-brand h1" href="">
        <i class="fas fa-images" style="font-size: 30px;"></i>&nbsp; Galeri Foto
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <!-- <span class="navbar-toggler-icon"></span> -->
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                @auth
                <x-nav-item label="Dashboard" :link="route('dashboard')" />
                    <x-nav-item label="Beranda" :link="route('home')" />
                    <x-nav-item label="Data Gambar" :link="route('data-foto')" />
                    <x-nav-item label="Profile" :link="route('profile')" />
                    <x-nav-item label="Logout" :link="route('logout')" />
                @else
                    <x-nav-item label="Login" :link="route('login.show')" />
                @endauth
            </ul>
        </div>
    </div>
</nav>