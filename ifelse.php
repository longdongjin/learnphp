<?php
if(date("H") < 10)
{
    echo "have a good morning! ";
}elseif(date("H") < 20){
    echo "Have a good day";
}else{
    echo "Have a good night!";
}