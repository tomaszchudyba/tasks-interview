<?php 

class ProfileGetProfileDetailsCest
{
    public function _before(ApiTester $I)
    {
    }

    // tests
    public function tryToGetProfileDetails(ApiTester $I)
    {
      $I->amBearerAuthenticated('Ym8bIC6KValyegDuBFnrs9no7vYLOTYHp3BV8lqi');
      $I->sendGet('/profile');
      $I->seeResponseCodeIs(200);
      $I->seeResponseIsJson();
      $I->seeResponseMatchesJsonType([
    "id"=> "string",
    "name"=> "string",
    "username"=> "string",
    "email"=> "string",
    "phone_number"=> "string",
    "user_type"=>"string",
    "points"=>'float',
    "payment_type"=> "string"
    ]);
    }

}
