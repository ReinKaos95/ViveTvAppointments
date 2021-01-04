
    <h1>Pagina principal creacion</h1>
 <div class="main-login main-center">
            {!! Form::open(['method' => 'POST', 'action'=>'adminUsersController@store','files'=>true]) !!}

            <table>
                <tr>
                    <td>{!! Form::label('name', 'Name');!!}</td></tr>
                    <tr><td> {!!Form::text('name');!!}</td></tr>
                    <tr><td>{!! Form::label('email', 'E-Mail Address');!!}</td></tr>
                    <tr><td>{!!Form::text('email');!!}</td></tr>
                    <tr><td>{!! Form::label('password', 'Password');!!}</td></tr>
                    <tr><td>{!!Form::password('password');!!}</td></tr>
                    <tr><td>{!! Form::label('password', 'Confirm password');!!}</td></tr>
                    <tr><td>{!!Form::password('password');!!}</td></tr>
                    <tr><td>{!! Form::label('role', 'Role');!!}</td></tr>
                    <tr><td>{!!Form::text('role_id');!!}</td></tr>
                    <tr><td>{!! Form::label('foto', 'Foto');!!}</td></tr>
                    <tr><td>{!!Form::file('photo_route');!!}</td></tr>
                    <td>{!!Form::submit('Click Me!');!!}</td>
                    <td>{!!Form::reset('Click Me!');!!}</td>
                </tr>
            </table>

                 

                    </div>   
  {!! Form::close() !!}


</body>
</html>



