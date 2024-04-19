@extends('layouts.app')

@section('content')
<div class="container py-5">
    
    <h1>Amministrazione</h1>

    <a href="{{route('admin.create')}}" class="btn btn-primary">Aggiungi un progetto</a>
    

</div>
@endsection