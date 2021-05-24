<?php

namespace App\Http\Controllers\App\UI;

use App\Http\Controllers\Controller;

class InterfaceController extends Controller
{
    public function formElements()
    {
        return view('form.input');
    }

    public function formLayouts()
    {
        return view('form.form-layouts');
    }

    public function formValidation()
    {
        return view('form.validation');
    }

    public function formInputText()
    {
        return view('form.input-text');
    }

    public function icons()
    {
        return view('ui-features.icons');
    }

    public function modals()
    {
        return view('ui-features.modal');
    }
    public function buttons()
    {
        return view('ui-features.buttons');
    }
    public function avatars()
    {
        return view('ui-features.avatars');
    }
    public function badges()
    {
        return view('ui-features.badges');
    }
    public function errorNotes()
    {
        return view('ui-features.error-notes');
    }
    public function checkboxAndRadio()
    {
        return view('ui-features.checkboxes-radios');
    }
    public function cards()
    {
        return view('ui-features.cards');
    }
    public function tabs()
    {
        return view('ui-features.tabs');
    }
    public function nothingToShow()
    {
        return view('ui-features.nothing-to-show');
    }
}
