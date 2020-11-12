<?php
	
	class LogOutCommand extends Command
	{
		function __construct() {
			$this->controller = new LogOutController();
		}

		public function execute(CommandContext $context):void {
			$this->controller->setCommandContext($context);
			$this->controller->run();
		}
	}

?>