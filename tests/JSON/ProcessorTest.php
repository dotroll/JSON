<?php

/**
 * This class tests the functionality of JSON_PRocessor
 * @author Janos Pasztor <pasztor.janos@doclerweb.hu>
 * @copyright DotRoll Ltd
 * @license http://opensource.org/licenses/BSD-3-Clause
 */
class JSON_ProcessorTest extends PHPUnit_Framework_TestCase {
	/**
	 * Test for JSON_Processor::encode()
	 */
    function testEncode() {
		$this->assertEquals('{"bar":"baz"}', JSON_Processor::encode(array('bar' => 'baz')));
    }
	/**
	 * Test for JSON_Processor::decode
	 */
    function testDecode() {
		$this->assertEquals(array('bar' => 'baz'), JSON_Processor::decode('{"bar":"baz"}'));
    }
	/**
	 * Test for JSON_Processor::decode with syntax error.
	 */
    function testDecodeWithSyntaxError() {
		$this->setExpectedException('JSON_SyntaxError');
		JSON_Processor::decode('{"bar":"baz"');
    }
}
