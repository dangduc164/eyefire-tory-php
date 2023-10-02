<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class HomeController extends Controller
{

    public function index()
    {
        return view('pages.home');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function contactSend(Request $request)
    {

        try {
            $input = $request->all();
            $file = $request->file;
            $filePath =  $file->getClientOriginalName();
            $filePath = $request->file('file')->store('contact-file');
            // $file->move('assets/contact-file', $filePath);
            $input['file'] = $filePath;
            Contact::add($input);
            return redirect()->route('contact')->with('success','gửi thành công');
        }
        catch (Throwable $error) {
            return  redirect()->route('contact')->with('error','gửi thông tin thấy bại');
        }

    }
}
