<h2>Cadastrar User</h2>
<form action="{{ route('user.store') }}" method="POST">
<!-- Token de segurança salvo na sessão, verificar o formulário submetido -->
@csrf
<a href="{{route('user.index')}}"><h4>voltar</h4></a>
<label>Nome: </label> <input type='text' name='nome'>
<label>E-mail: </label> <input type='text' name='email'>
<label>Curso: </label> <input type='text' name='curso'>
<input type="submit" value="Salvar">
</form>