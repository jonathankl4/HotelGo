<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\DB;

class cekLogin implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */

     public $pass;
    public function __construct($p)
    {
        $this->pass = $p;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $data = DB::select("select * from users");


        foreach($data as $d){
            if($d->email == $value && $d->password == $this->pass){
                return true;
            }
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Email atau password anda salah';
    }
}
