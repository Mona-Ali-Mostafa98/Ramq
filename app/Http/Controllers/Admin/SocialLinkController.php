<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SocialLink;
use Illuminate\Http\Request;

class SocialLinkController extends Controller
{
    public function index()
    {
        $links = SocialLink:: all();
        return view('admin.social.index', [
            'links' => $links
        ]);
    }

    public function show($linkId)
    {
        $link = SocialLink::findOrFail($linkId);
        return view('admin.links.show',[
            'link'=>$link
        ]);
    }
    public function edit($linkId)
    {
        $link = SocialLink::find($linkId);
        return view('admin.social.edit', [
            'link' => $link,
        ]);
    }

    public function update ($linkId, Request $request)
    {
        // $data = $request->only('website_name','website_url', 'status');

        $request->validate([
            'website_name' => ['required','string', 'max:255'],
            'website_url' => ['required','string'],
        ]);
        $data = $request->all();

        SocialLink::find($linkId)->update($data);
        return redirect()->route('admin.links.index');
    }

    public function destroy($linkId)
    {
        $link = SocialLink::find($linkId);
        $link -> delete();
        return redirect()->route('admin.links.index');
    }
}
