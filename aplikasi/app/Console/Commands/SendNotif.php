<?php

namespace App\Console\Commands;

use App\Models\Pelanggan;
use Carbon\Carbon;
use Illuminate\Console\Command;

class SendNotif extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-notif';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {



        $jam_24 = [1, 4, 7];
        $jam_6 = [2, 8, 5];
        $jam_3 = [3, 6, 9];


        $pelanggan = Pelanggan::where('status_ambil', 0)->get();

        foreach ($pelanggan as $val) :
            if (in_array($val->layanan_id, [3, 6, 9])) :

                if ($val->created_at->addHours(3) < \Carbon\Carbon::now()) :
                    $curl = curl_init();
                    curl_setopt_array($curl, array(
                        CURLOPT_URL => 'https://api.fonnte.com/send',
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_ENCODING => '',
                        CURLOPT_MAXREDIRS => 10,
                        CURLOPT_TIMEOUT => 0,
                        CURLOPT_FOLLOWLOCATION => true,
                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        CURLOPT_CUSTOMREQUEST => 'POST',
                        CURLOPT_POSTFIELDS => array(
                            'target' => $val->no_hp,
                            'message' => "HALLO $val->nama_pelanggan, LAUNDY KAMU UDAH SIAP NIH.\nBERIKUT RINCIAN LAUNDRY ANDA:\n\nhari tanggal : $val->created_at\nBerat        :  $val->berat_cucian\ntotal bayar  : $val->total_bayar  ",
                            'typing' => false,
                            'countryCode' => '62',
                        ),
                        CURLOPT_HTTPHEADER => array(
                            'Authorization: CZ+ay14Fpjo-m@ujGW8Y'
                        ),
                    ));
                    $response = curl_exec($curl);
                    curl_close($curl);
                    $this->info($response);
                endif;


            elseif (in_array($val->layanan_id, [2, 8, 5])) :

                if ($val->created_at->addHours(6) < \Carbon\Carbon::now()) :
                    $curl = curl_init();
                    curl_setopt_array($curl, array(
                        CURLOPT_URL => 'https://api.fonnte.com/send',
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_ENCODING => '',
                        CURLOPT_MAXREDIRS => 10,
                        CURLOPT_TIMEOUT => 0,
                        CURLOPT_FOLLOWLOCATION => true,
                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        CURLOPT_CUSTOMREQUEST => 'POST',
                        CURLOPT_POSTFIELDS => array(
                            'target' => $val->no_hp,
                            'message' => "HALLO $val->nama_pelanggan, LAUNDY KAMU UDAH SIAP NIH.\nBERIKUT RINCIAN LAUNDRY ANDA:\n\nhari tanggal : $val->created_at\nBerat        :  $val->berat_cucian\ntotal bayar  : $val->total_bayar  ",
                            'typing' => false,
                            'countryCode' => '62',
                        ),
                        CURLOPT_HTTPHEADER => array(
                            'Authorization: CZ+ay14Fpjo-m@ujGW8Y'
                        ),
                    ));
                    $response = curl_exec($curl);
                    curl_close($curl);
                    $this->info($response);
                    $response = curl_exec($curl);
                    curl_close($curl);
                    $this->info($response);
                endif;
            else :
                if ($val->created_at->addHours(24) < \Carbon\Carbon::now()) :
                    $curl = curl_init();
                    curl_setopt_array($curl, array(
                        CURLOPT_URL => 'https://api.fonnte.com/send',
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_ENCODING => '',
                        CURLOPT_MAXREDIRS => 10,
                        CURLOPT_TIMEOUT => 0,
                        CURLOPT_FOLLOWLOCATION => true,
                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        CURLOPT_CUSTOMREQUEST => 'POST',
                        CURLOPT_POSTFIELDS => array(
                            'target' => $val->no_hp,
                            'message' => "HALLO $val->nama_pelanggan, LAUNDY KAMU UDAH SIAP NIH.\nBERIKUT RINCIAN LAUNDRY ANDA:\n\nhari tanggal : $val->created_at\nBerat        :  $val->berat_cucian\ntotal bayar  : $val->total_bayar  ",
                            'typing' => false,
                            'countryCode' => '62',
                        ),
                        CURLOPT_HTTPHEADER => array(
                            'Authorization: CZ+ay14Fpjo-m@ujGW8Y'
                        ),
                    ));
                    $response = curl_exec($curl);
                    curl_close($curl);
                    $this->info($response);
                endif;
            endif;
        endforeach;


        // $current = Carbon::now();
        // $past   = $current->subDay(2);
        // $pelanggan = Pelanggan::where('status', 0)->get(['nama_pelanggan', 'no_hp', 'created_at']);
        // foreach ($pelanggan as $val) :
        //     if ($val->created_at <= $past) {
        //         $curl = curl_init();
        //         curl_setopt_array($curl, array(
        //             CURLOPT_URL => 'https://api.fonnte.com/send',
        //             CURLOPT_RETURNTRANSFER => true,
        //             CURLOPT_ENCODING => '',
        //             CURLOPT_MAXREDIRS => 10,
        //             CURLOPT_TIMEOUT => 0,
        //             CURLOPT_FOLLOWLOCATION => true,
        //             CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //             CURLOPT_CUSTOMREQUEST => 'POST',
        //             CURLOPT_POSTFIELDS => array(
        //                 'target' => $val->no_hp,
        //                 'message' => "Testing Server On $val->nama_pelanggan ",
        //                 'typing' => false,
        //                 'countryCode' => '62',
        //             ),
        //             CURLOPT_HTTPHEADER => array(
        //                 'Authorization: CZ+ay14Fpjo-m@ujGW8Y'
        //             ),
        //         ));
        //         $response = curl_exec($curl);
        //         curl_close($curl);
        //         $this->info($response);
        //     }
        // endforeach;


        //   $curl = curl_init();
        // curl_setopt_array($curl, array(
        //     CURLOPT_URL => 'https://api.fonnte.com/send',
        //     CURLOPT_RETURNTRANSFER => true,
        //     CURLOPT_ENCODING => '',
        //     CURLOPT_MAXREDIRS => 10,
        //     CURLOPT_TIMEOUT => 0,
        //     CURLOPT_FOLLOWLOCATION => true,
        //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //     CURLOPT_CUSTOMREQUEST => 'POST',
        //     CURLOPT_POSTFIELDS => array(
        //         'target' => $val->no_hp,
        //         'message' => "Testing Server On $val->nama_pelanggan ",
        //         'typing' => false,
        //         'countryCode' => '62',
        //     ),
        //     CURLOPT_HTTPHEADER => array(
        //         'Authorization: CZ+ay14Fpjo-m@ujGW8Y'
        //     ),
        // ));
        // $response = curl_exec($curl);
        // curl_close($curl);
        // $this->info($response);
    }
}
