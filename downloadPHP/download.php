
<?php
    // Specify the file path
    $file_path = "file/Paragraph 1.pdf";

    // Check if the file exists
    if (file_exists($file_path)) {
        // Set headers for the file download
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($file_path) . '"');
        header('Content-Length: ' . filesize($file_path));

        // Read the file and output it to the browser
        readfile($file_path);

        // Exit to prevent additional output
        exit;
    } else {
        // File not found, handle accordingly (e.g., redirect to an error page)
        die("File not found");
    }
?>

