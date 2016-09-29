<?php
namespace Auto {

    class Task extends \Threaded {
    
        public function __construct($greeting) {
            $this->greeting = $greeting;
        }
        
        public function run()   {
            /* note that this will be loaded by composers autoloader */
            $greeting = new Autoloadable($this->greeting);
            printf(
                "%s\n", $greeting);
        }
        
        protected $greeting;
    }
}
?>
