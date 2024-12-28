@props(['type','media_url'])
<div class="gallery-wrap">
    <img src="{{$media_url}}" alt="gallery">
    <div class="hover">
        <a class="img-popup" data-gall="galleryimg" href="{{$media_url}}"><i class="ti-image"></i></a>
    </div>
</div>
