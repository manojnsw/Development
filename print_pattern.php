
//Function Call
print_pattern();


//Function script
function print_pattern()
{
  $n=5;
  
  //Incrimental section
  for($i=1; $i<=$n; $i++)
  {
    for($j=1; $j<=$i; $j++)
      {
        echo ' * ';
      }
  echo '</br>';
}

//Decrimental section

  for($i=$n; $i>=1; $i--)
  {
      for($j=1; $j<=$i; $j++)
        {
        echo ' * ';
        }
    echo '</br> ';
  }
}
