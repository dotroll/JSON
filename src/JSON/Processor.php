<?php

/**
 * JSON processing utility class
 * @author Janos Pasztor <pasztor.janos@doclerweb.hu>
 * @copyright DotRoll Ltd
 * @license http://opensource.org/licenses/BSD-3-Clause
 */
class JSON_Processor {
	/**
	 * After processing, test for errors.
	 * @param int $code
	 * @param mixed $data
	 * @throws JSON_Exception if a processing error has occured.
	 */
	protected static function processError($code, $data) {
		switch ($code) {
			case JSON_ERROR_NONE:
				break;
			case JSON_ERROR_DEPTH:
				throw new JSON_MaximumStackDepthExceeded($data);
				break;
			case JSON_ERROR_CTRL_CHAR:
				throw new JSON_ControlCharacterError($data);
				break;
			case JSON_ERROR_STATE_MISMATCH:
				throw new JSON_StateMismatch($data);
				break;
			case JSON_ERROR_SYNTAX:
				throw new JSON_SyntaxError($data);
				break;
			case JSON_ERROR_UTF8:
				throw new JSON_UTF8Error($data);
				break;
		}
	}

	/**
	 * Encode any structure to JSON
	 *
	 * @param mixed $data
	 * @return string
	 * @throws JSON_Exception if a processing error has occured.
	 */
	public static function encode($data) {
		try {
			$result = json_encode($data);
		} catch (ErrorException $e) { }
		self::processError(json_last_error(), $data);
		return $result;
	}

	/**
	 * Decode a JSON encoded string
	 * @param string $data
	 * @return mixed
	 * @throws JSON_Exception if a processing error has occured.
	 */
	static function decode($data) {
		try {
			$decoded = json_decode($data, true);
		} catch (ErrorException $e) { }
		self::processError(json_last_error(), $data);
		return $decoded;
	}
}
