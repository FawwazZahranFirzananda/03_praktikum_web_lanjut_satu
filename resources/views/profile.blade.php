@extends('adminlte::page')

@section('title', 'Profile')

@section('content_header')
<h1>Profile</h1>
@stop

@section('content')
<p>{{$nim}}</p>
<p>Fawwaz Zahran Firzananda</p>
<P>TI - 2E</P>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop

@section('footer')
<p class="text-center">Fawwaz Zahran Firzananda</p>
@stop