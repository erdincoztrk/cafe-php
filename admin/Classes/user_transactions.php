<?php
include('../../../Classes/dbConnection.php');

abstract class transaction
{
    protected $db;
    public $updateQuery;
    public $updateVariables;

    public function __construct()
    {
        $this->db = new DataBase();
    }

    public abstract function insert();

    public abstract function delete();

    public abstract function update();
}

class user extends transaction
{
    public $id;
    public $username;
    public $password;
    public $name;
    public $surname;
    public $authority;
    public $mail;
    public $gsm;


    public function insert()
    {
      $control = $this->db->getRows("SELECT * FROM tbusers WHERE user_username = '$this->username' OR user_gsm = $this->gsm");
      if($control){
         echo "Username or GSM have been used before*4";
         return;
      }
        $values = array($this->username, $this->password, $this->name, $this->surname, $this->authority, $this->mail, $this->gsm);
        $this->db->insertQuery("tbusers", "user_username, user_password, user_name, user_surname, user_authority, user_mail, user_gsm", $values);
        echo "User was saved!*1";

    }

    public function update()
    {
        return $this->db->query("$this->updateQuery", [$this->updateVariables]);
    }

    public function delete()
    {
      // $this->db->deleteQuery("tbusers", "user_id", [$this->id]);
        $this->db->query("DELETE FROM tbusers WHERE user_id = ?", [$this->id]);
        echo "User was deleted*3";
    }


}

?>
