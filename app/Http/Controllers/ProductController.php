<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DOMDocument;

class ProductController extends Controller
{
    public function readHTMLDashboard()
    {
        $url = 'https://www.amazon.com/b/ref=s9_acss_bw_cg_BHPJAN_1a1_w?node=6960520011&pf_rd_m=ATVPDKIKX0DER&pf_rd_s=merchandised-search-2&pf_rd_r=CMTKVD6BZJSZKD2QS8YQ&pf_rd_t=101&pf_rd_p=560865c0-8f63-4699-9a8f-790527e489dc&pf_rd_i=283155';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Blindly accept the certificate
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

        // decode response
        curl_setopt($ch, CURLOPT_ENCODING, true);
        $response = curl_exec($ch);
        curl_close($ch);

        // $dom = new DOMDocument;
        // libxml_use_internal_errors(true);
        // $dom->loadHTML($response);
        // $images = $dom->getElementsByTagName('img');
        // foreach ($images as $image) {
        // dd($image->getAttribute('src'));
        //         $image->setAttribute('src', 'http://example.com/' . $image->getAttribute('src'));
        // }
        // $html = $dom->saveHTML();
        return view('dashboard', compact('response'));
    }

    public function events()
    {
        return view('events');
    }
}
