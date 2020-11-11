<?php 

class BlacklistGetPhoneNumberCest
{
    public function _before(ApiTester $I)
    {
    }

    // tests
    public function tryToTest(ApiTester $I)
    {
      $I->amBearerAuthenticated('Ym8bIC6KValyegDuBFnrs9no7vYLOTYHp3BV8lqi');
      $I->sendGet('/blacklist/phone_numbers');
      $I->seeResponseCodeIs(200);
      $I->seeResponseIsJson();
    }
}
