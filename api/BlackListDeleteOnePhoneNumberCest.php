<?php 

class BlackListDeleteOnePhoneNumberCest
{
    public function _before(ApiTester $I)
    {
    }

    // tests
    public function tryToDeleteOnePhoneNumber(ApiTester $I)
    {
        $I->wantToTest('Delete one  phone numbers from blacklist');
	$I->amBearerAuthenticated('Ym8bIC6KValyegDuBFnrs9no7vYLOTYHp3BV8lqi');
        $I->haveHttpHeader('Content-Type', 'application/x-www-form-urlencoded');
        $I->sendDELETE('/blacklist/phone_numbers',[
          'phone_number' => '48548588333',
         ]);
        $I->seeResponseCodeIs(204); 
    }
}
