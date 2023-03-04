<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConvertController extends Controller
{
    public function index()
    {
        return view('functions.convert');
    }

    public function wordsConverts(Request $request)
    {
        $number = $request->input('number');
        $result = $this->numberConverts($number);
        return view('functions.convert', ['result' => $result]);
    }

    public function numberConverts($number)
    {
        $words = [
            '', 'Satu', 'Dua', 'Tiga', 'Empat', 'Lima', 'Enam', 'Tujuh', 'Delapan', 'Sembilan', 'Sepuluh'
        ];

        if ($number < 11) {
            return $words[$number];
        } elseif ($number < 20) {
            return $words[$number - 10] . ' Belas';
        } elseif ($number < 100) {
            return $words[floor($number / 10)] . ' Puluh ' . $words[$number % 10];
        } elseif ($number < 200) {
            return 'Seratus ' . $this->numberConverts($number % 100);
        } elseif ($number < 1000) {
            return $words[floor($number / 100)] . ' Ratus ' . $this->numberConverts($number % 100);
        } elseif ($number < 2000) {
            return 'Seribu ' . $this->numberConverts($number % 1000);
        } elseif ($number < 1000000) {
            return $this->numberConverts(floor($number / 1000)) . ' Ribu ' . $this->numberConverts($number % 1000);
        } elseif ($number < 1000000000) {
            return $this->numberConverts(floor($number / 1000000)) . ' Juta ' . $this->numberConverts($number % 1000000);
        } else if ($number < 1000000000000) {
            return $this->numberConverts(floor($number / 1000000000)) . ' Milyar ' . $this->numberConverts($number % 1000000000);
        } else {
            return 'Tidak dapat mengkonversi';
        }
    }
}
