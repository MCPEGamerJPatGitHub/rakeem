<?php

namespace Rakeem\Protocol\Encapsulated;

class SetEntityDataPacket extends EncapsulatedPacket {
    const headerID = 0x9e;

    const fieldsDefinition = [
        "eid" => [
            "length" => 8,
            "format" => "J",
        ],

        "meta" => [
        ],
    ];

}
?>
