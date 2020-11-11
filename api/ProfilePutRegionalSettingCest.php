<?php 

class ProfilePutRegionalSettingCest
{
    public function _before(ApiTester $I)
    {
    }

    // tests
    public function PublicPutRegionalSettings(ApiTester $I)
    {

      $I->amBearerAuthenticated('Ym8bIC6KValyegDuBFnrs9no7vYLOTYHp3BV8lqi');
      $I->sendPut('/profile/regional_settings',[
		"language"=>"pl"
      ]);
      $I->seeResponseCodeIs(200);
      $I->seeResponseIsJson();

    }
}
