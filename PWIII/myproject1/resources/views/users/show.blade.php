<div>
@extends('layouts.admin')

@section('content')
<div class="card mt-4 mb-4 border-light shadow">
    <div class="card-header hstack gap-2">
        <span>Listar Usuários</span>
        <span class="ms-auto">
            <a href="{{ route('user.create') }}" class="btn btn-success btn-sm">Cadastrar</a>
        </span>
    </div>
    <div class="card-body">
        <x-alert />
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col" class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <th>{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td class="text-center">
                            <a href="{{ route('user.show', ['user' => $user->id]) }}" class="btn btn-primary btn-sm">Visualizar</a>
                            <a href="{{ route('user.edit', ['user' => $user->id]) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form method="POST" action="{{ route('user.destroy', ['user' => $user->id]) }}" class="d-inline">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja apagar este registro?')">Apagar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">Nenhum usuário encontrado.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
</div>

@extends('layouts.admin')
@section('content')
 <div class="card mt-4 mb-4 border-light shadow">
 <div class="card-header hstack gap-2">
 <span>Visualizar Usuário</span>
 <span class="ms-auto d-sm-flex flex-row">
 <a href="{{ route('user.index') }}" class="btn btn-info
btn-sm me-1">Listar</a>
 <a href="{{ route('user.edit', ['user' => $user->id]) }}"
class="btn btn-warning btn-sm me-1">Editar</a>
 <form method="POST" action="{{ route('user.destroy',
['user' => $user->id]) }}">
 @csrf
@method('delete')
<button type="submit" class="btn btn-danger btn-sm
me-1"
 onclick="return confirm('Tem certeza que deseja apagar este registro?')">Apagar</button>
 </form>
 </span>
 </div>
 <div class="card-body">
 <x-alert />
 <dl class="row">
 <dt class="col-sm-3">ID</dt>
 <dd class="col-sm-9">{{ $user->id }}</dd>
 <dt class="col-sm-3">Nome</dt>
 <dd class="col-sm-9">{{ $user->name }}</dd>
 <dt class="col-sm-3">E-mail</dt>
 <dd class="col-sm-9">{{ $user->email }}</dd>
 <dt class="col-sm-3">Cadastrado</dt>
 <dd class="col-sm-9">{{ \Carbon\Carbon::parse($user->created_at)->format('d/m/Y H:i:s') }}</dd>
 <dt class="col-sm-3">Editado</dt>
 <dd class="col-sm-9">{{ \Carbon\Carbon::parse($user->updated_at)->format('d/m/Y H:i:s') }}</dd>
 </dl>
 </div>
 </div>
@endsection

@extends('layouts.admin')
@section('content')
 <div class="card mt-4 mb-4 border-light shadow">
 <div class="card-header hstack gap-2">
 <span>Editar Usuário</span>
 <span class="ms-auto d-sm-flex flex-row">
 <a href="{{ route('user.index') }}" class="btn btn-info
btn-sm me-1">Listar</a>
 <a href="{{ route('user.show', ['user' => $user->id]) }}"
class="btn btn-primary btn-sm me-1">Visualizar</a>
 </span>
 </div>
 <div class="card-body">
 <x-alert />
 <form action="{{ route('user-update', ['user' => $user->id])
}}" method="POST" class="row g-3">
 @csrf
 @method('PUT')
 <div class="col-md-12">
 <label for="name" class="form-label">Nome</label>
 <input type="text" name="name" class="form-control"
id="name" placeholder="Nome completo"
 value="{{ old('name', $user->name) }}">
 </div>
 <div class="col-md-6">
 <label for="email" class="form-label">E-mail</label>
 <input type="email" name="email" class="form-control"
id="email"
 placeholder="Melhor e-mail do usuário" value="{{
old('email', $user->email) }}">
 </div>
 <div class="col-md-6">
 <label for="password" class="formlabel">Senha</label>
 <input type="password" name="password" class="formcontrol" id="password"
 placeholder="Senha com no mínimo 6 caracteres"
value="{{ old('password') }}">
 </div>
 <div class="col-12">
 <button type="submit" class="btn btn-warning btnsm">Salvar</button>
 </div>
 </form>
 </div>
 </div>



