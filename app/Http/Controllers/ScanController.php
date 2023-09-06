<?php

namespace App\Http\Controllers;

use App\Models\projek;
use App\Models\Whatsapp;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ScanController extends Controller
{
    public function index()
    {
        $cek = Whatsapp::where('name', 'wa')->first();
        if ($cek->status == 0) {
            try {
                $response = Http::withHeaders([
                    'key' => env('KEY')
                ])->get(env('API_URL_WHATSSAPP') . 'start-session?scan=true', [
                    'session' => env('SESSION')
                ]);

                $data = $response->json();
                if (!$response->failed()) {

                    return view('scan.index', [
                        'status' => true,
                        'qr' => $data['data']['qr']
                    ]);
                } else {
                    return view('scan.index', [
                        'status' => false
                    ])->with('failed', $data['message']);
                }
            } catch (\Throwable $th) {
                return view('scan.index', [
                    'status' => false
                ]);
            }
        } else {
            return view('scan.index', [
                'status' => false,
                'qr' => '#'
            ]);
        }
    }

    public function status()
    {
        $statuswa = Whatsapp::where('name', 'wa')->first();
        return response()->json([
            'status' => $statuswa->status,
        ]);
    }

    public function disconnect()
    {
        try {
            $response = Http::withHeaders([
                'key' => env('KEY')
            ])->get(env('API_URL_WHATSSAPP') . 'delete-session', [
                'session' => env('SESSION')
            ]);

            $data = $response->json();

            if (!$response->failed()) {
                return back()->with('success', 'Disconnected successfull');
            } {
                return back()->with('failed', $data['message']);
            }
        } catch (\Throwable $th) {
            return back()->with('failed', 'Server error');
        }
    }

    public function send(projek $projek)
    {
        $tenggat = new DateTime($projek->deadline);
        $now = new DateTime(date("Y-m-d H:i:s", strtotime("now")));
        $dif = $tenggat->diff($now);
        $jumlah = number_format($projek->fee, 0, ",", ".");
        $pesan = "$projek->nama_client\n\nProject\n$projek->nama\n\nStatus\n$projek->status\n\nDeadline\n$dif->days hari\n---------------------------------------\nHarga = Rp $jumlah";
        $response = Http::withHeaders([
            'key' => env('KEY')
        ])->get(env('API_URL_WHATSSAPP') . 'send-message', [
            'session' => env('SESSION'),
            'to' => $projek->telepon,
            'text' => $pesan
        ]);

        if (!$response->badRequest()) {
            return back()->with('succesSend', 'Send message succesfull');
        } else {
            return back()->with('errorSend', 'Cannot send message or you are not connected');
        }
    }
}
