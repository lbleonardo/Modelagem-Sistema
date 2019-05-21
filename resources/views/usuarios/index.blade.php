Inicio (Entrada de dados)

<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Sexo</th>
            <th>Data Nascimento</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Login</th>
            <th>Senha</th>
            <th>Ações</th>
        </tr>
    </thead>

    <tbody>
    @foreach($usuarios as $usuario)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$usuario->Nome}}</td>
            <td>{{$usuario->Sexo}}</td>
            <td>{{$usuario->Data_Nascimento}}</td>
            <td>{{$usuario->E-mail}}</td>
            <td>{{$usuario->Telefone}}</td>
            <td>{{$usuario->Login}}</td>
            <td>{{$usuario->Senha}}</td>
            <td>Editar | Apagar</td>
        </tr>
    @endforeach
    </tbody>

</table>