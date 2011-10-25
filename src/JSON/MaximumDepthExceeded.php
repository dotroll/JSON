<?php

/**
 * This exception signals, that the maximum processing depth has been exceeded.
 * @author Janos Pasztor <pasztor.janos@doclerweb.hu>
 * @copyright DotRoll Ltd
 * @license http://opensource.org/licenses/BSD-3-Clause
 */
class JSON_MaximumStackDepthExceeded extends JSON_Exception {
	/**
	 * Initialize the error string.
	 * @param string $string default "" the JSON string that failed.
	 */
	function __construct($string = "") {
		parent::__construct('The maximum stack depth has been exceeded', $string);
	}
}
