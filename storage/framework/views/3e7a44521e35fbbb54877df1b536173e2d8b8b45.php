

<?php $__env->startSection('content'); ?>

    <table data-module="travel 2" data-thumb="thumbnails/thumbnail2.png" width="100%" style="font-family: 'Montserrat',Arial, sans-serif;" bgcolor="#ececec" border="0" cellspacing="0" cellpadding="0">
        <?php
            $transaction = $data[0];
            $order_number = $transaction->id;
            $customer_email = $transaction->customer_email;
            $input_address = $transaction->input_address;
            $productName = \App\Product::find($transaction->product_id)->name;
            $productPrice = $transaction->product_price;
            $quantity = $transaction->amount;
            $pay_amount = $transaction->total_amount;
            $bitcoin = $transaction->total_bitcoin;
            $customerInfo = $transaction->custominfo;
            $payed_coin = $transaction->payed_bitcoin;
            $remain_coin = $bitcoin - $payed_coin;
        ?>
        <tbody>
        <tr>
            <td align="center">
                <table align="center" border="0" cellspacing="0" cellpadding="0">
                    <tbody>
                    <tr>
                        <td width="600" bgcolor="#fff" align="center">
                            <table width="100%" align="center" border="0" cellpadding="0" cellspacing="0">
                                <tbody>
                                <tr height="50"></tr>

                                <tr>
                                    <td style="color:#141d23;font-family: 'Montserrat',Arial, sans-serif;font-size:18px;padding-right:30px;padding-left:30px;font-weight:500;letter-spacing:1px;line-height:30px;" data-bgcolor="Title" data-color="Title" data-size="Title" data-min="12" data-max="60">
                                        <center><h1 style="color: #59a457">You have received an order with the order number #<?php echo $order_number; ?> from <?php echo $customer_email; ?></h1></center>
                                    </td>
                                </tr>

                                <tr>
                                    <td height="20"></td>
                                </tr>
                                <tr>
                                    <td style="color:#141d23;font-family: 'Montserrat',Arial, sans-serif;font-size:18px;padding-right:30px;padding-left:30px;font-weight:600;letter-spacing:1px;line-height:30px;" data-bgcolor="Title" data-color="Title" data-size="Title" data-min="12" data-max="60">
                                        Product Name : <?php echo $productName; ?>

                                    </td>
                                </tr>
                                <tr>
                                    <td style="color:#141d23;font-family: 'Montserrat',Arial, sans-serif;font-size:18px;padding-right:30px;padding-left:30px;font-weight:600;letter-spacing:1px;line-height:30px;" data-bgcolor="Title" data-color="Title" data-size="Title" data-min="12" data-max="60">
                                        Amount : <?php echo $quantity; ?> g
                                    </td>
                                </tr>
                                <tr>
                                    <td style="color:#141d23;font-family: 'Montserrat',Arial, sans-serif;font-size:18px;padding-right:30px;padding-left:30px;font-weight:600;letter-spacing:1px;line-height:30px;" data-bgcolor="Title" data-color="Title" data-size="Title" data-min="12" data-max="60">
                                        Total Amount : <?php echo $pay_amount; ?> €
                                    </td>
                                </tr>
                                <tr>
                                    <td style="color:#141d23;font-family: 'Montserrat',Arial, sans-serif;font-size:18px;padding-right:30px;padding-left:30px;font-weight:600;letter-spacing:1px;line-height:30px;" data-bgcolor="Title" data-color="Title" data-size="Title" data-min="12" data-max="60">
                                        Payed Amount : <?php echo $payed_coin; ?> BTC
                                    </td>
                                </tr>
                                <tr>
                                    <td style="color:#141d23;font-family: 'Montserrat',Arial, sans-serif;font-size:18px;padding-right:30px;padding-left:30px;font-weight:600;letter-spacing:1px;line-height:30px;" data-bgcolor="Title" data-color="Title" data-size="Title" data-min="12" data-max="60">
                                        Transaction Address :<span style="color: #59a457"> <?php echo $input_address; ?></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="color:#141d23;font-family: 'Montserrat',Arial, sans-serif;font-size:18px;padding-right:30px;padding-left:30px;font-weight:600;letter-spacing:1px;line-height:30px;" data-bgcolor="Title" data-color="Title" data-size="Title" data-min="12" data-max="60">
                                        Customer Email  :<span style="color: #141d23"> <?php echo $customer_email; ?></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="color:#141d23;font-family: 'Montserrat',Arial, sans-serif;font-size:18px;padding-right:30px;padding-left:30px;font-weight:600;letter-spacing:1px;line-height:30px;" data-bgcolor="Title" data-color="Title" data-size="Title" data-min="12" data-max="60">
                                        Delivery Information  :<span style="color: #141d23"> <?php echo $customerInfo; ?></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="height: 30px">

                                    </td>
                                </tr>
                                <tr>
                                    <td style="color:#141d23;font-family: 'Montserrat',Arial, sans-serif;font-size:18px;padding-right:30px;padding-left:30px;font-weight:600;letter-spacing:1px;line-height:30px;" data-bgcolor="Title" data-color="Title" data-size="Title" data-min="12" data-max="60">
                                        <center><a href="http://localhost:7000" style="color:#ff0000!important;text-decoration:none;display:block;font-size:23px;font-style:italic" type="button">Darkrice.online</a></center>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="height: 50px">

                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        </tbody>
    </table>

    <table bg-color="#7f8c8d" style="font-family: 'Montserrat', Arial, sans-serif;color:#7f8c8d" width="100%" bgcolor="#fff" align="center" border="0" cellspacing="0" cellpadding="0">
        <tbody>
        <tr>
            <td data-bg="header bg" data-bgcolor="header bg" align="center" bgcolor="#ececec">
                <table align="center" border="0" cellpadding="0" cellspacing="0">
                    <tbody>
                    <tr>
                        <td width="600" align="center" bgcolor="#403e3e">
                            <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
                                <tbody style="background-color: #222222">
                                <tr>
                                    <td height="10"></td>
                                </tr>
                                <tr>
                                    <td align="center" data-link-style="text-decoration:none; color:#a2a9af;" data-link-color="Content" data-size="Content" data-color="Content" style="font-family: 'Open Sans', Arial, sans-serif; font-size:15px; color:#a2a9af; line-height:30px;">
                                        <singleline>
                                            © 2019 Darkrice.online
                                        </singleline>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="5"></td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        </tbody>
    </table>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('emails/layouts/emailTemplate', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>