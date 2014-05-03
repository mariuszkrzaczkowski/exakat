<?php

namespace Tokenizer;

class _Instanceof extends TokenAuto {
    static public $operators = array('T_INSTANCEOF');
    static public $atom = 'Instanceof';

    public function _check() {
        $this->conditions = array(-2 => array('filterOut' => array('T_OBJECT_OPERATOR', 'T_DOUBLE_COLON')),
                                  -1 => array('atom' => 'yes'),
                                   0 => array('token' => _Instanceof::$operators,
                                              'atom' => 'none'),
                                   1 => array('atom' => 'yes'),
                                   2 => array('filterOut' => array('T_OPEN_BRACKET', 'T_OPEN_PARENTHESIS', 'T_OBJECT_OPERATOR', 'T_DOUBLE_COLON', 'T_NS_SEPARATOR')),
                                  
        );
        
        $this->actions = array('makeEdge'     => array(  1 => 'RIGHT',
                                                        -1 => 'LEFT'),
                               'atom'         => 'Instanceof',
                               'cleanIndex'   => true,
                               'makeSequence' => 'it' );
        $this->checkAuto();
        
        return $this->checkRemaining();
    } 
    
    public function fullcode() {
        return <<<GREMLIN

fullcode.setProperty('fullcode', fullcode.out("LEFT").next().getProperty('code') + "instanceof " + fullcode.out("RIGHT").next().getProperty('code')); 

GREMLIN;

    }
}
?>