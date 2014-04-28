<?php

namespace Tokenizer;

class Cast extends TokenAuto {
    static public $operators = array('T_ARRAY_CAST','T_BOOL_CAST', 'T_DOUBLE_CAST','T_INT_CAST','T_OBJECT_CAST','T_STRING_CAST','T_UNSET_CAST');
    static public $atom = 'Cast';
    
    public function _check() {
        $this->conditions = array(0 => array('token'     => Cast::$operators,
                                             'atom'      => 'none'),
                                  1 => array('atom'      => 'yes',
                                             'notAtom'   => 'Sequence'),
                                  2 => array('filterOut' => array_merge(array('T_OPEN_PARENTHESIS', 'T_OPEN_BRACKET', 'T_OPEN_CURLY', 
                                                                              'T_OBJECT_OPERATOR', 'T_DOUBLE_COLON'),
                                                                        Preplusplus::$operators, Postplusplus::$operators)),
        );
        
        $this->actions = array('makeEdge'   => array( '1' => 'CAST'),
                               'atom'       => 'Cast',
                               'cleanIndex' => true);
        $this->checkAuto();
        
        return $this->checkRemaining();
    }

    public function fullcode() {
        return <<<GREMLIN

fullcode.fullcode = fullcode.code + " " + fullcode.out("CAST").next().fullcode; 
GREMLIN;
    }
}

?>