<?php
    $data = [
        [
            'type' => 'iphone',
            'property' => [
                'price' => 100,
                'size' => 6.5,
                'ram' => '2 GB',
                'made' => [
                    'by' => 'California',
                    'in' => 'China',
                ],
            ],
        ],
        [
            'type' => 'ipad',
            'property' => [
                'price' => 190,
                'size' => 7.9,
                'ram' => '4 GB',
                'made' => [
                    'by' => 'California',
                    'in' => 'China',
                ],
            ],
        ],
    ];

    foreach($data as $key => $value)
    {  
        echo $key;
        echo " ";
        foreach($value as $key1 => $value1 )
        {
            echo " ";
            var_dump($value1);
        }
        echo "<br>";
    }
    
    

    







