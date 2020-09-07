<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id Id
 * @property string $name name
 * @property string $email email
 * @property string $review review
 */

class Reviews extends Model
{
    protected $fillable = ['name', 'email', 'review'];
}
