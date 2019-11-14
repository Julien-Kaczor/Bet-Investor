<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pronostic
 * @package App
 */
class Pronostic extends Model
{
    protected $table = 'pronostics';

    protected $fillable = ['title', 'team_1', 'team_2', 'team_win', 'start_date', 'fiability',
        'analyse', 'bet'];

    public $timestamps = true;

    public function __set($key, $value)
    {
        $this->setAttribute($key, $value);
    }

    public function __get($key)
    {
        $this->getAttribute($key);
    }
}
