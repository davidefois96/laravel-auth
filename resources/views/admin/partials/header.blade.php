<header>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a href="{{route('home')}}" target="_blank" class="navbar-brand">Vai al sito</a>
          <a href="{{route('admin.home')}}"  class="navbar-brand">Home</a>
          <form action="{{route('logout')}}" method="POST" class="d-flex">
            <p class="me-3">{{Auth::user()->name}}</p>
           @csrf
            <button class="btn btn-danger" type="submit">Esci</button>
          </form>
        </div>
      </nav>



</header>
