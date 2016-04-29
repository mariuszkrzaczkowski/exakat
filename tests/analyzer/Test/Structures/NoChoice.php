<?php

namespace Test;

include_once(dirname(dirname(dirname(dirname(__DIR__)))).'/library/Autoload.php');
spl_autoload_register('Autoload::autoload_test');
spl_autoload_register('Autoload::autoload_phpunit');
spl_autoload_register('Autoload::autoload_library');

class Structures_NoChoice extends Analyzer {
    /* 3 methods */

    public function testStructures_NoChoice01()  { $this->generic_test('Structures/NoChoice.01'); }
    public function testStructures_NoChoice02()  { $this->generic_test('Structures/NoChoice.02'); }
    public function testStructures_NoChoice03()  { $this->generic_test('Structures/NoChoice.03'); }
}
?>