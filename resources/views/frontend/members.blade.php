@php use App\Models\Member; @endphp
@extends('layouts.classic.classic')
@section('content')
    <main>

        <section class="promo-section-2 padding bd-bottom">
            <div class="container">
                @foreach($members->groupBy(fn(Member $member) => $member->memberCategory->name) as $groupName=>$groups)
                    <x-frontend.member-group-component :groupName="$groupName" :members="$groups"/>
                @endforeach
            </div>
        </section>
    </main>
@endsection
