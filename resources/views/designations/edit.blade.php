@extends('master')

@section('content')
@parent
<div class="border rounded bg-light">
  <h3 class="ml-2 mt-2">Título</h3>
  <div class="p-4">
    <form method="POST" action="{{ route('designations.update', $designation->id) }}">
      @csrf
      @method('PUT')
      @include('designations.form')
      <button type="submit" class="btn btn-info">Atualizar</button>
    </form>
  </div>
</div>
@endsection
