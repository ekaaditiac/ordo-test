<?php

namespace Modules\Landing\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Work extends Model
{
    use HasFactory;

    protected $fillable = [];
    

    private static $data_works = [
        [
            "title" => "project No. 1",
            "category" => "website & web app",
            "type" => "jpg",
            "img_1" => [
                "https://static.wixstatic.com/media/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.jpg/v1/fill/w_713,h_534,fp_0.58_0.6,q_90/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.jpg",
                "https://static.wixstatic.com/media/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.jpg/v1/fill/w_1426,h_1068,fp_0.58_0.6,q_90/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.jpg",
                "https://static.wixstatic.com/media/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.jpg/v1/fill/w_1662,h_1244,fp_0.58_0.6,q_90/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.jpg",
                "https://static.wixstatic.com/media/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.jpg/v1/fill/w_1662,h_1244,fp_0.58_0.6,q_90/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.jpg",
                "https://static.wixstatic.com/media/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.jpg/v1/fill/w_1662,h_1244,fp_0.58_0.6,q_90/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.jpg"

            ],
            "img_2" => [
                "https://static.wixstatic.com/media/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.jpg/v1/fill/w_713,h_534,fp_0.58_0.6,q_90/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.webp",
                "https://static.wixstatic.com/media/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.jpg/v1/fill/w_1426,h_1068,fp_0.58_0.6,q_90/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.webp",
                "https://static.wixstatic.com/media/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.jpg/v1/fill/w_1662,h_1244,fp_0.58_0.6,q_90/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.webp",
                "https://static.wixstatic.com/media/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.jpg/v1/fill/w_1662,h_1244,fp_0.58_0.6,q_90/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.webp",
                "https://static.wixstatic.com/media/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.jpg/v1/fill/w_1662,h_1244,fp_0.58_0.6,q_90/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.webp"
            ],
            "createdAt" => "23/03/2022"
        ],
        [
            "title" => "project No. 2",
            "category" => "Branding",
            "type" => "jpg",
            "img_1" => [
                "https://static.wixstatic.com/media/84770f_62ce7cc9a4f14267a0e06a6a1f40a913~mv2.jpg/v1/fill/w_712,h_534,q_90/84770f_62ce7cc9a4f14267a0e06a6a1f40a913~mv2.jpg", 
                "https://static.wixstatic.com/media/84770f_62ce7cc9a4f14267a0e06a6a1f40a913~mv2.jpg/v1/fill/w_1424,h_1068,q_90/84770f_62ce7cc9a4f14267a0e06a6a1f40a913~mv2.jpg", 
                "https://static.wixstatic.com/media/84770f_62ce7cc9a4f14267a0e06a6a1f40a913~mv2.jpg/v1/fill/w_1662,h_1246,q_90/84770f_62ce7cc9a4f14267a0e06a6a1f40a913~mv2.jpg", 
                "https://static.wixstatic.com/media/84770f_62ce7cc9a4f14267a0e06a6a1f40a913~mv2.jpg/v1/fill/w_1662,h_1246,q_90/84770f_62ce7cc9a4f14267a0e06a6a1f40a913~mv2.jpg", 
                "https://static.wixstatic.com/media/84770f_62ce7cc9a4f14267a0e06a6a1f40a913~mv2.jpg/v1/fill/w_1662,h_1246,q_90/84770f_62ce7cc9a4f14267a0e06a6a1f40a913~mv2.jpg" 

            ],
            "img_2" => [
                "https://static.wixstatic.com/media/84770f_62ce7cc9a4f14267a0e06a6a1f40a913~mv2.jpg/v1/fill/w_712,h_534,q_90/84770f_62ce7cc9a4f14267a0e06a6a1f40a913~mv2.webp", 
                "https://static.wixstatic.com/media/84770f_62ce7cc9a4f14267a0e06a6a1f40a913~mv2.jpg/v1/fill/w_1424,h_1068,q_90/84770f_62ce7cc9a4f14267a0e06a6a1f40a913~mv2.webp", 
                "https://static.wixstatic.com/media/84770f_62ce7cc9a4f14267a0e06a6a1f40a913~mv2.jpg/v1/fill/w_1662,h_1246,q_90/84770f_62ce7cc9a4f14267a0e06a6a1f40a913~mv2.webp", 
                "https://static.wixstatic.com/media/84770f_62ce7cc9a4f14267a0e06a6a1f40a913~mv2.jpg/v1/fill/w_1662,h_1246,q_90/84770f_62ce7cc9a4f14267a0e06a6a1f40a913~mv2.webp", 
                "https://static.wixstatic.com/media/84770f_62ce7cc9a4f14267a0e06a6a1f40a913~mv2.jpg/v1/fill/w_1662,h_1246,q_90/84770f_62ce7cc9a4f14267a0e06a6a1f40a913~mv2.webp"
            ],
            "createdAt" => "23/03/2022"
        ],
        [
            "title" => "project No. 3",
            "category" => "Photography",
            "type" => "jpg",
            "img_1" => [
                "https://static.wixstatic.com/media/84770f_aebf572869ad4c298adb0d45d74d0331~mv2.jpg/v1/fill/w_713,h_534,q_90/84770f_aebf572869ad4c298adb0d45d74d0331~mv2.jpg", 
                "https://static.wixstatic.com/media/84770f_aebf572869ad4c298adb0d45d74d0331~mv2.jpg/v1/fill/w_1426,h_1068,q_90/84770f_aebf572869ad4c298adb0d45d74d0331~mv2.jpg", 
                "https://static.wixstatic.com/media/84770f_aebf572869ad4c298adb0d45d74d0331~mv2.jpg/v1/fill/w_1663,h_1245,q_90/84770f_aebf572869ad4c298adb0d45d74d0331~mv2.jpg", 
                "https://static.wixstatic.com/media/84770f_aebf572869ad4c298adb0d45d74d0331~mv2.jpg/v1/fill/w_1663,h_1245,q_90/84770f_aebf572869ad4c298adb0d45d74d0331~mv2.jpg", 
                "https://static.wixstatic.com/media/84770f_aebf572869ad4c298adb0d45d74d0331~mv2.jpg/v1/fill/w_1663,h_1245,q_90/84770f_aebf572869ad4c298adb0d45d74d0331~mv2.jpg"

            ],
            "img_2" => [
                "https://static.wixstatic.com/media/84770f_aebf572869ad4c298adb0d45d74d0331~mv2.jpg/v1/fill/w_713,h_534,q_90/84770f_aebf572869ad4c298adb0d45d74d0331~mv2.webp", 
                "https://static.wixstatic.com/media/84770f_aebf572869ad4c298adb0d45d74d0331~mv2.jpg/v1/fill/w_1426,h_1068,q_90/84770f_aebf572869ad4c298adb0d45d74d0331~mv2.webp", 
                "https://static.wixstatic.com/media/84770f_aebf572869ad4c298adb0d45d74d0331~mv2.jpg/v1/fill/w_1663,h_1245,q_90/84770f_aebf572869ad4c298adb0d45d74d0331~mv2.webp", 
                "https://static.wixstatic.com/media/84770f_aebf572869ad4c298adb0d45d74d0331~mv2.jpg/v1/fill/w_1663,h_1245,q_90/84770f_aebf572869ad4c298adb0d45d74d0331~mv2.webp", 
                "https://static.wixstatic.com/media/84770f_aebf572869ad4c298adb0d45d74d0331~mv2.jpg/v1/fill/w_1663,h_1245,q_90/84770f_aebf572869ad4c298adb0d45d74d0331~mv2.webp"
            ],
            "createdAt" => "23/03/2022"
        ],
        [
            "title" => "project No. 4",
            "category" => "Photography",
            "type" => "jpg",
            "img_1" => [
                "https://static.wixstatic.com/media/84770f_c38b92e7ffe24afab3d274e2c985cf96~mv2_d_1920_1258_s_2.jpg/v1/fill/w_712,h_534,fp_0.46_0.24,q_90/84770f_c38b92e7ffe24afab3d274e2c985cf96~mv2_d_1920_1258_s_2.jpg", 
                "https://static.wixstatic.com/media/84770f_c38b92e7ffe24afab3d274e2c985cf96~mv2_d_1920_1258_s_2.jpg/v1/fill/w_1424,h_1068,fp_0.46_0.24,q_90/84770f_c38b92e7ffe24afab3d274e2c985cf96~mv2_d_1920_1258_s_2.jpg", 
                "https://static.wixstatic.com/media/84770f_c38b92e7ffe24afab3d274e2c985cf96~mv2_d_1920_1258_s_2.jpg/v1/fill/w_1794,h_1345,fp_0.46_0.24,q_90/84770f_c38b92e7ffe24afab3d274e2c985cf96~mv2_d_1920_1258_s_2.jpg", 
                "https://static.wixstatic.com/media/84770f_c38b92e7ffe24afab3d274e2c985cf96~mv2_d_1920_1258_s_2.jpg/v1/fill/w_1794,h_1345,fp_0.46_0.24,q_90/84770f_c38b92e7ffe24afab3d274e2c985cf96~mv2_d_1920_1258_s_2.jpg", 
                "https://static.wixstatic.com/media/84770f_c38b92e7ffe24afab3d274e2c985cf96~mv2_d_1920_1258_s_2.jpg/v1/fill/w_1794,h_1345,fp_0.46_0.24,q_90/84770f_c38b92e7ffe24afab3d274e2c985cf96~mv2_d_1920_1258_s_2.jpg" 

            ],
            "img_2" => [
                "https://static.wixstatic.com/media/84770f_c38b92e7ffe24afab3d274e2c985cf96~mv2_d_1920_1258_s_2.jpg/v1/fill/w_712,h_534,fp_0.46_0.24,q_90/84770f_c38b92e7ffe24afab3d274e2c985cf96~mv2_d_1920_1258_s_2.webp", 
                "https://static.wixstatic.com/media/84770f_c38b92e7ffe24afab3d274e2c985cf96~mv2_d_1920_1258_s_2.jpg/v1/fill/w_1424,h_1068,fp_0.46_0.24,q_90/84770f_c38b92e7ffe24afab3d274e2c985cf96~mv2_d_1920_1258_s_2.webp", 
                "https://static.wixstatic.com/media/84770f_c38b92e7ffe24afab3d274e2c985cf96~mv2_d_1920_1258_s_2.jpg/v1/fill/w_1794,h_1345,fp_0.46_0.24,q_90/84770f_c38b92e7ffe24afab3d274e2c985cf96~mv2_d_1920_1258_s_2.webp", 
                "https://static.wixstatic.com/media/84770f_c38b92e7ffe24afab3d274e2c985cf96~mv2_d_1920_1258_s_2.jpg/v1/fill/w_1794,h_1345,fp_0.46_0.24,q_90/84770f_c38b92e7ffe24afab3d274e2c985cf96~mv2_d_1920_1258_s_2.webp", 
                "https://static.wixstatic.com/media/84770f_c38b92e7ffe24afab3d274e2c985cf96~mv2_d_1920_1258_s_2.jpg/v1/fill/w_1794,h_1345,fp_0.46_0.24,q_90/84770f_c38b92e7ffe24afab3d274e2c985cf96~mv2_d_1920_1258_s_2.webp" 
            ],
            "createdAt" => "23/03/2022"
        ],
        [
            "title" => "project No. 5",
            "category" => "Photography",
            "type" => "jpg",
            "img_1" => [
                "https://static.wixstatic.com/media/84770f_857a2106285347fbb247cfc1c95dcc52~mv2.jpg/v1/fill/w_713,h_534,q_90/84770f_857a2106285347fbb247cfc1c95dcc52~mv2.jpg", 
                "https://static.wixstatic.com/media/84770f_857a2106285347fbb247cfc1c95dcc52~mv2.jpg/v1/fill/w_906,h_678,q_90/84770f_857a2106285347fbb247cfc1c95dcc52~mv2.jpg", 
                "https://static.wixstatic.com/media/84770f_857a2106285347fbb247cfc1c95dcc52~mv2.jpg/v1/fill/w_906,h_678,q_90/84770f_857a2106285347fbb247cfc1c95dcc52~mv2.jpg", 
                "https://static.wixstatic.com/media/84770f_857a2106285347fbb247cfc1c95dcc52~mv2.jpg/v1/fill/w_906,h_678,q_90/84770f_857a2106285347fbb247cfc1c95dcc52~mv2.jpg", 
                "https://static.wixstatic.com/media/84770f_857a2106285347fbb247cfc1c95dcc52~mv2.jpg/v1/fill/w_906,h_678,q_90/84770f_857a2106285347fbb247cfc1c95dcc52~mv2.jpg"

            ],
            "img_2" => [
                "https://static.wixstatic.com/media/84770f_857a2106285347fbb247cfc1c95dcc52~mv2.jpg/v1/fill/w_713,h_534,q_90/84770f_857a2106285347fbb247cfc1c95dcc52~mv2.webp", 
                "https://static.wixstatic.com/media/84770f_857a2106285347fbb247cfc1c95dcc52~mv2.jpg/v1/fill/w_906,h_678,q_90/84770f_857a2106285347fbb247cfc1c95dcc52~mv2.webp", 
                "https://static.wixstatic.com/media/84770f_857a2106285347fbb247cfc1c95dcc52~mv2.jpg/v1/fill/w_906,h_678,q_90/84770f_857a2106285347fbb247cfc1c95dcc52~mv2.webp", 
                "https://static.wixstatic.com/media/84770f_857a2106285347fbb247cfc1c95dcc52~mv2.jpg/v1/fill/w_906,h_678,q_90/84770f_857a2106285347fbb247cfc1c95dcc52~mv2.webp", 
                "https://static.wixstatic.com/media/84770f_857a2106285347fbb247cfc1c95dcc52~mv2.jpg/v1/fill/w_906,h_678,q_90/84770f_857a2106285347fbb247cfc1c95dcc52~mv2.webp"
            ],
            "createdAt" => "23/03/2022"
        ],
        [
            "title" => "project No. 6",
            "category" => "Photography",
            "type" => "gif",
            "img_1" => [
                "https://static.wixstatic.com/media/84770f_44dacefdca584083b2fd971556d85fb7~mv2.gif/v1/fill/w_712,h_534,q_90/84770f_44dacefdca584083b2fd971556d85fb7~mv2.gif", 
                "https://static.wixstatic.com/media/84770f_44dacefdca584083b2fd971556d85fb7~mv2.gif/v1/fill/w_905,h_678,q_90/84770f_44dacefdca584083b2fd971556d85fb7~mv2.gif", 
                "https://static.wixstatic.com/media/84770f_44dacefdca584083b2fd971556d85fb7~mv2.gif/v1/fill/w_905,h_678,q_90/84770f_44dacefdca584083b2fd971556d85fb7~mv2.gif", 
                "https://static.wixstatic.com/media/84770f_44dacefdca584083b2fd971556d85fb7~mv2.gif/v1/fill/w_905,h_678,q_90/84770f_44dacefdca584083b2fd971556d85fb7~mv2.gif", 
                "https://static.wixstatic.com/media/84770f_44dacefdca584083b2fd971556d85fb7~mv2.gif/v1/fill/w_905,h_678,q_90/84770f_44dacefdca584083b2fd971556d85fb7~mv2.gif" 

            ],
            "img_2" => [
                "https://static.wixstatic.com/media/84770f_44dacefdca584083b2fd971556d85fb7~mv2.gif/v1/fill/w_712,h_534,q_90/84770f_44dacefdca584083b2fd971556d85fb7~mv2.webp", 
                "https://static.wixstatic.com/media/84770f_44dacefdca584083b2fd971556d85fb7~mv2.gif/v1/fill/w_905,h_678,q_90/84770f_44dacefdca584083b2fd971556d85fb7~mv2.webp", 
                "https://static.wixstatic.com/media/84770f_44dacefdca584083b2fd971556d85fb7~mv2.gif/v1/fill/w_905,h_678,q_90/84770f_44dacefdca584083b2fd971556d85fb7~mv2.webp", 
                "https://static.wixstatic.com/media/84770f_44dacefdca584083b2fd971556d85fb7~mv2.gif/v1/fill/w_905,h_678,q_90/84770f_44dacefdca584083b2fd971556d85fb7~mv2.webp", 
                "https://static.wixstatic.com/media/84770f_44dacefdca584083b2fd971556d85fb7~mv2.gif/v1/fill/w_905,h_678,q_90/84770f_44dacefdca584083b2fd971556d85fb7~mv2.webp" 
            ],
            "createdAt" => "23/03/2022"
        ],
    ];

    public static function view()
    {
        return collect(self::$data_works);
    }

    protected static function newFactory()
    {
        // return \Modules\Landing\Database\factories\WorkFactory::new();
    }
}
