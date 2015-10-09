<?php

$config = (object) array(
   "db" => (object) array(
      "host" => "localhost",
      "database" => "franceioi",
      "user" => "",
      "password" => "",
      "logged" => false
   ),
   "platform" => (object) array(
      "name" => "http://algorea.pem.dev",
      "private_key" => "",
      "public_key" => ""
   ),
   "debug" => (object) array(
      "timers" => false,
      "types" => array(),
   ),
   "login" => (object) array(
      "public_key" => ""
   ),
   "sync" => (object) array(
      "server" => "",
      "params" => (object) array(  ),
      "useTransaction" => false,
      "maxChanges" => 20000,
   ),
   "shared" => (object) array(
      "RootItemId" => "1",
      "RootGroupId" => "1",
      "RootSelfGroupId" => "2",
      "RootAdminGroupId" => "3",
      "RootTempGroupId" => "4",
      "OrphanedRootItemId" => "5",
      "domains" => array( // global root
         "current" => (object) array( // domain-specific root. All config is read from "current", implement your own mechanism to make it point to the data you want to according to the domain
            "title" => 'Change title here',
            "domain" => 'domain url, optional for "default"',
            "usesForum" => true,
            "additionalCssUrl" => 'additional css url',
            "ProgressRootItemId" => "2",
            "OfficialProgressItemId" => "21",
            "OfficialProgressItemSonId" => "22",
            "CustomProgressItemId" => "23",
            "DiscoverRootItemId" => "3",
            "DiscoverRootSonItemId" => "31",
            "ContestRootItemId" => "4",
            "CustomContestRootItemId" => "41",
            "OfficialContestRootItemId" => "42",
         )
      )
   )
);

if (is_readable(__DIR__.'/config_local.php')) {
   include_once __DIR__.'/config_local.php';
}
