<?php  
 
class CoursesController extends Controller
{ 
	public function run():void
	{
		$this->setModel(new CoursesModel());
		$this->setView(new View);
		$this->getView()->setTemplate("../../400001784-framework/tpl/courses.tpl.php");
		$this->getModel()->makeConnection();
		$this->getView()->addVar("courses",$this->getModel()->findCourses());
		$this->getView()->display();
	}
}

?>