<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class MainController extends Controller {

    public function home() {
        return view('home');
    }

    public function about() {
        return view('about');
    }

    public function contacts() {
        return view('contacts');
    }

    public function review() {
        // выводим все записи
        $reviews = new Contact();
        //dd($reviews->all());
        return view('review', ['reviews' => $reviews->all()]);
    }

    public function review_check(Request $request) {
        //dd($request);

        // проверка
        $valid = $request->validate([
            'email' => 'required|min:4|max:100',
            'subject' => 'required|min:4|max:100',
            'message' => 'required|min:10|max:500'
        ]);

        // сохраняем в базу
        $review = new Contact();
        $review->email = $request->input('email');
        $review->subject = $request->input('subject');
        $review->message = $request->input('message');

        $review->save();

        return redirect()->route('review');
    }

}
