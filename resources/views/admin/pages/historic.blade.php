@extends('admin.inc.app', ['activePage' => 'historic', 'titlePage' => __('Histórico')])

@section('content')
<div class="content">
    <div class="container-fluid">
        @include('includes.alerts')
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="card-title ">Histórico </h4>
                                <p class="card-category">Histórico de todas as transações</p>

                            </div>
                            {{-- <div class="col-md-6">
                                <div class="dropdown float-right">
                                    <form class="navbar-form">
                                        <div class="input-group no-border">
                                            <input type="text" value="" class="form-control" placeholder="Buscar...">
                                            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                                <i class="material-icons">search</i>
                                                <div class="ripple-container"></div>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <th>Cliente: {{$user->name}}</th>
                                    <th>CPF: {{$user->cpf}}</th>
                                    <th>Telefone: {{$user->fone}}</th>
                                </thead>
                            </table>
                            <table class="table">
                                <thead class="text-primary">
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Tipo
                                    </th>
                                    <th>
                                        Valor
                                    </th>
                                    <th>
                                        Saldo anterior
                                    </th>
                                    <th>
                                        Saldo atual
                                    </th>
                                    <th>
                                        Data
                                    </th>
                                </thead>
                                <tbody>
                                    @forelse ($data as $item)
                                    <tr {{ $item->type == 'O' ? "style=color:brown" : ''}}>
                                        <td>
                                            {{$item->id}}
                                        </td>
                                        <td>
                                            @if ($item->type == 'I')
                                            Depósito
                                            @endif
                                            @if ($item->type == 'O')
                                            Retirada
                                            @endif
                                        </td>
                                        <td>
                                            R${{number_format($item->amount, 2 ,',','')}}
                                        </td>
                                        <td>
                                            R${{number_format($item->total_before, 2 ,',','')}}
                                        </td>
                                        <td>
                                            R${{number_format($item->total_after, 2 ,',','')}}
                                        </td>
                                        <td>
                                            {{date('d/m/Y H:i:s', strtotime($item->created_at))}}
                                        </td>
                                    </tr>
                                    @empty
                                    <tr style="text-align: center">
                                        <td colspan="6">Nenhuma encontrada no momento!</td>
                                    </tr>
                                    @endforelse

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection