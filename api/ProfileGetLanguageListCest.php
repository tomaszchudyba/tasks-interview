<?php 

class ProfileGetLanguageListCest
{
    public function _before(ApiTester $I)
    {
    }

    // tests
    public function tryToGetLanguageList(ApiTester $I)
    {
      $I->amBearerAuthenticated('Ym8bIC6KValyegDuBFnrs9no7vYLOTYHp3BV8lqi');
      $I->sendGet('/profile/regional_settings/available_languages');
      $I->seeResponseCodeIs(200);
      $I->seeResponseIsJson();
    }
}
