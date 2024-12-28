@props(['poster','description','date','mediaGroupId'])
<div class="card position-relative border-0 overflow-hidden">
    <!-- Poster Image -->
    <img src="{{ $poster }}" alt="Poster" class="card-img h-100 object-fit-cover">

    <!-- Overlay -->
    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column align-items-center justify-content-around bg-dark bg-opacity-75 opacity-0 hover-opacity-100 transition-opacity">
        <!-- Title -->
        <h5 class="text-white text-center mb-3">{{ $description }}</h5>

        <!-- Button -->
        <a href="{{route('frontend.media.detail',['mediaGroupId' => $mediaGroupId])}}" class="btn btn-light fw-bold rounded-pill px-4 py-2">
            <i class="ti-plus"></i>
        </a>

        <!-- Date -->
        <p class="text-white-50 mt-3">{{ $date }}</p>
    </div>
</div>
