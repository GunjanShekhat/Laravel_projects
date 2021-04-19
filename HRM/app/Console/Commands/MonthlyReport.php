<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\houseDetail;
use PDF;
use DateTime;
use File;
use Illuminate\Support\Facades\Storage;

class MonthlyReport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'report:monthly';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generates Monthly Reports of Houses';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $houses = houseDetail::whereMonth('created_at', '=', \Carbon\Carbon::now()->subMonth()->month)->get();
        // $pdf = PDF::loadView('Admin\housesPDF',compact('houses'));
        $month = \Carbon\Carbon::now()->subMonth()->month;
        $filename = "report_".$month;
        $path = storage_path('pdf/reports');

        if(!File::exists($path)) {
            File::makeDirectory($path, $mode = 0755, true, true);
        } 
        else {}

        $pdf = PDF::loadView('Admin\housesPDF', compact('houses'))->save(''.$path.'/'.$filename.'.pdf');
        
        $this->info('Successfully Generated Monthly Report');
    }
}