<?php

namespace App\Validator;

use Symfony\Component\Validator\Constraint;

/**
 * Should be used only in RepeatedPasswordExtension
 * @Annotation
 */
class ConfirmPassword extends Constraint
{
    /*
     * Any public properties become valid options for the annotation.
     * Then, use these in your validator class.
     */
    public $message = 'Пароли не совподают';
}
