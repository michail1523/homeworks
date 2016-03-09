<?php
class Functions{

    function __autoload($class_name) {
        include $class_name . '.php';
    }
    function render($template, array $environment = array())
    {
        extract($environment);
        ob_start();
        include 'template/' . $template ;
        $contents = ob_get_clean();
        return $contents;
    }

    function curCurrency()
    {
        return @$_COOKIE['cur'] ? $_COOKIE['cur'] : 'grn';
    }


    function currencyWidget($cur = 'grn')
    {
        return $this->render('checkCurrency', [
            'cur' => $cur
        ]);
    }

    function priceWidget($curr)
    {
        $handle = fopen("assets/price.csv", "r");
        while (!feof($handle)) {
            $data[] = fgets($handle, 4096);
        }
        fclose($handle);

        return $this->render('displayPrice', [
            'data' => $data,
            'curr' => $curr,
        ]);
    }

    function getCurrency()
    {

        $currency = isset($_REQUEST['cur']) ? $_REQUEST['cur'] : false;

        if (!$currency) {
            $currency = isset($_COOKIE['cur']) ? $_COOKIE['cur'] : false;
        } else {
            setcookie('cur', $currency, 3600, '/');
        }

        $currency = $currency ? $currency : 'grn';

        return $currency;
    }
}