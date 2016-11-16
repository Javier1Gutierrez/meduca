<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class organizacion_model extends CI_Model{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }

     //read the department list from db
     function get_organizacion_lista()
     {
          //$sql =  'select department_name, employee_name,employee_no, salary from tbl_department, tbl_employee where tbl_department.department_id = tbl_employee.department_id';
          //$query = $this->db->query($sql);

          $this->db->select('id_org');
          $this->db->select('nombre');
          $this->db->select('direccion');
          $this->db->select('Numemp');
          $this->db->select('indicetec');
          $this->db->select('telefono');
         $this->db->from('Organizacion');
             $query = $this->db->get();
             $result = $query->result();


		  $result = $query->result();
          return $result;
     }


     function get_organizacion_record($id_org)
       {
           $this->db->where('id_org', $id_org);
           $this->db->from('Organizacion');
           $query = $this->db->get();
           return $query->result();
       }
}
