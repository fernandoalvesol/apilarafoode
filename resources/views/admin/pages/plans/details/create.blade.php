@extends('adminlte::page')

@section('title', 'Adicionar novo detalhe ao plano')

@section('content_header')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href=""><i class="fa fa-home" aria-hidden="true"></i>
</a></li>
    <li class="breadcrumb-item"><a href="{{ route('plans.index') }}">Planos</a></li>
    <li class="breadcrumb-item"><a href="{{ route('plans.show', $plan->url) }}">{{ $plan->name }}</a>
</li>
    <li class="breadcrumb-item"><a href="{{ route('details.plan.create', $plan->url)}}">Adicionar</a></li>
</ol>
    <h1>Adiconar detalhe ao plano {{ $plan->name }}</h1>
@stop
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('details.plan.store', $plan->url) }}" method="post">
                @include('admin.pages.plans.details._partials.form')
            </form>
        </div>
    </div>
@endsection
