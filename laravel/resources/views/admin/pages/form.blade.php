{!! csrf_field() !!}
<div class="form-group">
    <label for="title" class="control-label col-sm-2">Nome</label>
    <div class="col-sm-2">
        <input type="text" name="nome" id="nome" class="form-control" value="{{ $page->nome ?? '' }}" placeholder="Nome...">
    </div>
</div>
<div class="form-group">
    <label for="title" class="control-label col-sm-2">Telefone</label>
    <div class="col-sm-2">
        <input type="text" name="telefone" id="telefone" class="form-control" value="{{ $page->telefone ?? '' }}" placeholder="Telefone...">
    </div>
</div>
<div class="form-group">
    <label for="title" class="control-label col-sm-2">E-mail</label>
    <div class="col-sm-2">
        <input type="text" name="email" id="email" class="form-control" value="{{ $page->email ?? '' }}" placeholder="E-mail...">
    </div>
</div>

<div class="form-group">
    <label for="title" class="control-label col-sm-2">Categoria</label>
    <div class="col-sm-2">
        <select type="text" name="categoria" id="categoria" class="form-control" value="{{ $page->categoria ?? '' }}" placeholder="">
            <option value="Família">Família</option>
            <option value="Trabalho">Trabalho</option>
        </select>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
        <input type="submit" value="Salvar" class="btn btn-primary">
    </div>
</div>