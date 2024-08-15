<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home LogIn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/sesiones.css') }}">

    <style>

</style>
</head>
<body>
<nav class="navbar navbar-expand-lg" style="background-color: #85344c;">
        <div class="container-fluid container">
            <div class="container-fluid">
                <a class="navbar-brand text-white" href="#">
                    <img src="#" alt="ANUIES" height="60px" class="d-inline-block align-text-top">
                    <!-- Admin ANUIES -->
                </a>
            </div>
            <button class="navbar-toggler mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list text-white"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="{{route('index')}}">Regresar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="contenedor shadow">
        <div class="log row m-2 align-items-strech">
            <div class="col bg d-none d-lg-block col-md-6 col-lg-6 col-xl-6 rounded"></div>

            <div class="col">
                <!-- Sesion -->
                <div class="text-end">          
                        <img src="{{asset ('img/logotipoutvt.png') }}" width="200px" alt="">
                </div><!-- Logo -->

                <h2 class="fw-bold text-center pb-3">Inicia Sesión</h2><!-- Form de Inicio de Sesion -->
                
                <form action=" {{ route('valida') }}" method="POST">
                    @csrf
                        <div class="mb-4">
                            <label for="email" class="form-label">&nbsp;<i class="fa-solid fa-envelope"></i> Correo Electrónico:</label>
                            <input type="email" class="form-control" name="email" placeholder="Correo" required>
                        </div>

                        <div class="mb-4">
                            <label for="pass" class="form-label">&nbsp;<i class="fa-sharp fa-solid fa-key"></i>Contraseña:</label>
                            <input type="password" class="form-control" name="pass" placeholder="Contraseña" required>
                        </div>
                      
                        <br>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-outline">Iniciar Sesión</button>
                        </div><br>
                </form>
            </div>
        </div>
    </div>
</body>
</html>