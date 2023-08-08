<?php

return [

    "roles" => [
        "r" => [],
        "w" => [],//['requirement_engineer'],
        "x" => []//['requirement_engineer'],
    ],


    "list" => [

        "title" => "Articles",
        "subtitle" => "List of all articles",
        "addButton" => [
            "text"=>"Add Article"
        ],
        "filterText" => "Search ...",
        "listCaption" => false,

        "headers" => [

            "id"=> [
                "title" => "#",
                "sortable" => true,
                "align" => "left",
                "direction" => "asc"
            ],

            "prop1"=> [
                "title" => "Property 1",
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
            "r" => "/requirements/view/",
            "w" => "/requirements/form/",
            "x" => "/requirements/delete/"
        ],

        "noitem" => "No articles found in database yet!",
        "delete_confirm" => [
            "question" => "Do you want to delete this requirement from database?",
            "last_warning" => "When done, it is not possible to revert back."
        ]
    ],

    "create" => [
        "title" => "Articles",
        "subtitle" => "Create a New Article",
        "submitText" => "Add Article",
    ],

    "read" => [
        "title" => "Articles",
        "subtitle" => "View Requirement Parameters",
        "submitText" => "Add Requirement",
    ],

    "update" => [
        "title" => "Articles",
        "subtitle" => "Edit Requirement Properties",
        "submitText" => "Update Requirement",
    ],

    "cu_route" => "/requirements/store/",

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
