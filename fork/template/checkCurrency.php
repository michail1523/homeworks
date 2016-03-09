<?php
class CheckCurrency
{


    function __construct()
    {
        $this->getForm();
    }

    function getForm()
    {
        $form = '<html><body><form action="Index.php" method="post"><select name="cur">
<option value="grn" <?=($cur == \'grn\') ? \'selected\' : \'\' ?>>grn</option>
<option value="rub" <?=($cur == \'rub\') ? \'selected\' : \'\' ?>>rub</option>
</select> </form></body></html>';
        echo $form;
    }

}