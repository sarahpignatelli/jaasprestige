<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\WithFaker;

class ClickTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testHomePageTest()
    {
        $this->visit('/')
         ->click('homelink')
         ->seePageIs('/');
    }
    
    public function testCarPageTest()
    {
        $this->visit('/')
         ->click('carslink')
         ->seePageIs('/cars');
    }
    
    public function testLocationsPageTest()
    {
        $this->visit('/')
         ->click('locationslink')
         ->seePageIs('/locations');
    }
    
    public function testContactPageTest()
    {
        $this->visit('/')
         ->click('contactlink')
         ->seePageIs('/contact');
    }
    
    public function testAboutPageTest()
    {
        $this->visit('/')
         ->click('aboutlink')
         ->seePageIs('/about');
    }
    
    public function testRegisterPageTest()
    {   
        if(DB::table('users')->where('email', '=', 'qwerty@uiop.com')!='[]') {
            DB::table('users')->where('email', '=', 'qwerty@uiop.com')->delete();
        };
        $this->visit('/')
         ->dontsee('LOGIN TEST')
         ->click('registerlink')
         ->seePageIs('/register')
         ->type('LOGIN TEST', 'name')
         ->type('qwerty@uiop.com', 'email')
         ->type('testlogin', 'password')
         ->type('testlogin', 'password_confirmation')
         ->press('submit')
         ->seePageIs('/home')
         ->see('LOGIN TEST')
         ->visit('/register')
         ->seePageIs('/home');
         

    }
    
    public function testRegisterWrongPageTest()
    {   
        $this->visit('/')
         ->click('registerlink')
         ->seePageIs('/register')
         ->press('submit')
         ->seePageIs('/register')
         ->type('LOGIN TEST', 'name')
         ->press('submit')
         ->seePageIs('/register')
         ->type('qwerty', 'email')
         ->press('submit')
         ->seePageIs('/register')
         ->type('qwerty@uiop.com', 'email')
         ->press('submit')
         ->seePageIs('/register')
         ->type('testpassword','password')
         ->press('submit')
         ->seePageIs('/register')
         ->type('testpassword','password')
         ->type('aaaaaa','password_confirmation')
         ->press('submit')
         ->seePageIs('/register')
         ->type('a','password')
         ->type('a','password_confirmation')
         ->press('submit')
         ->seePageIs('/register');
         
    }
    
    public function testLoginTest()
    {
        $this->visit('/')
         ->click('loginlink')
         ->seePageIs('/login')
         ->type('qwerty@uiop.com', 'email')
         ->type('testlogin', 'password')
         ->press('submit')
         ->seePageIs('/home')
         ->see('LOGIN TEST')
         ->visit('/login')
         ->seePageIs('/home');
    }
    
    public function testWrongLoginTest()
    {
        $this->visit('/')
         ->click('loginlink')
         ->seePageIs('/login')
         ->press('submit')
         ->seePageIs('/login')
         ->type('a', 'email')
         ->press('submit')
         ->seePageIs('/login')
         ->type('a@', 'email')
         ->press('submit')
         ->seePageIs('/login')
         ->type('a@a', 'email')
         ->press('submit')
         ->seePageIs('/login')
         ->type('aaaaaa', 'password')
         ->press('submit')
         ->seePageIs('/login')
         ->see('credentials')
         ->type('qwerty@uiop.com', 'email')
         ->type('aaaaaaaaaa', 'password')
         ->press('submit')
         ->seePageIs('/login');
    }
    

    public function testBookingReturnTest()
    {
        $this->visit('/booking')
         ->see('We know you\'re excited to drive a Prestige car, but you\'ll need to')
         ->visit('return')
         ->see('We know you\'re excited to drive a Prestige car, but you\'ll need to')
         ->click('loginlink')
         ->seePageIs('/login')
         ->type('qwerty@uiop.com', 'email')
         ->type('testlogin', 'password')
         ->press('submit')
         ->seePageIs('/home')
         ->see('LOGIN TEST')
         ->visit('/booking')
         ->dontsee('We know you\'re excited to drive a Prestige car, but you\'ll need to')
         ->select('1','location')
         ->type('2020-12-31T01:02','time')
         ->press('submit')
         ->seePageIs('bookingConfirm')
         ->visit('/booking')
         ->see('You already have a current booking!')
         ->visit('return')
         ->dontsee('We know you\'re excited to drive a Prestige car, but you\'ll need to');
         $this->withoutMiddleware();
         $this->press('submit')
         ->seePageIs('returnConfirm');
    }
    
    public function testHistoryTest()
    {
         $this->visit('/report')
         ->see('We know you\'re excited to drive a Prestige car, but you\'ll need to')
         ->visit('/login')
         ->seePageIs('/login')
         ->type('qwerty@uiop.com', 'email')
         ->type('testlogin', 'password')
         ->press('submit')
         ->visit('/report')
         ->see('2020-12-31 01:02');
    }
    
    public function testAdminTest()
    {
        $this->visit('/CarsCRUD')
         ->seePageIs('/')
         ->click('loginlink')
         ->seePageIs('/login')
         ->type('admin@admin.com', 'email')
         ->type('adminadmin', 'password')
         ->press('submit')
         ->click('adminlink')
         ->seePageIs('/CarsCRUD')
         ->click('add-car')
         ->type('dummy','name')
         ->type('dummy','location')
         ->type('0','lat')
         ->type('0','lng')
         ->press('submit')
         ->seePageIs('/CarsCRUD')
         ->see('dummy')
         ->click('edit')
         ->type('1.23','lat')
         ->type('4.56','lng')
         ->press('submit')
         ->seePageIs('/CarsCRUD')
         ->see('1.23')
         ->see('4.56')
         ->press('delete')
         ->seePageIs('/CarsCRUD')
         ->dontsee('dummy');
    }
    
    
}
