@extends('layouts.app')

@section('title')
    About Page
@endsection

@section('main')
    @if (count($students) > 0)
    <ul>
    @foreach ($students as $student)
        @if ($loop->first)
            <li>Inizio della lista</li>
        @endif
        <li>{{ $loop->index }} - {{ $student }}</li>
    @endforeach
    </ul>
    @else
    <p>NON Ci sono studenti</p>
    @endif
@endsection


