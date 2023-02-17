<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use illuminate\Support\Str;

class createNewDiscount extends Controller
{
    public function create(Request $request)
    {
        $title = $request->input('title');
        $text = $request->input('text');
        $url = $request->input('url');
        $code = $request->input('code');
        $uuid = Str::uuid()->toString();

        $data = array("title" => $title, "text" => $text, "url" => $url, "code" => $code,"custom_id"=>$uuid);
        DB::table('discount')->insert($data);

        $textStripped = strip_tags($text);
        $this->sendMessage($title,$textStripped);

       return redirect("/home")->with('status', "Sikeresen Aktiváltad a jegyet/jegyeket!");
    }
    function sendMessage($title, $text) {
        $content      = array(
            "en" => $text
        );
        $title= array(
            "en" => $title
        );
        $hashes_array = array();
        $fields = array(
            'app_id' => "01fb5f70-0b31-4224-b3ef-9ee248e55914",
            'included_segments' => array(
                'Subscribed Users'
            ),
            'contents' => $content,
            'headings' => $title,

        );

        $fields = json_encode($fields);
        print("\nJSON sent:\n");
        print($fields);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json; charset=utf-8',
            'Authorization: Basic ZjY0MzQzMmMtMDBiZS00ZjU0LWIxM2MtYzc3OTczNTFhNjg3'
        ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

        $response = curl_exec($ch);
        curl_close($ch);

        return $response;
    }

}
