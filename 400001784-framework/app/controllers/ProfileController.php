<?php
    class ProfileController extends Controller
    {
        public function run():void
        {
            $this->setModel(new UsersModel());
		    $this->setView(new View);
            $this->getView()->setTemplate("../../400001784-framework/tpl/profile.tpl.php");
            $this->getModel()->addVar("mycourses",$this->getModel()->getCourses());
		    $this->getView()->display();
        }
    }
 
?>