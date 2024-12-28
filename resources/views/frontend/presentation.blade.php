@extends('layouts.classic.classic')

@section('content')
    <section class="team-section bg-grey bd-bottom circle  padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>Declaration de Fondation</h2>
                <span class="heading-border"></span>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-xl-6 col-xxl-6">
                    <div class="presentation-container h2">

                        <!-- Texte de présentation -->
                        <div class="presentation-text">
                            {{str($founderDeclaration)->toHtmlString()}}
                        </div>

                        <!-- Section fondatrice -->
                        <div class="founder-section">
                            <div class="separator"></div>
                            <p class="founder-name">La fondatrice</p>
                            <p class="founder-name">Martine-Cécile Ngo Nyemb-Wisman</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-xl-6 col-xxl-6">
                    <div class="presentation-container">
                        <div class="">
                            <div class="image-container">
                                <!-- Image de Martine-Cécile Ngo Nyemb-Wisman -->
                                <div class="text-center mb-4"><img src="{{$founderPosterUrl}}" alt="logo"></div>
                                <div>
                                    <p> {{$founderName}} </p>

                                    <p>
                                        {{str($founderPresentation)->toHtmlString()}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
@endsection
