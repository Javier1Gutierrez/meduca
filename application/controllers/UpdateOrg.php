<?php
/*
 * File Name: updateEmployee.php
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class updateorg extends CI_Controller
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
        $this->load->model('organizacion_model');
    }

    //index function
    function index($id_org)
    {
      $data['id_org'] = $id_org;

      $this->load->model('organizacion_model');
      $data['orgrecord'] = $this->organizacion_model->get_organizacion_record($id_org);

      //set validation rules
      $this->form_validation->set_rules('nombre', 'nombre', 'required');

      if ($this->form_validation->run() == FALSE)
      {
          //fail validation
          $this->load->view('update_org_view', $data);
      }
      else
      {
          //pass validation
          $data = array(
              'nombre' => $this->input->post('nombre'),
              'direccion' => $this->input->post('direccion'),
              'Numemp' => $this->input->post('Numemp'),
              'indicetec' => $this->input->post('indicetec'),
              'telefono' => $this->input->post('telefono'),

          );

          //update employee record
          $this->db->where('id_org', $id_org);
          $this->db->update('Organizacion', $data);



          $this->session->set_flashdata('msg','<div class="alert alert-success text-center">La Organizacion ha sido Actualizada con Éxito!</div>');

          redirect('organizacion/index/' . $id_org);


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
