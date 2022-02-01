<?php require_once 'files/security/security.php' ?>
<?php require_once 'files/pair_recording/logout/logout.php' ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/zeroing.css">
    <link rel="stylesheet" href="css/adding_schedule.css">
    <link rel="stylesheet" href="css/upload.css">
    <!-- <link rel="stylesheet" href="css/upload_2.css"> -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/core.js"></script>
    <script src="js/upload.js"></script>
    <title>Добавление расписания СурГУ</title>
</head>

<body>
    <script>
        jQuery("document").ready(function ($) {
            $(".upload").upload({
                action: "files/adding_schedule.php",
                label: "Перетащите сюда файл (excel), или нажмите сюда",
                postKey: "upload_file",
                maxSize: 10485760,
                maxQueue: 1
            })
                .on("start.upload", Start)
                .on("filestart.upload", fileStart)
                .on("fileprogress.upload", fileProgress)
                .on("fileerror.upload", fileError)
                .on("complete.upload", Complete);
        });


        function Start(e, files) {

            console.log('Start');
            var html = '';
            for (var i = 0; i < files.length; i++) {
                if (files[i].size > 10485760) {
                    alert('Size');
                }
                html += '<li data-index="' + files[i].index + '"><span class="file">' + files[i].name + ' ' + '</span><progress value="0" max="100"></progress><span class="progress"></span></li>'
            }
            $("#res").append(html);
        }

        function fileStart(e, file) {

            console.log('FIle Start');
            $("#res").find('li[data-index=' + file.index + ']').find('.progress').text('0%');
        }

        function fileProgress(e, file, percent) {

            console.log('FIle Progress');
            $("#res")
                .find('li[data-index=' + file.index + ']')
                .find('progress').attr('value', percent)
                .next().text(percent + '%');

        }

        function fileError(e, file) {

            console.log('Error');
            $("#res").find('li[data-index=' + file.index + ']').addClass('upload_error').find('.progress').text('Файл не поддерживается');
        }

        function Complete(e) { console.log('Complete'); }
    </script>

    <div class="wrapper">
        <div class="container">
            <div class="container__title">
                <h1>Добавление расписания СурГУ</h1>
            </div>
            <div class="upload"></div>
            <br><br>
            <div id="res"></div>
        </div>
    </div>

</body>

</html>