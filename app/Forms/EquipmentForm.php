<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use Kris\LaravelFormBuilder\Field;

class CustomerForm extends Form
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
        'choices' => ['desktop' => 'Desktop', 'laptop' => 'Laptop', 'phone' => 'Phone', 'tablet' => 'Tablet'],
        'empty_value' => '=== Select Category ==='
      ])
      ->add('manufacture_id', Field::SELECT, [
        'rules' => 'required',
        'label' => 'Manufacturer'
        'choices' => getManufacturers(),
        'empty_value' => '=== Select Manufacturer ==='
      ])

      ->add('submit', 'submit', [
        'label' => 'Submit'
      ]);
    }
}
