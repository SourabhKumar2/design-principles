<?php

declare(strict_types=1);

namespace Sourabh\DesignPrinciples\SRP;

class UserPersistenceService
{
    /** @var Store */
    private $store;

    public function __construct()
    {
        $this->store = new Store();
    }

    public function save(User $user): void
    {
        $this->store->store($user);
    }
}
