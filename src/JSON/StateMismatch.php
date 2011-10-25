<?php

/**
 * This exception signals, that a state error has occured while processing.
 * @author Janos Pasztor <pasztor.janos@doclerweb.hu>
 * @copyright DotRoll Ltd
 * @license http://opensource.org/licenses/BSD-3-Clause
 */
class JSON_StateMismatch extends JSON_Exception {
	/**
	 * Initialize the error string.
	 * @param string $string default "" the JSON string that failed.
	 */
	function __construct($string = "") {
		parent::__construct('Invalid or malformed JSON', $string);
	}
}
