@extends('quote::layouts.default')

@section('content')
<!-- will be used to show any messages -->



@if( Session::has('success') )
<div id='info' class="alert alert-success"><center><b>Thanks</b>, your email has been emailed to you !!</center></div>
@endif

</style>
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&appId=1505608733054235&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="well">
			  <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://quotegenerator.beewits.com" data-text="We've just create a quotation for a client. Get yours too @" data-via="beewitsapp" data-hashtags="webdesign">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
			  
			  <div class="fb-share-button" data-href="http://quotegenerator.beewits.com" data-layout="button_count"></div>
			  <h2>Generate a Web Design project quotation</h2>
			  Lorem ipsum mother lover
			  
			  <h3>What is the Quote generator?</h3>
			  Lorem ipsum ipsum loreem loremmus ipsemmus
			  
			  <h3>Where is it located?</h3>
			  In the site root, right next to your robots.txt and favicon.ico. You can also add an author tag to the head of your site: &lt;link type=&quot;text/plain&quot; rel=&quot;author&quot; href=&quot;http://domain/humans.txt&quot;&gt;
			  
			  <h3>What does the humans.txt generator do?</h3>
			  Just in case it's not simple enough to create the humans.txt, we help you here to create a humans.txt file. Just enter the details, enter your email address and we'll generate and send the humans.txt file to your email address.
			  
			  </div>
<div class='well'>
    <form class="form-horizontal" name="quoteForm" method="post" action="{{route('quoteGenerate')}}" enctype="multipart/form-data">
        <fieldset>
            <legend class="legend_custom">
<!--                <div class="col-lg-4 col-md-4 col-sm-4">Quote Generator</div>-->
                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-8" style="margin-top:-3px;">
                    <div class="btn-group btn-group-sm" role="group" aria-label="...">
                        <button type="button" class="btn btn-default currency_dollar"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span></button>
                        <button type="button" class="btn btn-default currency_euro"><span class="glyphicon glyphicon-euro" aria-hidden="true"></span></button>
                        <button type="button" class="btn btn-default currency_pound"><span class="glyphicon glyphicon-gbp" aria-hidden="true"></span></button>
                        <button type="button" class="btn btn-default currency_other"><span class="glyphicon" aria-hidden="true">Other</span></button>
                        <input type='hidden' id='currencyHidden' name='currencyHidden' />                        
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-4" style="margin-top:-9px;">
                    <input type="text" class="form-control other_currency" id="inputEmail" name='other_currency' placeholder="Eneter Other Currency...">
                </div>
                <div style="clear:both;"></div>
            </legend>
            <div class="firstForm">
                <div class="form-group">
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <label class="col-lg-3 control-label">Your Address</label>
                        <div class="col-xs-11 col-lg-9 col-sm-9">
                            <textarea class="form-control" rows="3" name='quoteCompany' id='company' placeholder="Your Address..."></textarea>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <label class="col-lg-4 control-label">Client Name</label>
                        <div class="col-xs-11 col-lg-8 col-sm-9 same_line">
                            <input type="text" class="form-control" id="inputEmail" name='clientName' placeholder="Client Name">                            
                        </div>
                    </div>                    
                </div>
                <div class="form-group">
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <label class="col-lg-3 control-label">Contact Email</label>
                        <div class="col-xs-11 col-lg-9 col-sm-9">
                            <input type="text" class="form-control" id="inputEmail" name='contactEmail' placeholder="Contact Email">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <label class="col-lg-4 control-label">Client Address</label>
                        <div class="col-xs-11 col-lg-8 col-sm-9 same_line">
                            <textarea class="form-control" rows="3" name='quoteClient' placeholder="Client Address..."></textarea>
                        </div>
                    </div>
                    <div class='clearfix'></div>
                </div>
                <div class="form-group">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <label class="col-lg-3 control-label">Contact Phone</label>
                        <div class="col-lg-9 col-xs-11 col-sm-9">
                            <input type="text" class="form-control" id="inputEmail" name='contactPhone' placeholder="Contact Phone">
                        </div>
                    </div>   
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <label class="col-lg-4 control-label">Color Code</label>
                        <div class="col-lg-8 col-xs-11 col-sm-9 same_line">
                            <input type="text" class="form-control" id="inputEmail" name='colorQuote' placeholder="Color For Final Quote ( Ex. #FFFFFF )">
                        </div>
                    </div>                    
                    <div class='clearfix'></div>
                </div>
                <div class="form-group">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <label class="col-lg-3 col-md-4 web_site control-label">Website</label>
                        <div class="col-lg-9 col-xs-11 col-sm-9">
                            <input type="text" class="form-control" id="inputEmail" name='website' placeholder="Website">
                        </div>
                    </div>                    
                    <div class='clearfix'></div>
                </div>
                <div class="form-group">
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <label class="col-lg-3 control-label">Project Description</label>
                        <div class="col-xs-11 col-lg-9 col-sm-9">
                            <textarea class="form-control" rows="3" name='projectDescription' placeholder="Project Description..."></textarea>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <label class="col-lg-4 control-label">Estimate No.</label>
                        <div class="col-xs-11 col-lg-8 col-sm-9 same_line">
                            <input type="text" class="form-control" id="inputEmail" name='estimateNo' placeholder="Estimate No.">
                        </div>
                    </div>
                    <div class='clearfix'></div>
                </div>
                <div class="form-group">                   
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <label for="inputEmail" class="col-lg-3 col-sm-3 control-label">Your Logo</label>
                        <div class="col-lg-6 col-xs-12 col-sm-9">
                            <input type="file" style="margin-top: 5px;" name='quoteCompanyLogo' placeholder="Your Logo">                    
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <label class="col-lg-3 col-md-2 control-label"><input type="checkbox" name="showWorkings" class='switch' data-size="mini" data-on-color="success" data-off-color="danger" data-on-text="ON" data-off-text="OFF" checked></label>
                        <div class="col-xs-11 col-lg-9 col-md-10 show_workings">
                            Show workings (hours * price) in final quotation
                        </div>
                    </div>
                </div>
                <div class="form-group">                   
                    <div class="col-sm-6">
                        <label for="inputEmail" class="col-sm-3 control-label"><input type="checkbox" name="description[0][chk]" class='switch' data-size="mini" data-on-color="success" data-off-color="danger" data-on-text="ON" data-off-text="OFF" checked></label>
                        <div class="col-xs-11 col-lg-9 col-sm-9">
                            <input type="text" class="form-control" id="inputEmail" name='description[0][desc]' placeholder="Project Management">                  
                        </div>
                    </div>                    
                    <div class="col-sm-6" >
                        <div class="col-xs-2" style="padding-right:0;">
                            <input type="number" class="form-control change_input" name='description[0][hour]' id="inputEmail">
                        </div>
                        <div class="hours_label">
                            <label for="inputEmail" class="control-label" style="">hours &nbsp;&nbsp;*&nbsp;&nbsp; <span class="currency" aria-hidden="true" style="font-size: 12px;"></span></label>
                        </div>
<!--                        <input type="text" class="form-control col-xs-2 other_currency" name='description[0][other_currency]' id="inputEmail">-->
                        <div class="col-xs-2 col-sm-2 col-md-2" style="padding-left:0;">
                            <input type="number" class="form-control change_mul" id="inputEmail" name='description[0][price]' style="">
                        </div>                                                    
                        <div class="col-xs-4 col-sm-3 col-md-3" style="">
                            <label for="inputEmail" class="control-label" style=""><span class="currency" aria-hidden="true" style="font-size: 12px;"></span><span class="change_value">0</span></label>                        
                        </div>
                    </div>
                </div> 
                <div class="form-group">                   
                    <div class="col-sm-6">
                        <label for="inputEmail" class="col-sm-3 control-label"><input type="checkbox" name='description[1][chk]' class='switch' data-size="mini" data-on-color="success" data-off-color="danger" data-on-text="ON" data-off-text="OFF" checked></label>
                        <div class="col-xs-11 col-lg-9 col-sm-9">
                            <input type="text" class="form-control" name='description[1][desc]' id="inputEmail" placeholder="Design time">                    
                        </div>
                    </div>                    
                    <div class="col-sm-6">
                        <div class="col-xs-2" style="padding-right:0;">
                            <input type="number" class="form-control change_input" id="inputEmail" name='description[1][hour]' style="">
                        </div>
                        <div class="hours_label">
                            <label for="inputEmail" class="control-label" style="">hours &nbsp;&nbsp;*&nbsp;&nbsp; <span class="currency" aria-hidden="true" style="font-size: 12px;"></span></label>                        
                        </div>
<!--                        <input type="text" class="form-control col-xs-2 other_currency" name='description[1][other_currency]' id="inputEmail">-->
                        <div class="col-xs-2 col-sm-2 col-md-2" style="padding-left:0;">
                            <input type="number" class="form-control change_mul" id="inputEmail" name='description[1][price]' style="">
                        </div>                                                    
                        <div class="col-xs-4 col-sm-3 col-md-3" style="">
                            <label for="inputEmail" class="control-label" style=""><span class="currency" aria-hidden="true" style="font-size: 12px;"></span><span class="change_value">0</span></label>                        
                        </div>
                    </div>
                </div>
                <div class="form-group">                   
                    <div class="col-sm-6">
                        <label for="inputEmail" class="col-sm-3 control-label"><input type="checkbox" name='description[2][chk]' class='switch' data-size="mini" data-on-color="success" data-off-color="danger" data-on-text="ON" data-off-text="OFF" checked></label>
                        <div class="col-xs-11 col-lg-9 col-sm-9">
                            <input type="text" class="form-control" id="inputEmail" name='description[2][desc]' placeholder="Content / copy">                    
                        </div>
                    </div>                    
                    <div class="col-sm-6">
                        <div class="col-xs-2" style="padding-right:0;">
                            <input type="number" class="form-control change_input" name='description[2][hour]' id="inputEmail" style="">
                        </div>
                        <div class="hours_label">
                            <label for="inputEmail" class="control-label" style="">hours &nbsp;&nbsp;*&nbsp;&nbsp; <span class="currency" aria-hidden="true" style="font-size: 12px;"></span></label>                        
                        </div>
<!--                        <input type="text" class="form-control col-xs-2 other_currency" name='description[2][other_currency]' id="inputEmail">-->
                        <div class="col-xs-2 col-sm-2 col-md-2" style="padding-left:0;">
                            <input type="number" class="form-control change_mul" id="inputEmail" name='description[2][price]' style="">
                        </div>                                                    
                        <div class="col-xs-4 col-sm-3 col-md-3" style="">
                            <label for="inputEmail" class="control-label" style=""><span class="currency" aria-hidden="true" style="font-size: 12px;"></span><span class="change_value">0</span></label>                        
                        </div>
                    </div>
                </div>
                <div class="form-group">                   
                    <div class="col-sm-6">
                        <label for="inputEmail" class="col-sm-3 control-label"><input type="checkbox" name='description[3][chk]' class='switch' data-size="mini" data-on-color="success" data-off-color="danger" data-on-text="ON" data-off-text="OFF" checked></label>
                        <div class="col-xs-11 col-lg-9 col-sm-9">
                            <input type="text" class="form-control" id="inputEmail" name='description[3][desc]' placeholder="Development">                    
                        </div>
                    </div>                    
                    <div class="col-sm-6">
                        <div class="col-xs-2" style="padding-right:0;">
                            <input type="number" class="form-control change_input" id="inputEmail" style="" name='description[3][hour]'>
                        </div>
                        <div class="hours_label">
                            <label for="inputEmail" class="control-label" style="">hours &nbsp;&nbsp;*&nbsp;&nbsp; <span class="currency" aria-hidden="true" style="font-size: 12px;"></span></label>                        
                        </div>
<!--                        <input type="text" class="form-control col-xs-2 other_currency" name='description[3][other_currency]' id="inputEmail">-->
                        <div class="col-xs-2 col-sm-2 col-md-2" style="padding-left:0;">
                            <input type="number" class="form-control change_mul" id="inputEmail" style="" name='description[3][price]'>
                        </div>                                                    
                        <div class="col-xs-4 col-sm-3 col-md-3" style="">
                            <label for="inputEmail" class="control-label" style=""><span class="currency" aria-hidden="true" style="font-size: 12px;"></span><span class="change_value">0</span></label>                        
                        </div>
                    </div>
                </div>
                <div class="form-group">                   
                    <div class="col-sm-6">
                        <label for="inputEmail" class="col-sm-3 control-label"><input type="checkbox" name='description[4][chk]' class='switch' data-size="mini" data-on-color="success" data-off-color="danger" data-on-text="ON" data-off-text="OFF"></label>
                        <div class="col-xs-11 col-lg-9 col-sm-9">
                            <input type="text" class="form-control" id="inputEmail" placeholder="Domain name" name='description[4][desc]'>                    
                        </div>
                    </div>                    
                    <div class="col-sm-6">
                        <div class="col-xs-2" style="padding-right:0;">
                            <input type="number" class="form-control change_input" id="inputEmail" style="" name='description[4][hour]'>
                        </div>
                        <div class="hours_label">
                            <label for="inputEmail" class="control-label" style="">hours &nbsp;&nbsp;*&nbsp;&nbsp; <span class="currency" aria-hidden="true" style="font-size: 12px;"></span></label>                        
                        </div>
<!--                        <input type="text" class="form-control col-xs-2 other_currency" name='description[4][other_currency]' id="inputEmail">-->
                        <div class="col-xs-2 col-sm-2 col-md-2" style="padding-left:0;">
                            <input type="number" class="form-control change_mul" id="inputEmail" style="" name='description[4][price]'>
                        </div>                                                    
                        <div class="col-xs-4 col-sm-3 col-md-3" style="">
                            <label for="inputEmail" class="control-label" style=""><span class="currency" aria-hidden="true" style="font-size: 12px;"></span><span class="change_value">0</span></label>                        
                        </div>
                    </div>
                </div>
                <div class="form-group">                   
                    <div class="col-sm-6">
                        <label for="inputEmail" class="col-sm-3 control-label"><input type="checkbox" name='description[5][chk]' class='switch' data-size="mini" data-on-color="success" data-off-color="danger" data-on-text="ON" data-off-text="OFF"></label>
                        <div class="col-xs-11 col-lg-9 col-sm-9">
                            <input type="text" class="form-control" id="inputEmail" placeholder="Hosting for 1 year" name='description[5][desc]'>                    
                        </div>
                    </div>                    
                    <div class="col-sm-6">
                        <div class="col-xs-2" style="padding-right:0;">
                            <input type="number" class="form-control change_input" id="inputEmail" style="" name='description[5][hour]'>
                        </div>
                        <div class="hours_label">
                            <label for="inputEmail" class="control-label" style="">hours &nbsp;&nbsp;*&nbsp;&nbsp; <span class="currency" aria-hidden="true" style="font-size: 12px;"></span></label>                        
                        </div>
<!--                        <input type="text" class="form-control col-xs-2 other_currency" name='description[5][other_currency]' id="inputEmail">-->
                        <div class="col-xs-2 col-sm-2 col-md-2" style="padding-left:0;">
                            <input type="number" class="form-control change_mul" id="inputEmail" style="" name='description[5][price]'>
                        </div>                                                    
                        <div class="col-xs-4 col-sm-3 col-md-3" style="">
                            <label for="inputEmail" class="control-label" style=""><span class="currency" aria-hidden="true" style="font-size: 12px;"></span><span class="change_value">0</span></label>                        
                        </div>
                    </div>
                </div>
                <div class="form-group">                   
                    <div class="col-sm-6">
                        <label for="inputEmail" class="col-sm-3 control-label"><input type="checkbox" name='description[6][chk]' class='switch' data-size="mini" data-on-color="success" data-off-color="danger" data-on-text="ON" data-off-text="OFF" checked></label>
                        <div class="col-xs-11 col-lg-9 col-sm-9">
                            <input type="text" class="form-control" id="inputEmail" placeholder="Template" name='description[6][desc]'>                    
                        </div>
                    </div>                    
                    <div class="col-sm-6">
                        <div class="col-xs-2" style="padding-right:0;">
                            <input type="number" class="form-control change_input" id="inputEmail" style="" name='description[6][hour]'>
                        </div>
                        <div class="hours_label">
                            <label for="inputEmail" class="control-label" style="">hours &nbsp;&nbsp;*&nbsp;&nbsp; <span class="currency" aria-hidden="true" style="font-size: 12px;"></span></label>                        
                        </div>
<!--                        <input type="text" class="form-control col-xs-2 other_currency" name='description[6][other_currency]' id="inputEmail">-->
                        <div class="col-xs-2 col-sm-2 col-md-2" style="padding-left:0;">
                            <input type="number" class="form-control change_mul" id="inputEmail" style="" name='description[6][price]'>
                        </div>                                                    
                        <div class="col-xs-4 col-sm-3 col-md-3" style="">
                            <label for="inputEmail" class="control-label" style=""><span class="currency" aria-hidden="true" style="font-size: 12px;"></span><span class="change_value">0</span></label>                        
                        </div>
                    </div>
                </div>
            </div>            
            <div class="form-group">                   
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <label for="inputEmail" class="col-sm-3 control-label">Add more line</label>
                    <div class="col-xs-11 col-lg-9 col-sm-9">
                        <input type='button' class='btn btn-primary add_first_form' value='Add'/>
                    </div>
                </div>                    
            </div>                                    
            <div class="form-group">                   
                <div class="col-sm-6">
                    <label for="inputEmail" class="col-sm-3 col-xs-2 col-lg-3 control-label"><input type="checkbox" name="freeText_chk" class='switch' data-size="mini" data-on-color="success" data-off-color="danger" data-on-text="ON" data-off-text="OFF" checked></label>                    
                    <div class="col-xs-11 col-lg-9 col-sm-9">
                        <textarea class="form-control" rows="3" name='freeText_desc' placeholder="Other Expenses..."></textarea>
                    </div>
                </div>                    
                <div class="col-sm-6" style="padding-left: 6px;">                    
                    <div class="col-xs-2 col-lg-4 col-sm-5 col-md-4 final_quote" style="padding-right: 0;">
                        <label for="inputEmail" class="control-label" style="float:right;">&nbsp;<span class="currency" aria-hidden="true" style="font-size: 12px;"></span></label>                        
                    </div>
<!--                    <input type="text" class="form-control col-xs-2 other_currency" name='freeText_otherCurrency' id="inputEmail">-->
                    <div class="col-xs-2" style="padding-left:0px;">
                        <input type="number" class="form-control other_einput" name='freeText_price' id="inputEmail" style="">
                    </div>                                                    
                    <div class="col-xs-4" style="">
                        <label for="inputEmail" class="control-label" style=""><span class="currency" aria-hidden="true" style="font-size: 12px;"></span><span class="change_value">0</span></label>                        
                    </div>
                </div>
            </div>                                    
            <div class="form-group">                   
                <div class="col-xs-6">
                    <label for="inputEmail" class="col-sm-10 control-label">Final Quote</label>                    
                </div>                    
                <div class="col-xs-6" style="padding-left: 6px;">                    
                    <div class="col-xs-6" style="padding-right: 0px;">
                        <label for="inputEmail" class="control-label" style="float:right;">&nbsp;<span class="currency" aria-hidden="true" style="font-size: 12px;"></span></label>                        
                    </div>
<!--                    <input type="text" class="form-control col-xs-2 other_currency" name='finalQuote_otherCurrency' id="inputEmail">-->
                    <div class="col-xs-2" style="padding-left:0px;">
                        <input type="number" class="form-control total" id="inputEmail" style="" name='finalQuote'>
                    </div>                                                                        
                </div>
            </div><div class="form-group">                    
 		<div class="col-xs-6">                     
 		  <label for="inputEmail" class="col-sm-10 control-label"><input type="checkbox" name="taxSwitch" class='switch tax_switch' data-size="mini" data-on-color="success" data-off-color="danger" data-on-text="ON" data-off-text="OFF" checked> Tax </label> 
 		</div>                     
 		<div class="col-xs-6" style="padding-left: 6px;"> 
 		  <div class="col-xs-6" style="padding-right: 0px;padding-left: 0px;"> 
 			                        <label style="float:left;" for="inputEmail" class="control-label"> 
 			                            <div class="btn-group btn-group-xs" role="group" aria-label="..."> 
 		                                <button type="button" class="btn btn-default tax_percentage active" > % </button> 
 			                                <button type="button" class="btn btn-default tax_flat"> Flat </span></button> 
 			                            </div> 
 			                        </label> 
 			                        <label for="inputEmail" class="control-label" style="float:right;">&nbsp;<span class="tax" aria-hidden="true" style="font-size: 12px;"></span></label> 
 			                        <input type="hidden" name="tax_hidden" id="tax_hidden" value="percentage" /> 
 			                    </div> 
 			<!--                    <input type="text" class="form-control col-xs-2 other_currency" name='finalQuote_otherCurrency' id="inputEmail">--> 
 			                    <div class="col-xs-2" style="padding-left:0px;"> 
 			                        <input type="number" class="form-control tax_input" id="inputEmail" style="" name='tax'> 
 			                    </div>                                                                         
 			                </div> 
 			            </div> 
 			            <div class="form-group"> 
 			                <div class="col-xs-6"> 
 			                    <label for="inputEmail" class="col-sm-10 control-label">Total</label> 
 			                </div>                     
 			                <div class="col-xs-6" style="padding-left: 6px;">                     
 			                    <div class="col-xs-6" style="padding-right: 0"> 
 			                        <label for="inputEmail" class="control-label" style="float:right;">&nbsp;<span class="currency" aria-hidden="true" style="font-size: 12px;"></span></label> 
 			                    </div> 
 			<!--                    <input type="text" class="form-control col-xs-2 other_currency" name='finalQuote_otherCurrency' id="inputEmail">--> 
 			                    <div class="col-xs-2" style="padding-left:0px;"> 
 			                        <input type="number" class="form-control grand_total" id="inputEmail" style="" name='total'> 
 			                    </div>                                                                         
 			                </div> 
 			            </div> 
            <div class="form-group">
                <div class="col-sm-6">
                    <label for="inputEmail" class="col-sm-3 control-label"></label>
                    <div class="col-xs-11 col-lg-9 col-sm-9">
                        <input type="text" class="form-control" name='email' id="inputEmail" required="required" placeholder="your@email.com">
                    </div>
                </div>                                    
            </div>            
            <div class="form-group">
                <div class="col-sm-6">
                    <label for="inputEmail" class="col-sm-3 control-label"></label>
                    <div class="col-xs-11 col-lg-9 col-sm-9" style="padding-right:0;">
                        <button type="submit" class="btn btn-primary">Generate My Quote</button>
                    </div>                    
                </div>
            </div>
        </fieldset>
    </form>
</div>

<script>
    $(document).ready(function() {
        $('#company').focus();
        $('.currency').addClass('glyphicon glyphicon-usd');
        $('#currencyHidden').val('$');
        $(".switch").bootstrapSwitch();
        $('.bootstrap-switch').css({'height': '1.7em'});
        $('.bootstrap-switch-container').css({'width': '102px'});
        var i = 7;
        $(document).off('click', '.add_first_form').on('click', '.add_first_form', function() {
            $('.firstForm').append(
                    '<div class="form-group">'
                    + '<div class="col-sm-6">'
                    + '<label for="inputEmail" class="col-sm-3 control-label"><input type="checkbox" name="description[' + i + '][chk]" class="switch" data-size="mini" data-on-color="success" data-off-color="danger" data-on-text="ON" data-off-text="OFF" checked></label>'
                    + '<div class="col-xs-11 col-lg-9 col-sm-9">'
                    + '<input type="text" class="form-control" id="inputEmail" placeholder="Your line expense here" name="description[' + i + '][desc]">'
                    + '</div>'
                    + '</div>'
                    + '<div class="col-sm-6">'
                    + '<div class="col-xs-2" style="padding-right:0;">'
                    + '<input type="number" class="form-control change_input" id="inputEmail" style="" name="description[' + i + '][hour]">'
                    + '</div>'
                    + '<div class="hours_label">'
                    + '<label for="inputEmail" class="control-label" style="">hours &nbsp;&nbsp;*&nbsp;&nbsp; <span class="currency" aria-hidden="true" style="font-size: 12px;"></span></label>'
                    + '</div>'
//                    + '<input type="text" class="form-control col-xs-2 other_currency" name="description[' + i + '][other_currency]" id="inputEmail">'
                    + '<div class="col-xs-2 col-sm-2 col-md-2" style="padding-left:0;">'
                    + '<input type="number" class="form-control change_mul" id="inputEmail" name="description[' + i + '][price]">'
                    + '</div>'
                    + '<div class="col-xs-4 col-sm-3 col-md-3" style="">'
                    + '<label for="inputEmail" class="control-label" style=""><span class="currency" aria-hidden="true" style="font-size: 12px;"></span><span class="change_value">0</span></label>'
                    + '</div>'
                    + '</div>'
                    + '</div>'
                    );
            if ($('.currency').hasClass('glyphicon glyphicon-euro')) {
                $('.currency').addClass('glyphicon glyphicon-euro');
                $('.currency').html('');
                $('#currencyHidden').val('€');
            } else if ($('.currency').hasClass('glyphicon glyphicon-gbp')) {
                $('.currency').addClass('glyphicon glyphicon-gbp');
                $('.currency').html('');
                $('#currencyHidden').val('£');
            } else if ($('#currencyHidden').val() === 'other') {
                $('#currencyHidden').val('other');
                $('.currency').html($('.other_currency').val());
                $('.other_currency').css('display', 'inline');
            } else {
                $('.currency').addClass('glyphicon glyphicon-usd');
                $('.currency').html('');
                $('#currencyHidden').val('$');
            }
            $(".switch").bootstrapSwitch();
            $('.bootstrap-switch').css({'height': '1.7em'});
            $('.bootstrap-switch-container').css({'width': '102px'});
            i++;
        });
        $(document).off('click', '.currency_dollar').on('click', '.currency_dollar', function() {
            if ($('.currency').hasClass('glyphicon glyphicon-euro')) {
                $('.currency').html('');
                $('.other_currency').val('');
                $('.other_currency').css('display', 'none');
                $('.currency').removeClass('glyphicon glyphicon-euro');
                $('.currency').addClass('glyphicon glyphicon-usd');
                $('#currencyHidden').val('$');
            } else if ($('.currency').hasClass('glyphicon glyphicon-gbp')) {
                $('.currency').css('display', 'inline');
                $('.currency').html('');
                $('.other_currency').val('');
                $('.other_currency').css('display', 'none');
                $('.currency').removeClass('glyphicon glyphicon-gbp');
                $('.currency').addClass('glyphicon glyphicon-usd');
                $('#currencyHidden').val('$');
            } else {
                $('.currency').css('display', 'inline');
                $('.currency').html('');
                $('.other_currency').val('');
                $('.other_currency').css('display', 'none');
                $('.currency').addClass('glyphicon glyphicon-usd');
                $('#currencyHidden').val('$');
            }
        });
        $(document).off('click', '.currency_euro').on('click', '.currency_euro', function() {
            if ($('.currency').hasClass('glyphicon glyphicon-usd')) {
                $('.currency').html('');
                $('.other_currency').val('');
                $('.currency').css('display', 'inline');
                $('.other_currency').css('display', 'none');
                $('.currency').removeClass('glyphicon glyphicon-usd');
                $('.currency').addClass('glyphicon glyphicon-euro');
                $('#currencyHidden').val('€');
            } else if ($('.currency').hasClass('glyphicon glyphicon-gbp')) {
                $('.currency').html('');
                $('.other_currency').val('');
                $('.currency').css('display', 'inline');
                $('.other_currency').css('display', 'none');
                $('.currency').removeClass('glyphicon glyphicon-gbp');
                $('.currency').addClass('glyphicon glyphicon-euro');
                $('#currencyHidden').val('€');
            } else
            {
                $('.currency').html('');
                $('.other_currency').val('');
                $('.currency').css('display', 'inline');
                $('.other_currency').css('display', 'none');
                $('.currency').addClass('glyphicon glyphicon-euro');
                $('#currencyHidden').val('€');
            }
        });
        $(document).off('click', '.currency_pound').on('click', '.currency_pound', function() {
            if ($('.currency').hasClass('glyphicon glyphicon-usd')) {
                $('.currency').html('');
                $('.other_currency').val('');
                $('.currency').css('display', 'inline');
                $('.other_currency').css('display', 'none');
                $('.currency').removeClass('glyphicon glyphicon-usd');
                $('.currency').addClass('glyphicon glyphicon-gbp');
                $('#currencyHidden').val('£');
            } else if ($('.currency').hasClass('glyphicon glyphicon-euro')) {
                $('.currency').css('display', 'inline');
                $('.currency').html('');
                $('.other_currency').val('');
                $('.other_currency').css('display', 'none');
                $('.currency').removeClass('glyphicon glyphicon-euro');
                $('.currency').addClass('glyphicon glyphicon-gbp');
                $('#currencyHidden').val('£');
            } else {
                $('.currency').css('display', 'inline');
                $('.currency').html('');
                $('.other_currency').val('');
                $('.other_currency').css('display', 'none');
                $('.currency').addClass('glyphicon glyphicon-gbp');
                $('#currencyHidden').val('£');
            }
        });
        $(document).off('click', '.currency_other').on('click', '.currency_other', function() {
            $('.currency').removeClass('glyphicon glyphicon-euro');
            $('.currency').removeClass('glyphicon glyphicon-usd');
            $('.currency').removeClass('glyphicon glyphicon-gbp');
            $('.currency').html('');
            $('#currencyHidden').val('other');
            $('.other_currency').css('display', 'inline');
        });
        $('.other_currency').keyup(function() {
            $('.currency').html($(this).val());
        });
        $('.tax').html('%'); 
        	        $(document).off('click', '.tax_percentage').on('click', '.tax_percentage', function() { 
        	            $('.tax').html('%'); 
         			            $('#tax_hidden').val('percentage'); 
         			            $(this).addClass("active"); 
         			            $(".tax_flat").removeClass("active"); 
         			            getTotal(); 
         			        }); 
         			 
         			        $(document).off('click', '.tax_flat').on('click', '.tax_flat', function() { 
         			            $('.tax').html('+'); 
         			            $('#tax_hidden').val('flat'); 
         			            $(this).addClass("active"); 
         			            $(".tax_percentage").removeClass("active"); 
         			            getTotal(); 
         			        }); 
         			 
         			        $('.tax_switch').on('switchChange.bootstrapSwitch', function(event, state) { 
         			            if (!state) { 
         			                $('.tax_input').prop('disabled', true); 
         			            } else if (state) { 
         			                $('.tax_input').prop('disabled', false); 
         			            } 
         			        });  
        
        
        // code for multiplication
        $(document).off('keyup', '.change_input').on('keyup', '.change_input', function(e) {
        
            var hours = $(this).parents().eq(1).find(".change_mul").val();
            var amount_per_hour = $(this).val();
            
            if( $.isNumeric(hours) && $.isNumeric(amount_per_hour) ) {
                var change_val = hours * amount_per_hour;
                $(this).parents().eq(1).find(".change_value").html(change_val);
            }else {
                $(this).parents().eq(1).find(".change_value").html("0");
            }
            
            getTotal();
        });
        
        
        $(document).off('keyup', '.change_mul').on('keyup', '.change_mul', function(e) {
            
            var amount_per_hour = $(this).parents().eq(1).find(".change_input").val();
            var hours = $(this).val();
            
            if( $.isNumeric(hours) && $.isNumeric(amount_per_hour) ) {
                var change_val = hours * amount_per_hour;
                $(this).parents().eq(1).find(".change_value").html(change_val);
            }else {
                $(this).parents().eq(1).find(".change_value").html("0");
            }
            getTotal();
            
            
        });

        $('.tax_input').keyup(function() { 
     			            getTotal(); 
     		        }); 
        
        $(".other_einput").keyup(function() {
            var other_ex  = $(this).val();
           
            if( $.isNumeric(other_ex) ){
                $(this).parents().eq(1).find(".change_value").html(other_ex);
            }else{
                $(this).parents().eq(1).find(".change_value").html("0");
            }
            
            getTotal();
            
        });
        
        function getTotal() { 
        		            var total = 0;
        		            var sub_total = 0; 
        	            $('.change_value').each( function(i, val) {	
            	            	            var grand_total = 0; 
        	 			            $('.change_value').each(function(i, val) { 
        		                //alert(val.html()); 		                
        		                //alert(val.html()); 
        		                //console.log(val.innerHTML); 		                
        		                //console.log(val.innerHTML); 
        		                total += parseInt(val.innerHTML, 10);		               
        		                sub_total += parseInt(val.innerHTML, 10); 
        		                 		            }); 
        		            } );
    		            	            if ($('#tax_hidden').val() === 'percentage') { 
        		            $(".total").val(total);	
        		            	                grand_total = parseFloat(sub_total + (sub_total * $('.tax_input').val() / 100)).toFixed(); 
        	 			            } else if ($('#tax_hidden').val() === 'flat') { 
        	 			                grand_total = $('.tax_input').val() ? parseFloat(sub_total + parseFloat($('.tax_input').val())).toFixed() : sub_total; 
        	 			            } else { 
        	 			                grand_total = sub_total; 
        	 			            } 
        	 			            $(".total").val(sub_total); 
        	 			            $('.grand_total').val(grand_total); 
        	        } 		        } 
        
        
    });
</script>


@stop