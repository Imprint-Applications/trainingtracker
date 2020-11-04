@extends('layouts.master')
@section('content')
@foreach($training as $t)
<h1>Training Details for {{ $t->training_title }}</h1>
@endforeach
@endsection
