<div class="row">
    <ul style="list-style-type: upper-alpha">
        @foreach($objectives as $objective)
            <div class="col-sm-12 col-xs-12 col-md-6 col-xl-6 col-lg-6 col-xxl-6">
                <li>{{str($objective->content)->toHtmlString()}}</li>
            </div>
        @endforeach
    </ul>
</div>

