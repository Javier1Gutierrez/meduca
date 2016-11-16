<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizacion de Datos - Organizacion | CodeIgniter Update Query</title>

    <style type="text/css">
    .colbox {
        margin-left: 0px;
        margin-right: 0px;
    }
    </style>

</head>
<body>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 well">
        <legend>Actualizacion de Datos - Organizacion</legend>
        <?php
        $attributes = array("class" => "form-horizontal", "id_org" => "prodForm", "nombre" => "prodForm");
        echo form_open("updateOrg/index/" . $id_org, $attributes);?>
        <fieldset>

          <div class="form-group">
          <div class="row colbox">

          <div class="col-md-4">
              <label for="id_org" class="control-label">ID organizacion </label>
          </div>
          <div class="col-md-8">
              <input id="id_org" name="id_org" type="text" disabled="disabled" class="form-control"  value="<?php echo $orgrecord[0]->id_org; ?>" />
              <span class="text-danger"><?php echo form_error('id_org'); ?></span>
          </div>
          </div>
          </div>

            <div class="form-group">
            <div class="row colbox">

            <div class="col-md-4">
                <label for="nombre" class="control-label">Nombre  </label>
            </div>
            <div class="col-md-8">
                <input id="nombre" name="nombre" placeholder="nombre" type="text" class="form-control"  value="<?php echo $orgrecord[0]->nombre; ?>" />
                <span class="text-danger"><?php echo form_error('nombre'); ?></span>
            </div>
            </div>
            </div>

            <div class="form-group">
            <div class="row colbox">
            <div class="col-md-4">
                <label for="direccion" class="control-label">Direccion</label>
            </div>
            <div class="col-md-8">
                <input id="direccion" name="direccion" placeholder="direccion" type="text" class="form-control"  value="<?php echo set_value('direccion', $orgrecord[0]->direccion); ?>" />
                <span class="text-danger"><?php echo form_error('direccion'); ?></span>
            </div>
            </div>
            </div>



            <div class="form-group">
            <div class="row colbox">
            <div class="col-md-4">
                <label for="Numemp" class="control-label">Numero de Empleados</label>
            </div>
            <div class="col-md-8">
                <input id="Numemp" name="Numemp" placeholder="Numemp" type="text" class="form-control"  value="<?php echo set_value('Numemp', $orgrecord[0]->Numemp); ?>" />
                <span class="text-danger"><?php echo form_error('Numemp'); ?></span>
            </div>
            </div>
            </div>



            <div class="form-group">
            <div class="row colbox">
            <div class="col-md-4">
                <label for="indicetec" class="control-label">Indice Técnologico</label>
            </div>
            <div class="col-md-8">
                <input id="indicetec" name="indicetec" placeholder="indicetec" type="text" class="form-control"  value="<?php echo set_value('indicetec', $orgrecord[0]->indicetec); ?>" />
                <span class="text-danger"><?php echo form_error('indicetec'); ?></span>

            </div>
            </div>
            </div>


            <div class="form-group">
            <div class="row colbox">
            <div class="col-md-4">
                <label for="telefono" class="control-label">telefono</label>
            </div>
            <div class="col-md-8">
                <input id="telefono" name="telefono" placeholder="telefono" type="text" class="form-control"  value="<?php echo set_value('telefono', $orgrecord[0]->telefono); ?>" />
                <span class="text-danger"><?php echo form_error('telefono'); ?></span>
            </div>
            </div>
            </div>




            <div class="form-group">
            <div class="col-sm-offset-4 col-md-8 text-left">
                <input id="btn_update" name="btn_update" type="submit" class="btn btn-primary" value="Actualizar" />
                <input id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-danger" value="Cancelar" />
            </div>
            </div>
        </fieldset>

        <?php echo form_close(); ?>
        <?php echo $this->session->flashdata('msg'); ?>

        </div>
    </div>
</div>
</body>
</html>
