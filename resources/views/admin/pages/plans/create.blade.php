@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('plans.index') }}"><i class="fa fa-home" aria-hidden="true"></i>
</a></li>
    <li class="breadcrumb-item"><a href="{{ route('plans.index') }}">Planos</a></li>
</ol>
    <h1>Cadastrar Novo Plano</h1>
@stop


@section('content')
<div class="card">
        <div class="card-header">
            <form action="{{ route('plans.store') }}" class="form" method="POST">
                @csrf
                @include('admin.pages.plans._partials.form')
                
            </form>

        </div>

    </div>
@endsection