<?php

declare(strict_types=1);

namespace BitPayKeyUtils\UnitTest\Util;

use BitPayKeyUtils\Util\Secp256k1;
use PHPUnit\Framework\TestCase;

class Secp256k1Test extends TestCase
{
    public function testInstanceOf(): void
    {
        $secp256k1 = $this->createClassObject();
        self::assertInstanceOf(Secp256k1::class, $secp256k1);
    }

    public function testAHex(): void
    {
        $expectedValue = '0x00';
        $secp256k1 = $this->createClassObject();

        self::assertSame($expectedValue, $secp256k1->aHex());
    }

    public function testBHex(): void
    {
        $expectedValue = '0x07';
        $secp256k1 = $this->createClassObject();

        self::assertSame($expectedValue, $secp256k1->bHex());
    }

    public function testGHex(): void
    {
        $expectedValue = '0x0479be667ef9dcbbac55a06295ce870b07029bfcdb2dce28d959f2815b16f81798483ada7726a3c4655da4fbfc0e1108a8fd17b448a68554199c47d08ffb10d4b8';
        $secp256k1 = $this->createClassObject();

        self::assertSame($expectedValue, $secp256k1->gHex());
    }

    public function testGxHex(): void
    {
        $expectedValue = '0x0479be667ef9dcbbac55a06295ce870b07029bfcdb2dce28d959f2815b16f817';
        $secp256k1 = $this->createClassObject();

        self::assertSame($expectedValue, $secp256k1->gxHex());
    }

    public function testGyHex(): void
    {
        $expectedValue = '0x483ada7726a3c4655da4fbfc0e1108a8fd17b448a68554199c47d08ffb10d4b8';
        $secp256k1 = $this->createClassObject();

        self::assertSame($expectedValue, $secp256k1->gyHex());
    }

    public function testHHex(): void
    {
        $expectedValue = '0x01';
        $secp256k1 = $this->createClassObject();

        self::assertSame($expectedValue, $secp256k1->hHex());
    }

    public function testNHex(): void
    {
        $expectedValue = '0xfffffffffffffffffffffffffffffffebaaedce6af48a03bbfd25e8cd0364141';
        $secp256k1 = $this->createClassObject();

        self::assertSame($expectedValue, $secp256k1->nHex());
    }

    public function testPHex(): void
    {
        $expectedValue = '0xfffffffffffffffffffffffffffffffffffffffffffffffffffffffefffffc2f';
        $secp256k1 = $this->createClassObject();

        self::assertSame($expectedValue, $secp256k1->pHex());
    }

    private function createClassObject(): Secp256k1
    {
        return new Secp256k1();
    }
}
