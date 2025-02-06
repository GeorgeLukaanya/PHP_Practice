<?php
if (isset($_POST['upload'])) {
    if (isset($_FILES['file'])) {
        $file = $_FILES['file'];

        // File properties
        $fileName = $file['name'];
        $fileTmp = $file['tmp_name'];
        $fileSize = $file['size'];
        $fileError = $file['error'];

        // Define upload directory
        $uploadDir = "uploads/";
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        // Allowed file types
        $allowedTypes = ['jpg', 'jpeg', 'png', 'pdf', 'txt'];
        $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        // Generate a unique name to prevent overwrites
        $newFileName = uniqid("upload_", true) . "." . $fileExt;
        $destination = $uploadDir . $newFileName;

        // Error checking
        if ($fileError !== 0) {
            die("❌ File upload error. Code: " . $fileError);
        }

        if (!in_array($fileExt, $allowedTypes)) {
            die("❌ Invalid file type! Only JPG, PNG, PDF, and TXT are allowed.");
        }

        if ($fileSize > 5 * 1024 * 1024) { // 5MB limit
            die("❌ File size exceeds 5MB limit.");
        }

        // Move file
        if (move_uploaded_file($fileTmp, $destination)) {
            echo "✅ File uploaded successfully! <br>";
            echo "📂 File Name: " . $newFileName . "<br>";
            echo "🔗 <a href='$destination' target='_blank'>View File</a>";
        } else {
            echo "❌ Failed to move uploaded file.";
        }
    } else {
        echo "⚠ No file was uploaded.";
    }
}
?>
