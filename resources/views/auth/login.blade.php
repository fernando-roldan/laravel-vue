@extends('layouts.app')

@section('content')
    <login-form :login-route="'{{ route('login') }}'" :home-route="'{{ route('home') }}'"></login-form>
@endsection
