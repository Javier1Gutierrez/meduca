<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class products_model extends CI_Model{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }

     //read the department list from db
     function get_department_employee_list()
     {
          //$sql =  'select department_name, employee_name,employee_no, salary from tbl_department, tbl_employee where tbl_department.department_id = tbl_employee.department_id';
          //$query = $this->db->query($sql);
             $this->db->select('department_name');
             $this->db->select('employee_name');
			 $this->db->select('employee_no');
			 $this->db->select('salary');
			 $this->db->from('tbl_department');
			 $this->db->join('tbl_employee','tbl_department.department_id = tbl_employee.department_id');
             $query = $this->db->get();
             $result = $query->result();


		  $result = $query->result();
          return $result;
     }
	      function get_products_list()
     {
          //$sql =  'select department_name, employee_name,employee_no, salary from tbl_department, tbl_employee where tbl_department.department_id = tbl_employee.department_id';
          //$query = $this->db->query($sql);
          $this->db->select('id');
          $this->db->select('name');
          $this->db->select('price');
          $this->db->select('image');
			 $this->db->from('products');
			 $query = $this->db->get();

		  $result = $query->result();
          return $result;
     }

     function get_product_record($id)
       {
           $this->db->where('id', $id);
           $this->db->from('products');
           $query = $this->db->get();
           return $query->result();
       }
}
