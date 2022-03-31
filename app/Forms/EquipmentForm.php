<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use Kris\LaravelFormBuilder\Field;

class EquipmentForm extends Form
{
    public function buildForm()
    {
      $this->
      add('name', Field::TEXT, [
        'rules' => 'required',
        'label' => 'Name'
      ])
      ->add('specs', Field::TEXT, [
        'rules' => 'required',
        'label' => 'Specs'
      ])
      ->add('category', Field::SELECT, [
        'rules' => 'required',
        'label' => 'Category'
      ])
      ->add('manufacture_id', Field::SELECT, [
        'rules' => 'required',
        'label' => 'Manufacturer ID'
      ])

      ->add('submit', 'submit', [
        'label' => 'Submit'
      ]);
    }
}

