<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;


/**
 * @OA\Get(
 *     tags={"Product"},
 *     path="/api/v1/products",
 *     summary="получить посты",
 *
 *
 *     @OA\RequestBody(),
 *
 *
 *     @OA\Response(
 *         response="200",
 *         description="OK",
 *     ),
 * ),
 *
 * @OA\Post(
 *     tags={"Product"},
 *     path="/api/v1/products",
 *     summary="Добавить продукт",
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             allOf={
 *                 @OA\Schema (
 *                     @OA\Property (property="name", type="string", example="example"),
 *                     @OA\Property (property="description", type="string", example="Some description"),
 *                     @OA\Property (property="price", type="integer", example=23),
 *                     @OA\Property (property="category_id", type="integer", example=1),
 *                     @OA\Property (property="available", type="boolean", example=1),
 *                 )
 *             }
 *         )
 *     ),
 *
 *
 *     @OA\Response(
 *         response="200",
 *         description="ok",
 *         @OA\JsonContent(
 *             @OA\Property (property="name", type="string", example="example"),
 *             @OA\Property (property="description", type="string", example="Some description"),
 *             @OA\Property (property="price", type="integer", example=23),
 *             @OA\Property (property="category_id", type="integer", example=1),
 *             @OA\Property (property="available", type="boolean", example=1),
 *         ),
 *     ),
 * ),
 *
 *
 */

class ProductController extends Controller
{

}
