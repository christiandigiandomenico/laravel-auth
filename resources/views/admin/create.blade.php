@extends('layouts.app')

@section('content')
<div class="container py-5">
    
    <h1>Crea un nuovo progetto</h1>

    <form action="{{route('admin.store')}}" method="POST">
        @csrf
        
        <div class="mb-3">
            <label for="name" class="form-label">Nome progetto</label>
            <input type="text" class="form-control @error('name') is-invalid  @enderror" name="name" id="name" value="{{old('name')}}">
            @error('name')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione progetto</label>
            <textarea type="text" class="form-control @error('description') is-invalid  @enderror" name="description" id="description" >{{old('description')}}</textarea>
            @error('description')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="thumbnail" class="form-label">Immagine progetto</label>
            <input type="text" class="form-control @error('thumbnail') is-invalid  @enderror" name="thumbnail" id="thumbnail"  value="{{old('thumbnail')}}">
            @error('thumbnail')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="technologies" class="form-label">Tecnologie usate</label>
            <input type="text" class="form-control @error('technologies') is-invalid  @enderror" name="technologies" id="technologies"  value="{{old('technologies')}}">
            @error('technologies')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="link" class="form-label">Link progetto</label>
            <input type="text" class="form-control @error('link') is-invalid  @enderror" name="link" id="link"  value="{{old('link')}}">
            @error('link')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>
@endsection