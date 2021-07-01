<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{

    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     * @var array
     */

    protected $fillable = [
        'name',
        'email',
        'password',
        'parent_id',
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /* get users all child users*/
    public function getUsers($id)
    {
        $return = [
            'id' => '',
            'name' => '',
            'email' => '',
            'created_at' => '',
            'updated_at' => '',
            'child' => []
        ];

        $users = self::where('parent_id', $id)->get();

        foreach ($users as $user) {
            $return['id'] = $user->id;
            $return['name'] = $user->title;
            $return['email'] = $user->email;
            $return['created_at'] = $user->created_at;
            $return['updated_at'] = $user->updated_at;
            $return['child'][] = $this->getUsers($user->id);
        }

        return $return;

    }

    /*
     * gets user with parent
     */
    public function getUserWithSelf($id)
    {
        $return = [];

        $category = self::where('id', $id)->first();

        $return['id'] = $category->id;

        $return['title'] = $category->title;

        $return['child'] = $this->getUsers($id);

        return $return;
    }

    /*
     * get user only childs
     * */

    public static function getUserChilds($id)
    {
        return self::where('parent_id', $id)->paginate(15);
    }


    public static function getParent($email)
    {
        return self::where('email', $email)->first();
    }


    public  function setPassword($password){
        $this->attributes['password'] = Hash::make($password);
    }

}
