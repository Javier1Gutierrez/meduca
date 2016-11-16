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
        <legend>Actualizacion de Datos - Organizacion - modelo</legend>
        <?php
        $attributes = array("class" => "form-horizontal", "id_model" => "prodForm", "id_org" => "prodForm");
        echo form_open("updatemodel/index/" . $id_model, $attributes);?>
        <fieldset>

          <div class="form-group">
          <div class="row colbox">

          <div class="col-md-4">
              <label for="id_model" class="control-label">ID modelo </label>
          </div>
          <div class="col-md-8">
              <input id="id_model" name="id_model" type="text" disabled="disabled" class="form-control"  value="<?php echo $modelrecord[0]->id_model; ?>" />
              <span class="text-danger"><?php echo form_error('id_model'); ?></span>
          </div>
          </div>
          </div>

          <div class="form-group">
          <div class="row colbox">
          <div class="col-md-4">
              <label for="id_org" class="control-label">ID organizacion </label>
          </div>
          <div class="col-md-8">
              <input id="id_org" name="id_org" type="text" placeholder="id_org" class="form-control"  value="<?php echo $modelrecord[0]->id_org; ?>" />
              <span class="text-danger"><?php echo form_error('id_org'); ?></span>
          </div>
          </div>
          </div>


******************
<div class="form-group">
<div class="row colbox">
<div class="col-md-4">
    <label for="elemento" class="control-label">elemento</label>
</div>
<div class="col-md-8">

    <?php
    $attributes = 'class = "form-control" id = "elemento"';
    echo form_dropdown('elemento',$elemento,set_value('elemento', $modelrecord[0]->id_model),$attributes);?>
    <span class="text-danger"><?php echo form_error('elemento'); ?></span>
</div>
</div>
</div>


-------------------
        <!--  <div class="form-group">
          <div class="row colbox">
          <div class="col-md-4">
              <label for="elemento" class="control-label">elemento</label>
          </div>
          <div class="col-md-8">
              <input id="elemento" name="elemento" placeholder="elemento" type="text" class="form-control"  value="<?php echo set_value('elemento', $modelrecord[0]->elemento); ?>" />
              <span class="text-danger">?php echo form_error('elemento'); ?></span>
          </div>
          </div>
        </div>-->
---------------------

          <div class="form-group">
          <div class="row colbox">
          <div class="col-md-4">
              <label for="valor" class="control-label">Valor</label>
          </div>
          <div class="col-md-8">
              <input id="valor" name="valor" placeholder="valor" type="text" class="form-control"  value="<?php echo set_value('valor', $modelrecord[0]->valor); ?>" />
              <span class="text-danger"><?php echo form_error('valor'); ?></span>
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
