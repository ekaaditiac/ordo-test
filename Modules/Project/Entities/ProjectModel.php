<?php

namespace Modules\Project\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProjectModel extends Model
{
    use HasFactory;

    protected $fillable = [];
    private static $data_project = [
        [[
            "slug"=>"project-no-1",
            "id"=>"1",
            "title"=>"project no 1",
            "category"=>"Website & Web app",
            "client"=>"Adidas",
            "overview"=>"“Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you.",
            "image_banner_1"=>[
                "https://static.wixstatic.com/media/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.jpg/v1/fill/w_713,h_534,fp_0.58_0.6,q_90/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.jpg",
                "https://static.wixstatic.com/media/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.jpg/v1/fill/w_1426,h_1068,fp_0.58_0.6,q_90/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.jpg",
                "https://static.wixstatic.com/media/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.jpg/v1/fill/w_1662,h_1244,fp_0.58_0.6,q_90/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.jpg",
                "https://static.wixstatic.com/media/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.jpg/v1/fill/w_1662,h_1244,fp_0.58_0.6,q_90/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.jpg",
                "https://static.wixstatic.com/media/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.jpg/v1/fill/w_1662,h_1244,fp_0.58_0.6,q_90/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.jpg"
            ],
            "image_banner_2"=>[
                "https://static.wixstatic.com/media/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.jpg/v1/fill/w_713,h_534,fp_0.58_0.6,q_90/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.webp",
                "https://static.wixstatic.com/media/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.jpg/v1/fill/w_1426,h_1068,fp_0.58_0.6,q_90/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.webp",
                "https://static.wixstatic.com/media/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.jpg/v1/fill/w_1662,h_1244,fp_0.58_0.6,q_90/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.webp",
                "https://static.wixstatic.com/media/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.jpg/v1/fill/w_1662,h_1244,fp_0.58_0.6,q_90/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.webp",
                "https://static.wixstatic.com/media/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.jpg/v1/fill/w_1662,h_1244,fp_0.58_0.6,q_90/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.webp"
            ],
            "img_items"=>[
                [
                    "1"=>[
                        "webp"=>[
                            "https://static.wixstatic.com/media/84770f_ce8520c946c34ca6a98be1b25f4e3cce~mv2.jpg/v1/fill/w_760,h_527,q_90/84770f_ce8520c946c34ca6a98be1b25f4e3cce~mv2.webp", 
                            "https://static.wixstatic.com/media/84770f_ce8520c946c34ca6a98be1b25f4e3cce~mv2.jpg/v1/fill/w_760,h_527,q_90/84770f_ce8520c946c34ca6a98be1b25f4e3cce~mv2.webp", 
                            "https://static.wixstatic.com/media/84770f_ce8520c946c34ca6a98be1b25f4e3cce~mv2.jpg/v1/fill/w_760,h_527,q_90/84770f_ce8520c946c34ca6a98be1b25f4e3cce~mv2.webp", 
                            "https://static.wixstatic.com/media/84770f_ce8520c946c34ca6a98be1b25f4e3cce~mv2.jpg/v1/fill/w_760,h_527,q_90/84770f_ce8520c946c34ca6a98be1b25f4e3cce~mv2.webp", 
                            "https://static.wixstatic.com/media/84770f_ce8520c946c34ca6a98be1b25f4e3cce~mv2.jpg/v1/fill/w_760,h_527,q_90/84770f_ce8520c946c34ca6a98be1b25f4e3cce~mv2.webp"
                        ],
                        "jpg"=>[
                            "https://static.wixstatic.com/media/84770f_ce8520c946c34ca6a98be1b25f4e3cce~mv2.jpg/v1/fill/w_760,h_527,q_90/84770f_ce8520c946c34ca6a98be1b25f4e3cce~mv2.jpg", 
                            "https://static.wixstatic.com/media/84770f_ce8520c946c34ca6a98be1b25f4e3cce~mv2.jpg/v1/fill/w_760,h_527,q_90/84770f_ce8520c946c34ca6a98be1b25f4e3cce~mv2.jpg", 
                            "https://static.wixstatic.com/media/84770f_ce8520c946c34ca6a98be1b25f4e3cce~mv2.jpg/v1/fill/w_760,h_527,q_90/84770f_ce8520c946c34ca6a98be1b25f4e3cce~mv2.jpg", 
                            "https://static.wixstatic.com/media/84770f_ce8520c946c34ca6a98be1b25f4e3cce~mv2.jpg/v1/fill/w_760,h_527,q_90/84770f_ce8520c946c34ca6a98be1b25f4e3cce~mv2.jpg", 
                            "https://static.wixstatic.com/media/84770f_ce8520c946c34ca6a98be1b25f4e3cce~mv2.jpg/v1/fill/w_760,h_527,q_90/84770f_ce8520c946c34ca6a98be1b25f4e3cce~mv2.jpg"
                        ],
                    ],
                    "2"=>[
                        "webp"=>[
                            "https://static.wixstatic.com/media/84770f_f15a4208f3ad41d5a75ef3090c52d3d7~mv2.jpg/v1/fill/w_738,h_526,q_90/84770f_f15a4208f3ad41d5a75ef3090c52d3d7~mv2.webp", 
                            "https://static.wixstatic.com/media/84770f_f15a4208f3ad41d5a75ef3090c52d3d7~mv2.jpg/v1/fill/w_738,h_526,q_90/84770f_f15a4208f3ad41d5a75ef3090c52d3d7~mv2.webp", 
                            "https://static.wixstatic.com/media/84770f_f15a4208f3ad41d5a75ef3090c52d3d7~mv2.jpg/v1/fill/w_738,h_526,q_90/84770f_f15a4208f3ad41d5a75ef3090c52d3d7~mv2.webp", 
                            "https://static.wixstatic.com/media/84770f_f15a4208f3ad41d5a75ef3090c52d3d7~mv2.jpg/v1/fill/w_738,h_526,q_90/84770f_f15a4208f3ad41d5a75ef3090c52d3d7~mv2.webp", 
                            "https://static.wixstatic.com/media/84770f_f15a4208f3ad41d5a75ef3090c52d3d7~mv2.jpg/v1/fill/w_738,h_526,q_90/84770f_f15a4208f3ad41d5a75ef3090c52d3d7~mv2.webp"
                        ],
                        "jpg"=>[
                            "https://static.wixstatic.com/media/84770f_f15a4208f3ad41d5a75ef3090c52d3d7~mv2.jpg/v1/fill/w_738,h_526,q_90/84770f_f15a4208f3ad41d5a75ef3090c52d3d7~mv2.jpg", 
                            "https://static.wixstatic.com/media/84770f_f15a4208f3ad41d5a75ef3090c52d3d7~mv2.jpg/v1/fill/w_738,h_526,q_90/84770f_f15a4208f3ad41d5a75ef3090c52d3d7~mv2.jpg", 
                            "https://static.wixstatic.com/media/84770f_f15a4208f3ad41d5a75ef3090c52d3d7~mv2.jpg/v1/fill/w_738,h_526,q_90/84770f_f15a4208f3ad41d5a75ef3090c52d3d7~mv2.jpg", 
                            "https://static.wixstatic.com/media/84770f_f15a4208f3ad41d5a75ef3090c52d3d7~mv2.jpg/v1/fill/w_738,h_526,q_90/84770f_f15a4208f3ad41d5a75ef3090c52d3d7~mv2.jpg", 
                            "https://static.wixstatic.com/media/84770f_f15a4208f3ad41d5a75ef3090c52d3d7~mv2.jpg/v1/fill/w_738,h_526,q_90/84770f_f15a4208f3ad41d5a75ef3090c52d3d7~mv2.jpg"
                        ],
                    ],
                    "3"=>[
                        "webp"=>[
                            "https://static.wixstatic.com/media/84770f_2860a5970ec244e5a88528987fd0a1f3~mv2.jpg/v1/fill/w_760,h_527,q_90/84770f_2860a5970ec244e5a88528987fd0a1f3~mv2.webp", 
                            "https://static.wixstatic.com/media/84770f_2860a5970ec244e5a88528987fd0a1f3~mv2.jpg/v1/fill/w_760,h_527,q_90/84770f_2860a5970ec244e5a88528987fd0a1f3~mv2.webp",
                            "https://static.wixstatic.com/media/84770f_2860a5970ec244e5a88528987fd0a1f3~mv2.jpg/v1/fill/w_760,h_527,q_90/84770f_2860a5970ec244e5a88528987fd0a1f3~mv2.webp", 
                            "https://static.wixstatic.com/media/84770f_2860a5970ec244e5a88528987fd0a1f3~mv2.jpg/v1/fill/w_760,h_527,q_90/84770f_2860a5970ec244e5a88528987fd0a1f3~mv2.webp", 
                            "https://static.wixstatic.com/media/84770f_2860a5970ec244e5a88528987fd0a1f3~mv2.jpg/v1/fill/w_760,h_527,q_90/84770f_2860a5970ec244e5a88528987fd0a1f3~mv2.webp"
                        ],
                        "jpg"=>[
                            "https://static.wixstatic.com/media/84770f_2860a5970ec244e5a88528987fd0a1f3~mv2.jpg/v1/fill/w_760,h_527,q_90/84770f_2860a5970ec244e5a88528987fd0a1f3~mv2.jpg", 
                            "https://static.wixstatic.com/media/84770f_2860a5970ec244e5a88528987fd0a1f3~mv2.jpg/v1/fill/w_760,h_527,q_90/84770f_2860a5970ec244e5a88528987fd0a1f3~mv2.jpg",
                            "https://static.wixstatic.com/media/84770f_2860a5970ec244e5a88528987fd0a1f3~mv2.jpg/v1/fill/w_760,h_527,q_90/84770f_2860a5970ec244e5a88528987fd0a1f3~mv2.jpg", 
                            "https://static.wixstatic.com/media/84770f_2860a5970ec244e5a88528987fd0a1f3~mv2.jpg/v1/fill/w_760,h_527,q_90/84770f_2860a5970ec244e5a88528987fd0a1f3~mv2.jpg", 
                            "https://static.wixstatic.com/media/84770f_2860a5970ec244e5a88528987fd0a1f3~mv2.jpg/v1/fill/w_760,h_527,q_90/84770f_2860a5970ec244e5a88528987fd0a1f3~mv2.jpg"
                        ],
                    ],
                    "4"=>[
                        "webp"=>[
                            "https://static.wixstatic.com/media/84770f_3b39089aa7bb4331b1e6ed74a06ad497~mv2.jpg/v1/fill/w_738,h_526,fp_0.67_0.39,q_90/84770f_3b39089aa7bb4331b1e6ed74a06ad497~mv2.webp", 
                            "https://static.wixstatic.com/media/84770f_3b39089aa7bb4331b1e6ed74a06ad497~mv2.jpg/v1/fill/w_738,h_526,fp_0.67_0.39,q_90/84770f_3b39089aa7bb4331b1e6ed74a06ad497~mv2.webp", 
                            "https://static.wixstatic.com/media/84770f_3b39089aa7bb4331b1e6ed74a06ad497~mv2.jpg/v1/fill/w_738,h_526,fp_0.67_0.39,q_90/84770f_3b39089aa7bb4331b1e6ed74a06ad497~mv2.webp", 
                            "https://static.wixstatic.com/media/84770f_3b39089aa7bb4331b1e6ed74a06ad497~mv2.jpg/v1/fill/w_738,h_526,fp_0.67_0.39,q_90/84770f_3b39089aa7bb4331b1e6ed74a06ad497~mv2.webp", 
                            "https://static.wixstatic.com/media/84770f_3b39089aa7bb4331b1e6ed74a06ad497~mv2.jpg/v1/fill/w_738,h_526,fp_0.67_0.39,q_90/84770f_3b39089aa7bb4331b1e6ed74a06ad497~mv2.webp"
                        ],
                        "jpg"=>[
                            "https://static.wixstatic.com/media/84770f_3b39089aa7bb4331b1e6ed74a06ad497~mv2.jpg/v1/fill/w_738,h_526,fp_0.67_0.39,q_90/84770f_3b39089aa7bb4331b1e6ed74a06ad497~mv2.jpg", 
                            "https://static.wixstatic.com/media/84770f_3b39089aa7bb4331b1e6ed74a06ad497~mv2.jpg/v1/fill/w_738,h_526,fp_0.67_0.39,q_90/84770f_3b39089aa7bb4331b1e6ed74a06ad497~mv2.jpg", 
                            "https://static.wixstatic.com/media/84770f_3b39089aa7bb4331b1e6ed74a06ad497~mv2.jpg/v1/fill/w_738,h_526,fp_0.67_0.39,q_90/84770f_3b39089aa7bb4331b1e6ed74a06ad497~mv2.jpg", 
                            "https://static.wixstatic.com/media/84770f_3b39089aa7bb4331b1e6ed74a06ad497~mv2.jpg/v1/fill/w_738,h_526,fp_0.67_0.39,q_90/84770f_3b39089aa7bb4331b1e6ed74a06ad497~mv2.jpg", 
                            "https://static.wixstatic.com/media/84770f_3b39089aa7bb4331b1e6ed74a06ad497~mv2.jpg/v1/fill/w_738,h_526,fp_0.67_0.39,q_90/84770f_3b39089aa7bb4331b1e6ed74a06ad497~mv2.jpg"
                        ],
                    ],
                ]
            ],
            "img_hero"=>[
                "webp"=>"https://static.wixstatic.com/media/e1c78c_e887b35c1c554e26a60c4e688c36eb14~mv2.jpg/v1/fill/w_1424,h_992,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/e1c78c_e887b35c1c554e26a60c4e688c36eb14~mv2.webp",
                "jpg"=>"https://static.wixstatic.com/media/e1c78c_e887b35c1c554e26a60c4e688c36eb14~mv2.jpg/v1/fill/w_1424,h_992,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/e1c78c_e887b35c1c554e26a60c4e688c36eb14~mv2.jpg"
            ],
        ]],
        [[
            "slug"=>"project-no-2",
            "id"=>"2",
            "title"=>"project no 2",
            "category"=>"Website & Web app",
            "client"=>"Adidas",
            "overview"=>"“Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you.",
            "image_banner_1"=>[
                "https://static.wixstatic.com/media/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.jpg/v1/fill/w_713,h_534,fp_0.58_0.6,q_90/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.jpg",
                "https://static.wixstatic.com/media/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.jpg/v1/fill/w_1426,h_1068,fp_0.58_0.6,q_90/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.jpg",
                "https://static.wixstatic.com/media/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.jpg/v1/fill/w_1662,h_1244,fp_0.58_0.6,q_90/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.jpg",
                "https://static.wixstatic.com/media/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.jpg/v1/fill/w_1662,h_1244,fp_0.58_0.6,q_90/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.jpg",
                "https://static.wixstatic.com/media/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.jpg/v1/fill/w_1662,h_1244,fp_0.58_0.6,q_90/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.jpg"
            ],
            "image_banner_2"=>[
                "https://static.wixstatic.com/media/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.jpg/v1/fill/w_713,h_534,fp_0.58_0.6,q_90/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.webp",
                "https://static.wixstatic.com/media/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.jpg/v1/fill/w_1426,h_1068,fp_0.58_0.6,q_90/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.webp",
                "https://static.wixstatic.com/media/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.jpg/v1/fill/w_1662,h_1244,fp_0.58_0.6,q_90/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.webp",
                "https://static.wixstatic.com/media/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.jpg/v1/fill/w_1662,h_1244,fp_0.58_0.6,q_90/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.webp",
                "https://static.wixstatic.com/media/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.jpg/v1/fill/w_1662,h_1244,fp_0.58_0.6,q_90/84770f_098e571f303a4801ae7f0473b91fa5a5~mv2.webp"
            ],
            "img_items"=>[
                [
                    "1"=>[
                        "webp"=>[
                            "https://static.wixstatic.com/media/84770f_ce8520c946c34ca6a98be1b25f4e3cce~mv2.jpg/v1/fill/w_760,h_527,q_90/84770f_ce8520c946c34ca6a98be1b25f4e3cce~mv2.webp", 
                            "https://static.wixstatic.com/media/84770f_ce8520c946c34ca6a98be1b25f4e3cce~mv2.jpg/v1/fill/w_760,h_527,q_90/84770f_ce8520c946c34ca6a98be1b25f4e3cce~mv2.webp", 
                            "https://static.wixstatic.com/media/84770f_ce8520c946c34ca6a98be1b25f4e3cce~mv2.jpg/v1/fill/w_760,h_527,q_90/84770f_ce8520c946c34ca6a98be1b25f4e3cce~mv2.webp", 
                            "https://static.wixstatic.com/media/84770f_ce8520c946c34ca6a98be1b25f4e3cce~mv2.jpg/v1/fill/w_760,h_527,q_90/84770f_ce8520c946c34ca6a98be1b25f4e3cce~mv2.webp", 
                            "https://static.wixstatic.com/media/84770f_ce8520c946c34ca6a98be1b25f4e3cce~mv2.jpg/v1/fill/w_760,h_527,q_90/84770f_ce8520c946c34ca6a98be1b25f4e3cce~mv2.webp"
                        ],
                        "jpg"=>[
                            "https://static.wixstatic.com/media/84770f_ce8520c946c34ca6a98be1b25f4e3cce~mv2.jpg/v1/fill/w_760,h_527,q_90/84770f_ce8520c946c34ca6a98be1b25f4e3cce~mv2.jpg", 
                            "https://static.wixstatic.com/media/84770f_ce8520c946c34ca6a98be1b25f4e3cce~mv2.jpg/v1/fill/w_760,h_527,q_90/84770f_ce8520c946c34ca6a98be1b25f4e3cce~mv2.jpg", 
                            "https://static.wixstatic.com/media/84770f_ce8520c946c34ca6a98be1b25f4e3cce~mv2.jpg/v1/fill/w_760,h_527,q_90/84770f_ce8520c946c34ca6a98be1b25f4e3cce~mv2.jpg", 
                            "https://static.wixstatic.com/media/84770f_ce8520c946c34ca6a98be1b25f4e3cce~mv2.jpg/v1/fill/w_760,h_527,q_90/84770f_ce8520c946c34ca6a98be1b25f4e3cce~mv2.jpg", 
                            "https://static.wixstatic.com/media/84770f_ce8520c946c34ca6a98be1b25f4e3cce~mv2.jpg/v1/fill/w_760,h_527,q_90/84770f_ce8520c946c34ca6a98be1b25f4e3cce~mv2.jpg"
                        ],
                    ],
                    "2"=>[
                        "webp"=>[
                            "https://static.wixstatic.com/media/84770f_f15a4208f3ad41d5a75ef3090c52d3d7~mv2.jpg/v1/fill/w_738,h_526,q_90/84770f_f15a4208f3ad41d5a75ef3090c52d3d7~mv2.webp", 
                            "https://static.wixstatic.com/media/84770f_f15a4208f3ad41d5a75ef3090c52d3d7~mv2.jpg/v1/fill/w_738,h_526,q_90/84770f_f15a4208f3ad41d5a75ef3090c52d3d7~mv2.webp", 
                            "https://static.wixstatic.com/media/84770f_f15a4208f3ad41d5a75ef3090c52d3d7~mv2.jpg/v1/fill/w_738,h_526,q_90/84770f_f15a4208f3ad41d5a75ef3090c52d3d7~mv2.webp", 
                            "https://static.wixstatic.com/media/84770f_f15a4208f3ad41d5a75ef3090c52d3d7~mv2.jpg/v1/fill/w_738,h_526,q_90/84770f_f15a4208f3ad41d5a75ef3090c52d3d7~mv2.webp", 
                            "https://static.wixstatic.com/media/84770f_f15a4208f3ad41d5a75ef3090c52d3d7~mv2.jpg/v1/fill/w_738,h_526,q_90/84770f_f15a4208f3ad41d5a75ef3090c52d3d7~mv2.webp"
                        ],
                        "jpg"=>[
                            "https://static.wixstatic.com/media/84770f_f15a4208f3ad41d5a75ef3090c52d3d7~mv2.jpg/v1/fill/w_738,h_526,q_90/84770f_f15a4208f3ad41d5a75ef3090c52d3d7~mv2.jpg", 
                            "https://static.wixstatic.com/media/84770f_f15a4208f3ad41d5a75ef3090c52d3d7~mv2.jpg/v1/fill/w_738,h_526,q_90/84770f_f15a4208f3ad41d5a75ef3090c52d3d7~mv2.jpg", 
                            "https://static.wixstatic.com/media/84770f_f15a4208f3ad41d5a75ef3090c52d3d7~mv2.jpg/v1/fill/w_738,h_526,q_90/84770f_f15a4208f3ad41d5a75ef3090c52d3d7~mv2.jpg", 
                            "https://static.wixstatic.com/media/84770f_f15a4208f3ad41d5a75ef3090c52d3d7~mv2.jpg/v1/fill/w_738,h_526,q_90/84770f_f15a4208f3ad41d5a75ef3090c52d3d7~mv2.jpg", 
                            "https://static.wixstatic.com/media/84770f_f15a4208f3ad41d5a75ef3090c52d3d7~mv2.jpg/v1/fill/w_738,h_526,q_90/84770f_f15a4208f3ad41d5a75ef3090c52d3d7~mv2.jpg"
                        ],
                    ],
                    "3"=>[
                        "webp"=>[
                            "https://static.wixstatic.com/media/84770f_2860a5970ec244e5a88528987fd0a1f3~mv2.jpg/v1/fill/w_760,h_527,q_90/84770f_2860a5970ec244e5a88528987fd0a1f3~mv2.webp", 
                            "https://static.wixstatic.com/media/84770f_2860a5970ec244e5a88528987fd0a1f3~mv2.jpg/v1/fill/w_760,h_527,q_90/84770f_2860a5970ec244e5a88528987fd0a1f3~mv2.webp",
                            "https://static.wixstatic.com/media/84770f_2860a5970ec244e5a88528987fd0a1f3~mv2.jpg/v1/fill/w_760,h_527,q_90/84770f_2860a5970ec244e5a88528987fd0a1f3~mv2.webp", 
                            "https://static.wixstatic.com/media/84770f_2860a5970ec244e5a88528987fd0a1f3~mv2.jpg/v1/fill/w_760,h_527,q_90/84770f_2860a5970ec244e5a88528987fd0a1f3~mv2.webp", 
                            "https://static.wixstatic.com/media/84770f_2860a5970ec244e5a88528987fd0a1f3~mv2.jpg/v1/fill/w_760,h_527,q_90/84770f_2860a5970ec244e5a88528987fd0a1f3~mv2.webp"
                        ],
                        "jpg"=>[
                            "https://static.wixstatic.com/media/84770f_2860a5970ec244e5a88528987fd0a1f3~mv2.jpg/v1/fill/w_760,h_527,q_90/84770f_2860a5970ec244e5a88528987fd0a1f3~mv2.jpg", 
                            "https://static.wixstatic.com/media/84770f_2860a5970ec244e5a88528987fd0a1f3~mv2.jpg/v1/fill/w_760,h_527,q_90/84770f_2860a5970ec244e5a88528987fd0a1f3~mv2.jpg",
                            "https://static.wixstatic.com/media/84770f_2860a5970ec244e5a88528987fd0a1f3~mv2.jpg/v1/fill/w_760,h_527,q_90/84770f_2860a5970ec244e5a88528987fd0a1f3~mv2.jpg", 
                            "https://static.wixstatic.com/media/84770f_2860a5970ec244e5a88528987fd0a1f3~mv2.jpg/v1/fill/w_760,h_527,q_90/84770f_2860a5970ec244e5a88528987fd0a1f3~mv2.jpg", 
                            "https://static.wixstatic.com/media/84770f_2860a5970ec244e5a88528987fd0a1f3~mv2.jpg/v1/fill/w_760,h_527,q_90/84770f_2860a5970ec244e5a88528987fd0a1f3~mv2.jpg"
                        ],
                    ],
                    "4"=>[
                        "webp"=>[
                            "https://static.wixstatic.com/media/84770f_3b39089aa7bb4331b1e6ed74a06ad497~mv2.jpg/v1/fill/w_738,h_526,fp_0.67_0.39,q_90/84770f_3b39089aa7bb4331b1e6ed74a06ad497~mv2.webp", 
                            "https://static.wixstatic.com/media/84770f_3b39089aa7bb4331b1e6ed74a06ad497~mv2.jpg/v1/fill/w_738,h_526,fp_0.67_0.39,q_90/84770f_3b39089aa7bb4331b1e6ed74a06ad497~mv2.webp", 
                            "https://static.wixstatic.com/media/84770f_3b39089aa7bb4331b1e6ed74a06ad497~mv2.jpg/v1/fill/w_738,h_526,fp_0.67_0.39,q_90/84770f_3b39089aa7bb4331b1e6ed74a06ad497~mv2.webp", 
                            "https://static.wixstatic.com/media/84770f_3b39089aa7bb4331b1e6ed74a06ad497~mv2.jpg/v1/fill/w_738,h_526,fp_0.67_0.39,q_90/84770f_3b39089aa7bb4331b1e6ed74a06ad497~mv2.webp", 
                            "https://static.wixstatic.com/media/84770f_3b39089aa7bb4331b1e6ed74a06ad497~mv2.jpg/v1/fill/w_738,h_526,fp_0.67_0.39,q_90/84770f_3b39089aa7bb4331b1e6ed74a06ad497~mv2.webp"
                        ],
                        "jpg"=>[
                            "https://static.wixstatic.com/media/84770f_3b39089aa7bb4331b1e6ed74a06ad497~mv2.jpg/v1/fill/w_738,h_526,fp_0.67_0.39,q_90/84770f_3b39089aa7bb4331b1e6ed74a06ad497~mv2.jpg", 
                            "https://static.wixstatic.com/media/84770f_3b39089aa7bb4331b1e6ed74a06ad497~mv2.jpg/v1/fill/w_738,h_526,fp_0.67_0.39,q_90/84770f_3b39089aa7bb4331b1e6ed74a06ad497~mv2.jpg", 
                            "https://static.wixstatic.com/media/84770f_3b39089aa7bb4331b1e6ed74a06ad497~mv2.jpg/v1/fill/w_738,h_526,fp_0.67_0.39,q_90/84770f_3b39089aa7bb4331b1e6ed74a06ad497~mv2.jpg", 
                            "https://static.wixstatic.com/media/84770f_3b39089aa7bb4331b1e6ed74a06ad497~mv2.jpg/v1/fill/w_738,h_526,fp_0.67_0.39,q_90/84770f_3b39089aa7bb4331b1e6ed74a06ad497~mv2.jpg", 
                            "https://static.wixstatic.com/media/84770f_3b39089aa7bb4331b1e6ed74a06ad497~mv2.jpg/v1/fill/w_738,h_526,fp_0.67_0.39,q_90/84770f_3b39089aa7bb4331b1e6ed74a06ad497~mv2.jpg"
                        ],
                    ],
                ]
            ],
            "img_hero"=>[
                "webp"=>"https://static.wixstatic.com/media/e1c78c_e887b35c1c554e26a60c4e688c36eb14~mv2.jpg/v1/fill/w_1424,h_992,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/e1c78c_e887b35c1c554e26a60c4e688c36eb14~mv2.webp",
                "jpg"=>"https://static.wixstatic.com/media/e1c78c_e887b35c1c554e26a60c4e688c36eb14~mv2.jpg/v1/fill/w_1424,h_992,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/e1c78c_e887b35c1c554e26a60c4e688c36eb14~mv2.jpg"
            ],
        ]]
    ];

    public static function view()
    {
        return collect(self::$data_project);
    }
    public static function find($slug)
    {
        $project = static::view();
        return $project->firstWhere('slug',$slug);
    } 
    protected static function newFactory()
    {
        return \Modules\Project\Database\factories\ProjectModelFactory::new();
    }
}
