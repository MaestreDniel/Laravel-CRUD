<nav class="navbar navbar-expand-md p-0 navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav text-uppercase">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('home') }}">{{ __('Home') }}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('musicos.index') }}">{{ __('Músicos') }}</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<br>
