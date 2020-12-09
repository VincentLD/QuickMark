<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ExamStudent extends Pivot
{
    protected $table = 'exam_student';
}
