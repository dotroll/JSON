<?php

/**
 * This exception signals, that an UTF-8 error has occured while processing.
 * @author Janos Pasztor <pasztor.janos@doclerweb.hu>
 * @copyright DotRoll Ltd
 * @license http://opensource.org/licenses/BSD-3-Clause
 */
class JSON_UTF8Error extends JSON_Exception {
	/**
	 * Initialize the error string.
	 * @param string $string default "" the JSON string that failed.
	 */
	function __construct($string = "") {
		parent::__construct('Malformed UTF-8 characters, possibly incorrectly encoded', $string);
	}
}