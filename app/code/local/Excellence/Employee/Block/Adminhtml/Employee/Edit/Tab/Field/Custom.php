<?php
class Excellence_Employee_Block_Adminhtml_Employee_Edit_Tab_Field_Custom extends Varien_Data_Form_Element_Abstract{
    public function __construct($attributes=array())
    {
        parent::__construct($attributes);
    }
    public function getElementHtml()
    {
        // $value = $this->getValue();
        $custom1 = $this->getCustom1();
        $custom2 = $this->getCustom1();
        $html = "<input type='radio' name='custom' value=".$custom1."> $custom1 <br/>";
        $html .= "<input type='radio' name='custom' value=".$custom2."> $custom2 <br/>";
        return $html;
    }
}