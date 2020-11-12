<?php  
    class LoginController extends Controller
    {
        public function run():void
        {
           
                $this->setView(new View);
                $this->getView()->setTemplate("../../400001784-framework/tpl/login.tpl.php");
                $this->getView()->display();
           
            
        }
    }
 
?>