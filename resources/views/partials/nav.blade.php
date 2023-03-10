
{{-- 
    Trozo de codigo que podemos poner en cualquier otra parte, mediante el comando @section 
--}}


  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary .text-white">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">Blog</a>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">

          {{--
             Mediante la interpolacion {{}}, ponemos el comando "route" y entre parentesis, el nombre de la ruta. 
             Si la ruta viene de un resource, en este caso sera "post.index" 
          --}}
          <a href="{{route ('home')}}" class="nav-link" >Inicio</a>
        </li>
        <li class="nav-item">
          <a href="{{route('posts.index')}}" class="nav-link">Listado de Post</a>
        </li>
        @if(auth()->guest())
        <li class="nav-item">
            {{-- <a class="nav-link" href="{{ route('auth.login') }}">Login</a> --}}
        </li>
      @endif
      @if(auth()->check())
        <li class="nav-item">
          <a class="nav-link" href="{{ route('posts.create') }}">Nuevo post</a>
        </li>
        @endif
      </ul>
    </div>
    </div>
  </nav>

 

