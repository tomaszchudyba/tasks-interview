<?php 

class ProfileGetRegionalSettingsCest
{
    public function _before(ApiTester $I)
    {
    }

    // tests
    public function tryToGetProfileRegionalSetting(ApiTester $I)
    {
      $I->amBearerAuthenticated('Ym8bIC6KValyegDuBFnrs9no7vYLOTYHp3BV8lqi');
      $I->sendGet('/profile/regional_settings');
      $I->seeResponseCodeIs(200);
      $I->seeResponseIsJson();
      $I->seeResponseMatchesJsonType([
         "language"=> "string",
    ]);
    }
}
