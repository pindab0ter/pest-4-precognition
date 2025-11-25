<?php

declare(strict_types=1);

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/email-form', function () {
    return Inertia::render('EmailForm');
})->name('email-form.show');

class TestRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'email' => ['required', 'email'],
        ];
    }
}

Route::post('/email-submit', fn (TestRequest $request) => to_route('home', [
    'email' => $request->validated('email'),
]))
    ->name('email-form.submit');

Route::get('/{email?}', fn (?string $email = null) => Inertia::render('Welcome', [
    'email' => $email,
]))->name('home');
