<h1>editando usuario </h1>


<div class="conteiner-fluid">
<h4>Datos del Cliente</h4>
<form method="POST" action="<?= base_url('Users/update') ?>">
	
	<div class="card">
        <div class="card-body">
        <div class="form-row">


				<div class="form-group col-4">
        			<label for="">Correo</label>
        			<input type="text" name="correo" class="form-control" placeholder="correo@mail.com" value="<?= set_value('correo',isset($user['correo1']) ? $user['correo1']:'')?>">
					<div class="text-danger"><?= form_error('correo') ?></div>
				</div>

				<div >
        			<label for="">id</label>
        			<input type="hidden" name="id" class="form-control"  value="<?= set_value('id',isset($user['id']) ? $user['id']:'')?>">
					
				</div>

				<div class="form-group col-5">
        			<label for="">Curso</label>
        			<input name="curso" class="form-control" type="text"  value="<?= set_value('curso',isset($user['id_curso']) ? $user['id_curso']:'')?>"readonly>
					<div class="text-danger"><?= form_error('curso') ?></div>
				</div>
				<div class="form-group col-6">
        			<label for="">Fecha de Asesoria</label>
        			<input name="fech" class="form-control" type="date"  value="<?= set_value('fech',isset($user['dia']) ? $user['dia']:'')?>">
					<div class="text-danger"><?= form_error('fech') ?></div>
				</div>
				<div class="form-group col-6">
        			<label for="">Seccion</label>
        			<input name="sec" class="form-control" type="tex"  value="<?= set_value('sec',isset($user['id_seccion']) ? $user['id_seccion']:'')?>"readonly>
					<div class="text-danger"><?= form_error('sec') ?></div>
				</div>

				<div class="form-group col-5">
    				<label for="">Notas</label>
					<input name="notas" type="text_Area" class="form-control" placeholder="Agregar Notas Adicionales" value="<?= set_value('notas',isset($user['notas']) ? $user['notas']:'')?>">
					<div class="text-danger"><?= form_error('notas') ?></div>
				</div>
        		

            </div>
        </div>
	</div>
        	
    </div>
        	
    <div class="form-group">
    <input type="submit" class="btn btn-primary btn-lg" value="Actualizar">
    </div>
</form>
