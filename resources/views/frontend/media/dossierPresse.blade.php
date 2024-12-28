@php use App\Models\Agenda; @endphp
@extends('layouts.classic.classic')

@section('content')
    <section class="team-section bg-grey bd-bottom circle  padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>Dossier de presse</h2>
                <span class="heading-border"></span>
            </div>
        </div>
        <div class="container">
            {{$content}}
        </div>

    </section>
@endsection
