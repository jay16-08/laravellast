@extends('layouts.admin')
use Carbon\Corbon

@section('content')
<p>
    This is test home page  asfd
    {{ $dt = Carbon::now(); }}
</p>
@endsection