<?php if($msg = $this->session->flashdata('msg')): ?>
  <div class="alert alert-success text-center" role="alert">
    <?= $msg ?>
  </div>
<?php endif; ?>
<h1 class="text-center">Tabla de lista de Clientes registrados</h1>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Correo</th>
      <th scope="col">Curso</th>
      <th scope="col">Dia</th>
      <th scope="col">Seccion</th>
      <th scope="col">Notas</th>
     
      <th scope="col">acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($data as $item): ?>
    <tr>
      <th scope="row"><?= $item->id ?></th>
    
      <td><?= $item->correo1 ?></td>
      <td><?= $item->id_curso ==3 ? 'Asesoria_Normal': 'Asesoria_Premium' ?></td>
      <td><?= $item->dia ?></td>
      <td><?= $item->id_seccion?></td>
      <td><?= $item->notas ?></td>
      <td>
          <a class="btn btn-warning" href="<?=base_url('users/edit/'.$item->id)?>" role="button">Editar</a> / <a class="btn btn-danger" href="#" data-id="<?=$item->id ?>" id="delete" role="button">Eliminar</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<?= $this->pagination->create_links() ?>



