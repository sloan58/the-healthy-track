<?php

namespace App\Http\Controllers;

use App\Jobs\BlogIndexData;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function home()
    {
        $data = $this->dispatch(new BlogIndexData(''));

        return view('pages.home', $data);
    }
}
