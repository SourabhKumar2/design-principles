<?php

declare(strict_types=1);

namespace Sourabh\DesignPrinciples\SRP;

class UserController
{
    /** @var Store */
    private $store;

    public function __construct()
    {
        $this->store = new Store();
    }

    public function createUser(string $userJson): string
    {
        $json = json_decode($userJson, true);

        $user = new User($json['name'], $json['email'], $json['address']);

        if (!$this->isValidUser($user)) {
            return 'ERROR';
        }

        $this->store->store($user);

        return 'SUCCESS';
    }

    private function isValidUser(User $user): bool
    {
        if (!$this->isPresent($user->getName())) {
            return false;
        }
        $user->setName(trim($user->getName()));

        if (!$this->isValidAlphaNumeric($user->getName())) {
            return false;
        }

        if ($user->getEmail() == null || strlen(trim($user->getEmail())) == 0) {
            return false;
        }
        $user->setEmail(trim($user->getEmail()));

        if (!$this->isValidEmail($user->getEmail())) {
            return false;
        }

        return true;
    }

    private function isPresent(string $value): bool
    {
        return $value != null && strlen(trim($value)) > 0;
    }

    private function isValidAlphaNumeric(string $value): bool
    {
        return !preg_match('/[^A-Za-z0-9]/', $value);
    }

    private function isValidEmail(string $value): bool
    {
        return (bool)preg_match('/^[_A-Za-z0-9-\\+]+(\\.[_A-Za-z0-9-]+)*@[A-Za-z0-9-]+(\\.[A-Za-z0-9]+)*(\\.[A-Za-z]{2,})$/', $value);
    }
}
