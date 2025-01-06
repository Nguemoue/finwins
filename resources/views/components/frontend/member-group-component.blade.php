<div class="p-2 mb-5">
    <h2 class="text-underline underline">{{$groupName}}</h2>
    <div class="row">
        @foreach($members as $member)
            <div class="col-sm-12 col-md-6 col-xl-4 col-xxl-3 col-lg-6">
                <x-frontend.member-group-item-component :member="$member"/>
            </div>
        @endforeach
    </div>
</div>


