<?php

// session_start();
require "autoload.php";
define("CONSUMER_KEY", "1280783455781969925-awF9rfie0V7WkjuIOJlz61zdhutYsf");
define("CONSUMER_SECRET", "1P5aYCr4yndBOJfGi2XvC3dmyYWFYBY9DJgGTctLKtT7a");
define("OAUTH_TOKEN", "bG9vcWFUWDc4cWJnaFZBM29zMHQ6MTpjaQ");
define("OAUTH_TOKEN_SECRET", "M5vZiFY5yLUthn8qz-aeiRiWd1MvAo_W2mgo1ST8REX7mHLlys");
//define("OAUTH_CALLBACK", ""); //callback url, isi jika dibutuhkan. (optional)
define("WEBHOOK_URL", "https://osis.icpasuruan.sch.id/twitter/webhook.php"); //https://domain-kamu.com/twitter/webhook.php
define("ENV_LABEL", ""); //Dev environment label

define("TRIGGER_WORD", "icpas!");
define("ADMIN_ID", ["965702083", "26494110", ""]); //User ID Admin (optional)
define("MINIMAL_FOLLOWERS", "10");
define("SLEEP_TIME", "15"); //delay ketika post tweet (detik)

define("TRIGGER_OFF", "off"); //tambahkan kata off di bio maka bot akan nonaktif

define("ALERT_NOT_FOLLOW", "[BOT] kamu belum follow base ini");
define("ALERT_NOT_FOLLBACK", "[BOT] kamu belum difollback, tunggu sesi open follback berikutnya");
define("ALERT_MINIMAL_FOLLOWERS", "[BOT] followers kamu minimal " . MINIMAL_FOLLOWERS . " untuk ngirim menfess");
define("ALERT_ERROR_UNSEND", "[BOT] terjadi kegagalan! hubungi admin untuk unsend manual");
define("ALERT_DOUBLE_UNSEND", "[BOT] kan tadi udah dihapus njing. Ketik /unsend [url_menfess] untuk unsend menfess berbentuk thread");
define("ALERT_NOT_SENDER", "[BOT] lo bukan sendernya");
define("ALERT_UNSEND", "[BOT] menfess kamu sudah berhasil dihapus! Ketik /unsend [url_menfess] untuk unsend menfess berbentuk thread");
define("ALERT_OFF", "[BOT] bot sedang off, coba dilain waktu ya");
define("ALERT_BADWORDS", "[BOT] ada kata yang dilarang");
define("ALERT_TRIGGER", "[BOT] gunakan kata " . TRIGGER_WORD . " untuk ngirim menfess");

define("WELCOME_MESSAGE", "[BOT] hai kamu sudah difollback! baca rules terlebih dahulu sebelum ngirim menfess yaa");
define("PROCESSED_MESSAGE", "[BOT] wait! menfess kamu sedang diproses");
define("DECLINED_MESSAGE", "[BOT] menfess kamu batal dikirim");

define("SUCCESS_ALERT", "[BOT] Menfess kamu berhasil di-Tweet. Ketik /unsend untuk batal mengirim");
define("QUESTION_QUICKREP", "[BOT] pastikan sudah membaca rules");

define("OPTION_SATU", trim(html_entity_decode('&#x1f436;')) . " Yakin");
define('DESCRIPTION_SATU', 'Iya anjing');

define("OPTION_DUA", trim(html_entity_decode('&#x1f431;')) . " Gak");
define("DESCRIPTION_DUA", "Batal");

define("BADWORDS_LIST", ["asu", "anjing", "memek", "kontol", "ewean", "bajingan", "goblog", "goblok", "setan", "pantek", "fwb", "pepek", "lonte", "ewe"]);

if (!CONSUMER_KEY || !CONSUMER_SECRET || !WEBHOOK_URL || !ENV_LABEL) {
    echo 'CONSUMER_KEY, CONSUMER_SECRET, WEBHOOK_URL, and ENV_LABEL variables must be set';
}
