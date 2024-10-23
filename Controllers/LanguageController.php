<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function show()
    {
        return view('language');
    }

    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'language' => 'required',
        ]);

        if ($request->has('remember')) {
            
            return redirect()->route('language.store')->withCookie(cookie('language', $request->language, 60 * 24 * 365))
                                                  ->withCookie(cookie('remember', '1', 60 * 24 * 365))
                                                  ->with('success', 'تم حفظ الاختيارات بنجاح!');
        } else {
            
            return redirect()->route('language.store')->withCookie(cookie()->forget('language'))
                                                  ->withCookie(cookie()->forget('remember'))
                                                  ->with('success', 'تم حفظ الاختيارات بنجاح بدون تذكرني!');
        }
    }
}

