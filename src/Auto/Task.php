<?php
namespace Auto {

    class Task extends \Collectable {
    
        public function __construct($greeting) {
            $this->greeting = $greeting;
        }
        
        public function run()   {
            /* note that this will be loaded by composers autoloader */
            $greeting = new Autoloadable($this->greeting);
            printf(
                "%s\n", $greeting);

            /* good practice to set garbage somewhere so you can collect
                this object */
            $this->setGarbage();
        }
        
        protected $greeting;
    }
}
?>
