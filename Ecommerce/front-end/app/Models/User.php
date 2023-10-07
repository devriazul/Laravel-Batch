<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @method static create(string[] $array)
 * @method static updateOrCreate(array $array)
 * @method static where(string $string, int $int)
 */
class User extends Model
{
    protected $fillable = ['email','otp'];

    public function profile(): HasOne
    {
        return $this->hasOne(Profile::class);
    }
}
