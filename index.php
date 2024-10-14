<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List Web App - Group Introduction</title>
</head>
<body>
    <h1>Welcome to Our Term Project: To-Do List Web App</h1>

    <?php
    // Project Information
    $projectTitle = "To-Do List Web App";
    $projectOverview = "The To-Do List Web App is a simple yet functional project designed to help users manage their daily tasks. Users can add, edit, delete, and mark tasks as complete, making it easy to stay organized and productive.";
    $features = [
        "Add Tasks: Users can easily add new tasks with a title and optional description.",
        "Edit Tasks: Existing tasks can be edited to update the title or description.",
        "Delete Tasks: Users can delete tasks they no longer need.",
        "Mark Complete: Tasks can be marked as complete, which helps users visually differentiate between completed and pending tasks.",
        "Filter Tasks: Users can filter tasks by completed, pending, or all to manage their view."
    ];
    $technologyStack = [
        "Frontend: HTML, CSS, JavaScript",
        "Backend: Node.js, Express.js (optional for storing tasks)",
        "Database: MongoDB (optional for persistent task storage)"
    ];
    $objective = "The goal of this project is to create a user-friendly interface for task management that is accessible on both desktop and mobile devices. This project will enhance your understanding of basic CRUD operations and front-end development concepts.";

    // Group Members
    $groupMembers = [
        "Ali Raza Ansari S008",
        "Mehtab Ahmed S048",
        "Kashif Iqbal S020"
    ];

    echo "<h2>Project Title: $projectTitle</h2>";
    echo "<h3>Overview:</h3>";
    echo "<p>$projectOverview</p>";
    echo "<h3>Features:</h3><ul>";
    foreach ($features as $feature) {
        echo "<li>$feature</li>";
    }
    echo "</ul>";
    echo "<h3>Technology Stack:</h3><ul>";
    foreach ($technologyStack as $tech) {
        echo "<li>$tech</li>";
    }
    echo "</ul>";
    echo "<h3>Objective:</h3>";
    echo "<p>$objective</p>";
    echo "<h3>Group Members:</h3><ul>";
    foreach ($groupMembers as $member) {
        echo "<li>$member</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>