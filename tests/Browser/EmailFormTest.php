<?php
declare(strict_types=1);

test('submits a precognitive form', function () {
    visit('/email-form')
        ->type('email', 'test')
        ->submit()
        ->assertSee('The email field must be a valid email address.')
        ->type('email', 'test@example.com')
        ->screenshot()
        ->submit()
        ->assertSee('Email submitted')
        ->assertSee('test@example.com');
});
