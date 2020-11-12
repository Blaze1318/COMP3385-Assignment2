<?php  
 
class LogOutController extends Controller
{ 
	public function run():void
	{
		$this->setModel(new UsersModel());
		$this->setView(new View);
		$this->getView()->setTemplate("../../400001784-framework/tpl/courses.tpl.php");
		$this->getModel()->makeConnection();
		$this->getView()->addVar("courses",$this->getModel()->findCourses());
		$this->getView()->display();
	}
}

?>