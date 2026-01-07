<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mero Khata</title>

</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <div class="logo">MK</div>
            <h1>Mero Khata</h1>
            <p>Login to your account</p>
        </div>
        
        <div class="login-form">
            <?php if(isset($error)): ?>
                <div class="error-message">
                    <?php echo $error; ?>
                </div>
            <?php endif; ?>
            
        
    </div>
</body>
</html>