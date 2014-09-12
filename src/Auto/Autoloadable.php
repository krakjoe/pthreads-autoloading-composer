<?php
namespace Auto {

    /* a normal, autoloaded class */
    class Autoloadable {
    
        public function __construct($greeting) {
            list($this->hello, $this->world) = 
                preg_split("~ ~", $greeting);
        }
        
        public function __toString() {
            return sprintf(
                "%s %s", 
                $this->hello, $this->world);
        }
        
        protected $hello;
        protected $world;
    }
}
?>
