<ul class="nav navbar-nav">
  <li><a href="{{ url('/') }}">Beranda</a></li>
  @if(Auth::check())
    <li @if (Request::is('admin/post*')) class="active" @endif>
      <a href="/admin/post">Tulisan</a>
    </li>
    <li @if (Request::is('admin/tag*')) class="active" @endif>
      <a href="/admin/tag">Tag</a>
    </li>
    <li @if (Request::is('admin/upload*')) class="active" @endif>
      <a href="/admin/upload">Unggah</a>
    </li>
  @endif
</ul>

<ul class="nav navbar-nav navbar-right">
  @if(Auth::guest())
    <li><a href="{{ url('/login') }}">Masuk</a></li>
  @else
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name}} <span class="caret"></span>
      </a>
      <ul class="dropdown-menu" role="menu">
        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Keluar</a></li>
      </ul>
    </li>
  @endif
</ul>
