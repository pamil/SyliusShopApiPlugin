<?php

declare(strict_types=1);

namespace Sylius\ShopApiPlugin\Request;

use Sylius\ShopApiPlugin\Command\RemoveAddress;
use Symfony\Component\HttpFoundation\Request;

class RemoveAddressRequest
{
    /** @var int|string */
    protected $id;

    /** @var string */
    protected $userEmail;

    public function __construct(Request $request, string $userEmail)
    {
        $this->id = $request->attributes->get('id');
        $this->userEmail = $userEmail;
    }

    public function getCommand(): RemoveAddress
    {
        return new RemoveAddress($this->id, $this->userEmail);
    }
}
