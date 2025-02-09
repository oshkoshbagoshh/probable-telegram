<nav class="navbar is-dark" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="{{ route('home.index') }}"> Online Store </a>
        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasic">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>
    <div id="navbarBasic" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item" href="{{ route('home.index') }}"> Home </a>
            <a class="navbar-item" href="{{ route('product.index') }}"> Products </a>
            <a class="navbar-item" href="{{ route('cart.index') }}"> Cart </a>
            <a class="navbar-item" href="{{ route('home.about') }}"> About </a>
        </div>
        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    @guest
                        <a class="button is-primary" href="{{ route('login') }}"> Login </a>
                        <a class="button is-light" href="{{ route('register') }}"> Register </a>
                    @else
                        <a class="button is-info" href="{{ route('myaccount.orders') }}"> My Orders </a>
                        <form id="logout" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="button is-danger"> Logout </button>
                        </form>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</nav>
