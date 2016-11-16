<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 class organizacion extends CI_Controller {
     public function __construct()
     {
          parent::__construct();
          $this->load->helper('url');
          $this->load->database();
		   $this->load->library('form_validation');
		    $this->load->library('session');
         echo $this->session->flashdata('msg');
     }

     public function index()
     {
          //load the department_model
          $this->load->model('organizacion_model');
          //call the model function to get the department data
          $orgresult = $this->organizacion_model->get_organizacion_lista();
          $data['orglist'] = $orgresult;
          //load the department_view
          $this->load->view('organizacion_view',$data);
     }
	 public function list_org()
     {
          //load the department_model
          $this->load->model('organizacion_model');
          //call the model function to get the department data
          $orgresult = $this->organizacion_model->get_organizacion_lista();
          $data['orglist'] = $orgresult;
          //load the department_view
          $this->load->view('organizacion_view',$data);
     }


  public function version1()
     {
            $data['modelo_org'] = menu_ul('modelo_org');
      $this->load->view('menu_view', $data);
     }
	 function insert()
    {
        //fetch data from department and designation tables

        $this->form_validation->set_rules('nombre', 'nombre', 'required');
        //$this->form_validation->set_rules('departmentname', 'Nombre del Departamento', 'trim|required|xss_clean|callback_alpha_only_space');
        //$this->form_validation->set_rules('department', 'Department', 'callback_combo_check');
        //$this->form_validation->set_rules('designation', 'Designation', 'callback_combo_check');
        //$this->form_validation->set_rules('hireddate', 'Hired Date', 'required');
        //$this->form_validation->set_rules('salary', 'Salary', 'required|numeric');

        if ($this->form_validation->run() == FALSE)
        {
            //fail validation
            //
            $data = "";
            $this->load->view('organizacion_insert_view', $data);
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

            //insert the form data into database
            $this->db->insert('Organizacion', $data);

            //display success message
            $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Organizacion Agregada!!!</div>');
            redirect('Organizacion/list_org');
        }

    }


    function actualizar($id_org)
    {
      $data['id_org'] = $id_org;

      $this->load->model('organizacion_model');
      $data['orgrecord'] = $this->organizacion_model->get_organizacion_record($id_org);

      //set validation rules
      $this->form_validation->set_rules('direccion', 'direccion', 'required');

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

          //display success message
          $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Organizacion Record is Successfully Updated!</div>');
          redirect('updateorg/index/' . $id_org);
      }
    }

    function modelo_mostrar($id_model)
    {
      $data['id_model'] = $id_model;

      $this->load->model('modelo_org_model');
      $data['modelrecord'] = $this->modelo_org_model->get_modelo_record($id_model);

      //set validation rules
      $this->form_validation->set_rules('valor', 'valor', 'required');

      if ($this->form_validation->run() == FALSE)
      {
          //fail validation
          $this->load->view('update_modelo_view', $data);
      }
      else
      {
          //pass validation
          $data = array(
              'elemento' => $this->input->post('elemento'),
              'valor' => $this->input->post('valor'),

          );

          //update employee record
          $this->db->where('id_model', $id_model);
          $this->db->update('modelo_org', $data);

          //display success message
          $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Organizacion Record is Successfully Updated!</div>');
          redirect('update_modelo_view/index/' . $id_model);
      }
    }


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
