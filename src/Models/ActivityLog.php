<?php
namespace TechlifyInc\LaravelModelLogger\Models;

use Illuminate\Database\Eloquent\Model;

class TechlifyActivityLog extends Model
{

    protected $table = "model_loggin_activity_logs";
    protected $casts = [
        "object" => "array",
        "data"   => "array"
    ];

}
