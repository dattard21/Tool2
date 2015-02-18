<html>

    <head>
        <!--        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Raleway">-->
        <style>            
            /*            @font-face {
                            font-family: 'Raleway';
                            font-style: normal;                
                            src: local('Raleway Light'), local('Raleway-Light'), url(https://themes.googleusercontent.com/static/fonts/raleway/v6/-_Ctzj9b56b8RgXW8FArib3hpw3pgy2gAi-Ip7WPMi0.woff) format('woff');
                        }*/
            body{
                font-family: 'Raleway',serif;
            }
            .wrapper
            {
                width:650px;
                border-top:1px solid #e1e1e1;
                border-left:1px solid #e1e1e1;
                border-right:1px solid #e1e1e1;
                position: relative;
                margin-top: 15px;
                padding-bottom: 250px;
            }
            .logo
            {
                position: absolute;
                top:-20px;
                left:38px;
                width: 146px;
                height: 145px;
            }
            .title
            {
                float: right;
                margin-top: 70px;
                margin-right: 38px;
                width:200px;
                font-size: 28px;
                text-align: right;
            }
            .clear
            {
                clear: both;
            }
            .address
            {
                margin-left: 38px;
                font-size: 12px;                
                width:200px;
                word-break: normal;
                float: left;
            }
            .edc
            {
                float: right;
                margin-right: 38px;
                margin-top: 12px;
                font-size: 12px;
                text-align: right;
                margin-bottom: 50px;
            }
            .gray_big
            {
                width: 590px;
                margin:50px 20px 0 20px;
                background-color: #E7E7E8; 
                padding:10px;                
            }
            .project_desc
            {
                padding-top:20px;
                background-color: white;
                padding: 15px;
                font-size: 12px;
            }
            .project_desc p
            {
                text-align: justify;
            }
            .table_container
            {
                margin-top: 20px;
                padding: 0 10px;
            }
            .table
            {
                font-size: 12px;
                width:100%;
            }
            table
            {
                border-collapse: collapse; 
            }

            .table tbody tr:first-child td
            {
                border-top: 1px solid black !important;
            }
            .table tbody tr:last-child td
            {
                border-top: 2px solid <?php echo isset($color_code) && !empty($color_code) ? $color_code : '#FFC34C' ?> !important;
                border-bottom: 2px solid black !important;

            }
            .other_row_title td
            {
                /*                border-top: 2px solid #FFC34C !important;*/
                padding-top: 15px !important;
            }
            .other_row td
            {
                border-top: 1px solid black !important;
                padding-bottom: 10px !important;
            }
            .table td
            {
                border-top: 2px solid white;
                vertical-align: top;
                padding: 5px;
            }
            .table th
            {
                padding: 5px;
                white-space: nowrap;
            }
            .wrapper2
            {
                width:650px;
                border:1px solid #e1e1e1;
                margin-top: 15px;
                /*                padding-top: 50px;*/
            }
            .gray_small
            {
                background-color: #E7E7E8; 
                border: 17px solid white;
                padding:25px;
                font-size: 11px;
                text-align: justify;
            }
        </style>
    </head>
    <body>

        <div class="wrapper">
            <div class="main">


                <div class="title" {{isset($color_code) && !empty($color_code) ? 'style="color:'.$color_code.';"' : 'style="color:#FFC34C;"'}}>
                    WEB DESIGN<br /> 
                    QUOTATION
                </div>
                <div class="clear"></div>
                <br />
                <br />
                <div class="address">
                    {{$client_address}}<br/>                    
                </div>

                <div class="edc">
                    <b>Extimate No: {{ !empty($estimate_no) ? '#'.$estimate_no : '---'}}</b><br />
                    <b>Date</b>: {{date('F, d Y')}}<br />
                    <b>Customer</b>: {{$client_name ? $client_name : "---"}}<br />                    
                </div>
                <div class="clear"></div>

                <div class="gray_big" {{isset($color_code) && !empty($color_code) ? 'style="border-top:3px solid '.$color_code.'"' : 'style="border-top:3px solid #FFC34C;"'}}>

                     <div class="project_desc">
                        <b>Project Description:</b>
                        <hr />
                        <p>
                            {{ ($project_description) ? $project_description : "---" }}
                        </p>
                    </div>

                    <div class="clear"></div>

                    <div class="table_container">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th align="left">Description</th>
                                    @if(isset($show_working))
                                    <th align="right">Hours</th>
                                    <th align="right">Price Per Hour</th>
                                    @endif
                                    <th align="right">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- */$total = 0;/* --}}                        
                                @foreach($description as $data)
                                @if(isset($data['chk']))                        
                                <tr>
                                    <td>{{ !empty($data['desc']) ? $data['desc'] : '---'}}</td>
                                    @if(isset($show_working))
                                    <td align="right">{{!empty($data['hour']) ? $data['hour'] : '---'}}</td>
                                    <td align="right">{{!empty($data['price']) ? (isset($currency) && $currency != 'other' ? $currency : $other_currency).$data['price'] : '---'}}</td>
                                    @endif
                                    <td align="right">{{!empty($data['hour']) && !empty($data['price']) ? (isset($currency) && $currency != 'other' ? $currency : $other_currency).($data['hour'] * $data['price']) : 0}}</td>
                                </tr>
                                {{-- */$total += $data['hour'] * $data['price'];/* --}}
                                @endif                        
                                @endforeach                                
                                <tr class="other_row_title">
                                    <td {{isset($show_working) ? 'colspan="4"' : 'colspan="2"'}} {{isset($color_code) && !empty($color_code) ? 'style="border-top:2px solid '.$color_code.'"' : 'style="border-top:2px solid #FFC34C;"'}}><b>Other Expenses</b></td>
                                </tr>
                                <tr class="other_row">
                                    <td {{isset($show_working) ? 'colspan="3"' : ''}}>
                                        {{ ( isset($free_text) && $free_text ) ? $free_text : '---'}}
                                    </td>
                                    <td align="right">{{ ( isset($free_text_price) && $free_text_price) ? (isset($currency) && $currency != 'other' ? $currency : $other_currency).$free_text_price : '0'}}</td>                                    
                                </tr>
                                <tr>
                                    <td {{isset($show_working) ? 'colspan="3"' : ''}} align="right"><b>Sub Total</b></td>
                                    <td align="right">{{(isset($currency) && $currency != 'other' ? $currency : $other_currency).($total + (isset($free_text_price) ? $free_text_price : 0))}}</td>
                                </tr>
                                <tr>
                                    <td {{isset($show_working) ? 'colspan="3"' : ''}} align="right"><b>Tax</b></td>
                                    <td align="right">{{  (($tax_hidden == 'percentage') ? '' : '$').($tax ? $tax : '0').(($tax_hidden == 'percentage') ? '%' : '')}}</td>
                                </tr>
                                <tr>
                                    <td {{isset($show_working) ? 'colspan="3"' : ''}} align="right"><b>Total Estimated</b></td>
                                    <td align="right">
                                        {{(isset($tax_switch) ? (isset($currency) && $currency != 'other' ? $currency : $other_currency).(($tax_hidden == 'percentage') ? (round(($total + (isset($free_text_price) ? $free_text_price : 0)) + (($total + (isset($free_text_price) ? $free_text_price : 0)) * $tax/100),2)) : (($tax_hidden == 'flat') ? (($total + (isset($free_text_price) ? $free_text_price : 0)) + $tax) : ($total + (isset($free_text_price) ? $free_text_price : 0)))) : (isset($currency) && $currency != 'other' ? $currency : $other_currency).($total + (isset($free_text_price) ? $free_text_price : 0)))}}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="clear"></div>
                </div>                
            </div>
            @if($image)
            <img src="{{ asset('assets/img/'.$image) }}"  class="logo"/>
            @endif            
        </div>        
        <div class="wrapper2">
            <div class="gray_small">                                                            
                <b>Quote issued by</b> | {{$address ? $address.'.' : '---'}}<br />
                <b>Email</b>: {{$contact_email ? $contact_email : "---"}} | Tel: {{$contact_phone ? $contact_phone : "---"}} | <b>{{$web_site}}</b><br /><br />
                Above information is not an invoice and only an estimate of services described above. This estimate is non-contractual.<br/>
                Describe your condition of the estimate here (i.e. what it includes, what does not, etc.)<br/>
                If you have any questions concerning this invoice, please get back to us using the contact details above<br/><br/>
                Thank you for your business!
            </div>            
        </div>        
    </body>    
</html>

