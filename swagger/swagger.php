<?php

use OpenApi\Annotations as OA;

/**
 * @OA\Info(title="Fizz-buzz REST server", version="0.1")
 * @OA\Server(
 *  url="http://127.0.0.1:8080/v1",
 *  description="Simple fizz-buzz REST server"
 * )
 */

/**
 * @OA\Get(
 *  path="/generic-fizzbuzz/{int1}/{int2}/{limit}/{str1}/{str2}",
 *  description="Returns a list of strings with numbers from 1 to limit, where: all multiples of int1 are replaced by str1, all multiples of int2 are replaced by str2, all multiples of int1 and int2 are replaced by str1str2",
 *  @OA\Parameter(
 *     name="int1",
 *     required=true,
 *     in="path",
 *     @OA\Schema(
 *          type="integer",
 *     ),
 *     description="First multiple"
 * ),
 *  @OA\Parameter(
 *     name="int2",
 *     required=true,
 *     in="path",
 *     @OA\Schema(
 *          type="integer",
 *     ),
 *     description="Second multiple"
 * ),
 *  @OA\Parameter(
 *     name="limit",
 *     required=true,
 *     in="path",
 *     @OA\Schema(
 *          type="integer",
 *     ),
 *     description="Limit of the range"
 * ),
 *  @OA\Parameter(
 *     name="str1",
 *     required=true,
 *     in="path",
 *     @OA\Schema(
 *          type="string",
 *     ),
 *     description="First string"
 * ),
 *  @OA\Parameter(
 *     name="str2",
 *     required=true,
 *     in="path",
 *     @OA\Schema(
 *          type="string",
 *     ),
 *     description="Second string"
 * ),
 *
 * @OA\Response(
 *      response="200",
 *      description="SUCCESS",
 *      content={
 *          @OA\MediaType(
 *              mediaType="application/json",
 *                  @OA\Schema(
 *                      @OA\Property(
 *                          property="status",
 *                          type="string",
 *                          description="The status of query"
 *                      ),
 *                      @OA\Property(
 *                          property="result",
 *                          type="string",
 *                          description="The character string processed"
 *                      ),
 *                  )
 *              )
 *          }
 *      ),
 * ),
 * 
 */

/**
 * @OA\Get(
 *  path="/statistics",
 *  description="What the most frequent request has been",
 *  @OA\Response(
 *      response="200",
 *      description="SUCCESS",
 *      content={
 *          @OA\MediaType(
 *              mediaType="application/json",
 *                  @OA\Schema(
 *                      @OA\Property(
 *                          property="status",
 *                          type="string",
 *                          description="The status of query"
 *                      ),
 *                      @OA\Property(
 *                          property="result",
 *                          type="array",
 *                          description="The character string processed",
*                              @OA\Items(
*                                  @OA\Property(property="query", type="string"),
*                                  @OA\Property(property="nb", type="integer"),
*                              ),
 *                      ),
 *                  )
 *              )
 *          }
 *      )
 * )
 */