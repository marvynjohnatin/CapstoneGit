<?php

class Admission_model extends CI_Model
{
    public function createstudent()
    {
        $number = $this->input->post('number');
        if ($number <= 0) {
            redirect('admission/addstudent');
        } else {
            for ($count = 1; $count <= $number; $count++) {
                $fname = $this->input->post('fname-' . $count);
                $mname = $this->input->post('mname-' . $count);
                $lname = $this->input->post('lname-' . $count);
                $admission = $this->input->post('admission-' . $count);
                $age = $this->input->post('age-' . $count);
                $birthday = $this->input->post('birthday-' . $count);
                $gender = $this->input->post('gender-' . $count);
                $address = $this->input->post('address-' . $count);
                $birthplace = $this->input->post('birthplace-' . $count);
                $contactno = $this->input->post('contactno-' . $count);
                $email = $this->input->post('email-' . $count);
                $level = $this->input->post('level-' . $count);
                $year = $this->input->post('year-' . $count);
                $data = array(
                    'fname' => $fname,
                    'lname' => $lname,
                    'mname' => $mname,
                    'age' => $age,
                    'dateofbirth' => $birthday,
                    'gender' => $gender,
                    'address' => $address,
                    'placeofbirth' => $birthplace,
                    'contactno' => $contactno,
                    'email' => $email,
                    'current_level' => $level,
                    'current_year' => $year,
                    'status_enrolled' => 'No',
                    'password' => 'itsmorefunatsja',
                    'account_status' => 'Pending'
                );
                $query = $this->db->insert('student', $data);
                $lastid = $this->db->insert_id();
                $formedid = $admission . $lastid;
                $data = array(
                    'studentnumber' => str_pad($formedid, 8, "0")
                );
                $this->db->where('id', $lastid);
                $this->db->update('student', $data);
            }
        }
        return true;
    }

    public function getpendingstudents($limit = FALSE, $offset = false)
    {
        if ($limit) {
            $this->db->limit($limit, $offset);
        }
        $this->db->where('account_status', 'Pending');
        $query = $this->db->get('student');
        return $query->result_array();
    }

    public function numberpending()
    {
        $this->db->where('account_status', 'Pending');
        $query = $this->db->get('student');
        return $query->num_rows();
    }

    public function getsearchedstudents($search, $limit = FALSE, $offset = false)
    {
        if ($limit) {
            $this->db->limit($limit, $offset);
        }
        $this->db->where('account_status', 'Pending');
        $this->db->like('fname', $search);
        $query = $this->db->get('student');
        return $query->result_array();
    }

    public function numbersearched($search)
    {
        $this->db->where('account_status', 'Pending');
        $this->db->like('fname', $search);
        $query = $this->db->get('student');
        return $query->num_rows();
    }

    public function numberofparents()
    {
        $query = $this->db->get('parent');
        return $query->num_rows();
    }

    public function getparents($limit=FALSE, $offset = false)
    {
        if($limit){
            $this->db->limit($limit,$offset);
        }
        $query = $this->db->get('parent');
        return $query->result_array();
    }

    public function getsearchedparent($search, $limit = FALSE, $offset = false)
    {
        if ($limit) {
            $this->db->limit($limit, $offset);
        }
        $this->db->like('fname', $search);
        $query = $this->db->get('parent');
        return $query->result_array();
    }

    public function numbersearchedparent($search)
    {
        $this->db->like('fname', $search);
        $query = $this->db->get('parent');
        return $query->num_rows();
    }

    public function getparentactivation($parentid){
        $this->db->where('Id',$parentid);
        $query = $this->db->get('parent');
        return $query->result_array();
    }

    public function getstudentactivation($studentid){
        $this->db->where('Id',$studentid);
        $query = $this->db->get('student');
        return $query->result_array();
    }

    public function activatestudentrecord($studentid){
        $data = array(
            'account_status' => 'First'
        );
        $this->db->where('Id', $studentid);
        $this->db->update('student', $data);
    }
}