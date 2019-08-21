<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property string $name
 * @property string $document
 * @property string $email
 * @property string $phone
 * @property string $deleted_at
 * @property string $created_at
 * @property string $updated_at
 * @property Specialty[] $specialties
 */
class Doctor extends Model
{
  use SoftDeletes;
  /**
   * The table associated with the model.
   * 
   * @var string
   */
  protected $table = 'doctors';

  /**
   * @var array
   */
  protected $fillable = ['name', 'document', 'email', 'phone', 'deleted_at', 'created_at', 'updated_at'];

  /**
   * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
   */
  public function specialties()
  {
    return $this->belongsToMany('App\Specialty', 'specialty_doctor', null, 'especialty_id');
  }
}
