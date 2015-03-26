<?php
/*
 * This file is part of the Yasumi package.
 *
 * Copyright (c) 2015 AzuyaLabs
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
use Carbon\Carbon;
use Yasumi\Tests\Netherlands\NetherlandsBaseTestCase;

/**
 * Class for testing Easter.
 *
 * Easter is a festival and holiday celebrating the resurrection of Jesus Christ from the dead. Easter is celebrated on
 * a date based on a certain number of days after March 21st. The date of Easter Day was defined by the Council of
 * Nicaea in AD325 as the Sunday after the first full moon which falls on or after the Spring Equinox.
 */
class EasterTest extends NetherlandsBaseTestCase
{
    /**
     * The name of the holiday
     */
    const HOLIDAY = 'easter';

    /**
     * Tests Easter.
     */
    public function testEaster()
    {
        $year = 2010;
        $this->assertHoliday(self::COUNTRY, self::HOLIDAY, $year, Carbon::createFromDate($year, 4, 4));
    }
}
