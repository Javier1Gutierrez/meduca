<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeIgniter | Insertando Departamentos en MySQL Database</title>
    <!--link the bootstrap css file-->
    <link href="<?php echo base_url("assets/bootstrap/css/bootstrap.css"); ?>" rel="stylesheet" type="text/css" />
    <!-- link jquery ui css-->
    <link href="<?php echo base_url('assets/jquery-ui-1.11.2/jquery-ui.min.css'); ?>" rel="stylesheet" type="text/css" />
    <!--include jquery library-->
    <script src="<?php echo base_url('assets/js/jquery-1.10.2.js'); ?>"></script>
    <!--load jquery ui js file-->
    <script src="<?php echo base_url('assets/jquery-ui-1.11.2/jquery-ui.min.js'); ?>"></script>
        
    <style type="text/css">
    .colbox {
        margin-left: 0px;
        margin-right: 0px;
    }
    </style>
    
    <script type="text/javascript">
    //load datepicker control onfocus
    $(function() {
        $("#hireddate").datepicker();
    });
    </script>
    
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-offset-3 col-lg-6 col-sm-6 well">
        <legend>Add Employee Details</legend>
        <?php 
        $attributes = array("class" => "form-horizontal", "id" => "departmentform", "name" => "departmentform");
        echo form_open("department/insert", $attributes);?>
        <fieldset>
            
            <div class="form-group">
            <div class="row colbox">
            
            <div class="col-lg-4 col-sm-4">
                <label for="departmentid" class="control-label">Id Departamento</label>
            </div>
            <div class="col-lg-8 col-sm-8">
                <input id="departmentid" name="departmentid" placeholder="departmentid" type="text" class="form-control"  value="<?php echo set_value('departmentid'); ?>" />
                <span class="text-danger"><?php echo form_error('departmentid'); ?></span>
            </div>
            </div>
            </div>

            <div class="form-group">
            <div class="row colbox">
            <div class="col-lg-4 col-sm-4">
                <label for="departmentname" class="control-label">Department Name</label>
            </div>
            <div class="col-lg-8 col-sm-8">
                <input id="departmentname" name="departmentname" placeholder="departmentname" type="text" class="form-control"  value="<?php echo set_value('departmentname'); ?>" />
                <span class="text-danger"><?php echo form_error('departmentname'); ?></span>
            </div>
            </div>
            </div>
            
            

            
            
            <div class="form-group">
            <div class="col-sm-offset-4 col-lg-8 col-sm-8 text-left">
                <input id="btn_add" name="btn_add" type="submit" class="btn btn-primary" value="Insert" />
                <input id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-danger" value="Cancel" />
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