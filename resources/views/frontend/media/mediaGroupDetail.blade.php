@php use App\Models\Agenda; @endphp
@extends('layouts.classic.classic')

@section('content')
    {{--if media type is image--}}
    <section class="gallery-section bg-grey bd-bottom padding">
        <div class="container">
            <div class="gallery-items row">
                @foreach($mediaGroup->media as $media)
                    <div class="col-lg-4 col-sm-6 single-item branding design">
                        <x-frontend.media-item :type="$mediaGroup->mediaType->name" :media_url="$media->link"/>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
