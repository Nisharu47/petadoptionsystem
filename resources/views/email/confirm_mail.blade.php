<div>
    <table cellspacing="0" border="0" height="100%"
        style="background-image:url(&quot;&quot;);background-color:rgb(250,250,250);font-family:Nobile,sans-serif"
        cellpadding="0" width="100%">

        <tbody style="background-color: #dfe6e4;">
            <tr>
                <td valign="top">
                    <table cellspacing="0" border="0" align="center" cellpadding="0" width="670">

                        <tbody>
                            <tr style="background-color:#000000">
                                <th scope="col" colspan="2" width="50%"
                                    style="border-bottom:3px solid rgb(193,236,251);padding:10px;">
                                </th>
                            </tr>

                            <tr>
                                <td valign="top">
                                    <table cellspacing="0" border="0" cellpadding="0" width="670">
                                        <tbody style="background-color: #dfe6e4;">
                                            <tr>
                                                <td valign="top" width="5"></td>
                                                <td height="90" valign="top">
                                                    <table cellspacing="0" border="0" height="90" cellpadding="0"
                                                        width="670">
                                                        <tbody>
                                                            <tr>
                                                                <td height="90" valign="top">
                                                                    <table cellspacing="0" border="0" height="90"
                                                                        cellpadding="0" width="665">
                                                                        <tbody>
                                                                            <tr>

                                            

                                                                                <td align="center" valign="middle"
                                                                                    width="500"
                                                                                    style="color:rgb(0, 0, 0);font-size:35px;font-weight:bold;padding-top:10px; padding-right:20px;">
                                                                                    <b style="color:#17c0da"> Furry Friends Forever</td>
                                                                                <td valign="top">

                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                                <td valign="top" width="5"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>

                            <!-- <tr>
                                <td height="20" valign="top"></td>
                            </tr> -->

                        </tbody>
                    </table>
                </td>
            </tr>

            <tr>
                <td valign="top">
                    <table cellspacing="0" border="0" align="center" cellpadding="0" width="670">
                        <tbody style="background-color: #dfe6e4;">
                            <tr>
                                <td valign="top" style="font-size:15px;color:rgb(43,43,43);line-height:20px;padding:10px;text-align:center;">
                                    <p>Dear {{$content_data->customer_fname}},
                                    <br>
                                    <strong> Your booking has confirmed!
                                    </strong> <br>
                                    <strong>Thank you for choosing <b style="color: #17c0da;">Furry Friends Forever</b>.</strong> 
                                    <br>
                                    Your Donation amount is <b style="color: #17c0da;"> Rs {{$content_data->donation}}</b>  
                                    <br>
                                    Below are your booking details,
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <table cellspacing="0" border="0" align="center" cellpadding="0" width="670"
                        style="font-weight:normal">
                        <tbody style="background-color: #dfe6e4;">

                            <tr style="background-color:#17c0da">
                                <th scope="col" colspan="2" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(247, 243, 243);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    <strong>CUSTOMER DETAILS</strong>
                                </th>
                            </tr>

                            <tr>
                                <th scope="col" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(43,43,43);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    First Name</th>
                                <th scope="col" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(43,43,43);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    {{$content_data->customer_fname}}</th>
                            </tr>
                            <tr>
                                <th scope="col" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(43,43,43);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    Sur Name</th>
                                <th scope="col" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(43,43,43);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    {{$content_data->customer_lname}}</th>
                            </tr>
                            <tr>
                                <th scope="col" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(43,43,43);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    E-mail</th>
                                <th scope="col" width="50%"
                                    style="text-transform:none;font-weight:normal;font-size:14px;color:rgb(43,43,43);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    <a href="mailto:{{$content_data->customer_email}}"
                                        target="_blank">{{$content_data->customer_email}}</a>
                                </th>
                            </tr>
                            <tr>
                                <th scope="col" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(43,43,43);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    Contact Number</th>
                                <th scope="col" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(43,43,43);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    <a href="tel:{{$content_data->customer_contact_no}}">
                                    {{$content_data->customer_contact_tp}}</a>
                                </th>
                            </tr>
                            <tr>
                                <th scope="col" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(43,43,43);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    Address</th>
                                <th scope="col" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(43,43,43);line-height:20px;border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    {{$content_data->address}}, <br>
                                    {{$content_data->city}}. 
                                    </th>
                            </tr>

                            <tr style="background-color:#17c0da">
                                <th scope="col" colspan="2" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(247, 243, 243);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    <strong>BOOKING DETAILS</strong>
                                </th>
                            </tr>

                            <tr>
                                <th scope="col" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(43,43,43);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    Booking Date</th>
                                <th scope="col" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(43,43,43);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    {{$content_data->booking_date}}</th>
                            </tr>

                            <tr>
                                <th scope="col" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(43,43,43);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    Adoption Date</th>
                                <th scope="col" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(43,43,43);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    {{$content_data->adaption_date}}
                                </th>
                            </tr>
                        
                            <tr>
                                <th scope="col" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(43,43,43);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    Pet Name</th>
                                <th scope="col" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(43,43,43);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    {{$content_data->name}}</th>
                            </tr>

                            <tr>
                                <th scope="col" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(43,43,43);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    Donation</th>
                                <th scope="col" width="50%"
                                    style="text-transform:uppercase;font-weight:normal;font-size:14px;color:rgb(43,43,43);border-bottom:1px solid rgb(193,193,193);padding:10px;text-align:left">
                                    Rs {{$content_data->donation}}
                                </th>
                            </tr>
                            
                        </tbody>
                    </table>
                    <table cellspacing="0" border="0" align="center" cellpadding="0" width="670">
                        <tbody style="background-color: #dfe6e4;">
                            <tr>
                                <td valign="top" style="font-size:15px;color:rgb(43,43,43);line-height:20px;padding:10px;text-align:center"><br>


                                    <p><strong>Thanking you,</strong> <br><br>
                                        <b style="color: #17c0da;">Furry Friends Forever</b> Team.<br>
                                        Email: <a href="mailto:adaptionfff@gmail.com"
                                            target="_blank">adaptionfff@gmail.com</a><br>
                                        Telephone: <a href="tel:+940000000000"><i class="fa fa-phone"
                                                aria-hidden="true"></i> +94 000 000 0000</a>
                                    </p>
                                </td>
                            </tr>
                            <tr style="background-color:#000000">
                                <th scope="col" colspan="2" width="50%"
                                    style="border-top:3px solid rgb(193,236,251);padding:10px;">
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>

        </tbody>
    </table>
</div>