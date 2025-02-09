<footer class="footer">
    <div class="content has-text-centered">
        <p>
            &copy; Copyright {{ date('Y') }} Scrooge McDuck. All Rights Reserved.
            <a class="has-text-link" target="_blank" href="https://en.wikipedia.org/wiki/Scrooge_McDuck"> Scrooge McDuck </a>
        </p>
    </div>
</footer>

{{--Scripts--}}
<script>
    // Bulma Navbar Burger script
    document.addEventListener('DOMContentLoaded', () => {
        const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
        if ($navbarBurgers.length > 0) {
            $navbarBurgers.forEach(el => {
                el.addEventListener('click', () => {
                    const target = el.dataset.target;
                    const $target = document.getElementById(target);
                    el.classList.toggle('is-active');
                    $target.classList.toggle('is-active');
                });
            });
        }
    });
</script>