<?php

namespace App\Controllers\Dtos;

use Spatie\DataTransferObject\DataTransferObject;

class DomainDto extends DataTransferObject
{
    public string $tld;

    public string $domain;

    public float $price;

    public bool $available;

}
