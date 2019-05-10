<html>
    <head>
        <title>Order Details</title>
    </head>
    <body>
        <table width="700px">
            <tr>
                <td></td>
            </tr>
            <tr>
                <td style="font-size:100px;font-family: Vivaldi !important;color: #f1b8c4;">
                    Burgeon
                </td>
            </tr>
            <tr>
                <td>
                    Hello {{$name}}, 
                </td>
            </tr>
            <tr>
                    <td>
                        Thankyou for shopping with us. Your order details are as below: 
                    </td>
            </tr>
            <tr>
                    <td>
                        Order No: {{ $order_id }}
                    </td>
            </tr>
            <tr>
                    <td>
                        <table width="95%" cellpadding="5" cellspacing="5">
                            <tr>
                                <td>Product Name</td>
                                <td>Product Code</td>
                                <td>Size</td>
                                <td>Color</td>
                                <td>Quantity</td>
                                <td>Price</td>
                            </tr>
                            @foreach($productDetails['orders'] as $product)
                                <tr>
                                        <td>{{ $product['product_name'] }}</td>
                                        <td>{{ $product['product_code'] }}</td>
                                        <td>{{ $product['product_size'] }}</td>
                                        <td>{{ $product['product_color'] }}</td>
                                        <td>{{ $product['product_qty'] }}</td>
                                        <td>{{ $product['product_price'] }}</td>
                                </tr>
                            @endforeach
                            <tr>
                                <td>Shipping Charges</td>
                                <td>{{ $productDetails['shipping_charges']}}</td>
                            </tr>
                            <tr>
                                    <td>Coupon Discount</td>
                                    <td>{{ $productDetails['coupon_amount']}}</td>
                            </tr>
                            <tr>
                                    <td>Grand Total</td>
                                    <td>{{ $productDetails['grand_total']}}</td>
                            </tr>
                            <br><br><br>
                            <tr>
                                <td>
                                   <strong>Bill to:</strong>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $userDetails['name']}}</td>
                            </tr>
                            <tr>
                                <td>{{ $userDetails['address']}}</td>
                            </tr>
                            <tr>
                                <td>{{ $userDetails['city']}}</td>
                            </tr>
                            <tr>
                                <td>{{ $userDetails['state']}}</td>
                            </tr>
                            <tr>
                                <td>{{ $userDetails['country']}}</td>
                            </tr>
                            <tr>
                                <td>{{ $userDetails['pincode']}}</td>
                            </tr>
                            <tr>
                                <td>{{ $userDetails['mobile']}}</td>
                            </tr>
                            <br><br><br>
                            <tr>
                                <td>
                                   <strong>Ship To:</strong>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $productDetails['name']}}</td>
                            </tr>
                            <tr>
                                <td>{{ $productDetails['address']}}</td>
                            </tr>
                            <tr>
                                <td>{{ $productDetails['city']}}</td>
                            </tr>
                            <tr>
                                <td>{{ $productDetails['state']}}</td>
                            </tr>
                            <tr>
                                <td>{{ $productDetails['country']}}</td>
                            </tr>
                            <tr>
                                <td>{{ $productDetails['pincode']}}</td>
                            </tr>
                            <tr>
                                <td>{{ $productDetails['mobile']}}</td>
                            </tr>
                        </table>
                    </td>
            </tr>
        </table>
    </body>

</html>