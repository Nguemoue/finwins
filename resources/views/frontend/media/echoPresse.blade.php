@php use App\Models\Agenda; @endphp
@extends('layouts.classic.classic')

@section('content')
    <section class="bg-grey bd-bottom   padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>Presse</h2>
                <span class="heading-border"></span>
            </div>
        </div>
        <div class="container">
            @foreach($presses->groupBy('type') as $key=>$group)
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{__($key)}}</h3>
                    </div>
                    <div class="card-body">
                        <table class="table datatables table-bordered  table-hover">
                            <thead>
                            <tr>
                                <th>Intitule</th>
                                <th>Date de publication</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($group as $presse)
                                <tr>
                                    <td><h4>{{$presse->name}}</h4></td>
                                    <td>{{$presse->published_at}}</td>
                                    <td><a href="" class="fa fa-file-pdf-o"> voir le pdf </a></td>
                                </tr>

                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            @endforeach

        </div>
    </section>
@endsection

@push('stylesheets')
    <link rel="stylesheet" href="//cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css">
@endpush
@push('scripts')
    <script src="//cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
    <script defer>
         let table = new DataTable('.datatables');
    </script>
@endpush
