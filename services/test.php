<?php
if(!mail('info@primacyinfotech.in','Test Mail', 'Test',''))
{
    echo "Not Sent";
    
}
else
{
    echo "Sent";
}

?>