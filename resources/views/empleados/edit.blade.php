<<form method="post" action="{{url('/empleados/'.$empleado->id)}}" enctype="multipart/form-data">

{{csrf_field()}}
{{method_field('PATCH')}}

    <label for="Nombre">{{'Nombre'}}</label>
    <input type="text" name="Nombre" id="Nombre" value="{{$empleado->Nombre}}">
    <br />
    <label for="ApellidoPaterno">{{'Apellido Paterno'}}</label>
    <input type="text" name="ApellidoPaterno" id="ApellidoPaterno" value="{{$empleado->ApellidoPaterno}}">
    <br />
    <label for="ApellidoMaterno">{{'Apellido Materno'}}</label>
    <input type="text" name="ApellidoMaterno" id="ApellidoMaterno" value="{{$empleado->ApellidoMaterno}}">
    <br />
    <label for="Correo">{{'Correo'}}</label>
    <input type="email" name="Correo" id="Correo" value="{{$empleado->Correo}}">
    <br />
    <img src="{{asset('storage').'/'.$empleado->Foto}}" alt="" width="200">
            
    <br />
    <input type="file" name="Foto" id="Foto" value="">
    <br />
    <input type="submit" value="Editar">
    <a href="{{url('empleados')}}" >Regresar</a>

    </form> 