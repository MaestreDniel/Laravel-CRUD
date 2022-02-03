<nav>
  <ul>
    <li class="{{ setActive('dashboard') }}"><a href="/dashboard">{{ __('Dashboard') }}</a></li>
    <li class="{{ setActive('home') }}"><a href="/micrud.home">{{ __('Home') }}</a></li>
    <li class="{{ setActive('dondeestamos') }}"><a href="/micrud.dondeestamos">{{ __('Our location') }}</a></li>
    <li class="{{ setActive('quienessomos') }}"><a href="/micrud.quienessomos">{{ __('About us') }}</a></li>
    <li class="{{ setActive('portfolio') }}"><a href="/micrud.portfolio">{{ __('Portfolio') }}</a></li>
    <li class="{{ setActive('contacto') }}"><a href="/micrud.contacto">{{ __('Contact') }}</a></li>
  </ul>
</nav>