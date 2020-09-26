<?php


use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    public function testHello(){
        $out = shell_exec('1998-08-24 | php public/kipras.bielinskas.php');
        $this->assertSame($out, '22 years 1 months 1 days');
    }
}
