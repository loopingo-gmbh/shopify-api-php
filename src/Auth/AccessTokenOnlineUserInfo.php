<?php

declare(strict_types=1);

namespace Shopify\Auth;

final class AccessTokenOnlineUserInfo
{
    private int $id;
    private string $firstName;
    private string $lastName;
    private string $email;
    private bool $emailVerified;
    private bool $accountOwner;
    private string $locale;
    private bool $collaborator;

    public function __construct(
        int $id,
        string $firstName,
        string $lastName,
        string $email,
        bool $emailVerified,
        bool $accountOwner,
        string $locale,
        bool $collaborator
    ) {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->emailVerified = $emailVerified;
        $this->accountOwner = $accountOwner;
        $this->locale = $locale;
        $this->collaborator = $collaborator;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function isEmailVerified(): bool
    {
        return $this->emailVerified;
    }

    public function isAccountOwner(): bool
    {
        return $this->accountOwner;
    }

    public function getLocale(): string
    {
        return $this->locale;
    }

    public function isCollaborator(): bool
    {
        return $this->collaborator;
    }
}
