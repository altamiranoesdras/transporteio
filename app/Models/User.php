<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;
use Spatie\Permission\Traits\HasPermissions;
use Spatie\Permission\Traits\HasRoles;

/**
 * Class User
 * @package App\Models
 * @version January 28, 2020, 1:44 pm CST
 *
 * @property \Illuminate\Database\Eloquent\Collection options
 * @property string username
 * @property string name
 * @property string email
 * @property string|\Carbon\Carbon email_verified_at
 * @property string password
 * @property string thumb
 * @property string img
 * @property string provider
 * @property string provider_uid
 * @property string remember_token
 */
class User extends Authenticatable implements  MustVerifyEmail,HasMedia
{
    use HasApiTokens,Notifiable,HasMediaTrait,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username','name', 'email', 'password','provider','provider_uid'
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

    public function getImgAttribute()
    {
        $media = $this->getMedia('avatars')->last();
        return $media ? $media->getUrl() : asset('dist/img/avatar5.png');
    }

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function options()
    {
        return $this->belongsToMany(\App\Models\Option::class, 'option_user');
    }

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')
            ->width(50)
            ->height(50);
    }

    public function getThumbAttribute()
    {
        $media = $this->getMedia('avatars')->last();
        return $media ? $media->getUrl('thumb') : asset('dist/img/avatar5.png');
    }

    public function getAncestros($parent=null,$all=null)
    {
        $all = $all ?? collect();

        if (is_null($parent)){
            foreach ($this->options()->withOut('children')->get() as $op){

                //si la opción no tine padre
                if (!$op->option_id){
                    $all->push($op);
                }else {
                    $this->getAncestros($op->parent,$all);
                }
            }
        }else{
            //si el padre no tiene padre
            if (!$all->contains('id',$parent->id)){
                if (!$parent->option_id){
                    $all->push($parent);
                }else {
                    $this->getAncestros($parent->parent,$all);
                }
            }

        }


        return $all->sortBy('orden');
    }


    public function optionsIds()
    {
        return $this->options->pluck('id');
    }

    public function menu()
    {
        return $this->getAncestros();
    }

}
