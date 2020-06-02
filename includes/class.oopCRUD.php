<?php

  class oopCRUD{
    private $host="localhost";
    private $user="root";
    private $dbname="gp_db";
    private $pass="";
    private $db;

    public function __construct(){
      $this->db = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user,$this->pass);
    }

    public function get_medStaff_id($ms_name) {
      $stmt = $this->db->prepare("SELECT `ms_id` FROM medical_staff WHERE ms_name = :ms_name");
      $stmt->bindparam(':ms_name', $ms_name);
      $stmt->execute();
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      $stmt->closeCursor();
      $id = $result['ms_id'];
      return $id;
    }

    public function get_patient_id($p_name) {
      $stmt = $this->db->prepare("SELECT `p_id` FROM patient WHERE p_name = :p_name");
      $stmt->bindparam(':p_name', $p_name);
      $stmt->execute();
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      $stmt->closeCursor();
      $id = $result['p_id'];
      return $id;
    }

    public function get_patient_name($p_id) {
      $stmt = $this->db->prepare("SELECT `p_name` FROM patient WHERE p_id = :p_id");
      $stmt->bindparam(':p_id', $p_id);
      $stmt->execute();
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      $stmt->closeCursor();
      $p_name = $result['p_name'];
      return $p_name;
    }

    public function get_medStaff_name($ms_id) {
      $stmt = $this->db->prepare("SELECT `ms_name` FROM medical_staff WHERE ms_id = :ms_id");
      $stmt->bindparam(':ms_id', $ms_id);
      $stmt->execute();
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      $stmt->closeCursor();
      $ms_name = $result['ms_name'];
      return $ms_name;
    }

    public function get_patient_number($p_id) {
      $stmt = $this->db->prepare("SELECT `p_number` FROM patient WHERE p_id = :p_id");
      $stmt->bindparam(':p_id', $p_id);
      $stmt->execute();
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      $stmt->closeCursor();
      $p_name = $result['p_number'];
      return $p_name;
    }

    public function add_app_request($p_id, $p_name, $ms_id, $provider, $consultation, $number, $date) {
      $stmt = $this->db->prepare("INSERT INTO appointment_requests (`p_id`, `p_name`, `ms_id`, `ms_name`, `ar_type`, `ar_number`, `ar_date`)
      VALUES (:p_id, :p_name, :ms_id, :ms_name, :ar_type, :ar_number, :ar_date)");
      $stmt->execute(array(':p_id' => $p_id, ':p_name' => $p_name, ':ms_id' => $ms_id, ':ms_name' => $provider, ':ar_type' => $consultation, ':ar_number' => $number, ':ar_date' => $date));
      $stmt->closeCursor();
    }

    public function getPatientAppointments($id) {
      $stmt = $this->db->prepare("SELECT * FROM `appointments` WHERE p_id = :id");
      $stmt->execute(array('id' => $id));
      $results = $stmt->fetchAll();
      $stmt->closeCursor();
      return $results;
    }

    public function getMedStaffAppointments($id) {
      $stmt = $this->db->prepare("SELECT * FROM `appointments` WHERE ms_id = :id");
      $stmt->execute(array('id' => $id));
      $results = $stmt->fetchAll();
      $stmt->closeCursor();
      return $results;
    }

    public function deleteAppointment($id) {
      try {
        $stmt = $this->db->prepare("DELETE FROM `appointments` WHERE app_id = :id");
        $stmt->execute(array(':id' => $id));
        $stmt->closeCursor();
        }
       catch (PDOException $e) {
        echo $e;
      }
    }

    public function deletePatient($id) {
      try {
        $stmt = $this->db->prepare("DELETE FROM `patient` WHERE p_id = :id");
        $stmt->execute(array(':id' => $id));
        $stmt->closeCursor();
        }
       catch (PDOException $e) {
        echo $e;
      }
    }

    public function deleteRequest($id) {
      try {
        $stmt = $this->db->prepare("DELETE FROM `appointment_requests` WHERE ar_id = :id");
        $stmt->execute(array(':id' => $id));
        $stmt->closeCursor();
        }
       catch (PDOException $e) {
        echo $e;
      }
    }

    public function getAppointmentsById($id) {
      $stmt = $this->db->prepare("SELECT * FROM `appointments` WHERE app_id = :id");
      $stmt->execute(array('id' => $id));
      $results = $stmt->fetchAll();
      $stmt->closeCursor();
      return $results;
    }

    public function updateAppointment($p_id, $ms_id, $a_id, $app_time, $app_date, $id) {
      $stmt = $this->db->prepare("UPDATE appointments SET `p_id` = :p_id, `ms_id` = :ms_id, `a_id` = :a_id, `app_time` = :app_time, `app_date` = :app_date WHERE `app_id` = :id");
      $stmt->execute(array('p_id' => $p_id, 'ms_id' => $ms_id, 'a_id' => $a_id, 'app_time' => $app_time, 'app_date' => $app_date, 'id' => $id));
      $stmt->closeCursor();
      header("Location: searchAppointments.php");
    }

    public function getPractitioners() {
      $stmt = $this->db->prepare("SELECT ms_name FROM `medical_staff`");
      $stmt->execute();
      $results = $stmt->fetchAll();
      $stmt->closeCursor();
      return $results;
    }

    public function getPatients() {
      $stmt = $this->db->prepare("SELECT p_name FROM `patient`");
      $stmt->execute();
      $results = $stmt->fetchAll();
      $stmt->closeCursor();
      return $results;
    }

    public function addAppointment($p_id, $ms_id, $a_id, $app_time, $app_date) {
      try {
        $stmt = $this->db->prepare("INSERT INTO `appointments` (`p_id`, `ms_id`, `a_id`, `app_time`, `app_date`)
        VALUES (:p_id, :ms_id, :a_id, :app_time, :app_date)");
        $stmt->execute(array(':p_id' => $p_id, ':ms_id' => $ms_id, ':a_id' => $a_id, ':app_time' => $app_time, ':app_date' => $app_date));
        $stmt->closeCursor();
      } catch(PDOException $e) {
        echo $e;
      }
    }

    public function searchPatients($name) {
      $stmt = $this->db->prepare("SELECT * FROM `patient` WHERE p_name LIKE CONCAT('%', :name, '%')");
      $stmt->execute(array('name' => $name));
      $results = $stmt->fetchAll();
      $stmt->closeCursor();
      return $results;
    }

    public function addStaff($ms_number, $ms_name, $ms_phone, $ms_address, $ms_type, $ms_email, $ms_password, $ms_em_name, $ms_em_number) {
      try {
        $stmt = $this->db->prepare("INSERT INTO `medical_staff` (`ms_empNumber`, `ms_name`, `ms_number`, `ms_address`, `ms_type`, `ms_email`, `ms_password`, `ms_em_name`, `ms_em_number`)
        VALUES (:ms_num, :ms_name, :ms_number, :ms_address, :ms_type, :ms_email, :ms_password, :ms_em_name, :ms_em_number)");
        $stmt->execute(array(':ms_num' => $ms_number, ':ms_name' => $ms_name, ':ms_number' => $ms_phone, ':ms_address' => $ms_address, ':ms_type' => $ms_type, ':ms_email' => $ms_email, ':ms_password' => $ms_password, ':ms_em_name' => $ms_em_name, ':ms_em_number' => $ms_em_number));
        $stmt->closeCursor();
      } catch(PDOException $e) {
        echo $e;
      }
    }

    public function getStaff() {
      $stmt = $this->db->prepare("SELECT * FROM `medical_staff`");
      $stmt->execute();
      $results = $stmt->fetchAll();
      $stmt->closeCursor();
      return $results;
    }

    public function deleteStaff($id) {
      try {
        $stmt = $this->db->prepare("DELETE FROM `medical_staff` WHERE ms_id = :id");
        $stmt->execute(array(':id' => $id));
        $stmt->closeCursor();
        }
       catch (PDOException $e) {
        echo $e;
      }
    }

    public function getRequests() {
      $stmt = $this->db->prepare("SELECT * FROM `appointment_requests` ORDER BY `ar_date` DESC");
      $stmt->execute();
      $results = $stmt->fetchAll();
      $stmt->closeCursor();
      return $results;
    }

    public function getAppByMSID($id) {
      $stmt = $this->db->prepare("SELECT * FROM `appointments` WHERE ms_id = :id");
      $stmt->execute(array('id' => $id));
      $results = $stmt->fetchAll();
      $stmt->closeCursor();
      return $results;
    }

    public function addAppRecord($p_id, $id, $treatment, $pres_name, $pres_dosage, $pres_length) {
      try {
        $stmt = $this->db->prepare("INSERT INTO `patient_records` (`p_id`, `app_id`, `treatment`, `pres_name`, `pres_dosage`, `pres_duration`)
        VALUES (:p_id, :app_id, :treatment, :pres_name, :pres_dosage, :pres_duration)");
        $stmt->execute(array(':p_id' => $p_id, ':app_id' => $id, ':treatment' => $treatment, ':pres_name' => $pres_name, ':pres_dosage' => $pres_dosage, ':pres_duration' => $pres_length));
        $stmt->closeCursor();
      } catch(PDOException $e) {
        echo $e;
      }
    }

    public function getNotes($id) {
      $stmt = $this->db->prepare("SELECT * FROM  `patient_records` WHERE app_id = :id");
      $stmt->execute(array('id' => $id));
      $results = $stmt->fetchAll();
      $stmt->closeCursor();
      return $results;
    }

    public function deleteRecord($id) {
      try {
        $stmt = $this->db->prepare("DELETE FROM `patient_records` WHERE pr_id = :id");
        $stmt->execute(array(':id' => $id));
        $stmt->closeCursor();
        }
       catch (PDOException $e) {
        echo $e;
      }
    }

    public function insertContact($name, $email, $number, $message, $id) {
      try {
        $stmt = $this->db->prepare("INSERT INTO `contact` (`c_name`, `c_email`, `c_number`, `c_message`, `p_id`)
        VALUES (:c_name, :c_email, :c_number, :c_message, :p_id)");
        $stmt->execute(array(':c_name' => $name, ':c_email' => $email, ':c_number' => $number, ':c_message' => $message, ':p_id' => $id));
        $stmt->closeCursor();
      } catch(PDOException $e) {
        echo $e;
      }
    }

    public function getPatientById($id) {
      $stmt = $this->db->prepare("SELECT * FROM `patient` WHERE `p_id` = :id");
      $stmt->execute(array('id' => $id));
      $results = $stmt->fetchAll();
      $stmt->closeCursor();
      return $results;
    }

    public function updatePatient($p_pps, $p_name, $p_address, $p_number, $p_dob, $p_email, $p_password, $p_medcard, $p_emName, $p_emNum, $id) {
      $stmt = $this->db->prepare("UPDATE `patient` SET `p_pps` = :p_pps, `p_name` = :p_name, `p_address` = :p_address, `p_number` = :p_number, `p_dob` = :p_dob, `p_email` = :p_email, `p_password` = :p_password, `p_medcard` = :p_medcard,
         `p_em_name` = :p_em_name, `p_em_number` = :p_em_number  WHERE `p_id` = :id");
      $stmt->execute(array(':p_pps' => $p_pps, ':p_name' => $p_name, ':p_address' => $p_address, ':p_number' => $p_number, ':p_dob' => $p_dob, ':p_email' => $p_email, ':p_password' => $p_password, ':p_medcard' => $p_medcard, ':p_em_name' => $p_emName,
    'p_em_number' => $p_emNum, 'id' => $id));
      $stmt->closeCursor();
      header("Location: patient_details.php");
    }
  }
