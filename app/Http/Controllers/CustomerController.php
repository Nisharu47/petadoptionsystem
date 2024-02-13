<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\Pettable;
use App\Models\Contactus;
use App\Models\Petbooking;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Mail\ConfirmMail;
use Illuminate\support\Facades\Mail;


use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customerRegister(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'mobile' => 'required|min:10|:customers,customer_tp',
            'email' => 'required|email|regex:/(.*)\./i|unique:customers,customer_email',
            'password' => 'required',
            'confirmpassword' => 'required_with:password|same:password',
            'address' => 'required|max:255',
            'city' => 'required|max:255'
        ]);

        $data = new Customer();
        $data->customer_fname = $request->firstname;
        $data->customer_lname = $request->lastname;
        $data->customer_tp = $request->mobile;
        $data->customer_email = $request->email;
        $data->password = Hash::make($request->password);
        $data->address = $request->address;
        $data->city = $request->city;
        $data->save();

        


        return redirect()->route('home')->with('success','Registerd Successfully');

    }

    public function bookYourpet(Request $request)
    {
        $customer = Auth::guard('customer')->user();

        $request->validate([
            'booking_date' => 'required',
            'adoption_date' => 'required',
        ]);

        $data = new Petbooking();
        $data->customer_id = $customer->id;
        $data->pet_id = $request->pet_id;
        $data->booking_date = $request->booking_date;
        $data->adoption_date = $request->adoption_date;
        $data->donation = $request->donation;
        $data->save();

         //  send mail useing alert
            //content
            // $content_data = DB::table('pettables','petbookings','customers')
            //     ->select('petbookings.*','customers.*','pettables.*')
            //     ->leftjoin('customers','petbookings.customer_id','=','customers.id')
            //     ->leftjoin('pettables','petbookings.pet_id','=','pettables.id')
            //     ->where('petbookings.id', '=', 0)
            //     ->first();

            // // send mail
            // Mail::to($content_data->customer_email)->send(new ConfirmMail($content_data));

        return redirect()->route('home')->with('success','Booked Successfully');
    }

    public function customerContact(Request $request)
    {


        $request->validate([
            'name'=>'required|max:255',
            'email'=>'required|email',
            'subject'=>'required|max:255',
            'message'=>'required|max:255',
        ]);

        if (Auth::guard('customer')->check()) {
            $customer = Auth::guard('customer')->user();
            $customer_id = $customer->id;

            $contact_data = new Contactus();
            $contact_data->customer_id = $customer_id;
            $contact_data->name = $request->name;
            $contact_data->email = $request->email;
            $contact_data->subject = $request->subject;
            $contact_data->message = $request->message;
            $contact_data->save();
        } else {
            $contact_data = new Contactus();
            $contact_data->customer_id = null;
            $contact_data->name = $request->name;
            $contact_data->email = $request->email;
            $contact_data->subject = $request->subject;
            $contact_data->message = $request->message;
            $contact_data->save();
        }

        return redirect()->route('home')->with('success','Sent Successfully');
    }

}
