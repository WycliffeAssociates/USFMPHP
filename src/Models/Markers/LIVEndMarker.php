<?php

namespace USFM\USFMParser\Models\Markers;

class LIVEndMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "liv*";
    }
}