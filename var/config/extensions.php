<?php

return [
    "bundle" => [
        "Pimcore\\Bundle\\DataImporterBundle\\PimcoreDataImporterBundle" => TRUE,
        "Pimcore\\Bundle\\DataHubBundle\\PimcoreDataHubBundle" => [
            "enabled" => TRUE,
            "priority" => 13,
            "environments" => [

            ]
        ]
    ]
];
