<?php
/*
   +----------------------------------------------------------------------+
   | Cornac, PHP code inventory                                           |
   +----------------------------------------------------------------------+
   | Copyright (c) 2010 - 2011                                            |
   +----------------------------------------------------------------------+
   | This source file is subject to version 3.01 of the PHP license,      |
   | that is bundled with this package in the file LICENSE, and is        |
   | available through the world-wide-web at the following url:           |
   | http://www.php.net/license/3_01.txt                                  |
   | If you did not receive a copy of the PHP license and are unable to   |
   | obtain it through the world-wide-web, please send a note to          |
   | license@php.net so we can mail you a copy immediately.               |
   +----------------------------------------------------------------------+
   | Author: Damien Seguy <damien.seguy@gmail.com>                        |
   +----------------------------------------------------------------------+
 */


class Cornac_Auditeur_Analyzer_Php_NewByReference extends Cornac_Auditeur_Analyzer {
	protected	$title = 'New by reference';
	protected	$description = 'When new is immediatly turned into a reference';

// @doc if this analyzer is based on previous result, use this to make sure the results are here
	function dependsOn() {
	    return array('Classes_News');
	}

	public function analyse() {
        $this->cleanReport();

        $this->backend->setAnalyzerName($this->name);
        $this->backend->type('reference')
                      ->inToken()
                      ->type('_new')
                      ->reportCode('cache_code');
        $this->backend->run();

        return true;
	}
}

?>