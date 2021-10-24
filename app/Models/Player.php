<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Player extends Model
{
    use HasFactory;

    public const WAGE = 5000;
    public const AVAILABLE_ROLES = ['future_first_11', 'bench', 'important', 'key'];
    public const AVAILABLE_LEAGUE_GOALS = ['avoid_relegation', 'qualify', 'win'];
    public const AVAILABLE_CUP_GOALS = ['win', 'semi-final', '3rd-round'];
    public const AVAILABLE_EUROPE_GOALS = ['win', 'semi_final', 'knockout_stage', '3rd_place'];

  
    protected $fillable = [
        'id',
        'name',
        'team_id',
        'device_id',
        'wage',
        'contract_lenght',
        'playerDetails_id',
    ];

    public function playerDetails()
    {
        return $this->belongsTo(PlayerDetails::class, 'playerDetails_id', 'id');
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function teams()
    {
        return $this->belongsToMany(Team::class)->withPivot(
            'contract_expires',
            'contract_sign_at',
            'player_role',
            'wage',
        )->orderByPivot('contract_expires', 'DESC');
    }

    public function personality()
    {
        return $this->belongsTo(Personality::class, 'id');
    }

    public function gameStats()
    {
        return $this->hasMany(GameStats::class);
    }

    public static function getTransferListedPlayers()
    {
        $players = Player::where('device_id', Auth::user()->device_id)
            ->where('transfer_listed', true)->simplePaginate();

        return $players;
    }

    public static function getLoanListedPlayers()
    {
        $players = Player::where('device_id', Auth::user()->device_id)
            ->where('loan_listed', true)->simplePaginate();

        return $players;
    }

    public static function getFreeAgents()
    {
        $players = Player::where('device_id', Auth::user()->device_id)
            ->where('team_id', null)->simplePaginate();

        return $players;
    }

    public static function getAvailableGoals()
    {
        return array_merge(
            self::AVAILABLE_LEAGUE_GOALS,
            self::AVAILABLE_CUP_GOALS,
            self::AVAILABLE_EUROPE_GOALS
        );
    }
}
