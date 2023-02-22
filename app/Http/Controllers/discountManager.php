<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class discountManager extends Controller
{
    public function update(Request $request)
    {
        $customId = $request->input("customId");
        $title = $request->input("title");
        $url = $request->input("url");
        $code = $request->input("code");
        $text = $request->input("text");

        DB::table('discount')
            ->where('custom_id', $customId)
            ->update(['title' => $title, 'url' => $url, 'code' => $code, 'text' => $text]);


       return redirect("/home")->with('status', "Sikeresen szerkesztetted a promocíót");
    }
    public function deleteDiscount(Request $request)
    {
        $customId = $request->input("customId");

        DB::table('discount')->where("custom_id", $customId)->delete();

       return redirect("/home")->with('status', "Sikeresen törölted a promocíót");
    }
}
