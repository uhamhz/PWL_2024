<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function articles(){
    $id = request('id');
    return 'Artikel ke-' . $id;
    }
}
