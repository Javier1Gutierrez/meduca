<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class modelo_org_model extends CI_Model{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }

     //read the department list from db
     function get_modelo_lista()
     {
          //$sql =  'select department_name, employee_name,employee_no, salary from tbl_department, tbl_employee where tbl_department.department_id = tbl_employee.department_id';
          //$query = $this->db->query($sql);

          $this->db->select('id_model');
          $this->db->select('id_org');
          $this->db->select('elemento');
          $this->db->select('valor');

          $this->db->from('modelo_org');

             $query = $this->db->get();
             $result = $query->result();


		  $result = $query->result();
          return $result;
     }





     function get_modelo_record($id_model)
       {
           $this->db->where('id_model', $id_model);
           $this->db->from('modelo_org');
           $query = $this->db->get();
           return $query->result();
       }

       function get_modelo_record_all()
          {
              //$this->db->where('employee_no', $empno);
              $this->db->from('Organizacion');
         $this->db->join('Elementos','Elementos.Elementos_id = Organizacion.Elementos_id');
         $this->db->join('modelo_org','modelo_org.modelo_org_id = Organizacion.designation_id');
              $query = $this->db->get();
              return $query->result();
          }
}
