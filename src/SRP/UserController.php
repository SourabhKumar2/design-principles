<?php

declare(strict_types=1);

namespace Sourabh\DesignPrinciples\SRP;

class UserController
{
    /** @var UserPersistenceService */
    private $storageService;

    /** @var UserParser */
    private $parser;

    /** @var UserValidator */
    private $validator;

    public function __construct()
    {
        $this->storageService = new UserPersistenceService();
        $this->parser = new UserParser();
        $this->validator = new UserValidator();
    }

    public function createUser(string $userJson): string
    {
        $user = $this->parser->parse($userJson);

        if (!$this->validator->validate($user)) {
            return 'ERROR';
        }

        $this->storageService->save($user);

        return 'SUCCESS';
    }
}
