<?php

namespace App\Http\Controllers;

use App\Setting;
use App\StaticPage;
use Flash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Teepluss\Theme\Facades\Theme;
use Validator;

class PageController extends Controller
{
    public function page($pagename)
    {
        $page = StaticPage::where('slug', $pagename)->first();
        $theme = Theme::uses(Setting::get('current_theme', 'default'))->layout('guest');

        return $theme->scope('pages/page', compact('page'))->render();
    }

    public function contact()
    {
        $theme = Theme::uses(Setting::get('current_theme', 'default'))->layout('guest');

        return $theme->scope('pages/contact')->render();
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validateContactPage(array $data)
    {
        return Validator::make($data, [
            'name'    => 'required',
            'email'   => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
    }

    public function saveContact(Request $request)
    {
        $validator = $this->validateContactPage($request->all());

        if ($validator->fails()) {
            return redirect()->back()
            ->withInput($request->all())
            ->withErrors($validator->errors());
        }

        $mail = $request->all();

        $emailStatus = Mail::send('emails.usermail', ['mail' => $mail], function ($m) use ($mail) {
            $m->from($mail['email'], Setting::get('site_name').' contact form');
            $m->to(Setting::get('support_email'))->subject(Setting::get('site_name').' support: '.$mail['subject']);
        });

        if ($emailStatus) {
            Flash::success('Thanks for contacting us! We will get back to you soon.');
        }

        return redirect()->back();
    }
}
