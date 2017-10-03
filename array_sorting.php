//Function Call
  Sort_Array(array(5, 8, 2, 6));

//Function Script

function Sort_Array($arr_numbers)
{
    sort($arr_numbers); // Sort function for sorting an array
    foreach ($arr_numbers as $key => $val) {
        echo "Sort_array[" . $key . "] = " . $val . "</br>";
    }
  } 


//OutPut
//Sort_array[0] = 2
//Sort_array[1] = 5
//Sort_array[2] = 6
//Sort_array[3] = 8 
