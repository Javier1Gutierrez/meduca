<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizacion de Datos - Empleados | CodeIgniter Update Query</title>

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
        <legend>Actualizacion de Datos - Productos</legend>
        <?php
        $attributes = array("class" => "form-horizontal", "id" => "prodForm", "name" => "prodForm");
        echo form_open("updateProduct/index/" . $id, $attributes);?>
        <fieldset>

          <div class="form-group">
          <div class="row colbox">

          <div class="col-md-4">
              <label for="id" class="control-label">Product Id </label>
          </div>
          <div class="col-md-8">
              <input id="id" name="id" type="text" disabled="disabled" class="form-control"  value="<?php echo $prodrecord[0]->id; ?>" />
              <span class="text-danger"><?php echo form_error('id'); ?></span>
          </div>
          </div>
          </div>

            <div class="form-group">
            <div class="row colbox">

            <div class="col-md-4">
                <label for="employeeno" class="control-label">Nombre Producto </label>
            </div>
            <div class="col-md-8">
                <input id="name" name="name" placeholder="name" type="text" class="form-control"  value="<?php echo $prodrecord[0]->name; ?>" />
                <span class="text-danger"><?php echo form_error('name'); ?></span>
            </div>
            </div>
            </div>

            <div class="form-group">
            <div class="row colbox">
            <div class="col-md-4">
                <label for="employeename" class="control-label">Producto Precio</label>
            </div>
            <div class="col-md-8">
                <input id="price" name="price" placeholder="price" type="text" class="form-control"  value="<?php echo set_value('price', $prodrecord[0]->price); ?>" />
                <span class="text-danger"><?php echo form_error('price'); ?></span>
            </div>
            </div>
            </div>

            <div class="form-group">
            <div class="row colbox">
            <div class="col-md-4">
                <label for="hireddate" class="control-label">Producto Imagen</label>
            </div>
            <div class="col-md-8">
                <input id="image" name="image" placeholder="image" type="text" class="form-control"  value="<?php echo set_value('hireddate', @date('d-m-Y', @strtotime($prodrecord[0]->image))); ?>" />
                <span class="text-danger"><?php echo form_error('image'); ?></span>

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
