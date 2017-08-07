@component('admin.layout.elements.body')
    @slot('title') <p>Contatos</p> @endslot
    @slot('description') @endslot

    <p>
        <small>
            {{--Da para utilizar o -> format('d/m/y')--}}
            Criado em {{$page->created_at}} | Atualizado em {{$page->updated_at}}
        </small>
    </p>

    <h5>{{$page->nome}}</h5>
    <h5>{{$page->telefone}}</h5>
    <h5>{{$page->email}}</h5>
    <h5>{{$page->categoria}}</h5>

    {!! $page->body !!}

    <a href="{{route('pages.index')}}" class="btn btn-xs btn-primary">Voltar</a>
    <a href="{{route('pages.edit', $page->id) }}" class="btn btn-xs btn-primary">Editar</a>
    <form action="{{route('pages.destroy', $page->id)}}" class="form-horizontal" method="post" style="display: inline-block">
        {!! csrf_field() !!}
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" value="Remover" class="btn btn-xs btn-primary">
    </form>
@endcomponent