<?php
/**
 * Created by PhpStorm.
 * User: Talemul Islam
 * Date: 09-Apr-20
 * Time: 9:11 AM
 */


/**
 * @param string $to sender number
 * @param string $message message
 * @return array
 */
function sendSMS2(string $to = "8801700718951", string $message = ""): array
{
   // $message = str_replace(' ', '+', $message);
    $message = urlencode($message);
    $res['status'] = true;
    $res['message'] = "Success";

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://880sms.com/smsapi?api_key=C20070775f718fde92f6f7.66525485&type=text&contacts=" . $to . "&senderid=8809612446650&msg=" . $message . "",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "Cookie: XSRF-TOKEN=eyJpdiI6IjJaT0lVdURHT1cwcm1lbzkwMkNjVnc9PSIsInZhbHVlIjoibkxYK1JrUjRxRjZuK01seXlZakR4aGQyTlUyT3RieEgraThicW8yNFlkUk5LV0FRQUM2Mm1za3V0eEhQNmZnYSt0ZFwvZUVKSzBxSHNKS0FENUdFUmF3PT0iLCJtYWMiOiI1MTM4YWJjNDc0ZTgwYjJlMTI1NmM5MDEyNDEwODUwZjNkODYyOGJhMmMzMGZiNzZmZjc2Mjc0NmU0NmQ0OGRlIn0%3D; laravel_session=eyJpdiI6ImV2MjdnVjZGbHdZb3Q3ODdWaUQzNUE9PSIsInZhbHVlIjoiRHZkdHFEWm1wVk52M0F5WDFOVG1TN2VNYkhMaFRTdlo1Qmc3bDlseXVoXC9iTnFEXC9Yb3ZqZ2tZb3ExdEZUaUcwZjIrRWVjTk5Idk5wSzBraHlZQWoxQT09IiwibWFjIjoiZjJkYThkYzhjNzU1YWYzNDM5NWY5N2Y1YmMyYzYwZDVlMWFmMjRmNDc5ZTdlMTQyYThlZTQyYmY5NzlhZDY0NiJ9"
        ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);

    if (strstr($response, 'SMS SUBMITTED')) {
        $sms_send_status = 1;
    } else {
        $sms_send_status = 2;
        $res['status'] = false;
        $res['message'] = "failed";

    }
    DB::table('sms_log')->insert(['status' => $sms_send_status, 'mobile_no' => $to, 'message' => urldecode($message), 'created_at' => date('Y-m-d H:i:s'), 'response_message' => $response]);
    return $res;
}/**
 * @param string $to sender number
 * @param string $message message
 * @return array
 */
function sendSMS(string $to = "8801700718951", string $message = ""): array
{
   // $message = str_replace(' ', '+', $message);
    $message = urlencode($message);
    $res['status'] = true;
    $res['message'] = "Success";
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://api.greenweb.com.bd/api.php?token=35f5ebffe1fc8794d697fcebfc933fb0&to='.$to.'&message='.$message.'',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Cookie: PHPSESSID=ua0htog2t4coivadf7luk1ppbr'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);


    if (strstr($response, 'Successfully')) {
        $sms_send_status = 1;
    } else {
        $sms_send_status = 2;
        $res['status'] = false;
        $res['message'] = "failed";

    }
    DB::table('sms_log')->insert(['status' => $sms_send_status, 'mobile_no' => $to, 'message' => urldecode($message), 'created_at' => date('Y-m-d H:i:s'), 'response_message' => $response]);
    return $res;
}

