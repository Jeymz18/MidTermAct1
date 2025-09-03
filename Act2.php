<?php
$customer = "Jeymzz";
$role = "moderator";
$active = true;
$premium = true;
$lastLoginDaysAgo = 0;
$notificationPreference = "email";

$welcomeMessage = ($role === "administrator") 
    ? "Welcome, Admin $customer!" 
    : "Welcome, $customer!";

$loginMessage = ($lastLoginDaysAgo <= 1) 
    ? "You logged in recently." 
    : "It’s been a while since your last login.";

echo "<p>$welcomeMessage</p>";
echo "<p>$loginMessage</p>";

if (!$active) {
    echo "<p>Your account is inactive. Please contact support.</p>";
} else {
    if ($role === "administrator") {
        echo "<p>✅ Access to ALL features, including Admin Panel.</p>";
    } elseif ($role === "moderator") {
        echo "<p>✅ Access to Forum Posts and Profile Editor.</p>";
        if ($premium) {
            echo "<p>⭐ Premium content library unlocked!</p>";
        }
    } elseif ($role === "member") {
        echo "<p>✅ Access to Forum Posts only.</p>";
        if ($premium) {
            echo "<p>⭐ Premium content unlocked!</p>";
        }
    } else { // guest
        echo "<p>👤 Guest access: Read-only mode.</p>";
    }
}

switch ($notificationPreference) {
    case "email":
        echo "<p>📧 Email notifications are enabled.</p>";
        break;
    case "sms":
        echo "<p>📱 SMS notifications are enabled.</p>";
        break;
    case "both":
        echo "<p>📧 + 📱 Both email and SMS notifications are enabled.</p>";
        break;
    case "none":
        echo "<p>🔕 Notifications are turned off.</p>";
        break;
    default:
        echo "<p>⚠ Invalid notification preference.</p>";
}
?>
