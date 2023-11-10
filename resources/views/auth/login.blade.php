<div class="wrapper">

    <link rel="stylesheet" href="inicio/css/login.css">
    
    <form method="POST" action="{{ route('login') }}" class="form">
        @csrf
        <h1 class="title">Iniciar Sesión</h1>
        <div class="inp">
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus class="input" placeholder="Correo Electronico">
            <i class="fa-solid fa-user"></i>
        </div>
        <div class="inp">
            <input id="password" type="password" name="password" required autocomplete="current-password" class="input" placeholder="Contraseña">
            <i class="fa-solid fa-lock"></i>
        </div>
        @if(session('error'))
        <div class="custom-alert mt-3">
            {{ session('error') }}
        </div>
        @endif

        <button class="submit" id="boton1">Ingresar</button>
     

    </form>
    

    <div class="banner">
        <div class="imaalex">

   <img src="img\Logo.png" alt="">

   
        </div>
        <br>
        <br>
        <h1 class="titu wel_text">RATINGSOFT<br/></h1>
        <p class="para">Inspirados por la excelencia<br/></p>
    </div>
</div>




<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
       $("#boton1").click(function(){

    Swal.fire("eddd")
       });
</script>

