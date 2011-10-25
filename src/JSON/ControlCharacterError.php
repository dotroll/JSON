<?php

/**
 * This exception signals, that a control character error has occured.
 * @author Janos Pasztor <pasztor.janos@doclerweb.hu>
 * @copyright DotRoll Ltd
 * @license http://opensource.org/licenses/BSD-3-Clause
 */
class JSON_ControlCharacterError extends JSON_Exception {
	/**
	 * Initialize error message.
	 * @param string $string default "" the JSON string that failed.
	 */
	function __construct($string = "") {
		parent::__construct('Control character error, possibly incorrectly encoded', $string);
	}
}
