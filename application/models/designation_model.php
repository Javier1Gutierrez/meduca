<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class designation_model extends CI_Model{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }

     //read the department list from db
     function get_designation_list()
     {
          //$sql =  'select department_name, employee_name,employee_no, salary from tbl_department, tbl_employee where tbl_department.department_id = tbl_employee.department_id';
          //$query = $this->db->query($sql);
             $this->db->select('designation_id');
             $this->db->select('designation_name');
			 $this->db->from('tbl_designation');
			 $query = $this->db->get();
             $result = $query->result();
		  
		  
		  $result = $query->result();
          return $result;
     }
}