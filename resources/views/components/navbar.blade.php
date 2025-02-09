<nav class="navbar is-dark" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="/"> Online Store </a>
        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasic">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>
    <div id="navbarBasic" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item" href="#"> Home </a>
            <a class="navbar-item" href="#"> Products </a>
            <a class="navbar-item" href="#"> Cart </a>
            <a class="navbar-item" href="#"> About </a>
        </div>
        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    @guest
                        <a class="button is-primary" href="#"> Login </a>
                        <a class="button is-light" href="#"> Register </a>
                    @else
                        <a class="button is-info" href="#" > My Orders </a>
                        <form id="logout" action="#" method="POST">
                            @csrf
                            <button type="submit" class="button is-danger"> Logout </button>
                        </form>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</nav>
