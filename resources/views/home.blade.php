@extends('layouts.app')

@section('content')
<h1>home</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id eligendi sit iusto ullam, numquam sed, quos, possimus vel labore soluta quo sequi amet tempore perferendis consectetur est. Possimus, eius incidunt.</p>
@endsection

@section('sidebar')
@parent
<p>This is appended to the sidebar</p>
@endsection