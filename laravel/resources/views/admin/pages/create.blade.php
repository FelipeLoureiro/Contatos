@component('admin.layout.elements.body')
    @slot('title')<p>Contatos</p>  @endslot
    @slot('description') @endslot

    <form action="{{route('pages.store')}}" class="form-horizontal" method="post">
        @include('admin.pages.form')
    </form>

    <a href="{{route('pages.index')}}" class="btn btn-xs btn-primary">Voltar</a>

@endcomponent

