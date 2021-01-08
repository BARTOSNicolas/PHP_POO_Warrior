<?php

  require_once __DIR__ . "/../base/baseBattleField.php";
  require_once "warrior.php";


  class BattleField extends BaseBattleField
  {
    public static function createMyWarrior(){
        $guerrier = new MarvelWarrior($GLOBALS['warriorID']);
        $weapon = new Weapon('Boule de Feu', 100);
        $weapon->setImageUrl('https://thumbs.dreamstime.com/z/super-pouvoir-ic%C3%B4ne-du-feu-%C3%A9l%C3%A9ment-d-de-pour-des-applis-mobiles-concept-et-web-le-pictogramme-peut-%C3%AAtre-employ%C3%A9-131941960.jpg');
        $guerrier->setWeapon($weapon);
        $guerrier->setImageUrl('https://images-na.ssl-images-amazon.com/images/I/61v1caoEnlL._AC_UL1024_.jpg');
        $guerrier->saveNew();
    }

    public static function createOtherWarrior(){
        $guerrier = new StarTrekWarrior('Spock');
        $weapon = new Weapon('Téléphatie', 20);
        $weapon->setImageUrl('https://www.apprendre-en-ligne.net/crypto/magie/telepathie.gif');
        $guerrier->setWeapon($weapon);
        $guerrier->setImageUrl('https://cdn.radiofrance.fr/s3/cruiser-production/2019/03/eb662325-bf7f-4dad-b05f-71144c9366a4/1136_gettyimages-464967684.jpg');
        $guerrier->saveNew();
    }

  }
