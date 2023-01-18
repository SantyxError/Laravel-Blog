
{{-- 
    Trozo de codigo que podemos poner en cualquier otra parte, mediante el comando @section 
--}}

{{-- <nav class="navbar navbar-dark bg-dark">
    <ul>
        <li><a href="{{route('home')}}">Pagina de inicio</a></li>
        <li><a href="{{route ('listado')}}">Listado de posts</a> </li>
    </ul>
  </nav> --}}

  {{-- <nav class="navbar navbar-inverse ">
    <ul class="nav navbar-nav ">
        <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Pagina de inicio</a></li>
        <li class="nav-item"><a class="nav-link" href="{{route ('listado')}}">Listado de posts</a> </li>
    </ul>
   
  </nav> --}}


  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary .text-white">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">Blog</a>
    {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> --}}
   
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="{{route ('home')}}" class="nav-link" >Inicio</a>
        </li>
        <li class="nav-item">
          <a href="{{route ('listado')}}" class="nav-link">Listado de libros</a>
        </li>
      </ul>
    </div>
    </div>
  </nav>

{{-- 
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" >Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link">Listado de libros</a>
          </li>
        </ul>
      </div>
    </div>
  </nav> --}}