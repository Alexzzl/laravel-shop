<?php

return [
    'alipay' => [
        'app_id'         => '2016092700606280',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAx2aVN9RK+ZS/OBRzeV+uSZv/W8G1dLUVixm26kgxcvi+hx1z7EqH9DjqpE/8HQvr6BY26C8jUFxSVmQiXQAjJDu5+Hi4HsgU9w5FSetfyhJYOpJ7TJc4LJGjJyzyD1p0zpoWh0i7A1QTt7BdtBXs9Xa302M9P1awg079L+7HTnaEpAxU+99zYy43yKUCNthIYNe8rFcM+db/Zf8VPtsLtEfplTGGIYhuP9zguR6pMbJdIhYvp8xuCT92N/B0CIjDhCJgeeBWKsMc2Mi3dQdZ1wEYmlSjRraLbYM8hh3qDARDVzOASpnED9JNcRCgtmTs188RPidE58mPawPfcKzW/wIDAQAB',
        'private_key'    => 'MIIEpgIBAAKCAQEAvgrdMhNxRk6DtItyQdcrmr41BssqX/VyoqGyieklMp6ux6S4ToCap/DdO42/PrLQ7ddFjcXZGhGJacgHhjYy3MLz6fQQkrbZcunMuVSTD07r6fWjVORwusebi7b1MsaH94Sf3Q85xrfN92a3juOsCOSwuF5WeeKIX4DSo8RHm3gTOGqAXn7gx9BURBv++Fb2ftJx4w9sssTk2KnrqGsARx8dyTIvSYMvaWIhQPY0xyx23fIxjPWdMt2WiGV6Bv3iY1WdpT+2AsKiackELek4ZEmmHwWUFvoFQUtFd3qDodjbleTrr2YYJBW4gfLi/lKQtuxVE5lqcGZWY2u6yhK6iwIDAQABAoIBAQCNVn0d8hHLzTbsvs0SJJoccxvy2oTAa0Z/p6ymHsx4ckXg2yPr1n+vKVcQJKK4WbtDOFhVUXDej25YStk1uvdm8mL/e3Ib+3uLmFCXAUyCFRslnHeF+oPQlgWcCk0gH0EeF/fhK6K3pRm8xxr7XV4kGxlHdXnxGkZ8aM2/2Im9GG9AeJGIq0obMfMTDF4oiPgfGTLcgn6gVoSD2A14y/pxoZOCxu1HZ7iCU+CSxe6SUPqMSa7j5wu79qW9FQh1YpBaVLAMKkpMdS1/YDYgeRREE+x0B2TF3TAA5hU8ODk5vCrGjTgvE+3VJana71nwh5wmuncgGJgZuUQzPXph57AJAoGBAOR6kHpDAwXFh/fgudM5QqLi2+uRB8SivWuyAppBqhtr6tYYEAjQhHn9IPA2nlsZIInSjPDvRn6ZeL4uz0SJHP+KHy0bsTuq8YJz0fmCRBVUg83jqqJjB6EJqgcrBy1oOGqGWy4/xecc/RBhuqj/GBz/HT4wmneRYUmkBFTK21P9AoGBANTvEPJWLbwUw9m0+upwvyRiyQj/e9CINzjknoowhDFDSGEx6+ulSt3lft/hEtV7ZW9/oGsHsiLf3dvKpd5KqIvt9XZGCCYtUYQxHg2CJARYeo+0KcCqooK7gMCRkrC/dRDcp314+WK+wSNyEdP3pX1FI3e0KbzfAIXTPkvZZlsnAoGBAIrHA4CvuWNFEwx1/IkW66nCf/A6vGwsqT+D9V666dcUGqUGIp8oAH+UR/CATHlq7r+oGyGxRLFbCOMDzbOEUQ/KVptwiZuDfoRNU0npXO9T0Wc6lQdjfVvMYfFOqmJjPnk9uJ6D7/IsQm4z3kwN/hiGwL1oijp8HIq9TEAwoz4FAoGBAJx5kdqDudgc6k9xz3G4qL30Wgdit3nmn64PUvH59Sq+ZtIF/XiNXxbxLusWWuDGbSQihaAhZ6Z5HHAH2xwfgPxTQa5IiHSFmQGrlooWuKD45Bf2LTiILCQl5dedIk8AYuahP/PUkm8d/pAtoyxBMDt+MzIkEwfYWGn/cigK+kzBAoGBAM4eOs9rVpL/V3GLMzl4SWHsRQx13az7SkpFOBKDuSqVLW4VVbrYUSwpe12a2ZK4P4gZX3dw8fVXCOfa9tQ8e62qs07ofbBs/xwjYp25L+ePaQlWvTD0C0RnzGWBOtJlQpO2nrJf5D6PpcQ18dLDXc39Arod+hmSoNFPzvGKZMxP',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];