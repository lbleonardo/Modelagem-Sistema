Seção para criar usuarios
<form action="{{ url('/usuarios') }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}

<label for="Nome">{{'Nome'}}</label>
<input type="text" name="Nome" id="Nome" value="">
<br/>

<label for="Sexo">{{'Sexo'}}</label>
<input type="text" name="Sexo" id="Sexo" value="">
<br/>

<label for="Data_Nascimento">{{'Data_Nascimento'}}</label>
<input type="text" name="Data_Nascimento" id="Data_Nascimento" value="">
<br/>

<label for="E-mail">{{'E-mail'}}</label>
<input type="email" name="E-mail" id="E-mail" value="">
<br/>

<label for="Telefone">{{'Telefone'}}</label>
<input type="text" name="Telefone" id="Telefone" value="">
<br/>

<label for="Login">{{'Login'}}</label>
<input type="text" name="Login" id="Login" value="">
<br/>

<label for="Senha">{{'Senha'}}</label>
<input type="text" name="Senha" id="Senha" value="">
<br/>

<input type="submit" value="Enviar">

</form>