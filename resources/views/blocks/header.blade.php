<header>
    <div class="container" style="display: flex; justify-content: space-between; align-items: center; padding: 15px 0;">
        <div class="logo">
            <a href="{{ url('/') }}" style="font-size: 24px; font-weight: bold; text-decoration: none; color: inherit;">KnowPC</a>
        </div>

        <div class="search">
            <form action="{{ route('search') }}" method="GET" style="display: flex;">
                <input type="text" name="query" placeholder="Поиск..." required style="padding: 5px; border: 1px solid #ccc; border-radius: 4px 0 0 4px;">
                <button type="submit" style="padding: 5px 10px; border: 1px solid #ccc; border-left: none; border-radius: 0 4px 4px 0; background-color: #f0f0f0;">Найти</button>
            </form>
        </div>

        <div class="auth">
            @if(Auth::check())
                <div class="user-profile">
                    <a href="{{ route('profile') }}" style="margin-right: 10px; text-decoration: none;">{{ Auth::user()->name }}</a>
                </div>
            @else
                <a href="{{ route('login') }}" style="margin-right: 10px; text-decoration: none;">Войти</a>
                <a href="{{ route('register') }}" style="text-decoration: none;">Регистрация</a>
            @endif
        </div>
    </div>
</header>
