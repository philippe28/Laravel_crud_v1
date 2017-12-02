@extends('funcionario.layout')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Laravel 5.5 CRUD Example from scratch</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('funcionario.create') }}"> Create New Article</a>

            </div>

        </div>

    </div>


    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif


    <table class="table table-bordered">

        <tr>

            <th>No</th>

            <th>Nome</th>

            <th>Cep</th>

            <th width="280px">Action</th>

        </tr>

    @foreach ($funcionario as $funcionario)

    <tr>

        <td>{{ ++$i }}</td>

        <td>{{ $item->nome}}</td>

        <td>{{ $item->cep}}</td>

        <td>{{ $item->endereco}}</td>

        <td>{{ $item->bairro}}</td>

        <td>{{ $item->estado}}</td>

        <td>

            <a class="btn btn-info" href="{{ route('funcionario.show',$funcionario->id) }}">Show</a>

            <a class="btn btn-primary" href="{{ route('funcionario.edit',$funcionario->id) }}">Edit</a>

            {!! Form::open(['method' => 'DELETE','route' => ['funcionario.destroy', $funcionario->id],'style'=>'display:inline']) !!}

            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

            {!! Form::close() !!}

        </td>

    </tr>

    @endforeach

    </table>


    {!! $funcionario->links() !!}

@endsection