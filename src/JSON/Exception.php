<?php

/**
 * This is the generic JSON package exception.
 * @author Janos Pasztor <pasztor.janos@doclerweb.hu>
 * @copyright DotRoll Ltd
 * @license http://opensource.org/licenses/BSD-3-Clause
 */
class JSON_Exception extends Exception {
	/**
	 * Initializes error message
	 * @param string $message
	 * @param string $string the JSON string that failed.
	 */
	function __construct($message, $string) {
		parent::__construct($message . " while parsing " . $string);
	}
}
