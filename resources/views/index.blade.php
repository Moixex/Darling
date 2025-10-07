<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Feliz cumpleaños - Nahi</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="assets/img/pastelicon.jpeg" rel="icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="/assets/css/main.css" rel="stylesheet">

</head>

<body>
    <header id="header" class="header d-flex align-items-center">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="" class="logo d-flex align-items-center">
                <h1>LOGO<span>.</span></h1>
            </a>

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="#" class="active">Inicio</a></li>
                    <li><a href="#felicitaciones">Feliz Cumpleaños</a></li>
                    <li><a href="#love">Love</a></li>
                    <li><a href="/felicitar">Felicitar</a></li>
                </ul>
            </nav>

        </div>
    </header>
    <section id="hero" class="hero">

        <div class="info d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2 data-aos="fade-down">Feliz Cumpleaños <span>Primaverita</span></h2>
                        <p data-aos="fade-up">Mi amor, hoy celebramos el día en que el universo recibió el regalo más hermoso: tu presencia en este mundo. 
                            En este día especial, quiero recordarte lo increíble que eres y lo agradecido que estoy por tenerte en mi vida. 
                            Eres la luz que ilumina mis días, el sueño que nunca quiero despertar, y mi refugio en los momentos más difíciles.
                            ¡Feliz cumpleaños, mi dulce princesa!"
                        </p>
                        <a data-aos="fade-up" data-aos-delay="200" href="#felicitaciones"
                            class="btn-get-started">Felicidades</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

            <div class="carousel-item active"
                style="background-image: url(/assets/img/hero-carousel/Sky-A.jpeg)">
            </div>
            <div class="carousel-item" style="background-image: url(/assets/img/hero-carousel/Sky-B.jpeg)">
            </div>
            <div class="carousel-item" style="background-image: url(/assets/img/hero-carousel/Sky-C.jpeg)">
            </div>
            <div class="carousel-item" style="background-image: url(/assets/img/hero-carousel/Sky-D.jpeg)">
            </div>

            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>

        <main id="main">
            <section id="felicitaciones" class="testimonials section-bg">
                <div class="container" data-aos="fade-up">

                    <div class="section-header">
                        <h2>Felicitaciónes</h2>
                    </div>

                    <div class="slides-2 swiper">
                        <div class="swiper-wrapper">

                            @foreach ($congra as $c)
                                <div class="swiper-slide ">
                                    <div class="testimonial-wrap ">
                                        <div class="testimonial-item ">
                                            @if ($c->img == null)
                                                <img src="/assets/img/felicitaciones/no-img.jpeg"
                                                    class="testimonial-img" alt="">
                                            @else
                                                <img src="/assets/img/felicitaciones/{{ $c->img }}"
                                                    class="testimonial-img" alt="">
                                            @endif

                                            <h3 class="mayus">{{ $c->name }}</h3>
                                            <h4>{{ $c->identificador }}</h4>
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                {{ $c->description }}
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
            </section>
            <section id="love" class="features section-bg">
                <div class="container" data-aos="fade-up">
                    <div class="section-header">
                        <h2>Love</h2>
                    </div>

                    <ul class="nav nav-tabs row  g-2 d-flex">

                        <li class="nav-item col-3">
                            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                                <h4><b>T</b>e</h4>
                            </a>
                        </li>

                        <li class="nav-item col-3">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                                <h4><b>A</b>mo</h4>
                            </a>

                        <li class="nav-item col-3">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                                <h4><b>D</b>emasiado</h4>
                            </a>
                        </li>

                        <li class="nav-item col-3">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                                <h4><b>N</b>ahi</h4>
                            </a>
                        </li>

                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active show" id="tab-1">
                            <div class="row">
                                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center"
                                    data-aos="fade-up" data-aos-delay="100">
                                    <h3>Eres especial</h3>
                                    <p>
                                    Mi amor, en este día especial quiero tomarme un momento para recordarte lo increíblemente
                                    especial que eres para mí. Eres la luz que ilumina cada uno de mis días, el latido que da
                                    ritmo a mi corazón y la razón por la que sonrío sin cesar. Tu belleza, tanto por dentro como 
                                    por fuera, es un regalo del cielo que agradezco cada día.
                                    Tu amor incondicional, tu comprensión y tu apoyo son pilares fundamentales en mi vida.
                                    En cada gesto, en cada palabra, en cada mirada, veo reflejada la maravillosa persona que eres.
                                    Eres mi confidente, mi compañera de aventuras y mi mejor amiga. Tu presencia llena de magia 
                                    cada momento que compartimos juntos. Hoy, en tu cumpleaños, quiero honrar todo lo que eres y lo 
                                    que significas para mí.
                                    </p>
                                </div>
                                <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up"
                                    data-aos-delay="200">
                                    <img src="/assets/img/part-a.jpeg" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="tab-2">
                            <div class="row">
                                <div
                                    class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                    <h3>Eres unica</h3>
                                    <p>
                                    Quiero tomarme un momento para recordarte lo única y extraordinaria que eres.
                                    Eres como un destello de luz en un cielo estrellado, brillando con una belleza incomparable.
                                    Tu corazón es un tesoro invaluable, lleno de amor, compasión y bondad que ilumina mi vida 
                                    de una manera única. Cada momento a tu lado es una aventura especial, porque contigo 
                                    todo se vuelve más vibrante y lleno de vida. Eres la esencia de lo que hace que este mundo 
                                    sea hermoso y único. Te amo más de lo que las palabras pueden expresar y estoy agradecido cada
                                    día por tenerte a mi lado. Eres mi única y preciosa joya, y te celebraré siempre.
                                    </p>
                                </div>
                                <div class="col-lg-6 order-1 order-lg-2 text-center">
                                    <img src="/assets/img/part-b.jpeg" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="tab-3">
                            <div class="row">
                                <div
                                    class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                    <h3>Eres mi luna</h3>
                                    <p>
                                    A cada momento a tu lado descubro una verdad innegable: eres mi luna en la noche oscura.
                                    Tu luz ilumina mi camino, disipando las sombras y llenando mi vida de esperanza y amor.
                                    Como la luna en el cielo estrellado, tu presencia es un faro de belleza y serenidad 
                                    en mi mundo. Cada sonrisa tuya es como un rayo de luz en la noche, y cada abrazo es como 
                                    la calidez de la luna en una noche fría. Eres mi guía, mi apoyo y mi compañera en este viaje 
                                    llamado vida. Te amo más allá de las estrellas y siempre estaré agradecido por tener a mi 
                                    luna a mi lado. Eres mi todo y siempre brillarás en mi corazón.
                                    </p>
                                </div>
                                <div class="col-lg-6 order-1 order-lg-2 text-center">
                                    <img src="/assets/img/part-c.jpeg" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="tab-4">
                            <div class="row">
                                <div
                                    class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                    <h3>Eres mi gran amor</h3>
                                    <p>
                                    En cada latido de mi corazón, en cada suspiro, siento la presencia de nuestro amor
                                    un vínculo que trasciende el tiempo y el espacio. Eres mi gran amor, la persona que ha
                                    transformado mi vida con tu ternura, tu bondad y tu luz. Cada momento a tu lado es una 
                                    bendición que atesoro con gratitud y admiración. Eres el sol que ilumina mi día, tu amor 
                                    irradia calidez y alegría en mi vida, haciéndola más brillante y significativa. 
                                    Te amo con toda mi alma y siempre estaré agradecido por el regalo de tenerte a mi lado.
                                    Eres mi gran amor, mi razón de ser y mi mayor inspiración. iluminando cada paso
                                    de nuestro viaje juntos.
                                    </p>
                                </div>
                                <div class="col-lg-6 order-1 order-lg-2 text-center">
                                    <img src="/assets/img/part-d.jpeg" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>

        <footer id="footer" class="footer">
            <div class="footer-content position-relative">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 col-md-6">
                            <div class="footer-info">
                                <h3>Nombre</h3>
                                <strong>Telefono:</strong> +593993198620<br>
                                <strong>Email:</strong> moisesratto100@gmail.com<br>
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-3 footer-links">

                        </div>

                        <div class="col-lg-2 col-md-3 footer-links">
                            <h4>Links</h4>
                            <ul>
                                <li><a href="#" class="active">Inicio</a></li>
                                <li><a href="#felicitaciones">Feliz Cumpleaños</a></li>
                                <li><a href="#love">Love</a></li>
                                <li><a href="/felicitar">Felicitar</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-2 col-md-3 footer-links">

                        </div>

                        <div class="col-lg-2 col-md-3 footer-links">

                        </div>

                    </div>
                </div>
            </div>

            <div class="footer-legal text-center position-relative">
                <div class="container">
                    <div class="copyright">
                        &copy; Copyright <strong><span>Moixex</span></strong>. All Rights Reserved
                    </div>
                    <div class="credits">
                        Designed by <a>Moises Ratto</a> Distributed by <a>Me</a>
                    </div>
                </div>
            </div>

        </footer>

        <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <div id="preloader"></div>

        <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/assets/vendor/aos/aos.js"></script>
        <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="/assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="/assets/vendor/php-email-form/validate.js"></script>

        <script src="/assets/js/main.js"></script>

</body>

</html>
