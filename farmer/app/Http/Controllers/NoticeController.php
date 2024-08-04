<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class NoticeController extends Controller
{
    public function index()
    {
        $notices = DB::table('notices')->get();
        return view('notice.noticePage', compact('notices'));
    }

    public function create()
    {
        return view('notice.noticeForm');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'file' => 'required|mimes:pdf|max:2048',
            'publish_date' => 'required|date',
        ]);

        $fileName = time() . '_' . $request->file->getClientOriginalName();
        $filePath = $request->file->storeAs('public/notices', $fileName);

        DB::table('notices')->insert([
            'title' => $request->title,
            'file' => $fileName,
            'publish_date' => $request->publish_date,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('notice.index');
    }

    public function edit($id)
    {
        $notice = DB::table('notices')->where('id', $id)->first();
        return view('notice.editNoticePage', compact('notice'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'file' => 'nullable|mimes:pdf|max:2048',
            'publish_date' => 'required|date',
        ]);

        $notice = DB::table('notices')->where('id', $id)->first();

        if ($request->hasFile('file')) {
            Storage::delete('public/notices/' . $notice->file);
            $fileName = time() . '_' . $request->file->getClientOriginalName();
            $filePath = $request->file->storeAs('public/notices', $fileName);
            $file = $fileName;
        } else {
            $file = $notice->file;
        }

        DB::table('notices')->where('id', $id)->update([
            'title' => $request->title,
            'file' => $file,
            'publish_date' => $request->publish_date,
            'updated_at' => now(),
        ]);

        return redirect()->route('notice.index');
    }

    public function destroy($id)
    {
        $notice = DB::table('notices')->where('id', $id)->first();
        Storage::delete('public/notices/' . $notice->file);
        DB::table('notices')->where('id', $id)->delete();

        return redirect()->route('notice.index');
    }

    public function download($file)
    {
        return Storage::download('public/notices/' . $file);
    }
}
