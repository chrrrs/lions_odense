<?php

  function getData() {
    $json = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/lions_1/data.json');
    $data = json_decode($json, true);
    return $data;
  }

  function getEvents() {
    $json = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/lions_1/events.json');
    $data = json_decode($json, true);
    return $data;
  }

  function updatePage() {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $preText = $_POST['preText'];
    $image = $_POST['image'];

    $data = [
      'title' => $title,
      'content' => $content,
      'preText' => $preText,
      'image' => $image
    ];

    $id = $_GET['id'];

    $pages = getData();
    $pages[$id] = $data;

    putData($pages);
  }

  function updateEvent() {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $time = $_POST['time'];
    $eImage = $_POST['eImage'];

    $data = [
      'title' => $title,
      'content' => $content,
      'time' => $time,
      'eImage' => $eImage
    ];

    $id = $_GET['id'];

    $pages = getEvents();
    $pages[$id] = $data;

    putEvent($pages);
  }

  function singlePage($reversed = false) {
    $id = 0;

    if(isset($_GET['id'])) {
      $id = $_GET['id'];
    }

    $pages = getData();

    if($reversed = true) {
      $pages = array_reverse($pages);
    }

    return $pages[$id];
  }

  function savePage() {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $preText = $_POST['preText'];
    $image = $_POST['image'];

    $data = [
      'title' => $title,
      'content' => $content,
      'preText' => $preText,
      'image' => $image
    ];

    $pages = getData();
    $pages[] = $data;

    putData($pages);
  }

  function saveEvent() {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $time = $_POST['time'];
    $eImage = $_POST['eImage'];

    $data = [
      'title' => $title,
      'content' => $content,
      'time' => $time,
      'eImage' => $eImage
    ];

    $pages = getEvents();
    $pages[] = $data;

    putEvent($pages);
  }

  function removePage() {
    $pages = getData();
    $id = $_GET['id'];

    array_splice($pages, $id, 1);

    putData($pages);
  }

  function removeEvents() {
    $events = getEvents();
    $id = $_GET['id'];

    array_splice($events, $id, 1);

    putEvent($events);
  }

  function putData($pages) {
    $json = json_encode($pages);
    file_put_contents($_SERVER['DOCUMENT_ROOT'] . '/lions_1/data.json', $json);
  }

  function putEvent($pages) {
    $json = json_encode($pages);
    file_put_contents($_SERVER['DOCUMENT_ROOT'] . '/lions_1/events.json', $json);
  }

?>
