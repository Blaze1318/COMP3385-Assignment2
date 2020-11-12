<?php  
    class SignupController extends Controller
    {
        public function run():void
        {
                $this->setView(new View());
                $this->getView()->setTemplate("../../400001784-framework/tpl/signup.tpl.php");
                $this->getView()->display();
               /* $this->setModel(new UsersModel);
                $this->setView(new View);
                $this->getView()->setTemplate("tpl/signup.tpl.php");*/
            
        }
    }
?>