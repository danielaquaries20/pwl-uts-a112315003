<?php

namespace App\Controllers;

class DashboardController extends BaseController
{
    public function wellcome(): string
    {
        return view('welcome_message');
    }

    public function dashboard(): string
    {
        return view('dashboard');
    }

    public function bloglist(): string
    {
        return view('blog');
    }

    public function blogadd(): string
    {
        return view('add_blog');
    }

    public function admin_panel(): string
    {
        return view('admin_panel');
    }

}
