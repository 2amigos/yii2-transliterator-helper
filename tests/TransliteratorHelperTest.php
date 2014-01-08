<?php

namespace tests\unit\helpers;

use Yii;
use dosamigos\helpers\TransliteratorHelper;
use yiiunit\TestCase;

/**
 * @group helpers
 */
class TransliteratorHelperTest extends TestCase
{

	public function testProcess()
	{
		$this->assertEquals("AAAAAAAECEEEEIIIIDNOOOOOUUUUYssaaaaaaaeceeeeiiiidnooooouuuuyy",
			TransliteratorHelper::process('ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖÙÚÛÜÝßàáâãäåæçèéêëìíîïðñòóôõöùúûüýÿ', '', 'en'));

		// cyrillic
		if (extension_loaded('intl') === true) {
			$this->assertEquals("GDZZYJ", TransliteratorHelper::process("ГДЖЗЫЙ", '', 'en'));
		} else {
			$this->assertEquals("GDZhZYY", TransliteratorHelper::process("ГДЖЗЫЙ", '', 'en'));
		}
	}
}
