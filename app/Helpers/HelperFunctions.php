<?php

function respondWithToken($token)
{

    $tokenLife = env('JWT_TTL') ?? 10;

    $tokenCookie = cookie('access_token',
        $token,
        $tokenLife,
        null,
        null,
        true,
        true,
        false,
        null);

    $issue_time = time();

    return response()
        ->json(['message' => "Logged in Successfully!", "access_token" => $token, "tst" => $issue_time, "overtime" => (int) $tokenLife])
        ->withCookie($tokenCookie);

}