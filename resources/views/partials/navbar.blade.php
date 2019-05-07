<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="">Sentje</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="">Home</a>
      @if(Auth::guest())
        <a class="nav-item nav-link" href="/login">Inloggen</a>
         <a class="nav-item nav-link" href="/register">Registreren</a>
      @else
        <a class="nav-item nav-link" href="/cards">Rekeningen</a>
        <a class="nav-item nav-link" href="/logout">Uitloggen</a>
      @endif
    </div>
  </div>
</nav>