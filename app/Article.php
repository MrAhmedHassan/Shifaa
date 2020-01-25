<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use BeyondCode\Comments\Traits\HasComments;

class Article extends Model
{
    use HasComments;
}
