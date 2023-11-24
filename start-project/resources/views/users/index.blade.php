<h2>Lista de Users</h2>
<a href="{{ route('user.create') }}"><h4>Novo User</h4></a>
<table>
<thead>
<tr>
<th>ID</th>
<th>NOME</th>
<th>E-MAIL</th>
<th>CURSO</th>
<th>INFO</th>
<th>EDITAR</th>
<th>REMOVER</th>
</tr>
</thead>
<tbody>
<!-- Funcionalidade Blade / Laço Repetição -->
<!-- Percorre o array users enviado pela Controller -->
@foreach ($users as $item)
<tr>
<!-- Acessa os campos de cada item do array -->
<td>{{ $item['id'] }}</td>
<td>{{ $item['nome'] }}</td>
<td>{{ $item['email'] }}</td>
<td>{{ $item['curso'] }}</td>
<td><a href="{{ route('user.show', $item['id']) }}">info</a></td>
<td><a href="{{ route('user.edit', $item['id']) }}">editar</a></td>
<td>
<form action="{{ route('user.destroy', $item['id']) }}"
method="POST">
<!-- Token de Segurança -->
<!-- Define o método de submissão como delete -->
@csrf
@method('DELETE')
<input type='submit' value='remover'>
</form>
</td>
</tr>
@endforeach
</tbody>
</table>