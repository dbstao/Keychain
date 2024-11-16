<?php

/**
 * Description of BuckyDrop_Loader
 */
if (!class_exists('BuckyDrop_Loader'))
{

    class BuckyDrop_Loader
    {

        static protected $_instance;
        private function __construct() {

        }

        static public function getInstance() {
            if (!self::$_instance) {
                self::$_instance = new self();
            }
            return self::$_instance;
        }

        static public function classes($classpath) {
            $this_class = BuckyDrop_Loader::getInstance();

            if ($classpath) {
                $classpath .= substr($classpath, -1) === "/" ? "" : "/";
                foreach (glob($classpath . "*") as $f) {
                    if (is_file($f)) {
                        $file_info = pathinfo($f);
                        if ($file_info["extension"] == "php") {
                            include_once($f);

                            $className = $file_info["filename"];
                            $refl = new ReflectionClass($className);
                            $fuc = $refl->newInstance();
                        }
                    }
                }
            }
        }

        public function __call($name, $arguments) {
            return call_user_func($this->{$name}, $arguments);
        }

    }

}
