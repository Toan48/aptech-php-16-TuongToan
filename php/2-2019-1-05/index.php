

<table>
    <tr>
        <th>type</th>
        <th>price</th>
        <th>size</th>
        <th>ram</th>
        <th>made by</th>
        <th>made in</th>
    </tr>
    <tbody>

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

    for($i = 0; $i < count($data); $i++)
    {
        echo "<tr>";
        echo "<td>".$data[$i]['type']."</td>";
        echo "<td>".$data[$i]['property']['price']."</td>";
        echo "<td>".$data[$i]['property']['size']."</td>";
        echo "<td>".$data[$i]['property']['ram']."</td>";
        echo "<td>".$data[$i]['property']['made']['by']."</td>";
        echo "<td>".$data[$i]['property']['made']['in']."</td>";
        echo "</tr>";
    }
?>
    </tbody>    
</table>
    
    

    







