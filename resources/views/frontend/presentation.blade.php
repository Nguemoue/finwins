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

                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-xl-6 col-xxl-6">
                    <div class="presentation-container">
                        <div class="px-4">
                            <div class="">
                                <!-- Image de Martine-Cécile Ngo Nyemb-Wisman -->
                                <div class="text-justify mb-4"><img class="img-fluid img-thumbnail" style="object-fit: cover;max-height: 400px"  src="{{$founderPosterUrl}}" alt="logo"></div>
                            </div>
                            <div class="">
                                <div>
                                    <h3> {{$founderName}} </h3>
                                    <p class="text-justify">
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
