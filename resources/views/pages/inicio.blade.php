<!DOCTYPE html>
<html lang="es">
    <head>
        <title>MXVX Paraguay</title>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, user-scalable=no"
        />
        <link rel="stylesheet" href="/css/app.css" />
        <link rel="stylesheet" href="/css/main.css" />
        <noscript><link rel="stylesheet" href="/css/noscript.css"/></noscript>
        <!-- Scripts -->
        <link
            rel="stylesheet"
            href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css"
        />
        <script
            src="https://code.jquery.com/jquery-1.12.4.min.js"
            integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
            crossorigin="anonymous"
        ></script>
        <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
        <script src="/js/jquery.scrolly.min.js" defer></script>
        <script src="/js/jquery.scrollex.min.js" defer></script>
        <script src="/js/browser.min.js" defer></script>
        <script src="/js/breakpoints.min.js" defer></script>
        <script src="/js/util.js" defer></script>
        <script src="/js/main.js" defer></script>
        @yield('head')
    </head>
    <body class="is-preload">
        <!-- Wrapper -->
        <div id="wrapper">
            <!-- Header -->
            <header id="header" class="alt">
                <a href="/" class="logo"
                    ><strong>MXVX</strong> <span>Paraguay</span></a
                >
                <nav>
                    <a href="#menu">Menu</a>
                </nav>
            </header>

            <!-- Menu -->
            <nav id="menu">
                <ul class="links">
                    <li><a href="/">Home</a></li>
                 @auth 
                    <li><a href="{{route('formulario-inscripcion')}}">Formulario de Inscripción</a></li>
                    <li><a href="{{route('formulario-pagos')}}">Formulario de Pagos</a></li>
		    <li><a href="elements.html"
                     onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                     >Cerrar Sesión</a></li>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                     </form>

                 @endauth
                </ul>
                <ul class="actions stacked">
		    @guest
                     <li>
                        <a
                            href="{{route('register')}}"
                            class="button primary fit"
                            >Registrar</a
                        >
                    </li>
                    <li><a href="{{route('login')}}" class="button fit">Iniciar Sesión</a></li>
                    @endguest
                </ul>
            </nav>

            <!-- Main -->
	    <div id="main">
	      @yield('contenido')
            </div>

            <!-- Contact -->
            <section id="contact">
                <div class="inner">
                    <section>
                        <form method="post" action="#">
                            <div class="fields">
                                <div class="field half">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" />
                                </div>
                                <div class="field half">
                                    <label for="email">Email</label>
                                    <input
                                        type="text"
                                        name="email"
                                        id="email"
                                    />
                                </div>
                                <div class="field">
                                    <label for="message">Message</label>
                                    <textarea
                                        name="message"
                                        id="message"
                                        rows="6"
                                    ></textarea>
                                </div>
                            </div>
                            <ul class="actions">
                                <li>
                                    <input
                                        type="submit"
                                        value="Send Message"
                                        class="primary"
                                    />
                                </li>
                                <li><input type="reset" value="Clear" /></li>
                            </ul>
                        </form>
                    </section>
                    <section class="split">
                        <section>
                            <div class="contact-method">
                                <span class="icon solid alt fa-envelope"></span>
                                <h3>Email</h3>
                                <a href="#">information@untitled.tld</a>
                            </div>
                        </section>
                        <section>
                            <div class="contact-method">
                                <span class="icon solid alt fa-phone"></span>
                                <h3>Phone</h3>
                                <span>(000) 000-0000 x12387</span>
                            </div>
                        </section>
                        <section>
                            <div class="contact-method">
                                <span class="icon solid alt fa-home"></span>
                                <h3>Address</h3>
                                <span
                                    >1234 Somewhere Road #5432<br />
                                    Nashville, TN 00000<br />
                                    United States of America</span
                                >
                            </div>
                        </section>
                    </section>
                </div>
            </section>

            <!-- Footer -->
            <footer id="footer">
                <div class="inner">
                    <ul class="icons">
                        <li>
                            <a href="#" class="icon brands alt fa-twitter"
                                ><span class="label">Twitter</span></a
                            >
                        </li>
                        <li>
                            <a href="#" class="icon brands alt fa-facebook-f"
                                ><span class="label">Facebook</span></a
                            >
                        </li>
                        <li>
                            <a href="#" class="icon brands alt fa-instagram"
                                ><span class="label">Instagram</span></a
                            >
                        </li>
                        <li>
                            <a href="#" class="icon brands alt fa-github"
                                ><span class="label">GitHub</span></a
                            >
                        </li>
                        <li>
                            <a href="#" class="icon brands alt fa-linkedin-in"
                                ><span class="label">LinkedIn</span></a
                            >
                        </li>
                    </ul>
                    <ul class="copyright">
                        <li>&copy; Untitled</li>
                        <li>
                            Design: <a href="https://html5up.net">HTML5 UP</a>
                        </li>
                    </ul>
                </div>
            </footer>
        </div>
    </body>
</html>
