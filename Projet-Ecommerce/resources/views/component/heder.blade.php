<nav  class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">logo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <a style="color: white" class="nav-link" href="#">Acceuil</a>
          </li>
          <li class="nav-item">
            <a style="color: white" class="nav-link" href="#">Contactez-nous</a>
          </li>
          <li class="nav-item">
          </li>
        </ul>
        <form  class="d-flex">
          <input  class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>

        <ul style="margin-left:30px "  class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
            <a style="color: white" class="nav-link" href="{{route('login')}}"> connecter</a>
          </li>
          <li class="nav-item">
            <a style="color: white" class="nav-link" href="{{route('register')}}">S’inscrire</a>
          </li>
        </ul>
    </form>
      </div>
    </div>

  </nav>
