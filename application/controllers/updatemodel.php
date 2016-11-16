<?php
/*
 * File Name: updateEmployee.php
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class updatemodel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->database();
        $this->load->library('form_validation');
        //load the employee model
        $this->load->model('modelo_org_model');
    }

    //index function
    function index($id_model)
    {
      $data['id_model'] = $id_model;

      $this->load->model('modelo_org_model');
      $data['modelrecord'] = $this->modelo_org_model->get_modelo_record($id_model);

      //set validation rules
      $this->form_validation->set_rules('elemento', 'elemento', 'required');

      if ($this->form_validation->run() == FALSE)
      {
          //fail validation
          $this->load->view('update_modelo_view', $data);
      }
      else
      {
          //pass validation
          $data = array(
            'id_org' => $this->input->post('id_org'),
              $this->form_validation->set_rules('elemento', 'elemento', 'callback_combo_check');
              'valor' => $this->input->post('valor'),



          );

          //update employee record
          $this->db->where('id_model', $id_model);
          $this->db->update('modelo_org', $data);



          $this->session->set_flashdata('msg','<div class="alert alert-success text-center">La Organizacion ha sido Actualizada con Éxito!</div>');

          redirect('organizacion/index/' . $id_model);


      }


    }
  

    //custom validation function for dropdown input
    function combo_check($str)
    {
        if ($str == '-SELECT-')
        {
            $this->form_validation->set_message('combo_check', 'Valid %s Name is required');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }

    //custom validation function to accept only alpha and space input
    function alpha_only_space($str)
    {
        if (!preg_match("/^([-a-z ])+$/i", $str))
        {
            $this->form_validation->set_message('alpha_only_space', 'The %s field must contain only alphabets or spaces');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }
}
?>
