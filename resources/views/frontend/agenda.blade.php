@php use App\Models\Agenda; @endphp
@extends('layouts.classic.classic')

@section('content')
    <section class="team-section bg-grey bd-bottom circle  padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>Agenda</h2>
                <span class="heading-border"></span>
            </div>
        </div>

        <div class="container">
            @foreach($agenda->groupBy(fn(Agenda $agenda) => $agenda->created_at->year) as $year=> $groups)
                <div class="mb-4">
                    <h2 class="text-muted">AGENDA {{$year}}</h2>
                    <div id="accordion-{{$year}}">
                        @foreach($groups as $item)
                            <div class="card">
                                <div style="cursor: pointer" class="card-header cursor-pointer d-flex justify-content-between" id="headingOne" data-toggle="collapse"
                                     data-target="#collapseOne-{{$year}}-{{$item->id}}" aria-expanded="true"
                                     aria-controls="collapseOne">
                                    <h4 class="mb-0 text-capitalize cursor-pointer pointer-events-none">
                                        {{$item->title}}
                                    </h4>
                                    <div class="badge bg-grey p-2">
                                        {{$item->formatedInterval}}
                                    </div>
                                </div>

                                <div id="collapseOne-{{$year}}-{{$item->id}}" class="collapse show"
                                     aria-labelledby="headingOne" data-parent="#accordion-{{$year}}">
                                    <div class="card-body">
                                        {{str($item->content)->toHtmlString()}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
