<?php 

class BlacklistDeleteAllPhoneNumbersCest
{
    public function _before(ApiTester $I)
    {
    }

    // tests
    public function tryToTest(ApiTester $I)
    {
        $I->wantToTest('Delete all phone numbers from blacklist');
	$I->amBearerAuthenticated('Ym8bIC6KValyegDuBFnrs9no7vYLOTYHp3BV8lqi');
        $I->haveHttpHeader('Content-Type', 'application/x-www-form-urlencoded');
        $I->sendDELETE('/blacklist/phone_numbers');
        $I->seeResponseCodeIs(204); 
    }
}
