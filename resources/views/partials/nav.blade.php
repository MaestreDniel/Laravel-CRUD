<nav>
  <ul>
    <li class="{{ setActive('dashboard') }}"><a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a></li>
    <li class="{{ setActive('home') }}"><a href="{{ route('home') }}">{{ __('Home') }}</a></li>
    <li class="{{ setActive('dondeestamos') }}"><a href="{{ route('dondeestamos') }}">{{ __('Our location') }}</a></li>
    <li class="{{ setActive('quienessomos') }}"><a href="{{ route('quienessomos') }}">{{ __('About us') }}</a></li>
    <li class="{{ setActive('projects.*') }}"><a href="{{ route('projects.index') }}">{{ __('Projects') }}</a></li>
    <li class="{{ setActive('contacto') }}"><a href="{{ route('contacto') }}">{{ __('Contact') }}</a></li>
  </ul>
</nav>