@component('admin.layout.elements.body')
    @slot('title') <p>Contatos</p> @endslot
    @slot('description') @endslot

    <form action="{{ route('pages.update', $page->id) }}" class="form-horizontal" method="post">
        <input type="hidden" name="_method" value="PUT">
        @include('admin.pages.form')
    </form>

    <a href="{{ route('pages.show', $page->id) }}" class="btn btn-xs btn-default">Voltar</a>
@endcomponent