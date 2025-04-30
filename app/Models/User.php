<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Contracts\Auth\MustVerifyEmail;
=======
<<<<<<< HEAD
use Illuminate\Contracts\Auth\MustVerifyEmail;
=======
// use Illuminate\Contracts\Auth\MustVerifyEmail;
>>>>>>> e3104d0cc82be6935792b089fb27d42c43e8b9b3
>>>>>>> adbd3e70a3c725fac0464c3e8b7cda961f5beb2d
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
<<<<<<< HEAD
    use HasFactory, Notifiable;

    // Add 'role' to the $fillable property to allow mass assignment
=======
<<<<<<< HEAD
    use HasFactory, Notifiable;

=======
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
>>>>>>> e3104d0cc82be6935792b089fb27d42c43e8b9b3
>>>>>>> adbd3e70a3c725fac0464c3e8b7cda961f5beb2d
    protected $fillable = [
        'name',
        'email',
        'password',
<<<<<<< HEAD
        'role', // Add 'role' here
    ];
=======
    ];
<<<<<<< HEAD
=======

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
>>>>>>> e3104d0cc82be6935792b089fb27d42c43e8b9b3
>>>>>>> adbd3e70a3c725fac0464c3e8b7cda961f5beb2d
}
