<?php

/*function average($arr)
{
    $n=count($arr);
    $sum=0;
    $average=0;
    for($i=0;$i < $n;$i++)
    {
        $sum+=$arr[$i];
    }
    $average=$sum/$n;
    return $average;
    
}*/






/*function largestSmallest($arr)
{
    $max=$arr[0];
    $min=$arr[0];
    for($i=0;$i<count($arr);$i++)
    {
        if($max < $arr[$i])
        {
            $max=$arr[$i];
        }
    }

    for($i=0;$i<count($arr);$i++)
    {
        if($min > $arr[$i])
        {
            $min=$arr[$i];
        }
    }

    return "The largest number is:$max\nThe smallest number is:$min";

}*/







/*function howMany($arr,$x)
{
    $smaller=0;
    $greater=0;
    for($i=0;$i<count($arr);$i++)
    {
        if($x>$arr[$i]&&$arr[$i]!=$x)
        {
            $greater+=1;
        }

        else if($x< $arr[$i]&&$arr[$i]!=$x)
        {
            $smaller+=1;
        }
    }

    return "Numbers smaller than($x)=$greater\nNumbers greater than($x)=$smaller";
}*/








/*function upperFirst($arr)
{
    $str=implode(",",$arr);
    $str2=ucwords($str,",");
    $ucArray=explode(",",$str2);
    return $ucArray;
}*/






/*function moveZeros($arr)
{
    for($i=0;$i<count($arr);$i++)
    {
        if($arr[$i]==0)
        {
            unset($arr[$i]);
            array_push($arr,0);
        }
    }
    return $arr;
}*/






/*function search($arr,$name)
{
    $returned=0;
    for($i=0;$i<count($arr);$i++)
    {
        if($arr[$i]==$name)
        {
            $returned=$i;
            break;
         
        }

        else
        {
            $returned=-1;
        }
    }
    return $returned;
    
}*/







/*function secondLargest($arr)
{
    $max=$arr[0];
    $secondMax=$arr[0];
    for($i=0;$i<count($arr);$i++)
    {
        if($max < $arr[$i])
        {
            $max=$arr[$i];
        }
    }

    for($i=0;$i<count($arr);$i++)
    {
        for($j=$i+1;$j<count($arr);$j++)
        {
            if($arr[$i] < $max && $arr[$i]>$arr[$j] )
            {
                $secondMax=$arr[$i];
            }
        }
       
    }

    return $secondMax;

}*/




/*
$arr = [11, 55, 24, 43, 44, 545, 6, 777, 810, 94, 140];
$x = 545;

for($i=0;$i<count($arr);$i++)
{
    $found=0;
    if($x==$arr[$i])
    {
        $found=1;
        break;
    }
}
if($found)
{
    echo "Found\n";
}
else
{
    echo "Not found\n";
}


if($x>0)
{
    echo "Postive\n";
}

$prime=0;
for($j=$x-1;$j>1;$j--)
{
    if($x%$j==0)
    {
        $prime=0;
        break;
    }
    else
    {
        $prime=true;
    }
}

if($prime)
{
    echo "Prime\n";
}
else
{
    echo "Not prime\n";
}

if($x%2==0)
{
    echo "even\n";
}
else
{
    echo "odd\n";
}
*/






      
    




























?>



