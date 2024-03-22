<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keyword Extraction</title>
    <meta name="keywords" content="<?php echo implode(", ", $keywords); ?>">
</head>
<body>
    <h1>Keyword Extraction</h1>
    <p>Keywords have been set as meta keywords in the HTML head section.</p>
    <p><?php echo implode(", ", $keywords); ?><p>
</body>
</html>
