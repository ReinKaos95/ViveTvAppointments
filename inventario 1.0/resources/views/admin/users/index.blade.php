
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<h1>Pagina principal</h1>
	<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col md-10">
      <h2 class="text-center mb-5">Usuarios listados</h2>
      <table class="table table-bordered table-striped text-center">
 
        <tr>
          <th>Id</th>
          <th>Rol</th>
          <th>Nombre</th>
          <th>Email</th>
          <th>Creado a </th>
          <th>Actualizado a</th>
        </tr>
        @if($users )
        @foreach($users as $user)
        <tr>
          <td>{{$user->id}}</td>
          <td>{{$user->role_id}}</td>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          <td>{{$user->created_at}}</td>
          <td>{{$user->updated_at}}</td>
        </tr>
        @endforeach
        @endif
      </table>
     
    </div>
  </div>
</div>
