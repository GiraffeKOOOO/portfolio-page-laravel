<?php
    $route = Route::current()->uri();
?>

<!-- navbar -->
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <div class="navbar-nav ml-auto sm:flex-row">
            <a class="nav-link {{ $route == "/" ? "active" : "" }}" aria-current="page" href="/">Home</a>
            <a class="nav-link {{ $route == "projects" ? "active" : "" }}" href="/projects">Projects</a>
            <a class="nav-link {{ $route == "experience" ? "active" : "" }}" href="/experience">Experience</a>
            <a class="nav-link {{ $route == "academia" ? "active" : "" }}" href="/academia">Academia</a>
            <a class="nav-link {{ $route == "cv" ? "active" : "" }}" href="/cv">CV</a>
            <a class="nav-link {{ $route == "about" ? "active" : "" }}" href="/about">About</a>
            <a class="nav-link {{ $route == "contact" ? "active" : "" }}" href="/contact">Contact</a>
        </div>
    </div>
</nav>
