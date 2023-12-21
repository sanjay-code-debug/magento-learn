<?php
/*******************************************************************************
 *
 * Copyright 2023
 * All Rights Reserved.
 ******************************************************************************/

namespace Task\ProductDetailModification\Model;

class ApiService
{
    /**
     * @return mixed
     */
    public function getProductDetails() {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://real-time-amazon-data.p.rapidapi.com/product-details?asin=B07ZPKBL9V&country=US",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: real-time-amazon-data.p.rapidapi.com",
                "X-RapidAPI-Key: 2ffe655869mshbe32683307ce63ap17ccd2jsn6e11b1bf7432"
            ],
        ]);
        $response = curl_exec($curl);
        curl_close($curl);
        return  $response;
    }

    /**
     * @return mixed
     */
    public function getProductOffers() {
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://real-time-amazon-data.p.rapidapi.com/product-offers?asin=B07ZPKBL9V&country=US&limit=100",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: real-time-amazon-data.p.rapidapi.com",
                "X-RapidAPI-Key: 2ffe655869mshbe32683307ce63ap17ccd2jsn6e11b1bf7432"
            ],
        ]);
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    /**
     * @return mixed
     */
    public function getCategories() {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://real-time-amazon-data.p.rapidapi.com/product-category-list?country=US",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: real-time-amazon-data.p.rapidapi.com",
                "X-RapidAPI-Key: 2ffe655869mshbe32683307ce63ap17ccd2jsn6e11b1bf7432"
            ],
        ]);
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }
}
