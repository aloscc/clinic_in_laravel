<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer $id
 * @property string $name
 * @property string $num_document
 * @property string $type_document
 * @property string $email
 * @property string $age
 * @property string $born_date
 * @property string $city_born
 * @property string $deleted_at
 * @property string $created_at
 * @property string $updated_at
 */
class Pacient extends Model
{
  use SoftDeletes;
  /**
   * The table associated with the model.
   * 
   * @var string
   */
  protected $table = 'pacients';

  /**
   * The "type" of the auto-incrementing ID.
   * 
   * @var string
   */
  protected $keyType = 'integer';

  /**
   * @var array
   */
  protected $fillable = ['name', 'num_document', 'type_document', 'email', 'age', 'born_date', 'city_born', 'deleted_at', 'created_at', 'updated_at'];

}
