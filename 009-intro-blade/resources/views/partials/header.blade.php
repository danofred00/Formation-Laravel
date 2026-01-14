@php
    $navItems = [
        [
            'name'  => 'Accueil',
            'url'   => '/',
            'key'   => 'home'
        ],
        [
            'name'  => 'Services',
            'url'   => '#services',
            'key'   => 'services'
        ],
        [
            'name'  => 'À propos',
            'url'   => '/about',
            'key'   => 'about'
        ],
        [
            'name'  => 'Contact',
            'url'   => '/contact',
            'key'   => 'contact'
        ],
    ];
@endphp

<header class="container-fluid p-3">
    {{-- Header with navigation --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Travel Agency</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        @foreach ($navItems as $item)
            <li class="nav-item">
                <a class="nav-link @isset($currentPage)
                    {{ $currentPage === $item['key'] ? 'active' : '' }}
                @endisset" role="button" href="{{ $item['url'] }}">{{ $item['name'] }}</a>
            </li>
        @endforeach
      </ul>
    </div>
  </div>
</nav>
</header>