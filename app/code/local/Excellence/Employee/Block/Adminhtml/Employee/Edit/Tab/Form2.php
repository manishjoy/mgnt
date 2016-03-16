<?php

class Excellence_Employee_Block_Adminhtml_Employee_Edit_Tab_Form2 extends Mage_Adminhtml_Block_Widget_Form
{
  protected function _prepareForm()
  {
      $form = new Varien_Data_Form();
      $this->setForm($form);
      $fieldset = $form->addFieldset('employee_form', array('legend'=>Mage::helper('employee')->__('Item information')));
     
      $fieldset->addField('title', 'text', array(
          'label'     => Mage::helper('employee')->__('Title'),
          'class'     => 'required-entry',
          'required'  => true,
          'name'      => 'title',
      ));

      $fieldset->addField('date', 'date', array(
          'label'     => Mage::helper('employee')->__('Date'),
          'image' => $this->getSkinUrl('images/grid-cal.gif'),
          'format' => Mage::app()->getLocale()->getDateFormat(Mage_Core_Model_Locale::FORMAT_TYPE_SHORT)
        ));
		
      $fieldset->addField('status', 'select', array(
          'label'     => Mage::helper('employee')->__('Status'),
          'name'      => 'status',
          'values'    => array(
              array(
                  'value'     => 1,
                  'label'     => Mage::helper('employee')->__('Enabled'),
              ),

              array(
                  'value'     => 2,
                  'label'     => Mage::helper('employee')->__('Disabled'),
              ),
          ),
      ));

      $fieldset->addType('custom_field', 'Excellence_Employee_Block_Adminhtml_Employee_Edit_Tab_Field_Custom');

      $fieldset->addField('custom_field', 'custom_field', array(
              'label'     => Mage::helper('employee')->__('Custom Radio Buttons'),
              'name'      => 'Checkbox',
              'custom1'  => 'Custom1 Value',
              'custom2'  => 'Custom2 Value',
    ));

      if ( Mage::getSingleton('adminhtml/session')->getEmployeeData() )
      {
          $form->setValues(Mage::getSingleton('adminhtml/session')->getEmployeeData());
          Mage::getSingleton('adminhtml/session')->setEmployeeData(null);
      } elseif ( Mage::registry('employee_data') ) {
          $form->setValues(Mage::registry('employee_data')->getData());
      }
      return parent::_prepareForm();
  }
}