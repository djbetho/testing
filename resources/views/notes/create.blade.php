@extends('layout')

@section('content')
    <h1>Create a note</h1>
    
    @include('partials/errors')

    </div>
    <form method="POST" action="{{ url('notes') }}" class="form">
        {!! csrf_field() !!}
        <div class="from-group">
        <textarea name="note" class="form-control" placeholder="write your note here..">{{old('note') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create note</button>
    </form>
@endsection

