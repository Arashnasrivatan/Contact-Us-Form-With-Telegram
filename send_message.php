<?php
// Set your bot token and chat ID
$botToken = '';
$chatId = ''; // Replace this with your actual chat ID

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data and sanitize inputs
    $firstName = htmlspecialchars($_POST['first-name'], ENT_QUOTES, 'UTF-8');
    $lastName = htmlspecialchars($_POST['last-name'], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
    $message = htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');

    // Compose the message
    $messageToSend = "📧 *New Contact Form Submission*\n\n";
    $messageToSend .= "👤 *Name*: $firstName $lastName\n";
    $messageToSend .= "✉️ *Email*: $email\n\n";
    $messageToSend .= "💬 *Message*:\n$message";

    // Prepare the API request
    $telegramApiUrl = "https://api.telegram.org/bot$botToken/sendMessage";
    $telegramMessageData = http_build_query([
        'chat_id' => $chatId,
        'text' => $messageToSend,
        'parse_mode' => 'Markdown'
    ]);

    // Send the message using cURL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $telegramApiUrl);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $telegramMessageData);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    $responseData = json_decode($response, true);
    curl_close($ch);

    // Check the response and provide feedback
    header('Content-Type: application/json');
    if ($responseData['ok']) {
        echo json_encode(['error' => false]);
    } else {
        echo json_encode(['error' => true, 'message' => $responseData['description']]);
    }
}
?>