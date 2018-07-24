@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime omnis ipsa aperiam amet excepturi suscipit in labore pariatur iure. Officiis adipisci autem nobis harum alias earum corrupti possimus. At, libero.</p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection