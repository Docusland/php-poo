<?php 
class TextField extends HtmlField
{
        private function __toString()
    {
        return "<input type='text' name='$fieldName' value='$fieldValue'>";
    }
}

?>