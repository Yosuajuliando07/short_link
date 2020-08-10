<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ShortLink;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class ShortLinkController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
           'original_link' => 'required|url'
        ]);
   
        $input['original_link'] = $request->original_link;
        $input['short_link'] = Str::random(3);
        $input['user_id'] = Auth::id();
   
        ShortLink::create($input);

        return redirect()->back();
        // return redirect('generate-shorten-link')
        //      ->with('success', 'Shorten Link Generated Successfully!');
    }

    public function shortenLink($short_link)
    {
        $find = ShortLink::where('short_link', $short_link)->first();
   
        return redirect($find->original_link);
    }
}
