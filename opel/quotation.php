<html>
    <header>
    <style>
    table, th, td {
      border: 1px solid black;
    }
    </style>
    </header>
    <body>
        <h3>Price Quotation</h3>
    


        <table style="width:100%">
            <tr>
                <th></th>
                <th>Description</th>
                <th>Unit Price</th>
                <th>Quatity</th>
                <th>Tatal</th>
            </tr>

        </table>

    </body>
    
</html>

<?php

printf("member:");
fscanf(STDIN,"%s",$member);
printf("");
fscanf(STDIN,"%f %f",$unitprice,$quatity);
$total=( $unitprice* $quatity)-((( $unitprice* $quatity)*5)/100);
$subtotal=$total-(($total*10)/100);


if($member='y')
{
  $net=$subtotal-($subtotal*10)/100;
}
elseif($member='n')
{
  $net=0;
}



printf("tt %.2f st %.2f mt %.2f",$total,$subtotal,$net);
?>
