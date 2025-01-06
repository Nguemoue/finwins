@extends('layouts.classic.classic')
@section('content')
    <main>
        <section class="team-section bg-grey bd-bottom circle shape padding">
            <div class="container">
                <div class="section-heading text-center mb-40">
                    <h2>Portraits de femmes</h2>
                    <span class="heading-border"></span>
                    <p class="mb-2">Parce que l’on ne sera jamais suffisamment reconnaissant, nous avons voulu mettre
                        en lumière les parcours de personnalités excep;onnelles qui défendent leurs idéaux.</p>
                    <p>C’est à travers une série de portraits photographiques que nous vous les présentons ici; Ces
                        femmes d’aujourd’hui, belles de leurs différences et fortes de leurs convictions se sont
                        toutes engagées et sont à nos yeux, les étendards de la diversité. </p>
                </div>
            </div>
        </section>
        <section class="promo-section-2 padding bd-bottom">
            <div class="container">
                <div class="row">
                    @foreach($portraits as $portrait)
                        <div class="col-12 mx-auto mb-4">
                            <div class="portrait-card row">
                                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 text-justify">
                                    <p class="portrait-name">{{ $portrait->name }}</p>
                                    <p class="portrait-bio">{{ $content= str($portrait->bio)->toHtmlString() }}</p>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 text-justify">
                                    <img src="{{ $portrait->poster_url }}" alt="Portrait de {{ $portrait->nom }}"
                                         class="portrait-image">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection

@push('stylesheets')
    <style>
        .portrait-card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .portrait-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .portrait-image {
            width: 100%;
            min-height: 250px;
            object-fit: cover;
        }

        .portrait-name {
            font-size: 1.2rem;
            font-weight: bold;
            color: #333;
        }

        .portrait-bio {
            color: #555;
            font-size: 0.95rem;
        }
    </style>
@endpush
