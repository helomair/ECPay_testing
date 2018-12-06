<?php
    class config
    {
        //服務參數
        const ECPay_API_URL     = "https://payment-stage.ecpay.com.tw/Cashier/AioCheckOut/V5"; //測試用服務位置
        const ECPay_HashKey     = '5294y06JbISpM5x9' ;                                         //測試用Hashkey，請自行帶入ECPay提供的HashKey
        const ECPay_HashIV      = 'v77hoKGq4kWxNNIS' ;                                         //測試用HashIV，請自行帶入ECPay提供的HashIV
        const ECPay_MerchantID  = '2000132';                                                   //測試用MerchantID，請自行帶入ECPay提供的MerchantID
        const ECPay_EncryptType = '1';                                                         //CheckMacValue加密類型，固定填入1，使用SHA256加密

        //基本參數
        const ECPay_ReturnURL   = '140.123.15.13/ECPay_testing/example/receive.php';
        const testing = 0;
    }

?>