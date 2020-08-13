<form action="/up_reserva/<?=$id?>" method="POST" >
    {{ @csrf_field() }}
    
    <input type="date" name="fecha" >
    <input type="submit" value="Enviar">
    
</form>
