<?php
include_once('model/category.php');
class CatController extends Category
{
	
	public function createCategory($name)
	{
		return $this->add($name);
			//echo "success";
		
	}
	public function showDepts()
	{
		return $this->getDepts();
	}
	public function viewDep($depid)//$results
	{
		return $this->getviewDept($depid);
	}
	public function deleteDep($depid)
	{
		return $this->getdeleteDep($depid);
	}

	public function updateDep($depid,$name)
	{
		//echo "ss";
		return $this->getupdateDep($depid,$name);
	}

}
?>