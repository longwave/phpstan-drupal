<?php

declare(strict_types=1);

namespace mglaman\PHPStanDrupal\Tests\Type;

use mglaman\PHPStanDrupal\Tests\AdditionalConfigFilesTrait;
use PHPStan\Testing\TypeInferenceTestCase;

class DrupalClassResolverDynamicReturnTypeExtensionTest extends TypeInferenceTestCase
{
    use AdditionalConfigFilesTrait;

    public function dataFileAsserts(): iterable
    {
        yield from $this->gatherAssertTypes(__DIR__ . '/data/drupal-class-resolver.php');
    }

    /**
     * @dataProvider dataFileAsserts
     */
    public function testFileAsserts(
        string $assertType,
        string $file,
        ...$args
    ): void
    {
        $this->assertFileAsserts($assertType, $file, ...$args);
    }
}
