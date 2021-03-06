<header class="main-header">
    <a href="{{ route('home') }}" class="logo">
        <span class="logo-mini"><b>{{ env('BRAND_ABBR', 'OC') }}</b></span>
        <span class="logo-lg">
            <b style="font-weight: 400;">{{ env('BRAND_NAME', 'Origin CMS') }}</b>
        </span>
    </a>
    <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        @if (auth()->user()->avatar)
                            <img alt="{{ auth()->user()->full_name }}" class="user-image" src="{{ url(auth()->user()->avatar) }}" title="{{ auth()->user()->full_name }}" />
                        @else
                            <img class="user-image" />
                        @endif
                        <span class="hidden-xs">{{ auth()->user()->full_name }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-header">
                            @if (auth()->user()->avatar)
                                <img alt="{{ auth()->user()->full_name }}" class="img-circle" src="{{ url(auth()->user()->avatar) }}" title="{{ auth()->user()->full_name }}" />
                            @else
                                <img alt="{{ auth()->user()->full_name }}" class="img-circle" src="" title="{{ auth()->user()->full_name }}" />
                            @endif
                            <p>
                                {{ auth()->user()->full_name }} - {{ auth()->user()->role }}
                            </p>
                        </li>
                        <li class="user-footer">
                            <div class="row">
                                <div class="col-md-4">
                                    <a href="{{ route('show.doc', ['slug' => 'user', 'id' => auth()->user()->id]) }}" class="btn btn-default">
                                        Profile
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{ route('show.app.settings') }}" class="btn btn-default">
                                        Settings
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{ route('logout') }}" class="btn btn-default">
                                        Logout
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('show.app.settings') }}">
                        <i class="fa fa-gears"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>
