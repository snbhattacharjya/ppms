<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

/**
 * 
 * @group feature
 * 
 **/

class LoginControllerTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_login_displays_the_login_form()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
        $response->assertViewIs('auth.login');
    }

    public function test_login_displays_validation_error_for_userid()
    {
        $request = [
            'code'     => '',
            'password' => 'password'
        ];

        $response = $this->post('/login', $request);
        $response->assertStatus(302);
        $response->assertSessionHasErrors('code');
    }

    public function test_login_displays_validation_error_for_password()
    {
        $request = [
            'code'     => '123',
            'password' => ''
        ];

        $response = $this->post('/login', $request);
        $response->assertStatus(302);
        $response->assertSessionHasErrors('password');

    }

    public function test_login_authenticates_and_redirects_user_to_home()
    {
        $user = User::factory()->create();

        $response = $this->post('/login', [
            'code' => $user->code,
            'password' => env('DEFAULT_PASSWORD', 'paSSw0rd'),
        ]);

        $response->assertRedirect(route('home'));
        $this->assertAuthenticatedAs($user);
    }
}
