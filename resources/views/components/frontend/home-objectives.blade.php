<div class="row">
    @foreach($objectives as $objective)
        <div class="col-sm-12 col-xs-12 col-md-6 col-xl-6 col-lg-6 col-xxl-6">
            {{str($objective->content)->toHtmlString()}}
        </div>
    @endforeach
</div>

