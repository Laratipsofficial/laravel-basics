<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'is_admin',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile()
    {
        return $this->hasOne(Profile::class)->withDefault([
            'city' => 'London',
            'country' => 'England',
        ]);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class)
            ->withPivot(['expires_at'])
            ->withTimestamps();
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function scopeWithLastLogin($query)
    {
        return $query->addSelect([
            'last_logged_in_id' => Login::select('id')
                ->whereColumn('user_id', 'users.id')
                ->orderBy('logged_in_at', 'desc')
                ->limit(1),
        ])->with(['lastLogin']);
    }

    public function lastLogin()
    {
        return $this->belongsTo(Login::class, 'last_logged_in_id');
    }
}
