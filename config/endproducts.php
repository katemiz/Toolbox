<?php

return [

    "roles" => [
        "r" => [],
        "w" => [],//['requirement_engineer'],
        "x" => []//['requirement_engineer'],
    ],


    "list" => [

        "title" => "End Products",
        "subtitle" => "List of End Products",
        "addButton" => [
            "text"=>"Add End Product"
        ],
        "filterText" => "Search ...",
        "listCaption" => false,

        "headers" => [

            "number"=> [
                "title" => "Part No",
                "sortable" => true,
                "align" => "left",
                "direction" => "asc"
            ],

            "description"=> [
                "title" => "Product Title/Description",
                "sortable" => false,
                "align" => "left",
                "direction" => "asc"
            ],

            "prop2"=> [
                "title" => "Property 1",
                "sortable" => true,
                "align" => "left",
                "direction" => "asc"
            ],


            "created_at"=> [
                "title" => "Created On",
                "sortable" => true,
                "align" => "left",
                "direction" => "asc"
            ]

        ],
        "actions" => [
            "r" => "/endproducts",
            "w" => "/endproducts-form/",
            "x" => "/endproducts-delete/"
        ],

        "noitem" => "No end products found in database yet!",
        "delete_confirm" => [
            "question" => "Do you want to delete this end product from database?",
            "last_warning" => "When done, it is not possible to revert back."
        ]
    ],

    "create" => [
        "title" => "End Products",
        "subtitle" => "Create a New End Product",
        "submitText" => "Add End Product",
    ],

    "read" => [
        "title" => "End Products",
        "subtitle" => "View Requirement Parameters",
        "submitText" => "Add End Product",
    ],

    "update" => [
        "title" => "End Products",
        "subtitle" => "Edit End Product Properties",
        "submitText" => "Update End Product",
    ],

    "release" => [
        "start" => [
            "title" => 'End Products',
            "subtitle" => 'Start Release Process'
        ]
    ],

    "cu_route" => "/endproducts-store/",

    "form" => [

        "project"=> [
            "label" => "Project",
            "name" => "project",
            "options" => ""
        ],


        "rtype" => [
            "label" => "Requirement Type",
            "name" => "rtype",
            "placeholder" => "Enter project title/description",
            "value" => "",
            "options" => [
                "GR" => 'General Requirement',
                "TR" => 'Technical Requirement'
            ]
        ],

        "cross_ref_no" => [
            "label" => "Cross Reference Number",
            "name" => "cross_ref_no",
            "placeholder" => "Requirement number for referencing (optional)",
            "value" => ""
        ],


        "endproduct"=> [
            "label" => "End Products (Select all that apply)",
            "name" => "endproduct",
            "options" => "",
            "nooptions" => 'No End Products exist. All requirements will be linked to current project. If you want to link to End Products, create End Product first'
        ],

        "text" => [
            "label" => "Requirement Description",
            "name" => "text",
            "placeholder" => "Enter requirement text/description",
            "value" => ""
        ],

        "remarks" => [
            "label" => "Remarks/Notes",
            "name" => "remarks",
            "placeholder" => "Enter remarks/notes",
            "value" => ""
        ]
    ]
];
