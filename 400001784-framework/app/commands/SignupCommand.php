<?php
	
	class SignupCommand extends Command
	{
		function __construct() {
			$this->controller = new SignupController();
		}

		public function execute(CommandContext $context):void {
			$this->controller->setCommandContext($context);
			$this->controller->run();
		}
	}

?>