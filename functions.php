<?php
    function get_project() {
        $project = scandir( __DIR__ . "/assets/__PROJECTS");
        array_splice($project, 0, 2);
        return $project;
    }

    function get_files($project) {
        $files = scandir( __DIR__ . "/assets/__PROJECTS/" . $project);
        array_splice($files, 0, 2);
        return $files;
    }

    function get_text($project) {
        return file_get_contents( __DIR__ . "/assets/__PROJECTS/" . $project . "/text.txt");
    }

    function get_files_path($project) {
        $files = get_files($project);
        foreach ($files as $key => $value) {
            $files[$key] = "/assets/__PROJECTS/" . $project . "/" . $files[$key];
        }
        return $files;
    }
?>