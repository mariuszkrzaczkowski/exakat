<?php

namespace Analyzer\Constants;

use Analyzer;

class ConstantUsage extends Analyzer\Analyzer {
    public function dependsOn() {
        return array('Analyzer\\Extensions\\Extstandard');
    }
    
    public function analyze() {
        $this->atomIs("Nsname")
             ->hasNoIn(array('NEW', 'SUBNAME', 'USE', 'NAME', 'NAMESPACE'));
        $this->prepareQuery();

        $this->atomIs("Identifier")
             ->codeIsNot(array('true', 'false', 'null'))
             ->hasNoIn(array('NEW', 'SUBNAME', 'USE', 'NAME', 'NAMESPACE', 'CONSTANT', 'PROPERTY', 'CLASS'));
        $this->prepareQuery();

        $this->atomIs("Boolean");
        $this->prepareQuery();
    }
}

?>