<?php
class Excellence_Employee_Block_Adminhtml_Employee extends Mage_Adminhtml_Block_Widget_Grid_Container
{
  public function __construct()
  {
    $this->_controller = 'adminhtml_employee';
    $this->_blockGroup = 'employee';
    $this->_headerText = Mage::helper('employee')->__('Item Manager');
    $this->_addButtonLabel = Mage::helper('employee')->__('Add Item');
    /*Custom Button*/
    $this->_addButton('button1', array(
            'label'     => Mage::helper('employee')->__('Add Employee'),
            'onclick'   => 'setLocation(\'' . $this->getUrl('*/*/new/key/') .'\')',
            'class'     => 'add',
        ));

    parent::__construct();
  }
}