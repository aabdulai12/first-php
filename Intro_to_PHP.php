<?php
$config = [
    'gallery_name' => 'Nature Gallery',
    'unsplash_categories' => ['nature', 'architecture', 'food', 'travel', 'technology', 'people'],
    'local_images' => [
        ['image' => 'brandon-green.jpg', 'photographer' => 'Brandon Green', 'unsplash_url' => 'https://unsplash.com/@brandgreen'],
        ['image' => 'jake-blucker.jpg', 'photographer' => 'Jake Blucker', 'unsplash_url' => 'https://unsplash.com/@jakeblucker'],
        ['image' => 'markus-spiske.jpg', 'photographer' => 'Markus Spiske', 'unsplash_url' => 'https://unsplash.com/@markusspiske'],
        ['image' => 'werner-sevenster.jpg', 'photographer' => 'Werner Sevenster', 'unsplash_url' => 'https://unsplash.com/@werner7']
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $config['gallery_name']; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya:ital,wght@0,400..900;1,400..900&family=Poetsen+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
    
</head>
<body>

<!-- Display Gallery Name -->
<h1><?php echo $config['gallery_name']; ?></h1>

<!-- Displaying Unsplash Images -->
<div id="gallery" class="grid-container">
    <?php foreach ($config['unsplash_categories'] as $category): ?>
        <div class="grid-item">
            <h2><?php echo ucfirst($category); ?></h2>
            <img src="https://source.unsplash.com/300x200/?<?php echo $category; ?>" alt="<?php echo $category; ?> image">
        </div>
    <?php endforeach; ?>
</div>
<!-- Displaying Local Images -->
<h1> <?php echo count($config['local_images']); ?> Large Images</h1>
<div id= large-images>
<?php foreach ($config['local_images'] as $image): ?>
    <div>
        <img src="images/<?php echo $image['image']; ?>" alt="Image">
        <h3 class="photographer"> 
            <a href="<?php echo $image['unsplash_url']; ?>"><?php echo $image['photographer']; ?></a>
        </h3>
    </div>
<?php endforeach; ?>
</div>

</body>
</html>


