<div class="row">
    <ol class="breadcrumb">
        <li><a href="{!! url(config('quarx.backend-route-prefix', 'quarx').'/pages') !!}">Pages</a></li>

            {!! Quarx::breadcrumbs($location) !!}

        <li class="active"></li>
    </ol>
</div>