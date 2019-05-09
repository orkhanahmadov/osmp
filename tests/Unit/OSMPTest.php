<?php

namespace Orkhanahmadov\OSMP\Tests\Unit;

use Orkhanahmadov\OSMP\OSMP;
use Orkhanahmadov\OSMP\Tests\TestCase;

class OSMPTest extends TestCase
{
    public function test_experiment()
    {
        $osmp = new OSMP();

        $result = $osmp->check('ABC123', 1, 'some comment');

        $this->assertNotNull($result);
        $this->assertEquals('ABC123', $result->osmp_txn_id);
        $this->assertEquals('1', $result->result);
        $this->assertEquals('some comment', $result->comment);
    }
}
