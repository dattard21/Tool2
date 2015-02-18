<?php

namespace quote;

use View,
    Response,
    Validator,
    Input,
    Mail,
    PDF,
    Request,
    Session;

Class Quotes extends \BaseController {

    public function getIndex() {

        return View::make('quote::index');
    }

    public function generateQuote() {

        //echo "hi";
        $address = Input::get('quoteCompany');
        $color_code = Input::get('colorQuote');
        $clientName = Input::get('clientName');
        $contactEmail = Input::get('contactEmail');
        $contactPhone = Input::get('contactPhone');
        $website = Input::get('website');
        $show_working = Input::get('showWorkings');
        $email = Input::get('email');
        $client_address = Input::get('quoteClient');
        $free_text = Input::get('freeText_desc');
        $other_currency = Input::get('other_currency');
        $project_description = Input::get('projectDescription');
        $estimate_no = Input::get('estimateNo');
        $description = Input::get('description');
        $free_text_price = Input::get('freeText_price');
        $final_quote = Input::get('finalQuote');
        $tax = Input::get('tax');
        $tax_switch = Input::get('taxSwitch');
        $tax_hidden = Input::get('tax_hidden');
        $currency = Input::get('currencyHidden');

        if (Input::hasFile('quoteCompanyLogo')) {
            $file = Input::file('quoteCompanyLogo');
            $destinationPath = public_path() . '/assets/img/';
            $filename = str_random(6) . '_' . camel_case($file->getClientOriginalName());         
            $uploadSuccess = $file->move($destinationPath, $filename);
        }

        $data = array(
            'address' => $address,
            'client_name' => $clientName,
            'color_code' => $color_code,
            'contact_email' => $contactEmail,
            'contact_phone' => $contactPhone,
            'web_site' => $website,
            'show_working' => $show_working,
            'currency' => $currency,
            'project_description' => $project_description,
            'estimate_no' => $estimate_no,
            'client_address' => $client_address,
            'free_text' => $free_text,
            'final_quote' => $final_quote,
        	'tax' => $tax,
			'tax_hidden' => $tax_hidden,
        	'tax_switch' => $tax_switch,
            'other_currency' => $other_currency,
            'image' => isset($filename) ? $filename : NULL,
            'description' => $description,
            'free_text_price' => $free_text_price
        );
//        return View::make('quote::invoice')->with($data);
//        exit;

        \DB::table('contacts')->insert(array('email' => $email));

        $pdf = PDF::loadView('quote::invoice', $data);

        Mail::send('quote::mail_blank', $data, function($message) use ($pdf, $email) {

                    $message->from('info@quotegenerate.com', 'Quote Generator');

                    $message->to($email)->subject('Quote Generation');

                    $message->attachData($pdf->output(), "invoice.pdf");
                });

        // delete file
        if (isset($filename))
            \File::delete($destinationPath . $filename);


        // set success flash message
        Session::flash('success', $email);

        return \Redirect::to('quote');
    }

}

?>
