@extends('pages.inicio')

@section('contenido')
				<!-- Banner -->
					<section id="banner" class="major">
						<div class="inner">
							<header class="major">
								<h1>Campeonato MXVX Paraguay</h1>
							</header>
							<div class="content">
								<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero ipsa eius, voluptate placeat recusandae consequuntur eaque consectetur enim cum dolor in molestiae repellat perferendis obcaecati hic facilis ratione iure. Suscipit!</p>
								<ul class="actions">
									<li><a href="{{route('formulario-registro')}}" class="button next scrolly">Registrar</a></li>
								</ul>
							</div>
						</div>
					</section>

    <!-- One -->
    <section id="one" class="tiles">
        <article>
            <span class="image">
                <img src="/images/pic01.jpg" alt="" />
            </span>
            <header class="major">
                <h3><a href="landing.html" class="link">Aliquam</a></h3>
                <p>Ipsum dolor sit amet</p>
            </header>
        </article>
        <article>
            <span class="image">
                <img src="/images/pic02.jpg" alt="" />
            </span>
            <header class="major">
                <h3><a href="landing.html" class="link">Tempus</a></h3>
                <p>feugiat amet tempus</p>
            </header>
        </article>
        <article>
            <span class="image">
                <img src="/images/pic03.jpg" alt="" />
            </span>
            <header class="major">
                <h3><a href="landing.html" class="link">Magna</a></h3>
                <p>Lorem etiam nullam</p>
            </header>
        </article>
        <article>
            <span class="image">
                <img src="/images/pic04.jpg" alt="" />
            </span>
            <header class="major">
                <h3><a href="landing.html" class="link">Ipsum</a></h3>
                <p>Nisl sed aliquam</p>
            </header>
        </article>
        <article>
            <span class="image">
                <img src="/images/pic05.jpg" alt="" />
            </span>
            <header class="major">
                <h3><a href="landing.html" class="link">Consequat</a></h3>
                <p>Ipsum dolor sit amet</p>
            </header>
        </article>
        <article>
            <span class="image">
                <img src="/images/pic06.jpg" alt="" />
            </span>
            <header class="major">
                <h3><a href="landing.html" class="link">Etiam</a></h3>
                <p>Feugiat amet tempus</p>
            </header>
        </article>
    </section>

<!-- Two -->
    <section id="two">
        <div class="inner">
            <header class="major">
                <h2>Carrera N° 29</h2>
            </header>
            <p>Nullam et orci eu lorem consequat tincidunt vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus pharetra. Pellentesque condimentum sem. In efficitur ligula tate urna. Maecenas laoreet massa vel lacinia pellentesque lorem ipsum dolor. Nullam et orci eu lorem consequat tincidunt. Vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus amet pharetra et feugiat tempus.</p>
            <ul class="actions">
                <li><a href="{{route('formulario-inscripcion')}}" class="button next">Inscripción</a></li>
            </ul>
        </div>
    </section>
@endsection
