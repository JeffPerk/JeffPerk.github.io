<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Note Manager 3000</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link {{ Route::currentRouteName() == "home" ? 'active' : '' }}" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link {{ Route::currentRouteName() == "notes.index" ? 'active' : '' }}" href="{{ route('notes.index') }}">Notes</a>
            <a class="nav-item nav-link {{ Route::currentRouteName() == "notes.create" ? 'active' : '' }}" href="{{ route('notes.create') }}">New Note</a>
        </div>
    </div>
</nav>
