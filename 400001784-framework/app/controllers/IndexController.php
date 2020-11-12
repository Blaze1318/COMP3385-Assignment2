<?php  
 
class IndexController extends Controller
{ 
	public function run():void
	{
		$this->setModel(new CoursesModel());
		$this->setView(new View);
		$this->getView()->setTemplate("../../400001784-framework/tpl/index.tpl.php");
		$this->getModel()->makeConnection();
		$this->getView()->addVar("popular",$this->getModel()->findMostPopular());
		$this->getView()->addVar("recommended",$this->getModel()->findRecommended());
		$this->getView()->display();
		
	}
}

?>