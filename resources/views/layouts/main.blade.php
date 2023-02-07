<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Local styles -->
    <link href="/css/styles.css" rel="stylesheet">

</head>

<body>
    <div class="conteiner-fluid">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                <a href="/" class="navbar-brand"></a>
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a href="/" class="nav-link">Home</a>
                    </li>
                    @auth
                    <li class="nav-item">
                      <a href="/dashboard" class="nav-link">Painel</a>
                    </li>
                    <li class="nav-item">
                      <form action="/logout" method="POST">
                        @csrf            
                        <a href="/logout"
                        class="nav-link"
                        onclick="event.preventDefault();
                          this.closest('form').submit();">
                          Sair
                        </a>
                      </form>
                    </li> 
                    @endauth
                    @guest
                    <li class="nav-item">
                      <a href="/login" class="nav-link">Entrar</a>
                    </li>
                    <li class="nav-item">
                      <a href="/register" class="nav-link">Cadastrar</a>
                    </li>   
                    @endguest
                  </ul>
                </div>
              </nav>
            @yield('content')
        </div>
    </div>
    <footer>
        <p>Lumina digital &copy; 2022</p>
    </footer>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>

</html>
