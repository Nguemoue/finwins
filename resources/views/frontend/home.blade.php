@extends('layouts.classic.classic')

@section('content')
    <main>
        <section class="bg-grey bd-bottom circle">
            <div class="row">
                <div class="col-12">
                    <section class="slider-section">
                        <div class="slider-wrapper">
                            <div id="main-slider" class="nivoSlider">
                                @for($i= 1; $i <= 5; $i++)
                                    <img class="slider-img" src="{{asset('assets/img/sld'.$i.'.png')}}" alt
                                         title="#slider-caption-{{$i}}"/>
                                @endfor
                            </div>

                            @for($i= 1; $i <= 5; $i++)
                                <div id="slider-caption-{{$i}}" class="nivo-html-caption slider-caption">
                                    <div class="display-table">
                                        <div class="table-cell">
                                            <div class="container">
                                                <div class="slider-text">
                                                    {{--                                                        <h1 class="wow cssanimation fadeInTop" data-wow-delay="1s" data-wow-duration="800ms">For description {{$i}}</h1>--}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </section>
                </div>
                <div class="container">
                    <div class="mt-4 text-justify">
                        FINS-WINS
                        L’Asbl Femmes Interface Nord-Sud (F.I.N.S) ou Women Interface North-South (W.I.N.S) est
                        fondée en 2008. Elle est conçue comme un mouvement de réflexion et d’actions concrètes en
                        faveur de la promotion de genre au développement.

                        Elle ambitionne de renforcer l’autonomisation (empowerment) des femmes dans les activités
                        socioéconomiques, politiques et culturelles.

                        La philosophie générale de FINS-WINS est basée sur les principes de justice, de
                        complémentarité entre les genres, de réciprocité dans les échanges Nord-Sud et de
                        Co-développement harmonieux entre les peuples.
                    </div>
                    <div class="">
                        <div class="card-body">
                            <div class="mt-4 text-justify">
                                <h2 class="text-center">Objectif</h2>
                                <x-frontend.home-objectives/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </main>
@endsection

@push('stylesheets')
    <style>
        .slider-img {
            background-color: red;
            filter: contrast(20);
            backdrop-filter: blur(10px);
        }
    </style>
@endpush
