<div id="header">
    <div class="header-menu style-one bg-black-surface">
        <div class="container">
            <div class="header-main flex-between">
                <div class="menu-main">
                    <ul class="flex-item-center">
                        <li class="flex-center"><a class="text-subtitle active" href="#home">Home<i
                                    class="fs-12 pl-4"></i></a>
                        </li>
                        <li class="flex-center"><a class="text-subtitle" href="#service">Services</a>
                        </li>
                        <li class="flex-center"><a class="text-subtitle" href="#team">Team</a></li>
                        <li class="flex-center"><a class="text-subtitle" href="https://wa.me/6281227848422">Contact</a></li>
                    </ul>
                </div>
                <a class="logo" href="">
                    <svg width="46" height="34" viewbox="0 0 46 34" fill="none"
                        xmlns="http://www.w3.org/2000/svg"><img width="192" height="51"
                            src="{{ asset('assets/images/logo-utama.png')}}" alt=""></a>
                @if (Route::has('login'))
                    <div class="right-block flex-item-center">
                        <div class="search-icon pr-24 pointer"><i class="ph ph-magnifying-glass text-white fs-24"></i>
                        </div>
                        <div class="menu-humburger display-none pr-24 pointer"><i
                                class="ph ph-list text-white fs-24"></i>
                        </div>
                        @auth
                            <a class="button button-blue-hover text-white text-button" href="{{ url('/dashboard') }}">
                                <span> <span></span></span><span class="bg-blue">Login</span></a>
                        @else
                            <a class="button button-blue-hover text-white text-button" href="{{ route('login') }}">
                                <span> <span></span></span><span class="bg-blue">Login</span></a>
                            @if (Route::has('register'))
                                <a class="button button-blue-hover text-white text-button" href="{{ route('register') }}">
                                    <span> <span></span></span><span class="bg-blue">Register</span></a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
            <div id="menu-mobile-block">
                <div class="menu-mobile-main">
                    <div class="heading flex-between"><a class="logo" href="">
                            <img width="192" height="51" src="{{ asset('assets/images/logo-utama.png')}}"
                                alt=""></a>
                        <div class="close-block"> <i class="ph-bold ph-x d-block fs-18 text-white pointer"></i></div>
                    </div>
                    <ul class="nav d-block">
                        <li><a class="text-subtitle text-white flex-between active" href="#home"><span>Home</span><i
                                    class="ph ph-caret-right text-white fs-12"></i></a>
                        </li>
                        <li><a class="text-subtitle text-white flex-between" href="#service"><span>Services</span><i
                                    class="ph ph-caret-right text-white fs-12"></i></a>
                            <div class="sub-nav-mobile bg-black-surface">
                                <div class="heading flex-between">
                                    <div class="back-block pointer"><i
                                            class="ph ph-caret-left text-white fs-18 d-block"></i></div>
                                </div>
                            </div>
                        </li>
                        <li><a class="text-subtitle text-white flex-between" href="#team"><span>Team</span><i
                                    class="ph ph-caret-right text-white fs-12"></i></a></li>
                        <li><a class="text-subtitle text-white flex-between" href="https://wa.me/6281227848422"><span>Contact</span><i
                                    class="ph ph-caret-right text-white fs-12"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Scroll to section on navbar click
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // Add active class to navbar on scroll
    window.addEventListener('scroll', function () {
        const sections = document.querySelectorAll('section');
        const navLinks = document.querySelectorAll('a[href^="#"]');

        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;

            if (window.pageYOffset >= sectionTop - sectionHeight / 3) {
                const id = section.getAttribute('id');
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${id}`) {
                        link.classList.add('active');
                    }
                });
            }
        });
    });
</script>
