@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('plans.index') }}"><i class="fa fa-home" aria-hidden="true"></i>
</a></li>
    <li class="breadcrumb-item"><a href="{{ route('plans.index') }}">Planos</a></li>
</ol>
    <h1>Planos <a href="{{ route('plans.create') }}" class="btn btn-dark"><i class="fa fa-plus-square" aria-hidden="true"></i> CADASTRAR</a></h1>
@stop
@section('content')

    <div class="card">
        <div class="card-header">
            <form action="{{ route('plans.search') }}" method="POST" class="form form-inline">
                @csrf
                <input type="text" name="filter" placeholder="Nome" class="form-control">
                <button type="submit" class="btn btn-dark"><i class="fa fa-filter" aria-hidden="true"></i> Filtrar</button>
            </form>
        </div>
        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th width="300px">Ações</th>  
                    </tr>
                </thead>
                <tbody>
                    @foreach($plans as $plan)
                        <tr>
                            <td>
                                {{ $plan->name }}
                            </td>
                            <td>
                                {{ $plan->price}}
                            </td>
                            <td style="width=10px;">
                                <a href="{{ route('plans.edit', $plan->url) }}" class="btn btn-warning">Editar</a>
                                <a href="{{ route('plans.show', $plan->url) }}" class="btn btn-warning">Exibir</a>
                                <a href="{{ route('details.plan.index', $plan->url) }}" class="btn btn-warning">Detalhes</a>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop