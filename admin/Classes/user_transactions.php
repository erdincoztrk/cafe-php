<?php
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

class user extends transaction {
    public $id;
    public $username;
    public $password;
    public $name;
    public $surname;
    public $authority;
    public $mail;
    public $gsm;

    public function insert(){
        $this->db->insertQuery("tbusers", "user_username, user_password, user_name, user_surname, user_authority, user_mail, user_gsm", "$this->username, $this->password, $this->name, $this->surname, $this->authority, $this->mail, $this->gsm");
    }
    public function update(){
        return $this->db->query("$this->updateQuery", [$this->updateVariables]);
    }
    public function delete(){
        return $this->db->deleteQuery("tbusers", "user_id", "{$this->id}");

    }


}
?>
