<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactModel;

class ContactController extends Controller
{
    //get all data from contact table
    
    public function contact(){
        return response()->json(ContactModel::get(), 200);
    }

    //get data by id
    /*
    public function contactById($contactId){
        return response()->json(ContactModel::find($contactId), 200);
        
    }
    */
}
