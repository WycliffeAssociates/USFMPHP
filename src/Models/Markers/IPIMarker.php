<?php

namespace USFM\USFMParser\Models\Markers;

class IPIMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "ipi";
    }

    public function preProcess(string $input): string
    {
        return trim($input);
    }

    public function getAllowedContents(): array
    {
        return [
            TextBlock::class,
            BKMarker::class,
            BKEndMarker::class,
            BDMarker::class,
            BDEndMarker::class,
            ITMarker::class,
            ITEndMarker::class,
            SCMarker::class,
            SCEndMarker::class,
            BDITMarker::class,
            BDITEndMarker::class,
            NDMarker::class,
            NDEndMarker::class,
            NOMarker::class,
            NOEndMarker::class,
            SUPMarker::class,
            SUPEndMarker::class
        ];
    }
}