@extends('master.main')

@section('content')

   @component('components.tables.table', ['players'=>$players])
   @endcomponent


@endsection
