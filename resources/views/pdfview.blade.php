 <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

th{
  background-color: #dddddd;
}
@page { size: 10cm 15cm portrait; }
</style>

<h1 style="text-align: center;">IDREES BOOK BANK</h1>
<h3 style="text-align: center;">Receipt</h3>
 <table >
  <tr>
    <th style="text-align: center;">Name</th>
    <th style="text-align: center;">Price</th>
    <th style="text-align: center;">Quantity</th>
  
  </tr>
  <tr>
    <td style="text-align: center;">{{ $name }}</td>
    <td style="text-align: center;">{{ $price }}</td>
    <td style="text-align: center;">{{ $quantity }}</td>

  </tr>
</table>

<h4 style="margin-left: 50%;">Total Amount:Rs/-{{ $bill  }}</h4>
<h4 style="margin-left: 50%;">You Paid:Rs/-{{ $cashpaid  }}</h4>
<h4 style="margin-left: 50%;">Change:Rs/-{{ $change  }}</h4>

<h5 style="text-align: center; font-family: arial, sans-serif;">Thanks For Shopping Here</h5>