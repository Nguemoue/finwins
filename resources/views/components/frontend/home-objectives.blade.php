<div >
    <ul style="list-style-type: upper-latin" class="d-flex flex-row gap-1 flex-wrap my-4">
        @foreach($objectives as $objective)
            <li >
                {{str($objective->content)->toHtmlString()}}
            </li>
        @endforeach
    </ul>
</div>
