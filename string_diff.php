
//Function Call
Diff_String ('Manoj', 'Manju');

//Function

function Diff_String($string1, $string2)
{
   $string_pos = strspn($string1 ^ $string2, "\0");  // By using Bitwise operator
    printf('First difference between two strings at position %d: "%s" vs "%s"', $string_pos, $string1[$string_pos], $string2[$string_pos]);
}


//OutPut
//First difference between two strings at position 3: "o" vs "j"
