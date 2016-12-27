<?php

namespace Gappc\HelloWorld\Test;

use PHPUnit\Framework\TestCase;

use Gappc\HelloWorld\SayHello;

class SayHelloTest extends TestCase {

  public function testWorld() {
    $this->assertEquals(SayHello::world(), 'Hello World, Composer!');
  }

}
