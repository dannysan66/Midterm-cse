<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class CustomerForm extends Form
{
    public function buildForm()
    {
      $this->
      add('full_name', Field::TEXT, [
        'rules' => 'required',
        'label' => 'Full Name'
      ])
      ->add('phone_number', Field::TEXT, [
        'rules' => 'required',
        'label' => 'Phone Number'
      ])
      ->add('email', Field::TEXT, [
        'rules' => 'required',
        'label' => 'Email'
      ])
    }
}
