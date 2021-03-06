<div class="form-group">
  <label for="sigla">Sigla</label>
  <input type="text" class="form-control" name="sigla" id="sigla"
         value="{{ $institution->sigla ?? old('sigla', ) }}">
</div>

<div class="form-group">
  <label for="nome">Nome</label>
  <input type="text" class="form-control" name="nome" id="nome"
         value="{{ $institution->nome ?? old('nome') }}">
</div>

<div class="form-group">
  <label for="unidade">Unidade</label>
  <input type="text" class="form-control" name="unidade" id="unidade"
         value="{{ $institution->unidade ?? old('unidade') }}">
</div>

<div class="form-group">
  <label for="local">Local</label>
  <input type="text" class="form-control" name="local" id="local"
         value="{{ $institution->local ?? old('local') }}">
</div>
