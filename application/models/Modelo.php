<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Modelo extends CI_Model{
    	public function construct(){
        	parent::__construct();
    	}

    	public function c_simple(){
    		$sql = $this->db->query('SELECT first_name, last_name FROM employees WHERE emp_no<"10020"');
   			return $sql->result();
    	}

    	public function c_mediana(){
    		$sql = $this->db->query('SELECT emp_no, salary FROM salaries WHERE salary>70000 AND salary<70010');
   			return $sql->result();
    	}

    	public function c_grande(){
    		$sql = $this->db->query('SELECT first_name, last_name, dept_name, title FROM
             departments as d JOIN dept_emp as de  JOIN employees as e JOIN titles as t
             WHERE  d.dept_name = "Development" AND
                    d.dept_no = de.dept_no AND
                    e.emp_no = de.emp_no AND
                    t.emp_no = e.emp_no AND
                    t.title = "Engineer"
                    ');
            return $sql->result();
        }
}



/*
public function c_grande(){
            $sql = $this->db->query('SELECT first_name, last_name, dept_name, title FROM
             departments as d JOIN dept_emp as de  JOIN employees as e JOIN titles as t
             WHERE  d.dept_name = "Development" AND
                    d.dept_no = de.dept_no AND
                    e.emp_no = de.emp_no AND
                    e.emp_no > 10121 AND                    
                    e.emp_no < 10150 AND
                    t.emp_no = e.emp_no AND
                    t.title = "Engineer"
                    ');
            return $sql->result();
        }
public function c_grande(){
            $sql = $this->db->query('SELECT first_name, last_name, dept_name FROM
             departments as d JOIN dept_emp as de  JOIN employees as e
             WHERE  d.dept_name = "Development" AND
                    d.dept_no = de.dept_no AND
                    e.emp_no = de.emp_no');
         return $sql->result();
    }
*/

// public function consulta_compleja(){
//         $sql = $this->db->query('SELECT first_name, last_name, salary, title, de.from_date , de.to_date, dept_name FROM
//             titles as t JOIN employees as e  JOIN salaries as s JOIN dept_emp as de JOIN departments as d
//             WHERE t.emp_no = e.emp_no AND
//                 s.emp_no = e.emp_no AND
//                 e.emp_no = de.emp_no AND
//                 de.dept_no = d.dept_no AND 
//                 e.emp_no < 90500 AND
//                 e.emp_no > 90000');
//         return $sql->result();
//     }