<nav class="white z-depth-0">
    <div class="container">
      <img id="logo" src="/images/cat-icon.png">
      <a href="/" class="brand-logo brand-text">Cat Database</a>
		<ul id="nav-mobile" class="right hide-on-small-and-down flex items-center">
      @auth
        <li class="grey-text">Hello {{auth()->user()->name}}</li>
        <li>
          <form action="/logout" method="POST" class="inline">
            @csrf
            <button type="submit" class="btn brand z-depth-0">Logout</button>
          </form>
        </li>
        <li><a href="/add" class="btn brand z-depth-0">Add a Cat</a></li>
        <li><a href="/admin" class="btn brand z-depth-0">Admin Page</a></li>
      @else
        <li><a href="/register" class="btn brand z-depth-0">Register</a></li>
        <li><a href="/login" class="btn brand z-depth-0">Log In</a></li>
      @endauth
			
      </ul>
    </div>
</nav>