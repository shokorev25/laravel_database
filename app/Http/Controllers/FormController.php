<?php

namespace App\Http\Controllers;

use App\Models\FormData;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function submitForm(Request $request)
    {
        // Валидация данных
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        // Сохранение данных в базу данных
        FormData::create($validated);

        return redirect('/form')->with('success', 'Данные успешно сохранены!');
    }
}
