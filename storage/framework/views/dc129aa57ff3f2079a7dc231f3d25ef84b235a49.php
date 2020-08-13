<?php echo $__env->make('layout.principal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php if($alerta): ?>
<h1><?php echo e($alerta); ?></h1>
<?php endif; ?>


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
    <?php $__currentLoopData = $restaurantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $restaurante): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
    <th>
    <div class="img">
    <img  src="<?php echo e($restaurante->url_foto); ?>" class="img-fluid" alt="">
    </div>
    </th>
        <th><?php echo e($restaurante->nombre); ?></th>
        <th><?php echo e($restaurante->ciudad); ?></th>
        <th><?php echo e($restaurante->direccion); ?></th>
        <th>
        <form action="/up_reserva/<?php echo e($restaurante->id); ?>" method="POST" >
                <?php echo e(@csrf_field()); ?>

                
                <input type="date" name="fecha" >
                <input type="submit" class="btn btn-success" value="Reservar">
                
            </form>
        </th> 
        <th>
           <!--<button type="button" class="btn btn-success"> <a class="text-white " href="<?php echo e(action("RestauranteController@reserva", ['id' => $restaurante->id] )); ?>">Reservar</a></button> -->
            <button type="button" class="btn btn-danger"><a class="text-white " href="<?php echo e(action("RestauranteController@delete", ['id' => $restaurante->id])); ?>"> Eliminar</a></button>   
        </th>
        
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>




<hr>

<h1 style="text-align: center"> Añadir un restaurante </h1>

<form action="/up" method="POST">
    <?php echo e(@csrf_field()); ?>

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

<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\wamp64\www\pruebaTecnica\resources\views/restaurante/index.blade.php ENDPATH**/ ?>