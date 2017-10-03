

//	Function Call
	$a= roman_number(9);		
	echo $a;


//Function 
function roman_number($arabic_number) 
{ 
    $arr_val = array('M'=>1000, 'CM'=>900, 'D'=>500, 'CD'=>400, 'C'=>100, 'XC'=>90, 'L'=>50, 'XL'=>40, 'X'=>10, 'IX'=>9, 'V'=>5, 'IV'=>4, 'I'=>1); 
    $ret_val = ''; 
    while($arabic_number > 0) 
    { 
        foreach($arr_val as $p_rom=>$p_arb) 
        { 
            if($arabic_number >= $p_arb) 
            { 
                $arabic_number -= $p_arb; 
                $return .= $p_rom; 
                break; 
            } 
        } 
    } 

    return $ret_val; 
}

//OutPut
//IX
