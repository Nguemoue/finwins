@extends('layouts.classic.classic')

@section('content')
    <main>
        <div class="pager-header">
            <div class="container">
                <div class="page-content">
                    <h2>Contact Us</h2>
                    <p>Help today because tomorrow you may be the one who <br>needs more helping!</p>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('frontend.home')}}">Home</a></li>
                        <li class="breadcrumb-item active">Contact</li>
                    </ol>
                </div>
            </div>
        </div>
        <section class="contact-section padding">
            <div id="google_map"></div>
            <div class="container">
                <div class="row contact-wrap align-items-baseline">

                    <div class="col-md-6 xs-padding">
                        <div class="contact-form">
                            <h3>Laissez nous un message</h3>
                            <p>Pour toute question, n'hésitez pas à entrer en contact avec nous
                                en utilisant le formulaire ci-dessous ou nos coordonnées,
                                numéros de téléphone, fax, e-mail se trouvant à votre droite</p>
                            <form action="{{route('api.contact.store')}}" method="post" id="ajax_form"
                                  class="form-horizontal">
                                <div class="form-group colum-row row">
                                    <div class="col-sm-6">
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Name"
                                               required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="email" id="email" name="email" class="form-control"
                                               placeholder="Email"
                                               required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                <textarea id="message" name="message" cols="30" rows="5" class="form-control message"
                                          placeholder="Message" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <button id="submit" class="default-btn" type="submit">Envoyer le message
                                        </button>
                                    </div>
                                </div>
                                <div id="form-messages" class="alert" role="alert"></div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 xs-padding">
                        <div class="contact-info">
                            <h3>Coordonees</h3>
                            <p>Tel: {{$phoneNumber}}</p>
                            <p>Fax: {{$faxNumber}}</p>
                            <p>E-Mail: {{$email}}</p>
                            <h3>Reseaux Sociaux</h3>
                            <hr>
                            <h3>Soutiens et dons</h3>
                            <p>Numero de compte: {{$bankAccount}}</p>
                            <div class="card">
                                <div class="card-header">DONATEURS</div>
                                <div class="card-body">
                                    <ul>
                                        @foreach($givers as $giver)

                                            <li>{{$giver->name}} - {{$giver->address}}</li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection


@push('scripts')
    <script src="{{asset('assets/js/contact.js')}}"></script>
@endpush
