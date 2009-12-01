<?php
require_once('PHPUnit/Framework.php');
require_once('gettext.inc');

class LocaleTest extends PHPUnit_Framework_TestCase
{
  public function test_setlocale()
  {
    // _setlocale defaults to a locale name from environment variable LANG.
    putenv("LANG=sr_RS");
    $this->assertEquals('sr_RS', _setlocale(LC_MESSAGES, 0));

    // For an existing locale, it never needs emulation.
    putenv("LANG=C");
    _setlocale(LC_MESSAGES, "");
    $this->assertEquals(0, locale_emulation());

    // If we set it to a non-existent locale, it still works, but uses
    // emulation.
    _setlocale(LC_MESSAGES, "xxx_XXX");
    $this->assertEquals('xxx_XXX', _setlocale(LC_MESSAGES, 0));
    $this->assertEquals(1, locale_emulation());
  }
}

?>
