<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use Kris\LaravelFormBuilder\Field;

class InvoiceForm extends Form
{
    public function buildForm()
    {
      $this->
      add('invoice_num', Field::NUMBER, [
        'rules' => 'required',
        'label' => 'Invoice Number'
      ])
      ->add('price', Field::TEXT, [
        'rules' => 'required',
        'label' => 'Price'
      ])
      ->add('purchase_date', Field::DATE, [
        'rules' => 'required',
        'label' => 'Purchase Date',
      ])
      ->add('equipment_id', Field::SELECT, [
        'rules' => 'required',
        'label' => 'Equipment ID',
        'choices' => getEquipment(),
        'empty_value' => '=== Select Equipment Info ==='
      ])
      ->add('customer_id', Field::SELECT, [
        'rules' => 'required',
        'label' => 'Custome ID',
        'choices' => getCustomerid(),
        'empty_value' => '=== Select Customer ID ==='
      ])

      ->add('submit', 'submit', [
        'label' => 'Submit'
      ]);
    }
}
