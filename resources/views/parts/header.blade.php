<div class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
  <div class="container">
    <a href="/" class="navbar-brand">review_task</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav mr-auto">
        @foreach ($nav as $x)
        <li class="nav-item{% if x.active %} active{% endif %}">
          <a class="nav-link" href="{{ $x['url'] }}">{{ $x['name'] }}</a>
        </li>
        @endforeach
      </ul>

    </div>
  </div>
</div>
