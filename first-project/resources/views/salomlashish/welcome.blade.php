@extends('layout.main')
@section('content')
Salom,
@if($name) {{ $name }} @else Admin @endif!
<hr />
@foreach($arr as $value)
{{ $value }},
@endforeach
@switch($name)
@case('Shaxzodbek')
@break
@case('Azizbek')
@break
@default
@break
@endswitch

xayr {{ route('first-route', ['name' => 'Gov.uz']) }}
@endsection