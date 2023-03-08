<?php
switch ($_SERVER['REQUEST_METHOD']) {
    case ('POST'):
        $title = $_POST['title'] ?? null;
        $content = $_POST['content'] ?? null;

        if (!empty($title) && !empty($content)) {
            $createdOn = $_SERVER['REQUEST_TIME'];
            $id = $createdOn . '-' . $title;

            $toWrite = json_encode([
                'id' =>  $id,
                "title" => $title,
                "content" => $content,
                'date' => date('r', $createdOn)
            ]);
            $file = fopen('./db/' . $id . '.txt', 'w');
            fwrite($file, $toWrite);
            fclose($file);

            echo '<h1 style="color:green;text-align:center;">' . $title . ' added</h1>';
        } else {
            printError('missing parametes');
        }
        exit;
        
    case ('GET'):
        if (!empty($_GET['id'])) {
            $id = $_GET['id'];
            $postFile = "./db/" . $id . '.txt';
            
            if (file_exists($postFile)) {
                echo  json_decode(file_get_contents($postFile));
            } else {
                printError($id . ' does not exist');
            }
        } else {
            printError('missing parametes');
        }
        exit;

    case ('PUT'):
        if (!empty($_GET['id'])) {
            $id = $_GET['id'];
            $title =  empty($_GET['title']) ? null : $_GET['title'];
            $content = empty($_GET['content']) ? null : $_GET['content'];
            $createdOn = $_SERVER['REQUEST_TIME'];
            $postFile = "./db/" . $id . '.txt';

            if (file_exists($postFile)) {
                $post = json_decode(file_get_contents($postFile));
                $toWrite = json_encode([
                    "id" =>  $id,
                    "title" => $title ?? $post->title,
                    "content" => $content ?? $post->content,
                    "date" => date('r', $createdOn)
                ]);
                $file = fopen($postFile, 'w');
                fwrite($file, $toWrite);
                fclose($file);
                echo '<h1 style="color:green;text-align:center;">' . $id . ' updated</h1>';
            } else {
                printError($id . ' does not exist');
            }
        } else {
            printError('missing parametes');
        }
        exit;

    case ('DELETE'):
        if (!empty($_GET['id'])) {
            $id = $_GET['id'];
            $postFile = "./db/" . $id . '.txt';

            if (file_exists($postFile)) {
                unlink($postFile);
                echo '<h1 style="color:green;text-align:center;">' . $id . ' deleted</h1>';
            } else {
                printError($id . ' does not exist');
            }
        } else {
            printError('missing parametes');
        }
        exit;
}


function printError(string $err): void
{
    echo '<h1 style="color:red;text-align:center;">' . $err . '</h1>';
}
