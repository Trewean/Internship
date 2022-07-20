<?php
if(!preg_match($regex, $_FILES['csv_file']['name'])){
    ?>
    <p>Неверный тип файла, выберите заново</p>
    <a href = "CSV_upload.php" ><button>Вернуться к форме</button></a>
<?php
}
else{
    move_uploaded_file($_FILES['csv_file']['tmp_name'], $_FILES['csv_file']['name']);
    if(($file = fopen($_FILES['csv_file']['name'], "r")) !== false){
        if(!file_exists("upload")) mkdir("upload");
        while(($data = fgetcsv($file,100 , ",")) !== false){
            file_put_contents("upload/".$data[0], $data[1]);
            //var_dump($data);
        }
    }
    ?>
<p>Загрузка завершена</p>
<a href="CSV_upload.php"><button>Вернуться к форме</button></a>
<?php
    unlink($_FILES['csv_file']['name']);
}
