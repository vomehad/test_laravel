<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    /**
     * @var mixed
     */
    public $name;

    /**
     * @var mixed
     */
    public $email;

    /**
     * @var mixed
     */
    public $subject;

    /**
     * @var mixed
     */
    public $message;
}
