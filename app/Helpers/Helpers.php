<?php

function mphToMps($velocity): float
{
    //1 mile per hour = 0.44704 meters / second
    return round($velocity * 0.44704, 2);
}
