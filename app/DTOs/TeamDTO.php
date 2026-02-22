<?php

declare(strict_types=1);

namespace App\DTOs;

final class TeamDTO
{
    public function __construct(
        public readonly int $externalId,
        public readonly string $name,
        public readonly string $slug,
        public readonly string $logoUrl,
    ) {}

    public static function fromApi(object $team): self
    {
        return new self(
            externalId: $team->id,
            name: $team->name,
            slug: $team->tla,
            logoUrl: $team->crest,
        );
    }
}
