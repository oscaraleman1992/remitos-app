

<!doctype html>
<html lang="es">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Formulario</title>
  </head>
  <img src="img/provincia.png" alt="" height="80px">
  <header class="text-center bg-info">
    <h2 class="display-5 font-weight-bold">Formulario de entrega y recepcion de equipamiento</h2>
</header>
  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
  <p>Lorem ipsum dolor sit, amet consectetur .</p>
  <div class="text-center bg-info">
    <h4 class="display-5 font-weight-bold">Receptor</h4>
  </div>
  <div class="table-responsive">
    <table class="table table-bordered" id="productos-table">
        <thead class="thead-dark">
		<tbody>
			<tr>
				<th>Fila 1, Columna 1</th>
				<td>Fila 1, Columna 2</td>
			</tr>
			<tr>
				<th>Fila 2, Columna 1</th>
				<td>Fila 2, Columna 2</td>
			</tr>
			<tr>
				<th>Fila 3, Columna 1</th>
				<td>Fila 3, Columna 2</td>
			</tr>
			<tr>
				<th>Fila 4, Columna 1</th>
				<td>Fila 4, Columna 2</td>
			</tr>
		</tbody>
	</table>
</div>
  
  <div class="table-responsive">
    <table class="table table-bordered" id="productos-table">
        <thead class="thead-dark">
            <tr>
                <th><?php echo app('translator')->get('Marca'); ?></th>
                 <th><?php echo app('translator')->get('Modelo'); ?></th>
                <th><?php echo app('translator')->get('Numero de serie'); ?></th>
                <th><?php echo app('translator')->get('Rack'); ?></th>
                <th><?php echo app('translator')->get('Cable'); ?></th>
             
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                       <td><?php echo e($producto->marca); ?></td>
            <td><?php echo e($producto->modelo); ?></td>
            <td><?php echo e($producto->numero); ?></td>
            <td><?php echo e($producto->rack); ?></td>
            <td><?php echo e($producto->cable); ?></td>
                   </tr>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
  </div>
  <div class="flex-grow-1">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Columna 1</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <span class="input-group-text">With textarea</span>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="text-center bg-info">
    <h4 class="display-5 font-weight-bold">Firma de conformidad</h4>
  </div>
  <div class="table-responsive">
    <table class="table table-bordered" id="productos-table">
        <thead class="thead-dark">
		<tbody>
			<tr>
				<th>Fila 1, Columna 1</th>
				<th>Fila 1, Columna 2</th>
			</tr>
			<tr>
				<td class="w-50"></td>
				<td></td>
			</tr>
			<tr>
				<td>Fila 3, Columna 1</td>
				<td>Fila 3, Columna 2</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
			</tr>
		</tbody>
	</table>
</div>
  </div>
  
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
    



<?php /**PATH C:\Users\Usuario\Desktop\app-trabajo\remitosTest\resources\views/productos/myPDF.blade.php ENDPATH**/ ?>