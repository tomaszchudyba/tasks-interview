<?php 

class ProfileGetPricesCest
{
    public function _before(ApiTester $I)
    {
    }

    // tests
    public function tryToGetProfilePrices(ApiTester $I)
    {
      $I->amBearerAuthenticated('Ym8bIC6KValyegDuBFnrs9no7vYLOTYHp3BV8lqi');
      $I->sendGet('/profile/prices');
      $I->seeResponseCodeIs(200);
      $I->seeResponseIsJson();
    }
}
