<div class="form-group">
  <label for="nome">Cargo</label>
  <input type="text" class="form-control" name="nome" id="nome"
         value="{{ $role->nome ?? old('nome') }}">
</div>
