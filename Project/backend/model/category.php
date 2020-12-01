<?php
include_once('include/dbconn.php');
class Category
{
	private $id;
	private $name;
	private $pdo;
	function set_id($id){
		$this->id=$id;
	}
	function get_id(){
		return $this->id;
	}
	function set_name($name){
		$this->name=$name;
	}
	function get_name(){
		return $this->name;
	}

	public function add($name){
		$this->name=$name;
		$this->pdo=Database::connect();
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//sql query
		$sql="insert into product (name) values (:name)";
		//prepare sql statement
		$stmt=$this->pdo->prepare($sql);
		//bind parameter
		$stmt->bindParam(':name',$this->name);

		if ($stmt->execute())
		 {
			return true;
		}
		else {
			return false;
		}

	}
	public function getDepts()
{
    $this->pdo = Database::connect();
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    // sql query
    $sql="select * from product";
    //prepare sql statement
    $stmt=$this->pdo->prepare($sql);
    $stmt->execute();
    $results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    return $results;

}
public function getviewDept($depid)
{
    $this->pdo = Database::connect();
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    // sql query
    $sql="select * from product where id=:id";
    //prepare sql statement
    $stmt=$this->pdo->prepare($sql);
    $stmt->bindParam(':id',$depid);
    $stmt->execute();
    $results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    return $results;

}
public function getdeleteDep($depid)
{
$this->pdo= Database::connect();
$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$sql="delete  from product where id=:id";
$stmt=$this->pdo->prepare($sql);
$stmt->bindParam(':id',$depid);
$stmt->execute();


}

public function getupdateDep($depid,$name)
{
    $this->pdo = Database::connect();
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    // sql query
    $sql="update product set name=:name where id=:id";
    //prepare sql statement
    $stmt=$this->pdo->prepare($sql);
    $stmt->bindParam(':id',$depid);
	$stmt->bindParam(':name',$name);
    if ($stmt->execute())
    {
        return true;
    }
    else
    {
        return false;
    }

}
}
?>