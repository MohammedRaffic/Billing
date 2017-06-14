<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1" align="center">
    <thead>
    <tr>
        <th>S.N.</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Buyer Name</th>
        <th>sales Date</th>
        <th>Sales status</th>
    </tr>
    </thead>
    <tbody>
    <?php $i=1 ?>
        <tr>
            <td>{{$i}}</td>
            <td>{{$bill->product_name}}</td>
            <td>{{$bill->price}}</td>
            <td>{{$bill->quantity}}</td>
            <td>{{$bill->buyer_name}}</td>
            <td>{{$bill->created_at}}</td>
            <td>@if($bill->sales_status == 1) Cash @else Cash @endif</td>
        </tr>
    </tbody>
</table>
</body>
</html>


