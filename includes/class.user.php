<?php
class USER
{
    private $db;

    function __construct($DB_con)
    {
      $this->db = $DB_con;
    }

    public function patient_register($p_pps, $p_fname, $p_lname, $p_address, $p_number, $p_dob, $p_email, $p_password, $p_medcard, $p_em_name, $p_em_number)
    {
       try
       {
           $new_password = $p_password;

           $stmt = $this->db->prepare("INSERT INTO patient(p_pps,p_fname,p_lname,p_address,p_number,p_dob,p_email,p_password,p_medcard,p_em_name,p_em_number)
                                                       VALUES(:p_pps, :p_fname, :p_lname, :p_address, :p_number, :p_dob, :p_email, :p_password, :p_medcard, :p_em_name, :p_em_number)");

           $stmt->bindparam(":p_pps", $p_pps);
           $stmt->bindparam(":p_fname", $p_fname);
           $stmt->bindparam(":p_lname", $p_lname);
           $stmt->bindparam(":p_address", $p_address);
           $stmt->bindparam(":p_number", $p_number);
           $stmt->bindparam(":p_dob", $p_dob);
           $stmt->bindparam(":p_email", $p_email);
           $stmt->bindparam(":p_password", $p_password);
           $stmt->bindparam(":p_medcard", $p_medcard);
           $stmt->bindparam(":p_em_name", $p_em_name);
           $stmt->bindparam(":p_em_number", $p_em_number);
           $stmt->execute();

           return $stmt;
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
    }

    public function medStaff_register($ms_fname, $ms_lname, $ms_number, $ms_address, $ms_type, $ms_email, $ms_password, $ms_em_name, $ms_em_number)
    {
       try
       {
           $stmt = $this->db->prepare("INSERT INTO medical_staff(ms_fname,ms_lname,ms_number,ms_address,ms_type,ms_email,ms_password,ms_em_name,ms_em_number)
           VALUES(:ms_fname, :ms_lname, :p_number, :ms_address, :ms_type, :ms_email, :ms_password, :ms_em_name, :ms_em_number)");

           $stmt->bindparam(":ms_fname", $ms_fname);
           $stmt->bindparam(":ms_lname", $ms_lname);
           $stmt->bindparam(":ms_number", $ms_number);
           $stmt->bindparam(":ms_address", $ms_address);
           $stmt->bindparam(":ms_type", $ms_type);
           $stmt->bindparam(":ms_email", $ms_email);
           $stmt->bindparam(":ms_password", $ms_password);
           $stmt->bindparam(":ms_em_name", $ms_em_name);
           $stmt->bindparam(":ms_em_number", $ms_em_number);
           $stmt->execute();

           return $stmt;
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
    }

    public function admin_register($a_fname, $a_lname, $a_number, $a_email, $a_password, $a_em_name, $a_em_number) {
       try {
           $stmt = $this->db->prepare("INSERT INTO admin(a_fname,a_lname,a_number,a_email,a_password,a_em_name,a_em_number)
           VALUES(:a_fname, :a_lname, :a_number, :a_email, :a_password, :a_em_name, :a_em_number)");

           $stmt->bindparam(":a_fname", $a_fname);
           $stmt->bindparam(":a_lname", $a_lname);
           $stmt->bindparam(":a_number", $a_number);
           $stmt->bindparam(":a_email", $a_email);
           $stmt->bindparam(":a_password", $a_password);
           $stmt->bindparam(":a_em_name", $a_em_name);
           $stmt->bindparam(":a_em_number", $a_em_number);
           $stmt->execute();

           return $stmt;
       }
       catch(PDOException $e) {
           echo $e->getMessage();
       }
    }


    public function patient_login($p_email, $p_password)
    {
       try
       {
          $stmt = $this->db->prepare("SELECT * FROM patient WHERE p_email=:email AND p_password = :pass LIMIT 1");
          $stmt->execute(array(':email'=>$p_email, ':pass' => $p_password));
          $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
          if($stmt->rowCount() > 0)
            {

                $_SESSION['user_session'] = $userRow['p_id'];
                $_SESSION['admin_session'] = $userRow['admin'];
                return true;
             }
             else
             {
                return false;
             }

       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
   }

   public function medStaff_login($staff_number, $staff_password) {
      try {
         $stmt = $this->db->prepare("SELECT * FROM medical_staff WHERE ms_empNumber=:staff_number AND ms_password = :pass LIMIT 1");
         $stmt->execute(array(':staff_number'=>$staff_number, ':pass' => $staff_password));
         $userRow=$stmt->fetch(PDO::FETCH_ASSOC);

         if($stmt->rowCount() > 0) {
               $_SESSION['user_session'] = $userRow['ms_id'];
               $_SESSION['admin_session'] = $userRow['admin'];
               return true;
            }
            else {
               return false;
            }
      }
      catch(PDOException $e) {
          echo $e->getMessage();
      }
  }

  public function admin_login($a_number, $a_password)
  {
     try
     {
        $stmt = $this->db->prepare("SELECT * FROM admin WHERE a_empNumber=:a_number AND a_password = :pass LIMIT 1");
        $stmt->execute(array(':a_number'=>$a_number, ':pass' => $a_password));
        $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
        if($stmt->rowCount() > 0)
          {

              $_SESSION['user_session'] = $userRow['a_id'];
              $_SESSION['admin_session'] = $userRow['admin'];
              return true;
           }
           else
           {
              return false;
           }

     }
     catch(PDOException $e)
     {
         echo $e->getMessage();
     }
 }

 public function getBlogs() {
   $stmt = $this->db->prepare("SELECT * FROM blogs");
   $stmt->execute();
   $results = $stmt->fetchAll();
   $stmt->closeCursor();
   return $results;
 }

  public function is_loggedin()
  {
    if(isset($_SESSION['user_session']))
    {
       return true;
    }
  }

  public function redirect($url)
  {
      header("Location: $url");
  }

  public function logout()
  {
      session_destroy();
      unset($_SESSION['user_session']);
      return true;
  }
}
?>
