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
        'name', 'email', 'password', 'is_admin'
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

    public function isAdmin(){
        if($this->role == 'admin')
        { 
            return true; 
        } 
        else 
        { 
            return false; 
        }
    }

    public function isUser(){
        if($this->role == 'user')
        { 
            return true; 
        } 
        else 
        { 
            return false; 
        }
    }

    public function hasRole($role) {
        switch ($role) {
            case 'admin': return \Auth::user()->isAdmin();
            case 'user': return \Auth::user()->isUser();
        }
        return false;
    }
}