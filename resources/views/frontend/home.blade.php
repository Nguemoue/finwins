@extends('layouts.classic.classic')

@section('content')
<main>
    <section class="bg-grey bd-bottom circle">
        <div class="container-fluid">
            <div class="row">
                <div
{{--                    class="col-sm-12 col-md-8 col-xl-8 col-lg-8 col-xxl-8 mx-auto"--}}
                >
                    <section class="slider-section">
                        <div class="slider-wrapper">
                            <div id="main-slider" class="nivoSlider">
                                <img src="{{asset('assets/img/slider-1.jpg')}}" alt title="#slider-caption-1"/>
                                <img src="{{asset('assets/img/slider-2.jpg')}}" alt title="#slider-caption-2"/>
                                <img src="{{asset('assets/img/slider-3.jpg')}}" alt title="#slider-caption-3"/>
                            </div>
                            <div id="slider-caption-1" class="nivo-html-caption slider-caption">
                                <div class="display-table">
                                    <div class="table-cell">
                                        <div class="container">
                                            <div class="slider-text">
                                                Description
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="slider-caption-2" class="nivo-html-caption slider-caption">
                                <div class="display-table">
                                    <div class="table-cell">
                                        <div class="container">
                                            <div class="slider-text">
                                                <h1 class="wow cssanimation fadeInTop" data-wow-delay="1s" data-wow-duration="800ms">
                                                    Together we <br>can make a Difference</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="slider-caption-3" class="nivo-html-caption slider-caption">
                                <div class="display-table">
                                    <div class="table-cell">
                                        <div class="container">
                                            <div class="slider-text">

                                                <p class="wow cssanimation fadeInTop" data-wow-delay="1s">Help today because tomorrow you
                                                    may be the one who needs helping! <br>Forget what you can get and see what you can give.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="mt-4 text-center">
                        FINS-WINS
                        L’Asbl Femmes Interface Nord-Sud (F.I.N.S) ou Women Interface North-South (W.I.N.S) est fondée en 2008. Elle est conçue comme un mouvement de réflexion et d’actions concrètes en faveur de la promotion de genre au développement.

                        Elle ambitionne de renforcer l’autonomisation (empowerment) des femmes dans les activités socioéconomiques, politiques et culturelles.

                        La philosophie générale de FINS-WINS est basée sur les principes de justice, de complémentarité entre les genres, de réciprocité dans les échanges Nord-Sud et de Co-développement harmonieux entre les peuples.
                    </div>
                    <div class="mt-4 text-center">
                        <x-frontend.home-objectives/>
                    </div>
                </div>

            </div>

        </div>
    </section>
</main>
@endsection
