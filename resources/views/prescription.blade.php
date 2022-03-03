<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=0.55"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title> DENTAL CLINIC|Prescription
    </title>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500&display=swap" rel="stylesheet">
    <style type="text/css" media="print">
        * {
            display: none;
        }
    </style>
    <style>

        @font-face {

            font-family: 'SolaimanLipi';
            src: url('https://natai.com.bd/font/SolaimanLipiNormal.eot');
            src: url('https://natai.com.bd/font/SolaimanLipiNormal.eot?#iefix') format('embedded-opentype'),
            url('https://natai.com.bd/font/SolaimanLipiNormal.woff2') format('woff2'),
            url('https://natai.com.bd/font/SolaimanLipiNormal.ttf') format('truetype'),
            url('https://natai.com.bd/font/SolaimanLipiNormal.svg#SolaimanLipiNormal') format('svg');
            font-weight: normal;
            font-style: normal;
        }

        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        @page {
            size: auto;
            margin: 0;
        }


        a {
            color: #0f74a8;
            text-decoration: none;
        }

        body {

            position: relative;
            height: auto;
            /* height: 29.7cm; */
            margin: 0 auto;
            color: #000;
            font-family: Arial, sans-serif;
            font-size: 16px;
            width: 19cm;

        }

        header {
            padding: 10px 0;
            margin-bottom: 20px;
            border-bottom: 1px solid #AAAAAA;
        }

        #logo {
            float: left;
            margin-top: 8px;
        }

        #logo img {
            height: 70px;
        }

        #company {
            float: right;
            text-align: right;
        }


        #details {
            margin-bottom: 30px;
        }

        #client {
            padding-left: 6px;
            border-left: 6px solid #0087C3;
            float: left;
        }

        #client .to {
            color: #777777;
        }

        h2.name {
            font-size: 1.1em;
            font-weight: normal;
            margin: 0;
        }

        h3.name {
            font-size: 1.1em;
            font-weight: normal;
            margin: 0;
            color: #0f1416;

        }

        #invoice {
            float: right;
            text-align: right;
        }

        #invoice h1 {
            color: #0087C3;
            font-size: 1em;
            line-height: 1em;
            font-weight: normal;
            margin: 0 0 10px 0;
        }

        #invoice .date {
            font-size: 1.1em;
            color: #777777;
        }

        /*table {*/
        /*    width: 21cm;*/
        /*    border-collapse: collapse;*/
        /*    border-spacing: 0;*/
        /*    margin-bottom: 20px;*/
        /*}*/

        table th,
        table td {
            padding: 5px;
        }

        table th {
            white-space: nowrap;
            font-weight: normal;

        }

        table .desc {
            text-align: left;
        }

        table .qty {
        }

        table td.unit,
        table td.qty,
        table td.total {
            font-size: 1.1em;
        }

        table tbody tr:last-child td {
            border: none;
        }

        li {
            list-style: none;
        }

        @media all and (max-width: 640px) {
            html {
                width: 100%;
                height: 100%;
            }

            body {
                padding: 0 15px;
            }

            body table, body, body div {
                width: 110vw !important;
            }
        }

        @media print {
            .print {
                display: none
            }
        }

    </style>
</head>
<body data-gr-c-s-loaded="true" cz-shortcut-listen="true">
<table cellspacing="0" cellpadding="0" style="width: 19cm;
                border-collapse: collapse;
                border-spacing: 0;
                margin-bottom: 10px;
                border:0">
    <tr>

        <td style="width: 80%;padding:10px 10px 0 10px;">
            <ul style="padding:0 0 0 15px;">
                <li>
                    <h1 style="margin: 5px 0;font-size: 24px;color: #111;font-weight: bold;">Dental Clinic</h1>
                </li>
                <li style="font-size: 13px;line-height: 18px;margin-bottom: 5px;letter-spacing: 0.25px;">
                    Address: Nurjahan road, Mohammadpur dhaka.
                </li>
                <li style="font-size: 13px;line-height: 18px;margin-bottom: 5px;letter-spacing: 0.25px;">Phone:
                    01937517989
                </li>
                <li style="font-size: 18px;line-height: 18px;margin-bottom: 5px;letter-spacing: 0.25px;"><h2>
                        Consultation Summary</h2>

                </li>

            </ul>
        </td>

        <td style="text-align: right;">
            <a class="print" href="#"
               style="color:#fcb800;background:#000;font-weight: bold;padding: 10px 15px;border-radius: 3px;font-size: 14px;"
               onclick="printInvoice()">Print</a>
        </td>
    </tr>
</table>
<table cellspacing="0" cellpadding="0" style="width: 19cm;
                border-collapse: collapse;
                border-spacing: 0;
                 background:#ffffff !important;border:0">

    <tr style="background: #ecebeb;">


        <td style="width: 50%;
text-align: left;
letter-spacing: 0.25px;
font-size: 15px;
padding: 10px;" colspan="2">
            Visit Date
            <strong
                style="margin: 10px 0 0;font-size: 16px;">{{date('d F Y', strtotime($prescription->created_at))}} </strong>
        </td>
    </tr>
</table>
<table cellspacing="0" cellpadding="0" style="width: 19cm;
                border-collapse: collapse;
                border-spacing: 0;
                margin-bottom: 1px; background:#ffffff !important;border:0">
    <tr>
        <td style="padding: 5px 0;letter-spacing: 0.25px;">
            <p style="color: #5f6060;margin-bottom: 10px;">Age
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<b> {{date_diff(date_create($patient->date_of_birth), date_create('today'))->y}}
                    Y - {{date_diff(date_create($patient->date_of_birth), date_create('today'))->m}}
                    M- {{date_diff(date_create($patient->date_of_birth), date_create('today'))->d}} D</b></p>

            <p style="color: #5f6060;margin-bottom: 10px;">Phone &nbsp;&nbsp;: <b>{{$patient->phone}}</b></p>
            <p style="color: #5f6060;margin-bottom: 10px;">Address : <b>{{$patient->phone}}</b></p>
        </td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>

        <td style="padding: 5px 0;letter-spacing: 0.25px;text-align: left;vertical-align: top;">
            <p style="color: #5f6060;margin-bottom: 10px;">Patient Name :<b>  {{$patient->name}}</b></p>

            <p style="color: #5f6060;margin-bottom: 10px;">Consultant &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                <b>{{$doctor->name}}</b></p>
            <p style="color: #5f6060;margin-bottom: 10px;">Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                <b>{{$patient->email}}</b></p>
        </td>

    </tr>
    <tr>
        <td style="padding:0" colspan="5"><h3 style="color: #0D0D0D;

font-weight: bold;
margin: 5px 0;
letter-spacing: 0.5px;">Complaints about Disease: </h3>
            <p>
                {!! $prescription->disease  !!}
            </p></td>
    </tr>
    <tr>
        <td style="padding:0" colspan="5"><h3 style="color: #0D0D0D;

font-weight: bold;
margin: 5px 0;
letter-spacing: 0.5px;">Any Special Issue: </h3>
            <p>
                {!! $prescription->any_special_issue  !!}

            </p></td>
    </tr>

</table>
<table cellspacing="0" cellpadding="0" style="width: 19cm;
                border-collapse: collapse;
                border-spacing: 0;
                margin-bottom: 1px; background:#ffffff !important;border:0">

    <tr>
        <td style="padding:0" colspan="6"><h3 style="color: #0D0D0D;

font-weight: bold;
margin: 5px 0;
letter-spacing: 0.5px;">Vital Sign: </h3>
            <p>
                <b> Date : {{date('d M Y h:i A', strtotime($prescription->created_at))}}</b>
            </p></td>
    </tr>
</table>
<table cellspacing="0" cellpadding="0" style="width: 19cm;
                border-collapse: collapse;
                border-spacing: 0;
                margin-bottom: 20px;
                border: 1px solid #d5dedc;">
    <tr style="border-bottom: 1px solid #d5dedc;">

        <td style="padding: 5px 0;letter-spacing: 0.25px;">
            Weight
        </td>
        <td><b>:</b></td>
        <td>{{$prescription->weight}}</td>

        <td style="padding: 5px 0;letter-spacing: 0.25px;">
            Height
        </td>
        <td><b>:</b></td>
        <td>{{$prescription->height}}</td>
    </tr>
    <tr style="border-bottom: 1px solid #d5dedc;">

        <td style="padding: 5px 0;letter-spacing: 0.25px;">
            Blood Pressure
        </td>
        <td><b>:</b></td>
        <td>{{$prescription->pressure}}</td>

        <td style="padding: 5px 0;letter-spacing: 0.25px;">
            Puls Rate
        </td>
        <td><b>:</b></td>
        <td>{{$prescription->puls_rate}}</td>
    </tr>
    <tr style="border-bottom: 1px solid #d5dedc;">

        <td style="padding: 5px 0;letter-spacing: 0.25px;">
            Body Mass Index( BMI )
        </td>
        <td><b>:</b></td>
        <td>{{$prescription->bmi}}</td>

        <td style="padding: 5px 0;letter-spacing: 0.25px;">
            Body Surface Area( BSA )
        </td>
        <td><b>:</b></td>
        <td>{{$prescription->bsa}}</td>
    </tr>
    <tr style="border-bottom: 1px solid #d5dedc;">

        <td style="padding: 5px 0;letter-spacing: 0.25px;">
            SPO2( Oxygen saturation)
        </td>
        <td><b>:</b></td>
        <td>{{$prescription->spo2}}</td>

        <td style="padding: 5px 0;letter-spacing: 0.25px;">

        </td>
        <td></td>
        <td></td>
    </tr>
</table>
<table cellspacing="0" cellpadding="0" style="width: 19cm;
                border-collapse: collapse;
                border-spacing: 0;
                margin-bottom: 1px; background:#ffffff !important;border:0">
    <td style="padding:0" colspan="6"><h3 style="color: #0D0D0D;

font-weight: bold;
margin: 5px 0;
letter-spacing: 0.5px;">Medicine Details: </h3>
    </td>
    </tr>
</table>
<table cellspacing="0" cellpadding="0" style="width: 19cm;
                border-collapse: collapse;
                border-spacing: 0;
                margin-bottom: 20px;
                border: 1px solid #d5dedc;">
    <tr style="background: #f5f4f1;border-bottom: 1px solid #d5dedc;">
        <th style="font-size: 14px;padding: 10px;text-transform: capitalize;font-weight: bold;" class="no">Generic
            Name
        </th>
        <th style="font-size: 14px;padding: 10px;text-transform: capitalize;font-weight: bold;" class="desc">Brand
            Name
        </th>
        <th class="desc"
            style="font-size: 14px;width: 160px;padding: 10px;text-transform: capitalize;font-weight: bold;">Instruction
        </th>
        <th class="qty"
            style="font-size: 14px;text-align: center; width: 40px;padding: 10px;text-transform: capitalize;font-weight: bold;">
            Duration
        </th>
        <th style="font-size: 14px;padding: 10px;text-transform: capitalize;font-weight: bold;text-align: right;"
            class="unit">Remarks
        </th>

    </tr>
    @foreach($medicine_details as $item)
        @php
            $medicine = App\Models\Medicine::find($item->brand_name);

        @endphp
        <tr style="border-bottom: 1px solid #d5dedc;">
            <td style="padding: 8px;font-size: 13px;text-align: left;border-bottom: 1px solid #d5dedc;"
                class="no">{{ $medicine->generic_name }} {{ $medicine->strength }} {{ $medicine->dosage_description }}</td>
            <td style="padding: 8px;font-size: 13px;border-bottom: 1px solid #d5dedc;"
                class="desc">{{ $medicine->brand_name }} </td>
            <td class="desc"
                style="padding: 8px;font-size: 13px;border-bottom: 1px solid #d5dedc;font-family: Arial,'Baloo Da 2',Sans-Serif;">
                <span style="color:#000">{{ $item->dose }}</span>

            </td>
            <td class="qty"
                style="padding: 8px;font-size: 13px;text-align: center;border-bottom: 1px solid #d5dedc;">{{ $item->duration }}</td>
            <td style="padding: 8px;font-size: 13px;text-align: right;border-bottom: 1px solid #d5dedc;" class="unit">
                {!!  $item->remarks !!}</td>


        </tr>
    @endforeach


</table>
<h3>Test Details</h3>
<table cellspacing="0" cellpadding="0" style="width: 19cm;
                border-collapse: collapse;
                border-spacing: 0;
                margin-bottom: 20px;
                border: 1px solid #d5dedc;">
    <tr style="background: #f5f4f1;">
        <th style="font-size: 14px;padding: 10px;text-transform: capitalize;font-weight: bold;" class="no">LABORATORY
        </th>
        <th style="font-size: 14px;padding: 10px;text-transform: capitalize;font-weight: bold;" class="desc">Remarks
        </th>
    </tr>
    @foreach($test_details as $item)
        @php
            $medicine = App\Models\Medicine::find($item->brand_name);

        @endphp
        <tr style="border-bottom: 1px solid #d5dedc;">
            <td class="desc"
                style="padding: 8px;font-size: 13px;border-bottom: 1px solid #d5dedc;font-family: Arial,'Baloo Da 2',Sans-Serif;">
                <span style="color:#000">{{ $item->service_name }}</span>
            </td>
            <td style="padding: 8px;font-size: 13px;text-align: left;border-bottom: 1px solid #d5dedc;" class="unit">
                {!!  $item->remarks !!}</td>
        </tr>
    @endforeach

</table>
<div id="thanks"
     style="font-size: 14px;margin:30px auto;text-align: left;color: #0b0b0b;letter-spacing: 0.25px;width: 19cm;">
    <h4>
        Managment Plan:
    </h4>
    <p> {!! $prescription->instruction_details !!}</p>
    <p> {!! $prescription->next_test_details !!}</p>
</div>
<br/>


<div style="height: 1px ; width: 19cm;background-color:#d5dedc ;margin-top: 30px;"></div>
<footer style="text-align: center;
padding: 10px 0;
font-size: 12px;
color: #9d9d9d;
letter-spacing: 0.25px;
width: 100%;
 ">

    <p style="margin: 0 0 5px;">Prescription was created on a computer and is valid without the signature and seal.</p>
    <span style="color: #585858;">©2020 All Rights Reserved</span>
</footer>
<div id="printArea" style="display: none;">

    <style>

        @font-face {

            font-family: 'SolaimanLipi';
            src: url('https://natai.com.bd/font/SolaimanLipiNormal.eot');
            src: url('https://natai.com.bd/font/SolaimanLipiNormal.eot?#iefix') format('embedded-opentype'),
            url('https://natai.com.bd/font/SolaimanLipiNormal.woff2') format('woff2'),
            url('https://natai.com.bd/font/SolaimanLipiNormal.ttf') format('truetype'),
            url('https://natai.com.bd/font/SolaimanLipiNormal.svg#SolaimanLipiNormal') format('svg');
            font-weight: normal;
            font-style: normal;
        }

        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }

        a {
            color: #0f74a8;
            text-decoration: none;
        }

        body {

            position: relative;
            height: 29.7cm;
            margin: 0 auto;
            color: #000;
            font-family: Arial, sans-serif;
            font-size: 16px;

        }

        header {
            padding: 10px 0;
            margin-bottom: 20px;
            border-bottom: 1px solid #AAAAAA;
        }

        #logo {
            float: left;
            margin-top: 8px;
        }

        #logo img {
            height: 70px;
        }

        #company {
            float: right;
            text-align: right;
        }


        #details {
            margin-bottom: 30px;
        }

        #client {
            padding-left: 6px;
            border-left: 6px solid #0087C3;
            float: left;
        }

        #client .to {
            color: #777777;
        }

        h2.name {
            font-size: 1.1em;
            font-weight: normal;
            margin: 0;
        }

        h3.name {
            font-size: 1.1em;
            font-weight: normal;
            margin: 0;
            color: #0f1416;

        }

        #invoice {
            float: right;
            text-align: right;
        }

        #invoice h1 {
            color: #0087C3;
            font-size: 1em;
            line-height: 1em;
            font-weight: normal;
            margin: 0 0 10px 0;
        }

        #invoice .date {
            font-size: 1.1em;
            color: #777777;
        }

        /*table {*/
        /*    width: 21cm;*/
        /*    border-collapse: collapse;*/
        /*    border-spacing: 0;*/
        /*    margin-bottom: 20px;*/
        /*}*/

        table th,
        table td {
            padding: 5px;
        }

        table th {
            white-space: nowrap;
            font-weight: normal;

        }

        table .desc {
            text-align: left;
        }

        table .qty {
        }

        table td.unit,
        table td.qty,
        table td.total {
            font-size: 1.1em;
        }

        table tbody tr:last-child td {
            border: none;
        }

        li {
            list-style: none;
        }
    </style>
    <table cellspacing="0" cellpadding="0" style="width: 19cm;
                border-collapse: collapse;
                border-spacing: 0;
                margin-bottom: 10px;
                border:0">
        <tr>

            <td style="width: 80%;padding:10px 10px 0 10px;">
                <ul style="padding:0 0 0 15px;">
                    <li>
                        <h1 style="margin: 5px 0;font-size: 24px;color: #111;font-weight: bold;">Dental Clinic</h1>
                    </li>
                    <li style="font-size: 13px;line-height: 18px;margin-bottom: 5px;letter-spacing: 0.25px;">
                        Address: Nurjahan road, Mohammadpur dhaka.
                    </li>
                    <li style="font-size: 13px;line-height: 18px;margin-bottom: 5px;letter-spacing: 0.25px;">Phone:
                        01937517989
                    </li>
                    <li style="font-size: 20px;line-height: 18px;margin-bottom: 5px;letter-spacing: 0.25px;"><h2>
                            Consultation Summary</h2>

                    </li>

                </ul>
            </td>

            <td style="text-align: right;">

            </td>
        </tr>
    </table>
    <table cellspacing="0" cellpadding="0" style="width: 19cm;
                border-collapse: collapse;
                border-spacing: 0;
                 background:#ffffff !important;border:0">

        <tr style="background: #ecebeb;">


            <td style="width: 50%;
text-align: left;
letter-spacing: 0.25px;
font-size: 15px;
padding: 10px;" colspan="2">
                Visit Date
                <strong
                    style="margin: 0 0 0;font-size: 16px;">{{date('d F Y', strtotime($prescription->created_at))}} </strong>
            </td>
        </tr>
    </table>
    <table cellspacing="0" cellpadding="0" style="width: 19cm;
                border-collapse: collapse;
                border-spacing: 0;
                margin-bottom: 1px; background:#ffffff !important;border:0">
        <tr>
            <td style="padding: 5px 0;letter-spacing: 0.25px;">
                <p style="color: #5f6060;margin-bottom: 10px;">Age
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<b> {{date_diff(date_create($patient->date_of_birth), date_create('today'))->y}}
                        Y - {{date_diff(date_create($patient->date_of_birth), date_create('today'))->m}}
                        M- {{date_diff(date_create($patient->date_of_birth), date_create('today'))->d}} D</b></p>

                <p style="color: #5f6060;margin-bottom: 10px;">Phone &nbsp;&nbsp;: <b>{{$patient->phone}}</b></p>
                <p style="color: #5f6060;margin-bottom: 10px;">Address : <b>{{$patient->phone}}</b></p>
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

            <td style="padding: 5px 0;letter-spacing: 0.25px;text-align: left;vertical-align: top;">
                <p style="color: #5f6060;margin-bottom: 10px;">Patient Name :<b>  {{$patient->name}}</b></p>

                <p style="color: #5f6060;margin-bottom: 10px;">Consultant &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                    <b>{{$doctor->name}}</b></p>
                <p style="color: #5f6060;margin-bottom: 10px;">Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                    <b>{{$patient->email}}</b></p>
            </td>

        </tr>
        <tr>
            <td style="padding:0" colspan="5"><h3 style="color: #0D0D0D;

font-weight: bold;
margin: 5px 0;
letter-spacing: 0.5px;">Complaints about Disease: </h3>
                <p>
                    {!! $prescription->disease  !!}
                </p></td>
        </tr>
        <tr>
            <td style="padding:0" colspan="5"><h3 style="color: #0D0D0D;

font-weight: bold;
margin: 5px 0;
letter-spacing: 0.5px;">Any Special Issue: </h3>
                <p>
                    {!! $prescription->any_special_issue  !!}

                </p></td>
        </tr>

    </table>
    <table cellspacing="0" cellpadding="0" style="width: 19cm;
                border-collapse: collapse;
                border-spacing: 0;
                margin-bottom: 1px; background:#ffffff !important;border:0">

        <tr>
            <td style="padding:0" colspan="6"><h3 style="color: #0D0D0D;

font-weight: bold;
margin: 5px 0;
letter-spacing: 0.5px;">Vital Sign: </h3>
                <p>
                    <b> Date : {{date('d M Y h:i A', strtotime($prescription->created_at))}}</b>
                </p></td>
        </tr>
    </table>
    <table cellspacing="0" cellpadding="0" style="width: 19cm;
                border-collapse: collapse;
                border-spacing: 0;
                margin-bottom: 20px;
                border: 1px solid #d5dedc;">
        <tr style="border-bottom: 1px solid #d5dedc;">

            <td style="padding: 5px 0;letter-spacing: 0.25px;">
                Weight
            </td>
            <td><b>:</b></td>
            <td>{{$prescription->weight}}</td>

            <td style="padding: 5px 0;letter-spacing: 0.25px;">
                Height
            </td>
            <td><b>:</b></td>
            <td>{{$prescription->height}}</td>
        </tr>
        <tr style="border-bottom: 1px solid #d5dedc;">

            <td style="padding: 5px 0;letter-spacing: 0.25px;">
                Blood Pressure
            </td>
            <td><b>:</b></td>
            <td>{{$prescription->pressure}}</td>

            <td style="padding: 5px 0;letter-spacing: 0.25px;">
                Puls Rate
            </td>
            <td><b>:</b></td>
            <td>{{$prescription->puls_rate}}</td>
        </tr>
        <tr style="border-bottom: 1px solid #d5dedc;">

            <td style="padding: 5px 0;letter-spacing: 0.25px;">
                Body Mass Index( BMI )
            </td>
            <td><b>:</b></td>
            <td>{{$prescription->bmi}}</td>

            <td style="padding: 5px 0;letter-spacing: 0.25px;">
                Body Surface Area( BSA )
            </td>
            <td><b>:</b></td>
            <td>{{$prescription->bsa}}</td>
        </tr>
        <tr style="border-bottom: 1px solid #d5dedc;">

            <td style="padding: 5px 0;letter-spacing: 0.25px;">
                SPO2( Oxygen saturation)
            </td>
            <td><b>:</b></td>
            <td>{{$prescription->spo2}}</td>

            <td style="padding: 5px 0;letter-spacing: 0.25px;">

            </td>
            <td></td>
            <td></td>
        </tr>
    </table>
    <table cellspacing="0" cellpadding="0" style="width: 19cm;
                border-collapse: collapse;
                border-spacing: 0;
                margin-bottom: 1px; background:#ffffff !important;border:0">
        <td style="padding:0" colspan="6"><h3 style="color: #0D0D0D;

font-weight: bold;
margin: 5px 0;
letter-spacing: 0.5px;">Medicine Details: </h3>
        </td>
        </tr>
    </table>
    <table cellspacing="0" cellpadding="0" style="width: 19cm;
                border-collapse: collapse;
                border-spacing: 0;
                margin-bottom: 20px;
                border: 1px solid #d5dedc;">
        <tr style="background: #f5f4f1;border-bottom: 1px solid #d5dedc;">
            <th style="font-size: 14px;padding: 10px;text-transform: capitalize;font-weight: bold;" class="no">Generic
                Name
            </th>
            <th style="font-size: 14px;padding: 10px;text-transform: capitalize;font-weight: bold;" class="desc">Brand
                Name
            </th>
            <th class="desc"
                style="font-size: 14px;width: 160px;padding: 10px;text-transform: capitalize;font-weight: bold;">
                Instruction
            </th>
            <th class="qty"
                style="font-size: 14px;text-align: center; width: 40px;padding: 10px;text-transform: capitalize;font-weight: bold;">
                Duration
            </th>
            <th style="font-size: 14px;padding: 10px;text-transform: capitalize;font-weight: bold;text-align: right;"
                class="unit">Remarks
            </th>

        </tr>
        @foreach($medicine_details as $item)
            @php
                $medicine = App\Models\Medicine::find($item->brand_name);

            @endphp
            <tr style="border-bottom: 1px solid #d5dedc;">
                <td style="padding: 8px;font-size: 13px;text-align: left;border-bottom: 1px solid #d5dedc;"
                    class="no">{{ $medicine->generic_name }} {{ $medicine->strength }} {{ $medicine->dosage_description }}</td>
                <td style="padding: 8px;font-size: 13px;border-bottom: 1px solid #d5dedc;"
                    class="desc">{{ $medicine->brand_name }} </td>
                <td class="desc"
                    style="padding: 8px;font-size: 13px;border-bottom: 1px solid #d5dedc;font-family: Arial,'Baloo Da 2',Sans-Serif;">
                    <span style="color:#000">{{ $item->dose }}</span>

                </td>
                <td class="qty"
                    style="padding: 8px;font-size: 13px;text-align: center;border-bottom: 1px solid #d5dedc;">{{ $item->duration }}</td>
                <td style="padding: 8px;font-size: 13px;text-align: right;border-bottom: 1px solid #d5dedc;"
                    class="unit">
                    {!!  $item->remarks !!}</td>


            </tr>
        @endforeach
    </table>
    <h3>Test Details</h3>
    <table cellspacing="0" cellpadding="0" style="width: 19cm;
                border-collapse: collapse;
                border-spacing: 0;
                margin-bottom: 20px;
                border: 1px solid #d5dedc;">
        <tr style="background: #f5f4f1;">
            <th style="font-size: 14px;padding: 10px;text-transform: capitalize;font-weight: bold;" class="no">
                LABORATORY
            </th>
            <th style="font-size: 14px;padding: 10px;text-transform: capitalize;font-weight: bold;" class="desc">
                Remarks
            </th>
        </tr>
        @foreach($test_details as $item)
            @php
                $medicine = App\Models\Medicine::find($item->brand_name);

            @endphp
            <tr style="border-bottom: 1px solid #d5dedc;">
                <td class="desc"
                    style="padding: 8px;font-size: 13px;border-bottom: 1px solid #d5dedc;font-family: Arial,'Baloo Da 2',Sans-Serif;">
                    <span style="color:#000">{{ $item->service_name }}</span>
                </td>
                <td style="padding: 8px;font-size: 13px;text-align: left;border-bottom: 1px solid #d5dedc;"
                    class="unit">
                    {!!  $item->remarks !!}</td>
            </tr>
        @endforeach

    </table>
    <div id="thanks"
         style="font-size: 14px;margin:30px auto;text-align: left;color: #5f6060;letter-spacing: 0.25px;width: 19cm;">
        <h4>
            Managment Plan:
        </h4>
        <p> {!! $prescription->instruction_details !!}</p>
        <p> {!! $prescription->next_test_details !!}</p>
    </div>
    <br/>


    <div style="height: 1px ; width: 19cm;background-color:#d5dedc ;margin-top: 30px;"></div>
    <footer style="text-align: center;
padding: 10px 0;
font-size: 12px;
color: #9d9d9d;
letter-spacing: 0.25px;
width: 100%;
 ">

        <p style="margin: 0 0 5px;">Prescription was created on a computer and is valid without the signature and
            seal.</p>
        <span style="color: #585858;">©2020 All Rights Reserved</span>
    </footer>
</div>
<script type="text/javascript">
    function printInvoice() {

        var divToPrint = document.getElementById('printArea');

        var newWin = window.open('', 'Print-Window');

        newWin.document.open();

        newWin.document.write('<html><body data-gr-c-s-loaded="true" cz-shortcut-listen="true" onload="window.print()">' + divToPrint.innerHTML + '</body></html>');

        newWin.document.close();

        setTimeout(function () {
            newWin.close();
        }, 10);

    }
</script>
</body>
</html>
