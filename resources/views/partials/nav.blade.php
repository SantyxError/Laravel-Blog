
{{-- 
    Trozo de codigo que podemos poner en cualquier otra parte, mediante el comando @section 
--}}

{{-- <nav class="navbar navbar-dark bg-dark">
    <ul>
        <li><a href="{{route('home')}}">Pagina de inicio</a></li>
        <li><a href="{{route ('listado')}}">Listado de posts</a> </li>
    </ul>
  </nav> --}}

  <nav class="navbar navbar-inverse">
    <ul class="nav navbar-nav">
        <li><a href="{{route('home')}}">Pagina de inicio</a></li>
        <li><a href="{{route ('listado')}}">Listado de posts</a> </li>
    </ul>
    <p class="navbar-text">Some text</p>
  </nav>