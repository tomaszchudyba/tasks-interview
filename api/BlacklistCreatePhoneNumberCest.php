<?php 

class BlacklistCreatePhoneNumberCest
{
    public function _before(ApiTester $I)
    {
    }

    // tests
    public function tryToAddPhoneNumbertoBlacklist(ApiTester $I)
    {
     	$I->amBearerAuthenticated('Ym8bIC6KValyegDuBFnrs9no7vYLOTYHp3BV8lqi');
        $I->haveHttpHeader('Content-Type', 'application/x-www-form-urlencoded');
        $I->sendPost('/blacklist/phone_numbers', [
          'phone_number' => '522588333',
          'expire_at' => '2020-12-24T23:59:59Z' 
        ]);
        $I->seeResponseCodeIs(201); // 201
        $I->seeResponseIsJson();
    }
}
