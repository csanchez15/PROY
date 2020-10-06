<form action="<?= base_url('Users/store') ?>" method="POST">
	<h3>Datos del Cliente</h3>
	<hr>
	<div class="form-group">
        <div class="form-row">
        		
				
	
        		<div class="col-4">
        			<label for="">Correo</label>
        			<input type="text" name="correo" class="form-control" placeholder="correo@mail.com" value="<?= set_value('correo') ?>">
					<div class="text-danger"><?= form_error('correo') ?></div>
        		</div>

        	</div>
    
        	<div class="form-row">
				<div class="col-5">
        			<label for="">Curso</label>
        			<select name="curso" class="custom-select">
        				<option value="">Seleccione el Servicio</option>
        				<option value="1" <?= set_value('curso') == '1' ? 'selected' : ''; ?> >Mate</option>
        				<option value="2" <?= set_value('curso') == '2' ? 'selected' : ''; ?> >Fisica</option>
        			
        			</select>
					<div class="text-danger"><?= form_error('curso') ?></div>
					
        		</div>

        		<div class="col">
        			<label for="">Fecha de Asesoria </label>
        			<input name="fech" class="form-control" type="date"  value="<?= set_value('fech') ?>">
					<div class="text-danger"><?= form_error('fech') ?></div>
				</div>
			
        	
        	</div>
    </div>
    <div class="form-group">
    	<div class="form-row">
		<div class="col-5">
        			<label for="">Seccion</label>
        			<select name="sec" class="custom-select">
        				<option value="">Seleccione Estado</option>
        				<option value="1"<?= set_value('sec') == '1' ? 'selected' : ''; ?> >E</option>
        				<option value="2" <?= set_value('sec') == '2' ? 'selected' : ''; ?>>F</option>
        				
        			</select>
					<div class="text-danger"><?= form_error('sec') ?></div>
        		</div>
    		<div class="col-5">
    			<label for="">Notas</label>
				<input name="notas" type="text_Area" class="form-control" placeholder="Agregar Notas Adicionales" value="<?= set_value('notas') ?>">
				<div class="text-danger"><?= form_error('notas') ?></div>
			</div>
    	</div>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Agregar Usuario">
    </div>
</form>
