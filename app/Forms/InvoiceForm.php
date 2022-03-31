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
      ->add('price', Field::NUMBER, [
        'rules' => 'required',
        'label' => 'Price'
      ])
      ->add('purchase_date', Field::DATE, [
        'rules' => 'required',
        'label' => 'Purchase Date',
      ])
      ->add('equipment_id', Field::TEXT, [
        'rules' => 'required',
        'label' => 'Equipment',
      ])
      ->add('customer_id', Field::TEXT, [
        'rules' => 'required',
        'label' => 'Customer',
      ])

      ->add('submit', 'submit', [
        'label' => 'Submit'
      ]);
    }
}
