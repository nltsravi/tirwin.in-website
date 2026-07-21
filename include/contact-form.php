<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verify CAPTCHA
    $recaptcha_secret = "6Ld_s0ErAAAAAG6aefyTYLHNg5FZKyaQUcG1R7nv";
    $recaptcha_response = $_POST['g-recaptcha-response'];
    
    $verify_response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $response_data = json_decode($verify_response);
    
    if (!$response_data->success) {
        die("Please complete the CAPTCHA verification.");
    }

    // Get form data and sanitize input
    $name = htmlspecialchars(trim($_POST['widget-contact-form-name']));
    $email = htmlspecialchars(trim($_POST['widget-contact-form-email']));
    $subject = htmlspecialchars(trim($_POST['widget-contact-form-category']));
    $subcategory = htmlspecialchars(trim($_POST['widget-contact-form-subcategory']));
    $message = htmlspecialchars(trim($_POST['widget-contact-form-message']));

    // Basic form validation
    if (empty($name) || empty($email) || empty($subject)  || empty($message)) {
        die("All fields are required.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    // SendGrid API key
    $apiKey = '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';

    // Create email data
    $emailData = [
        "personalizations" => [
            [
                "to" => [
                    ["email" => "tirwin.communications@tirwin.in", "name" => "Website Contact form"]
                ],
                "subject" => "Contact Form Submission: $subject"
            ]
        ],
        "from" => ["email" => "tirwin.communications@tirwin.in", "name" => "Tirwin Management Service Pvt. Ltd"],
        "content" => [
            [
                "type" => "text/html",
                "value" => "
                    <html>
                    <body style='font-family: Arial, sans-serif;'>
                        <div style='text-align: center; margin-bottom: 20px;'>
                            <img src='https://www.tirwin.in/new-temp/images/tirwin-logo.png' alt='Your Company Logo' style='width: 200px;' />
                        </div>
                        <h3>New Contact Form Submission</h3>
                        <table border='1' cellpadding='10' cellspacing='0' style='border-collapse: collapse; width: 100%;'>
                            <tr>
                                <th style='text-align: left;'>Name</th>
                                <td>{$name}</td>
                            </tr>
                            <tr>
                                <th style='text-align: left;'>Email</th>
                                <td>{$email}</td>
                            </tr>
                            <tr>
                                <th style='text-align: left;text-transform: uppercase;'>Subject</th>
                                <td>{$subject}</td>
                            </tr>
                            <tr>
                                <th style='text-align: left;text-transform: uppercase;'>Subcategory</th>
                                <td>{$subcategory}</td>
                            </tr>
                            <tr>
                                <th style='text-align: left;'>Message</th>
                                <td>{$message}</td>
                            </tr>
                        </table>
                    </body>
                    </html>
                "
            ]
        ]
    ];

    // Initialize cURL session
    $ch = curl_init();

    // Set cURL options
    curl_setopt($ch, CURLOPT_URL, "https://api.sendgrid.com/v3/mail/send");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($emailData));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Authorization: Bearer $apiKey",
        "Content-Type: application/json"
    ]);

    // Execute the API request and get the response
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    // Close the cURL session
    curl_close($ch);

    // Check the response
    if ($httpCode == 202) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email. HTTP Code: $httpCode";
    }
} else {
    echo "Invalid request.";
}
?>
