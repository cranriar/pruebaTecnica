@include('layout.principal')

@if ($alerta)
<h1>{{ $alerta }}</h1>
@endif


<h1 style="text-align: center">Restaurantes</h1>




<hr>

<table class="table">
    <thead>
    <tr>
        <th scope="col">Imagen</th>
        <th scope="col">Nombre</th>
        <th scope="col">Ciudad</th>
        <th scope="col">direccion</th>
        <th scope="col">Fecha de Reserva</th>
        <th scope="col">Accion</th>
        
    </tr>
</thead>
<tbody>
    @foreach ($restaurantes as $restaurante )
    <tr>
    <th>
    <div class="img">
    <img  src="{{$restaurante->url_foto}}" class="img-fluid" alt="">
    </div>
    </th>
        <th>{{ $restaurante->nombre }}</th>
        <th>{{ $restaurante->ciudad }}</th>
        <th>{{ $restaurante->direccion }}</th>
        <th>
        <form action="/up_reserva/{{$restaurante->id}}" method="POST" >
                {{ @csrf_field() }}
                
                <input type="date" name="fecha" >
                <input type="submit" class="btn btn-success" value="Reservar">
                
            </form>
        </th> 
        <th>
           <!--<button type="button" class="btn btn-success"> <a class="text-white " href="{{ action("RestauranteController@reserva", ['id' => $restaurante->id] ) }}">Reservar</a></button> -->
            <button type="button" class="btn btn-danger"><a class="text-white " href="{{ action("RestauranteController@delete", ['id' => $restaurante->id]) }}"> Eliminar</a></button>   
        </th>
        
    </tr>
    @endforeach
</tbody>
</table>




<hr>

<h1 style="text-align: center"> Añadir un restaurante </h1>

<form action="/up" method="POST">
    {{ @csrf_field() }}
    <div class="form-grup col-6">
    <label for="exampleFormControlInput1" for="name" >Nombre</label>
    <input class="form-control" id="exampleFormControlInput1" type="text" name="nombre">
    </div>
    
    <div class="form-grup col-6">
    <label for="exampleFormControlInput1" for="des" >Descripcion</label>
    <input class="form-control" id="exampleFormControlInput1" type="text" name="des">
    </div>
    <div class="form-grup col-6">
    <label for="exampleFormControlInput1" for="ciudad" >Ciudad</label>
    <input class="form-control" id="exampleFormControlInput1" type="text" name="ciudad">
    </div>
    <div class="form-grup col-6">
    <label for="exampleFormControlInput1" for="dir" >Direccion</label>
    <input class="form-control" id="exampleFormControlInput1" type="text" name="dir">
    </div>
    <div class="form-grup col-6">
    <label for="exampleFormControlInput1" for="url" >Imagen</label>
    <input class="form-control" id="exampleFormControlInput1" type="text" name="url">
    </div>
    <br>
    <div class="form-grup col-6">
    <input class="btn btn-success"   type="submit" value="Enviar">
    </div>
</form>

@include('layout.footer')
