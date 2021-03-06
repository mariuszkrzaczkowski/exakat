<?php

namespace Test;

include_once(dirname(dirname(dirname(dirname(__DIR__)))).'/library/Autoload.php');
spl_autoload_register('Autoload::autoload_test');
spl_autoload_register('Autoload::autoload_phpunit');
spl_autoload_register('Autoload::autoload_library');

class Php_CloseTags extends Analyzer {
    /* 6 methods */

    public function testPhp_CloseTags01()  { $this->generic_test('Php/CloseTags.01'); }
    public function testPhp_CloseTags02()  { $this->generic_test('Php/CloseTags.02'); }
    public function testPhp_CloseTags03()  { $this->generic_test('Php/CloseTags.03'); }
    public function testPhp_CloseTags04()  { $this->generic_test('Php/CloseTags.04'); }
    public function testPhp_CloseTags05()  { $this->generic_test('Php/CloseTags.05'); }
    public function testPhp_CloseTags06()  { $this->generic_test('Php/CloseTags.06'); }
}
?>