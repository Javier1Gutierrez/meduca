<?php
/*
 * File Name: updateEmployee.php
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class updateProduct extends CI_Controller
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
        $this->load->model('products_model');
    }

    //index function
    function index($id)
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
          redirect('products/index/' . $id);
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
