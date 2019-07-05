<?php

namespace App;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Schema;

/**
 * @property string id
 * @property string|null username
 * @property string|null password
 * @property string|null email
 */
class User extends Authenticatable
{
    use Notifiable;

  public function up()
  {
    Schema::create('user_account', function (Blueprint $table) {
      $table->string('id');
      $table->string('username');
      $table->string('email');
      $table->string('password');
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('user_account');
  }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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
}
