@extends('adminlte::page')

@section('title', 'Detalhes do Plano')

@section('content_header')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href=""><i class="fa fa-home" aria-hidden="true"></i>
</a></li>
    <li class="breadcrumb-item"><a href="{{ route('plans.index') }}">Planos</a></li>
    <li class="breadcrumb-item"><a href="{{ route('plans.show', $plan->url) }}">{{ $plan->name }}</a>
</li>
    <li class="breadcrumb-item"><a href="{{ route('details.plan.index', $plan->url)}}">Detalhes</a></li>
</ol>
    <h1>Detalhes do Plano {{ $plan->name }} <a href="{{ route('details.plan.create', $plan->url) }}" class="btn btn-dark"><i class="fa fa-plus-square" aria-hidden="true"></i> CADASTRAR</a></h1>
@stop
@section('content')

    <div class="card">
        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th width="180px">Ações</th>  
                    </tr>
                </thead>
                <tbody>
                    @foreach($details as $detail)
                        <tr>
                            <td>
                                {{ $detail->name }}
                            </td>
                            <td style="width=10px;">
                                <a href="{{ route('detail.edit', $plan->url) }}" class="btn btn-warning">Editar</a>
                                <a href="{{ route('plans.show', $plan->url) }}" class="btn btn-warning">Exibir</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card footer">
            <!-- paginação-->
        </div>
    </div>
@stop