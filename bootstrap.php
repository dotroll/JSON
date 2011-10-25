<?php

/**
 * Autoload helper function to run unit tests.
 * @author Janos Pasztor <pasztor.janos@doclerweb.hu>
 * @copyright DotRoll Ltd
 * @license http://opensource.org/licenses/BSD-3-Clause
 * @param string $classname
 */
function json_autoload($classname) {
	require(dirname(__FILE__) . '/src/' . strtr($classname, '_', '/') . '.php');
}

spl_autoload_register("json_autoload");
