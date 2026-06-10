<!DOCTYPE html>
<!-- //apparently, if the line above is not used. browser falls back to "quirks mode," essentially a legacy mode which inconsistent rules which is a big no. Also informs browser that it's HTML5. -->

<html lang="en">
<!-- lang="en" determines the website's primary language which helps Search engines understand the language of the page which helps in indexing and relevance(basically categorizes your content with other english materials) in search results -->

<head>

<meta charset="UTF-8"> <!-- UTF-8 helps with character support(letters, symbols, emojis), include so your website can handle multilingual text and special characters correctly -->

<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Ensures the website adapts and changes the page width to the current device's screen being used(phone, tablet, desktop); furthermore, "initial-scale=1.0" makes sure the page isn't shrunked or zoomed by default -->

<title>Portfolio</title>
<link rel="stylesheet" href="style.css">

</head>
<body>
    <?php include 'components/about.php'; ?>
    <?php include 'components/contact.php'; ?>
    <?php include 'components/footer.php'; ?>
    <?php include 'components/hero.php'; ?>
    <?php include 'components/navbar.php'; ?>
    <?php include 'components/projects.php'; ?>
    <?php include 'components/skills.php'; ?>

    <script src="scripts.js"></script>
</body>
</html>