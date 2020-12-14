<?php

use Illuminate\Support\Facades\Hash;
use Laravel\Lumen\Testing\DatabaseMigrations;
use TikTokAPI\Response\DeviceRegistrationIdsResponse;

class AuthControllerTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * Should login with appropriate details
     *
     * @test
     * @return void
     */
    public function login()
    {
        $name = 'test';
        $email = 'test@mail.com';
        $user_id = 'test_user_id';
        $sec_user_id = 'test_sec_id';
        $avatar_url = 'test_avatar_url';
        $password = 'test';


        $this->post(
            '/auth/login', compact('email', 'name', 'user_id', 'sec_user_id', 'password', 'avatar_url')
        )->seeJsonStructure(
            ['access_token', 'token_type', 'expires_in']
        );
    }

    /**
     * Login should fail with missing parameters
     *
     * @test
     * @return void
     */
    public function loginShouldFail() {
        $email = 'test@mail.com';
        $user_id = 'test_user_id';
        $sec_user_id = 'test_sec_id';
        $avatar_url = 'test_avatar_url';
        $password = 'test';


        $this->post(
            '/auth/login', compact( 'user_id', 'sec_user_id', 'password', 'avatar_url')
        )->seeStatusCode(422);
    }
}
