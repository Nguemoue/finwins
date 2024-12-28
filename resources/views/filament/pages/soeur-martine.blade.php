<x-filament-panels::page>
    <h1>Contenu pour la page de soeur martine</h1>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    {{ $this->form }}

</x-filament-panels::page>
