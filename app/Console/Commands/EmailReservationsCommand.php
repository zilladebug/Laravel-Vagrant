<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Libraries\Notifications;
use App\Notifications\Reservation;

class EmailReservationsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reservations:notify
    {count : The number of bookings to retrieve}
    {--dry-run= : To have this command to no actual work.}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Notify reservations holder';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(Notifications $notify)
    {
        $this->notify = $notify;
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $answer = $this->choice
        ('What service should we use?', 
        ['sms', 'email'],
        /** 'email' below, adds a default vaule to the choice option */
        'email'
        );
        var_dump($answer);
        $count = $this->argument('count');
        if (!is_numeric($count)) {
            $this->alert('The count must be a number');
            return 1;
        }
        /** for running the command in gitbash 
         * php artisan reservations:notify
         * so that it can display, the number of booking
        */
        $bookings = \App\Booking::with(['room.roomType', 'users'])->limit($count)->get();
        $this->info(sprintf('The number of bookings to alert for is: %d', 
            $bookings->count()));
        $bar = $this->output->createProgressBar($bookings->count());
        $bar->start();
        foreach ($bookings as $booking) {
           $this->processBooking($booking);
            $bar->advance();

        }
        $bar->finish();
        $this->comment('Command completed');
    }

    public function processBooking($booking) {
        if ($this->option('dry-run')) {
            $this->info('Would process booking');
        } else {
            $booking->notify(new Reservation('Mulle Hoegh'));
            //Notifications::send();
        }
    }
}
