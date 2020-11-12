<?php  
 
class StreamsController extends Controller
{ 
	public function run():void
	{
		$this->setModel(new StreamsModel());
		$this->setView(new View);
		$this->getView()->setTemplate("../../400001784-framework/tpl/streams.tpl.php");
		$this->getModel()->makeConnection();
		$this->getView()->addVar("streams",$this->getModel()->findStreams());
		$this->getView()->display();
	}
}

?>