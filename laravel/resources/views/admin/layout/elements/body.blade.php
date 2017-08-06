@component('admin.layout.default')
<h3>{{$title}}<small>{{$description}}</small></h3>

<div class="panel panel-defaut">
    <div class="panel-body">
    {{$slot}}
    </div>
</div>
    @endcomponent