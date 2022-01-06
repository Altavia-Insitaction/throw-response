<?php

namespace  Insitaction\ThrowResponseBundle\Controller;

use Insitaction\ThrowResponseBundle\Exception\ResponseException;
use Insitaction\ThrowResponseBundle\Exception\JsonResponseException;
use Exception;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use TypeError;

class ErrorController
{
    /**
     * @throws TypeError
     * @throws Exception
     */
    public function show(Request $request): ?Response
    {
        $exception = $request->attributes->get('exception');

        if ($exception instanceof JsonResponseException) {
            return new JsonResponse(['error' => $exception->getMessage()], $exception->getCode());
        }

        if ($exception instanceof ResponseException) {
            return new Response($exception->getMessage(), $exception->getCode());
        }

        throw $exception;
    }
}
