
@component('admin.layout.elements.body')
    @slot('title')  @endslot
    @slot('description')<a>Cadastrados</a>@endslot



    <div class="btn-group btn-group-justified" role="group"  aria-label="...">
    <a href="{{route('pages.create')}}" class="btn btn-primary ">Inserir</a>
    </div>
<table class="table table-houver">
    <thead>
    <tr >
        <th>ID</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th>E-mail</th>
        <th>Categoria</th>
        <th>Ações</th>

    </tr>
    </thead>
    <tbody>
    @foreach($pages as $page)
    <tr >
        <td>{{$page->id}}</td>
        <td>{{$page->nome}}</td>
        <td>{{$page->telefone}}</td>
        <td>{{$page->email}}</td>
        <td>{{$page->categoria}}</td>
        <td><a href="{{route('pages.show', $page->id)}}" class="btn btn-primary ">
                <span class="glyphicon glyphicon-pencil"></span>
            </a>
        </td>
    </tr>
        @endforeach
    </tbody>
</table>
    {{$pages->links()}}

    @endcomponent