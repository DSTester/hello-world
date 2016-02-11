<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p>
		Der obige Fehler ist aufgetreten als der Web Server Ihre Anfrage bearbeitet hat.
    </p>
    <p>
        Bitte kontaktieren sie uns wenn sie denken das es sich um einen Server-Fehler handelt.
    </p>

</div>
