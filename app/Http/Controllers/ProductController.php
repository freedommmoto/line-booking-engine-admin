<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getMockData(Request $request): JsonResponse
    {
        $data = '{
          "products": [
            {
              "id": 1,
              "name": "asd",
              "price": 250,
              "img": "1.jpg",
              "stock": 1,
              "show": 1
            },
            {
              "id": 2,
              "name": "asdasdasdasd",
              "price": 250,
              "img": "2.jpg",
              "stock": 1,
              "show": 0
            },
            {
              "id": 3,
              "name": "bbbb",
              "price": 250,
              "img": "3.jpg",
              "stock": 1,
              "show": 1
            },
            {
              "id": 4,
              "name": "bc",
              "price": 250,
              "img": "4.jpg",
              "stock": 1,
              "show": 1
            },
            {
              "id": 5,
              "name": "photo-changsuek-250",
              "price": 250,
              "img": "5.jpg",
              "stock": 1,
              "show": 1
            },
            {
              "id": 6,
              "name": "photo-changsuek-250",
              "price": 250,
              "img": "6.jpg",
              "stock": 1,
              "show": 1
            },
            {
              "id": 7,
              "name": "photo-changsuek-250",
              "price": 250,
              "img": "7.jpg",
              "stock": 1,
              "show": 1
            },
            {
              "id": 8,
              "name": "photo-changsuek-250",
              "price": 250,
              "img": "8.jpg",
              "stock": 1,
              "show": 1
            }
          ]
        }';

        return response()->json(json_decode($data, false));
    }

}
