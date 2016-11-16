<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 class products extends CI_Controller {
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
          $this->load->model('products_model');
          //call the model function to get the department data
          $prodresult = $this->products_model->get_products_list();
          $data['prodlist'] = $prodresult;
          //load the department_view
          $this->load->view('products_view',$data);
     }
	 public function list_products()
     {
          //load the department_model
          $this->load->model('products_model');
          //call the model function to get the department data
          $prodresult = $this->products_model->get_products_list();
          $data['prodlist'] = $prodresult;
          //load the department_view
          $this->load->view('products_view',$data);
     }

	 function insert()
    {
        //fetch data from department and designation tables

        $this->form_validation->set_rules('name', 'name', 'required');
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
            $this->load->view('product_insert_view', $data);
        }
        else
        {
            //pass validation
            $data = array(
                'name' => $this->input->post('name'),
                'price' => $this->input->post('price'),
                'image' => $this->input->post('image'),

            );

            //insert the form data into database
            $this->db->insert('products', $data);

            //display success message
            $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Producto Agregado!!!</div>');
            redirect('products/list_products');
        }

    }

    function actualizar($id)
    {
      $data['id'] = $id;

      $this->load->model('products_model');
      $data['prodrecord'] = $this->products_model->get_product_record($id);

      //set validation rules
      $this->form_validation->set_rules('name', 'name', 'required');

      if ($this->form_validation->run() == FALSE)
      {
          //fail validation
          $this->load->view('update_produc_view', $data);
      }
      else
      {
          //pass validation
          $data = array(
              'name' => $this->input->post('name'),
              'price' => $this->input->post('price'),
              'image' => $this->input->post('image'),

          );

          //update employee record
          $this->db->where('id', $id);
          $this->db->update('products', $data);

          //display success message
          $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Product Record is Successfully Updated!</div>');
          redirect('updateProduct/index/' . $id);
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
