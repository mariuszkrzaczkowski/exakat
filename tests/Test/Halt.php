<?php

namespace Test;

include_once(dirname(dirname(__DIR__)).'/library/Autoload.php');
spl_autoload_register('Autoload::autoload_test');
spl_autoload_register('Autoload::autoload_phpunit');

class Halt extends Tokenizer {
    /* 4 methods */

    public function testHalt01()  { $this->generic_test('Halt.01'); }
    public function testHalt02()  { $this->generic_test('Halt.02'); }
    public function testHalt03()  { $this->generic_test('Halt.03'); }
    public function testHalt04()  { $this->generic_test('Halt.04'); }
}
?>