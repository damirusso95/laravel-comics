<header>
    <span>attualmente sei in: {{ Route::currentRouteName() }}</span>
    <nav>
        <a href="{{ route("home") }}">HOME</a>
        <a href="{{ route("about") }}">ABOUT</a>
        <a href="{{ route("comics") }}">FUMETTI</a>
    </nav>
</header>