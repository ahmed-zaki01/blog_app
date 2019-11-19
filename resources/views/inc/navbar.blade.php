<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="{{url('/')}}">Blog APP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
        aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li><a class="nav-link" href="{{url('/')}}">Home</a></li>
            <li><a class="nav-link" href="{{url('/about')}}">About</a></li>
            <li><a class="nav-link" href="{{url('/services')}}">Services</a></li>
            <li><a class="nav-link" href="{{url('/posts')}}">Blog</a></li>
        </ul>

        <ul class="navbar navbar-nav ml-auto">
            <li><a class="nav-link" href="{{url('/posts/create')}}">Create Post</a></li>
        </ul>

    </div>
</nav>
