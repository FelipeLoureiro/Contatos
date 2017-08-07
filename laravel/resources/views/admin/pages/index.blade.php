
@component('admin.layout.elements.body')
    @slot('title')  @endslot
    @slot('description')<a>Cadastrados</a>@endslot

    {{--Buscar--}}
    <p class="pull-right">
    <div class="row">
        {{--Inserir--}}
        <div class="btn-group pull-right" role="group"  aria-label="...">
            <a href="{{route('pages.create')}}" class="btn btn-primary ">Inserir</a>
        </div>
        {{--Fim--}}
        <div class="col-lg-3">
            <div class="input-group">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Buscar</button>
      </span>
                <input  type="text" class="form-control" placeholder="">

            </div>
        </div>
    </div>
    </p>

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