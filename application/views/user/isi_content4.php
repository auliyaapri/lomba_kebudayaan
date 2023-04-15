<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $no = 1; ?>
    <h1> <?php echo $this->session->userdata('username'); ?></h1>
    <?php foreach ($isi_konten as $isk):?>
        
        <h1><?= $isk->id_user?></h1>


        <?php endforeach ; ?>
        
    
</body>
</html>