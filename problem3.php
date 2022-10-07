<?php
$data = array(
        array(
            'name'=>'Mark',
            'job'=>'engineer',
            'age'=>25,
            'hobbies' => array('drawing','swimming','reading'),
            'skills' => array('coding','fasting learning','teaching')
        ),
        array(
            'name'=>'Joe',
            'job'=>'designer',
            'age'=>19,
           'skills'=>array('fast learning')
        ) ,
        array(
            'name'=>'sara',
            'age'=>25,
            'city'=>'NY'
        ),

        array(
            'name'=>'sam',
            'job'=>'accountant',
            'age'=>25,
            'city'=>'london'
        ),
        array(
            'name'=>'Esraa',
            'job'=>'Designer',
            'age'=>23,
            'city'=>'cairo',
            'hobbies' => array('writing','reading'),
            'skills' => array('coding','teaching')
        ),
    );

echo "There is number of user in city<br>";
     echo "----------------------------------------------------------------------<br>";
 
//     foreach ($data as $key => $value) {      
//         if (!empty($value['city'])) {
//             echo"<pre>";
//             print_r($value);
//             // echo "$key: $value";
//                  echo "----------------------------------------------------------------<br>";
               
//         }
// }
    foreach ($data as $key => $value) {    
        if (!empty($value['city'])) {
            echo"<pre>";
            print_r($value);
            // echo "$key: $value";
                 echo "----------------------------------------------------------------<br>";              
        }
}

?>