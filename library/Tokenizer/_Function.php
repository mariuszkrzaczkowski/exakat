<?php

namespace Tokenizer;

class _Function extends TokenAuto {
    function _check() {
        $this->conditions = array(0 => array('token' => 'T_FUNCTION',
                                             'atom' => 'none'),
                                  1 => array('atom' => 'String'),
                                  2 => array('token' => 'T_OPEN_PARENTHESIS'),
                                  3 => array('atom' => 'Arguments'),
                                  4 => array('token' => 'T_CLOSE_PARENTHESIS'),
                                  5 => array('atom' => 'Block'),
        );
        
        $this->actions = array('transform'    => array( 1 => 'NAME',
                                                        2 => 'DROP',
                                                        3 => 'ARGUMENTS',
                                                        4 => 'DROP', 
                                                        5 => 'BLOCK'),
                                                
                               'atom'       => 'Function');
                               
        return $this->checkAuto();
    }
}

?>