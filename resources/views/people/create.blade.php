@extends('master')

@section('content')
@parent
<div class="border rounded bg-light">
  <h3 class="ml-2 mt-2">Pessoas</h3>
  <div class="p-4">
    <form method="POST" id="formPeople" action="{{ route('people.store') }}">
      @csrf
      @include('people.form')
      <button type="submit" class="btn btn-info mt-3">Salvar</button>
    </form>
  </div>
</div>
@endsection

@section('javascripts_bottom')
<script>

  $(document).ready( function () {
    let row_number = {{ count(old('contato_tipo', $people->contacts->count() ?
      $people->contacts : [''])) }};

    $("#add_row").click(function(e){
      e.preventDefault();
      let new_row_number = row_number - 1;

      $('#contact' + row_number).html($('#contact' +
        new_row_number).html()).find('div.col-sm:first');

      $('#contact-div').append('<div class="row contato" id="contact' +
        (row_number + 1) + '"></div>');

      row_number++;
    });

    $("#delete_row").click(function(e){
      e.preventDefault();
      if(row_number > 1){
        $("#contact" + (row_number - 1)).html('');
        row_number--;
      }
    });

  });
</script>

@endsection
