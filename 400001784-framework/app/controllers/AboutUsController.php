<?php  
 
class AboutUsController extends Controller
{ 
	public function run():void
	{
		$this->setView(new View);
		$this->getView()->setTemplate("../../400001784-framework/tpl/aboutus.tpl.php");
		$this->getView()->display();
	}
}

?>