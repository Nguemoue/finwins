@php use App\Models\Agenda; @endphp
@extends('layouts.classic.classic')

@section('content')
    <section class="team-section bg-grey bd-bottom circle padding">
        <div class="section-heading text-center">
            <h2>Media de categorie {{$mediaType->name}}</h2>
            <span class="heading-border"></span>
        </div>
    </section>

    <section class="gallery-section bg-grey bd-bottom padding">
        <div class="container">
            <div class="gallery-items row">
                @foreach($mediaGroups as $item)
                    <div class="col-lg-4 col-sm-6 single-item branding design">
                        <x-frontend.gallery-item :media-group-id="$item->id" :date="$item->published_at" :poster="$item->poster_url"
                                                 :description="$item->description"/>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection


@push('stylesheets')
    <style>
        .card .card-img {
            object-fit: cover;
        }

        .card .hover-opacity-100 {
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }

        .card:hover .hover-opacity-100 {
            opacity: 1;
        }

    </style>
@endpush
