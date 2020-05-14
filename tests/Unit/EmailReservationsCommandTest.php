<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class EmailReservationsCommandTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $notify = $this->getMockBuilder('App\Libraries\Notifications')
            ->disableOriginalConstructor()
            ->setMethods(['send'])
            ->getMock();
        $notify->expects($this->once())
            ->method('send')
            ->with()
            ->willReturn(true);

        $command = $this->getMockBuilder('App\Console\Commands\EmailReservationsCommand')
            ->setConstructorArgs([$notify])
            ->setMethods(['option'])
            ->getMock();  
        $command->expects($this->once())
            ->method('option')
            ->with('dry-run')
            ->willReturn(false);
        $command->processBooking();
        
    }
}
