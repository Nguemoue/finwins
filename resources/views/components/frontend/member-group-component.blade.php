<div class="card bg-grey p-2 mb-4">
    <h2>{{$groupName}}</h2>
    @foreach($members as $member)
        <x-frontend.member-group-item-component :member="$member"/>
    @endforeach
</div>


