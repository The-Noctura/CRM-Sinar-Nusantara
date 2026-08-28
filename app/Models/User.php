<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
  use HasFactory, Notifiable;

  protected $fillable = [
    'nama',
    'role_id',
    'username',
    'password',
  ];

  public function role()
  {
    return $this->belongsTo(Role::class);
  }

  protected function casts(): array
  {
    return [
      'password' => 'hashed',
    ];
  }
}
