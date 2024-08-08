<?php

namespace USFM\USFMParser\Models\Markers;

class TCRMarker extends Marker
{
    public int $columnPosition = 1;

    public function getIdentifier(): string
    {
        return "tcr";
    }

    public function preProcess(string $input): string
    {
        return trim($input);
    }

    public function getAllowedContents(): array
    {
        return [TextBlock::class];
    }
}