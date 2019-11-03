<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function show($authorId) {

        $author = Author::findOrFail($id);
        //return single article as a resource
        return new AuthorResource($article);    	
    }
}
