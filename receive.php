<?php
    require_once 'ECPay.Payment.Integration.php';
    require_once 'Config.php';

    $Return_Parameters = $_Post;
    print_r($_POST);

    foreach ($Return_Parameters as $keys => $value) {
        if ($keys != 'CheckMacValue') {
            if ($keys == 'PaymentType') {
                $value = str_replace('_CVS', '', $value);
                $value = str_replace('_BARCODE', '', $value);
                $value = str_replace('_CreditCard', '', $value);
            }
            /*if ($keys == 'PeriodType') {
                $value = str_replace('Y', 'Year', $value);
                $value = str_replace('M', 'Month', $value);
                $value = str_replace('D', 'Day', $value);
            }*/
            $Feedback[$keys] = $value;
        }
    }

    $CheckMacValue = ECPay_CheckMacValue::generate($Return_Parameters,config::ECPay_HashKey,config::ECPay_HashIV);

    if($_POST['RtnCode'] == '1' && $CheckMacValue == $_POST['CheckMacValue'])
    {
        print "成功";
    }

    echo '1|OK';