<?php

class Admission_model extends CI_Model{
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

    public function getpendingstudents()
    {
        $this->db->where('account_status','Pending');
        $query = $this->db->get('student');
        return $query->result_array();
    }
}