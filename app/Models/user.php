<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class User extends Model{
protected $table = 'students';
public $timestamps = false;
// column sa table
protected $fillable = [
'Student_FirstName', 'Student_LastName', 'Student_Gender'
];
}
