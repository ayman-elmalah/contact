<?php

namespace AymanElmalah\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use AymanElmalah\Contact\Models\Contact;

class ContactController extends Controller {
  /**
   * Show contact page
   *
   * @return view
   */
  public function index() {
    return view('contact::contact');
  }

  /**
   * Submit contact page
   *
   * @return response
   */
   public function submit(Request $request) {
     Contact::create($request->all());

     return config('pkg.thanks_message');
   }
}
