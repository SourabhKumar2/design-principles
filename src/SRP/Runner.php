<?php

namespace Sourabh\DesignPrinciples\SRP;

use Sourabh\DesignPrinciples\RunnerInterface;

class Runner implements RunnerInterface
{
    //A valid USER JSON String

    private const VALID_USER_JSON = '{"name": "Randy", "email": "randy@email.com", "address":"110 Sugar lane"}';

    //Invalid USER JSON String - email format wrong
    private const INVALID_USER_JSON = '{"name": "Sam", "email": "sam@email", "address":"111 Sugar lane"}';

    public function run(): void
    {
        echo 'Testing SRP.....' . PHP_EOL;
        $controller = new UserController();
        //Check with valid JSON
        $response = $controller->createUser(self::VALID_USER_JSON);
        if (!$response === 'SUCCESS') {
            echo 'Failed' . PHP_EOL;
        }
        echo 'Valid JSON received response: ' . $response . PHP_EOL;
        //Check with invalid JSON
        $response = $controller->createUser(self::INVALID_USER_JSON);
        if (!$response === 'ERROR') {
            echo 'Failed' . PHP_EOL;
        }
        echo 'Invalid JSON received response: ' . $response . PHP_EOL;

        echo 'Done testing SRP....' . PHP_EOL;
    }
}
