<?php


namespace App\Http\Services;


use App\Models\Company;
use App\Models\Sponsor;
use Illuminate\Database\Eloquent\Model;

class SponsorService
{
    public static function createFirstSponsorOffers(int $id)
    {
        $params    = Sponsor::PARAMS;

        (new Sponsor([
            'team_id'      => $id,
            'company_id'   => 1,
            'wage'         => $params['minWage'],
            'league_bonus' => $params['leagueBonus'],
            'sign_bonus'   => $params['signBonus'],
            'league_goal'  => $params['leagueGoal'],
        ]))->save();

        (new Sponsor([
            'team_id'      => $id,
            'company_id'   => 2,
            'wage'         => self::increase($params['minWage'], 5),
            'league_bonus' => self::decrease($params['leagueBonus'], 10),
            'sign_bonus'   => self::decrease($params['signBonus'], 5),
            'league_goal'  => $params['leagueGoal'],
        ]))->save();


        (new Sponsor([
            'team_id'      => $id,
            'company_id'   => 3,
            'wage'         => self::decrease($params['minWage'], 20),
            'league_bonus' => self::decrease($params['leagueBonus'], 30),
            'sign_bonus'   => self::decrease($params['signBonus'], 20),
            'league_goal'  => $params['leagueGoal'],
        ]))->save();
    }

    private static function increase($number, $percentage)
    {
        return $number + ($number/100) * $percentage;
    }


    private static function decrease($number, $percentage)
    {
        return $number - ($number/100) * $percentage;
    }
}
