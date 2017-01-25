<?php


class ICUserModelTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function testSaveICUserSuccess()
    {
        $new_user = [];
        $new_user['name'] = 'Test Test 001';
        $new_user['gender'] = 'male';
        $new_user['email'] = 'test@testmail.com';
        $new_user['phone'] = 123456789;
        $new_user['address'] = 'KTM Test Vally';
        $new_user['nationality'] = 'Nepali';
        $new_user['dob'] = '11/11/1987';
        $new_user['education_background'] = 'BSC';
        $new_user['mode_of_contact'] = 'email';

        $this->post('/icusers', $new_user)
             ->seeJsonEquals([
                 'stat' => 'ok',
                 'data' => $new_user,
             ]);
    }
    /**
     * A basic test example.
     */
    public function testSaveICUserAttemptWithNoName()
    {
        $new_user = [];
        $new_user['name'] = null;
        $new_user['gender'] = 'male';
        $new_user['email'] = 'test@testmail.com';
        $new_user['phone'] = 123456789;
        $new_user['address'] = 'KTM Test Vally';
        $new_user['nationality'] = 'Nepali';
        $new_user['dob'] = '11/11/1987';
        $new_user['education_background'] = 'BSC';
        $new_user['mode_of_contact'] = 'email';

        $this->post('/icusers', $new_user)
             ->seeJsonEquals([
                 'stat' => 'error',
                 'message' => ['The name field is required.'],
             ]);
    }
    /**
     * A basic test example.
     */
    public function testSaveICUserAttemptWithNoEmail()
    {
        $new_user = [];
        $new_user['name'] = 'Test oo1';
        $new_user['gender'] = 'male';
        $new_user['email'] = null;
        $new_user['phone'] = 123456789;
        $new_user['address'] = 'KTM Test Vally';
        $new_user['nationality'] = 'Nepali';
        $new_user['dob'] = '11/11/1987';
        $new_user['education_background'] = 'BSC';
        $new_user['mode_of_contact'] = 'email';

        $this->post('/icusers', $new_user)
             ->seeJsonEquals([
                 'stat' => 'error',
                 'message' => ['The email field is required.'],
             ]);
    }
    /**
     * A basic test example.
     */
    public function testRemoveICUser()
    {
        $new_user = [];

        $this->delete('/icusers/1')
             ->seeJsonEquals([
                 'stat' => 'ok',
             ]);
    }
}
