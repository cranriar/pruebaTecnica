<form action="/up" method="POST">
    <?php echo e(@csrf_field()); ?>

    <label for="name" >Nombre</label>
    <input type="text" name="nombre">
    
    <br>
    <label for="des" >Descripcion</label>
    <input type="text" name="des">
    <br>
    <label for="ciudad" >Ciudad</label>
    <input type="text" name="ciudad">
    <br>
    <label for="dir" >Direccion</label>
    <input type="text" name="dir">
    <br>
    <label for="url" >Imagen</label>
    <input type="text" name="url">
    <br>
    <input type="submit" value="Enviar">
</form><?php /**PATH C:\wamp64\www\pruebaTecnica\resources\views/restaurante/crear.blade.php ENDPATH**/ ?>