<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        "is_revisor",
        "is_writer",
        "is_admin",
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function applyRequest($string){
        $user = Auth::user();

        if($user){
            switch ($string) {
                case 'admin':
                   $user->is_admin = NULL;
                break;

                case 'revisor':
                    $user->is_revisor = NULL;
                break;

                case 'writer':
                    $user->is_writer = NULL;
                break;
            }
            $user->update();
        }
    }

    public function Articles(): HasMany
    {
        return $this->hasMany(Articles::class);
    }
}

