<?php
$config = [
    'gallery_name' => 'Nature Gallery',
    'unsplash_categories' => ['nature', 'architecture', 'food', 'travel', 'technology', 'people'],
    'local_images' => [
        ['image' => 'brandon-green_thumbnail.jpg', 'photographer' => 'Brandon Green'],
        ['image' => 'jake-blucker_thumbnail.jpg', 'photographer' => 'Jake Blucker'],
        ['image' => 'markus-spiske_thumbnail.jpg', 'photographer' => 'Markus Spiske'],
        ['image' => 'werner-sevenster_thumbnail.jpg', 'photographer' => 'Werner Sevenster']
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $config['gallery_name']; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/luminous-lightbox/2.0.1/luminous-basic.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya:ital,wght@0,400..900;1,400..900&family=Poetsen+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
</head>
<body>

<!-- Display Gallery Name -->
<h1><?php echo $config['gallery_name']; ?></h1>

<!-- Displaying Local Images -->
<div id="gallery">
    <?php foreach ($config['local_images'] as $image): ?>
        <div class="image">
            <h2 class="photographer"><?php echo $image['photographer']; ?></h2>
            <a href="thumbnails/<?php echo str_replace('_thumbnail', '', $image['image']); ?>">
            <img src="thumbnails/<?php echo $image['image']; ?>" alt="Image">
        </a>
        </div>
    <?php endforeach; ?>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/luminous-lightbox/2.0.1/Luminous.min.js"></script>
<script>
   new LuminousGallery(document.querySelectorAll(".gallery a"));
</script>

</body>
</html>
