<?php

namespace App\Http\Controllers;

use App\Models\FormData;

class DataController extends Controller
{
    public function showData()
    {
        // Извлекаем все данные из базы данных
        $data = FormData::all();

        // Передаем данные в представление
        return view('data', ['data' => $data]);
    }
}

