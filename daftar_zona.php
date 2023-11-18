<?php

$daftarTimezone = DateTimeZone::listIdentifiers();

foreach ($daftarTimezone as $timezone) {
  echo "{$timezone} <br>";
}