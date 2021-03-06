<?php

namespace Test;

include_once(dirname(dirname(dirname(dirname(__DIR__)))).'/library/Autoload.php');
spl_autoload_register('Autoload::autoload_test');
spl_autoload_register('Autoload::autoload_phpunit');
spl_autoload_register('Autoload::autoload_library');

class Security_RegisterGlobals extends Analyzer {
    /* 3 methods */

    public function testSecurity_RegisterGlobals01()  { $this->generic_test('Security/RegisterGlobals.01'); }
    public function testSecurity_RegisterGlobals02()  { $this->generic_test('Security/RegisterGlobals.02'); }
    public function testSecurity_RegisterGlobals03()  { $this->generic_test('Security/RegisterGlobals.03'); }
}
?>