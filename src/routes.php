<?php
# Маршрутизация запросов

$app->get('/', function ($request, $response, $args) {
  return $this->view->render($response, 'index.html', [
    'name' => 'Vladimir V Shalaev'
  ]);
});
