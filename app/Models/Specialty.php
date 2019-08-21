<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property string $specialty
 * @property string $description
 * @property string $deleted_at
 * @property string $created_at
 * @property string $updated_at
 * @property Doctor[] $doctors
 */
class Specialty extends Model
{
  use SoftDeletes;
  /**
   * The table associated with the model.
   * 
   * @var string
   */
  protected $table = 'specialties';

  /**
   * @var array
   */
  protected $fillable = ['specialty', 'description', 'deleted_at', 'created_at', 'updated_at'];

  /**
   * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
   */
  public function doctors()
  {
    return $this->belongsToMany('App\Doctor', 'specialty_doctor', 'especialty_id');
  }
}
