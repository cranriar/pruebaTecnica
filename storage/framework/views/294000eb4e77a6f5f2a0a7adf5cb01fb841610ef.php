<form action="/up_reserva/<?=$id?>" method="POST" >
    <?php echo e(@csrf_field()); ?>

    
    <input type="date" name="fecha" >
    <input type="submit" value="Enviar">
    
</form>
<?php /**PATH C:\wamp64\www\pruebaTecnica\resources\views/restaurante/fecha.blade.php ENDPATH**/ ?>