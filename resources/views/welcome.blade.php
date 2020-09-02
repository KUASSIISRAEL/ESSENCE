@extends('layouts.app' ,['title' => 'Login'])
@section('css')
    @parent
@endsection
@section('content')
   <div id="app">
       <login-component></login-component>
   </div>
@endsection
@section('js')
    @parent
@endsection
