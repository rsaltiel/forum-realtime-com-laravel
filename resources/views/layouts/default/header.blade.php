<ul id="locale" class="dropdown-content">
    <li><a href="/locale/pt-br">Português</a></li>
    <li><a href="/locale/en">English</a></li>
    <li><a href="/locale/es">Español</a></li>
</ul>

@if (\Auth::user())
<ul id="user" class="dropdown-content">
    <li><a href="/profile">{{ __('Profile') }}</a></li>
    <li>
        <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </li>
</ul>
@endif

<div class="parallax-container">
    <nav>
        <div class="nav-wrapper">
            <div class="container">
                <a href="/" class="brand-logo">{{ __('Learning Community') }} - Instituto Sustentabilidade</a>
                <ul class="right">
                    <li>
                        <a href="#!" data-activates="locale" class="dropdown-button">{{ __('Language') }}</a>
                    </li>
                    @if (\Auth::user())
                    <li>
                        <a href="#!" data-activates="user" class="dropdown-button">{{ \Auth::user()->name }}</a>                        
                    </li>
                    @else
                    <li>
                        <a href="/login">{{ __('Login') }}</a>                        
                    </li>
                    <li>
                        <a href="/register">{{ __('Sign Up') }}</a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <div class="parallax">
    <img src="/img/comunidade_aprendizagem.jpg" alt="Learning Community">
    </div>          
            
</div>