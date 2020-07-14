<?php

class Cars
{

  // vivod one table
  public static function selectTableOne($t)
  {
    $pdo = Db::getConection();
    $sql = "SELECT * FROM ".$t;
    $result = $pdo->prepare($sql);
    $result->execute();
    $res = $result->fetchAll(PDO::FETCH_ASSOC);

    return $res;
  }
  public static function selectModel()
  {
        $pdo = Db::getConection();
        $sql = "SELECT * FROM model";
        $result = $pdo->prepare($sql);
        $result->execute();
        $model = $result->fetchAll(PDO::FETCH_ASSOC);
        return $model;
  }




  public static function insertCar($arrC, $arrH, $arrF,$id_user){


      $pdo = Db::getConection();

    //table komfort
    $sql_komfort = "INSERT INTO `komfort_cars`(`electro_steklo`, `klimat_kontrol`, `obogrev_siden`,
     `reg_rul`, `usilitel_rul`, `kondicioner`, `tonirovka_stekla`, `kamera_zadnego_vida`, `parktronik_zad`, `parktronik_pered`,
      `zapusk_dvig_but`, `kruiz_kontrol`) VALUES (:electro_steklo,:klimat_kontrol,:obogrev_siden,:reg_rul,:usilitel_rul,
       :kondicioner,:tonirovka_stekla,:kamera_zadnego_vida,:parktronik_zad,:parktronik_pered,:zapusk_dvig_but,:kruiz_kontrol)";

       $result = $pdo->prepare($sql_komfort);
       $result->bindParam(':electro_steklo',$arrH['electro_steklo'],PDO::PARAM_INT);
       $result->bindParam(':klimat_kontrol',$arrH['klimat_kontrol'],PDO::PARAM_INT);
       $result->bindParam(':obogrev_siden',$arrH['obogrev_siden'],PDO::PARAM_INT);
       $result->bindParam(':reg_rul',$arrH['reg_rul'],PDO::PARAM_INT);
       $result->bindParam(':usilitel_rul',$arrH['usilitel_rul'],PDO::PARAM_INT);
        $result->bindParam(':kondicioner',$arrH['Kondicioner']);
        $result->bindParam(':tonirovka_stekla',$arrH['Tonirovka-stekla']);
        $result->bindParam(':kamera_zadnego_vida',$arrH['Kamera-zadnego-vida']);
       $result->bindParam(':parktronik_zad',$arrH['Parktronik-zad']);
       $result->bindParam(':parktronik_pered',$arrH['Parktronik-pered']);
        $result->bindParam(':zapusk_dvig_but',$arrH['Zapusk-dvig-but']);
        $result->bindParam(':kruiz_kontrol',$arrH['Kruiz-kontrol']);
       $result->execute();
       $result->errorInfo();
       $id_komford =  $pdo->lastInsertId();
       //var_dump($pdo->errorInfo());
       var_dump($id_komford);

     //table bezopasnost
     $sql_bezopasnost = "INSERT INTO `bezopasnost_cars`(`abs`, `esp`, `antiprobuks_sistem`, `sistema_noch_vid`,
        `podushka_bez_vod`, `podushka_bez_pas`, `podushka_bez_bok`, `podushka_bez_bok_zad`) VALUES (:bez_abs,:bez_esp,:antiprobuks_sistem,
        :sistema_noch_vid,:podushka_bez_vod,:podushka_bez_pas,:podushka_bez_bok,:podushka_bez_bok_zad)";
        $result = $pdo->prepare($sql_bezopasnost);
        $result->bindParam(':bez_abs',$arrH['bez-abs']);
        $result->bindParam(':bez_esp',$arrH['bez-esp']);
        $result->bindParam(':antiprobuks_sistem',$arrH['Antiprobuks-sistem']);
        $result->bindParam(':sistema_noch_vid',$arrH['Sistema-noch-vid']);
        $result->bindParam(':podushka_bez_vod',$arrH['Podushka-bez-vod']);
        $result->bindParam(':podushka_bez_pas',$arrH['Podushka-bez-pas']);
        $result->bindParam(':podushka_bez_bok',$arrH['Podushka-bez-bok']);
        $result->bindParam(':podushka_bez_bok_zad',$arrH['Podushka-bez-bok-zad']);
        $result->execute();
        $id_bezopasnost =  $pdo->lastInsertId();

        var_dump($id_bezopasnost);

    //table element_eksterer
    $sql_eksterer = "INSERT INTO `element_eksterer_cars`(`za_kartera`, `pnevmopodveska`, `legko_diski`,
       `zim_shini`, `farcop`) VALUES (:za_kartera,:pnevmopodveska,:legko_diski,:zim_shini,:farcop)";

       $result = $pdo->prepare($sql_eksterer);
       $result->bindParam(':za_kartera',$arrH['Za-kartera']);
       $result->bindParam(':pnevmopodveska',$arrH['Pnevmopodveska']);
       $result->bindParam(':legko_diski',$arrH['Legko-diski']);
       $result->bindParam(':zim_shini',$arrH['Zim-shini']);
       $result->bindParam(':farcop',$arrH['Farcop']);
       $result->execute();
       $id_eksterer =  $pdo->lastInsertId();

       var_dump($id_eksterer);


    //table  salon salon_interer
    $sql_salon = "INSERT INTO `salon_interer_cars`(`obivka_salona`, `count-mest`, `panoram_krish`, `luk`,
       `koja_rul`, `svet_salon`, `temn_salon`) VALUES (:obiv_salona,:count_mest,:panoram_krish,:luk,:koja_rul,:svet_salon,:temn_salon)";

       $result = $pdo->prepare($sql_salon);
       $result->bindParam(':obiv_salona',$arrH['obiv-salona']);
       $result->bindParam(':count_mest',$arrH['count-mest']);
       $result->bindParam(':panoram_krish',$arrH['Panoram-krish']);
       $result->bindParam(':luk',$arrH['Luk']);
       $result->bindParam(':koja_rul',$arrH['Koja-rul']);
       $result->bindParam(':svet_salon',$arrH['Svet-salon']);
       $result->bindParam(':temn_salon',$arrH['Temn-salon']);
       $result->execute();
       $id_salon =  $pdo->lastInsertId();

       var_dump($id_salon);


    //table obzor
    $sql_obzor = "INSERT INTO `obzor_cars`(`fari`, `prot_fari`, `omiv-far`, `elek_zerk`, `datchik_dojdya`,
       `datchik_sveta`, `obogrev_zerkal`) VALUES (:fari_cars,:prot_fari,:omiv_far,:elek_zerk,:datchik_dojdya,:datchik_sveta,:obogrev_zerkal)";

       $result = $pdo->prepare($sql_obzor);
       $result->bindParam(':fari_cars',$arrH['fari-cars']);
       $result->bindParam(':prot_fari',$arrH['Prot-fari']);
       $result->bindParam(':omiv_far',$arrH['Omiv-far']);
       $result->bindParam(':elek_zerk',$arrH['Elek-zerk']);
       $result->bindParam(':datchik_dojdya',$arrH['datchik-dojdya']);
       $result->bindParam(':datchik_sveta',$arrH['datchik-sveta']);
       $result->bindParam(':obogrev_zerkal',$arrH['obogrev-zerkal']);
       $result->execute();
       $id_obzor =  $pdo->lastInsertId();

       var_dump($id_obzor);
       //exit();

       //table opisanie i price_cars
        $sql_opisanie = "INSERT INTO `opis_price_cars`(`bitaya_vmyat`, `avto_no_bibi`, `ne_rastamojen`,
           `opis_cars`, `price`, `torg_cars`, `cite_prod`, `mesto_osmotra`) VALUES (:bitaya_vmyat,:avto_no_bibi,:ne_rastamojen,:text_opisanie,
           :price_cars,:torg_umesten,:cite_prod,:mesto_osmotra)";

           $result = $pdo->prepare($sql_opisanie);
           $result->bindParam(':bitaya_vmyat',$arrH['bitaya-vmyat']);
           $result->bindParam(':avto_no_bibi',$arrH['avto_no_bibi']);
           $result->bindParam(':ne_rastamojen',$arrH['ne_rastamojen']);
           $result->bindParam(':text_opisanie',$arrH['text-opisanie']);
           $result->bindParam(':price_cars',$arrH['price_cars']);
           $result->bindParam(':torg_umesten',$arrH['torg-umesten']);
           $result->bindParam(':cite_prod',$arrH['cite-prod']);
           $result->bindParam(':mesto_osmotra',$arrH['mesto-osmotra']);
           $result->execute();
           $id_opisanie =  $pdo->lastInsertId();

           var_dump($id_opisanie);


    //table feed_cars
    $sql_cars = "INSERT INTO `feed_cars`(`date_post`,`id_user`, `id_marka`, `id_model`, `god_avto`, `probeg`, `obem_lit`, `mosh_dvig` , `id_cuzov`, `count_dver`,
     `korobka_peredac`, `privod`, `rudder`, `dvigatel`, `color_cars`, `komfort_id`, `bezopasnost_id`,
      `element_eksterer_id`, `salon_interer_id`, `obzor_id`, `opis_price`) VALUES (:date_post,:id_user,:marka,:model,:god_vipuska,:probeg,:volume,:mosh_dvig,
        :kuzov,:dver_count,:korobka_peredac,:privod,:but_rul,:dvigatel,:color_cars,:id_komford,:id_bezopasnost,:id_eksterer,:id_salon,
      :id_obzor,:id_opisanie)";

      $data_cars = date("Y-m-d");

      $result = $pdo->prepare($sql_cars);
      $result->bindParam(':date_post',$data_cars);
      $result->bindParam(':id_user',$id_user,PDO::PARAM_INT);
      $result->bindParam(':marka',$arrC['markaSave'],PDO::PARAM_INT);
      $result->bindParam(':model',$arrC['modelSave'],PDO::PARAM_INT);
      $result->bindParam(':god_vipuska',$arrC['god_vipuska']);
      $result->bindParam(':probeg',$arrC['probeg']);
      $result->bindParam(':volume',$arrC['volume']);
      $result->bindParam(':mosh_dvig',$arrC['moshnost_dvigatelya']);
      $result->bindParam(':kuzov',$arrC['but_kuzov'],PDO::PARAM_INT);
      $result->bindParam(':dver_count',$arrC['dver_count'],PDO::PARAM_INT);
      $result->bindParam(':korobka_peredac',$arrC['korobka_peredac'],PDO::PARAM_INT);
      $result->bindParam(':privod',$arrC['but_privod'],PDO::PARAM_INT);
      $result->bindParam(':but_rul',$arrC['but_rul']);
      $result->bindParam(':dvigatel',$arrC['but_dvigatel'],PDO::PARAM_INT);
      $result->bindParam(':color_cars',$arrC['color_cars'],PDO::PARAM_INT);
      $result->bindParam(':id_komford',$id_komford,PDO::PARAM_INT);
      $result->bindParam(':id_bezopasnost',$id_bezopasnost,PDO::PARAM_INT);
      $result->bindParam(':id_eksterer',$id_eksterer,PDO::PARAM_INT);
      $result->bindParam(':id_salon',$id_salon,PDO::PARAM_INT);
      $result->bindParam(':id_obzor',$id_obzor,PDO::PARAM_INT);
      $result->bindParam(':id_opisanie',$id_opisanie,PDO::PARAM_INT);
      $result->execute();
      $id_cars=  $pdo->lastInsertId();


      if(!empty($arrF) or is_array($arrF) or isset($arrF)){
            $sqlimg = "INSERT INTO `fotocars`(url_foto , id_feed_cars) VALUES (:urlimg,:id_post)";
            foreach ($arrF as $key => $value) {
                $result = $pdo->prepare($sqlimg);
                $result->execute(array(':urlimg'=>$value , ':id_post'=>$id_cars));
            }
      //end if
      }

      var_dump($id_user);
      print_r($arrC);
      var_dump($sql_cars);
  //end function
  }

  function selectCarsAll($arrFilt){

 //var_dump($arrFilt['model']);
// exit();
// pishem filter stringify
$whe = '';
  if (isset($arrFilt['marka']) ) {
       $whe .= ' AND feed_cars.id_marka = :marka';
    }
    if (isset($arrFilt['model'])) {
        $whe .= ' AND feed_cars.id_model = :model';
    }
    if (!$arrFilt['cuzov'] == NULL) {
        $whe .= ' AND feed_cars.id_cuzov = :cuzov';
    }
    if (!$arrFilt['kpp'] == NULL) {
        $whe .= ' AND feed_cars.korobka_peredac = :kpp';
    }
    if (!$arrFilt['dvig'] == NULL) {
        $whe .= ' AND feed_cars.dvigatel = :dvig';
    }
    if (isset($arrFilt['priv'])) {
        $whe .= ' AND feed_cars.privod = :privod';
    }

  if(!$arrFilt['price_from'] == NULL && !$arrFilt['price_to'] == NULL){
          $whe .= ' AND opis_price_cars.price BETWEEN :price_from AND :price_to';
    }
    if (!$arrFilt['price_from'] == NULL && $arrFilt['price_to'] == NULL) {
          $whe .= ' AND opis_price_cars.price BETWEEN :price_from AND 1000000000';
    }
    if ($arrFilt['price_from'] == NULL && !$arrFilt['price_to'] == NULL) {
          $whe .= ' AND opis_price_cars.price BETWEEN 0 AND :price_to';
    }

  if(!$arrFilt['probeg_from'] == NULL && !$arrFilt['probeg_to'] == NULL){
            $whe .= ' AND feed_cars.probeg BETWEEN :probeg_from AND :probeg_to';
      }
      if (!$arrFilt['probeg_from'] == NULL && $arrFilt['probeg_to'] == NULL) {
            $whe .= ' AND feed_cars.probeg BETWEEN :probeg_from AND 1000000000';
      }
      if ($arrFilt['probeg_from'] == NULL && !$arrFilt['probeg_to'] == NULL) {
            $whe .= ' AND feed_cars.probeg BETWEEN 0 AND :probeg_to';
      }

       if(!$arrFilt['godfrom'] == NULL && !$arrFilt['godto'] == NULL){
              $whe .= ' AND feed_cars.god_avto BETWEEN :godfrom AND :godto';
        }
        if (!$arrFilt['godfrom'] == NULL && $arrFilt['godto'] == NULL) {
              $whe .= ' AND feed_cars.god_avto BETWEEN :godfrom AND 1000000000';
        }
        if ($arrFilt['godfrom'] == NULL && !$arrFilt['godto'] == NULL) {
              $whe .= ' AND feed_cars.god_avto BETWEEN 0 AND :godto';
        }




              // AND feed_cars.id_marka = :marka
   // $whe = ' AND feed_cars.id_model = :model';
   //          AND feed_cars.id_cuzov = :cuzov
   //          AND opis_price_cars.price BETWEEN :price_from AND :price_to
   //          AND feed_cars.probeg BETWEEN :pribeg_from AND :priber_to
   //          AND feed_cars.korobka_peredac = :kpp
   //          AND feed_cars.dvigatel = :dvigatel
   //          AND feed_cars.privod = :privod
   //          AND feed_cars.god_avto BETWEEN :god_from AND :god_to

      $pdo = Db::getConection();

      $sql = "SELECT feed_cars.id as id_post, feed_cars.*, marka.mark,model.model,cuzov.rusish as cuzov,korobka_peredac.rusish as korobka,privod.rusish as privod,
              dvigatel.rusish as dvigatel,color_cars.rusish as color,komfort_cars.*,bezopasnost_cars.*,element_eksterer_cars.*,
              salon_interer_cars.*,obzor_cars.*,opis_price_cars.*,user_va.login,profil_user.name,fotouser.url_img
              FROM `feed_cars`
                  LEFT JOIN marka ON marka.id = feed_cars.id_marka
                  LEFT JOIN model ON model.id = feed_cars.id_model
                  LEFT JOIN cuzov ON cuzov.id = feed_cars.id_cuzov
                  LEFT JOIN korobka_peredac ON korobka_peredac.id = feed_cars.korobka_peredac
                  LEFT JOIN privod ON privod.id = feed_cars.privod
                  LEFT JOIN dvigatel ON dvigatel.id = feed_cars.dvigatel
                  LEFT JOIN color_cars ON color_cars.id = feed_cars.color_cars
                  LEFT JOIN komfort_cars ON komfort_cars.id = feed_cars.komfort_id
                  LEFT JOIN bezopasnost_cars ON bezopasnost_cars.id = feed_cars.bezopasnost_id
                  LEFT JOIN element_eksterer_cars ON element_eksterer_cars.id = feed_cars.element_eksterer_id
                  LEFT JOIN salon_interer_cars ON salon_interer_cars.id = feed_cars.salon_interer_id
                  LEFT JOIN obzor_cars ON obzor_cars.id = feed_cars.obzor_id
                  LEFT JOIN opis_price_cars ON opis_price_cars.id = feed_cars.opis_price
                  LEFT JOIN user_va ON user_va.id = feed_cars.id_user
                  LEFT JOIN profil_user ON profil_user.user_id = feed_cars.id_user
                  LEFT JOIN fotouser ON fotouser.id_user = feed_cars.id_user
              WHERE feed_cars.status_public = 1";

      //sort date
      $orderBy = ' ORDER BY feed_cars.data_cars DESC';
      $result = $pdo->prepare($sql.$whe.$orderBy);
        //var_dump($result);
        //var_dump($arrFilt['probeg_to']);

      //var but
        if(isset($arrFilt['marka'])){
            $result->bindParam(':marka', $arrFilt['marka'],PDO::PARAM_INT);
        }
        if (isset($arrFilt['model'])) {
            $result->bindParam(':model', $arrFilt['model'],PDO::PARAM_INT);
        }
        if (isset($arrFilt['cuzov'])) {
            $result->bindParam(':cuzov', $arrFilt['cuzov'],PDO::PARAM_INT);
        }
        if (isset($arrFilt['kpp'])) {
            $result->bindParam(':kpp', $arrFilt['kpp']);
        }
        if (isset($arrFilt['dvig'])) {
            $result->bindParam(':dvig', $arrFilt['dvig']);
        }
        if (isset($arrFilt['priv'])) {
            $result->bindParam(':privod', $arrFilt['priv'],PDO::PARAM_INT);
        }
        //exit();
        //price filter
        if(isset($arrFilt['price_from']) && isset($arrFilt['price_to'])){
            $result->bindParam(':price_from', $arrFilt['price_from']);
            $result->bindParam(':price_to', $arrFilt['price_to']);
        }
        if (isset($arrFilt['price_from']) && $arrFilt['price_to'] == NULL) {
            $result->bindParam(':price_from', $arrFilt['price_from']);
        }
        if ($arrFilt['price_from'] == NULL && !$arrFilt['price_to'] == NULL) {
            $result->bindParam(':price_to', $arrFilt['price_to']);
        }
        //probeg filter
        if(isset($arrFilt['probeg_from']) && isset($arrFilt['probeg_to'])){
            $result->bindParam(':probeg_from', $arrFilt['probeg_from']);
            $result->bindParam(':probeg_to', $arrFilt['probeg_to']);
        }
        if (isset($arrFilt['probeg_from']) && $arrFilt['probeg_to'] == NULL) {
            $result->bindParam(':probeg_from', $arrFilt['probeg_from']);
        }
        if ($arrFilt['probeg_from'] == NULL && isset($arrFilt['probeg_to'])) {
            $result->bindParam(':probeg_to', $arrFilt['probeg_to']);
        }
        //probeg god
        if(isset($arrFilt['godfrom']) && isset($arrFilt['godto'])){
            $result->bindParam(':godfrom', $arrFilt['godfrom']);
            $result->bindParam(':godto', $arrFilt['godto']);
        }
        if (isset($arrFilt['godfrom']) && $arrFilt['godto'] == NULL) {
            $result->bindParam(':godfrom', $arrFilt['godfrom']);
        }
        if ($arrFilt['godfrom'] == NULL && isset($arrFilt['godto'])) {
            $result->bindParam('godto', $arrFilt['godto']);
        }
        $result->execute();
        //print_r($result->errorInfo());

      return $result->fetchAll(PDO::FETCH_ASSOC);
    //end function
  }


  public static function markaAll($marka){

    $pdo = Db::getConection();
    // uznaem id marka
    $markaId= Handler::markaName($marka);
    // var_dump($markaId[0]['id']);
    // exit();
    // dostaem marki
    $sql = "SELECT feed_cars.id as id_post, feed_cars.*, marka.mark,model.model,cuzov.rusish as cuzov,korobka_peredac.rusish as korobka,privod.rusish as privod,dvigatel.rusish as dvigatel,opis_price_cars.*,user_va.login,profil_user.name,fotouser.url_img
            FROM `feed_cars`
              LEFT JOIN marka ON marka.id = feed_cars.id_marka
              LEFT JOIN model ON model.id = feed_cars.id_model
              LEFT JOIN cuzov ON cuzov.id = feed_cars.id_cuzov
              LEFT JOIN korobka_peredac ON korobka_peredac.id = feed_cars.korobka_peredac
              LEFT JOIN privod ON privod.id = feed_cars.privod
              LEFT JOIN dvigatel ON dvigatel.id = feed_cars.dvigatel
              LEFT JOIN opis_price_cars ON opis_price_cars.id = feed_cars.opis_price
              LEFT JOIN user_va ON user_va.id = feed_cars.id_user
              LEFT JOIN profil_user ON profil_user.user_id = feed_cars.id_user
              LEFT JOIN fotouser ON fotouser.id_user = feed_cars.id_user
            WHERE id_marka = :model";

    $result = $pdo->prepare($sql);
    $result->bindParam(':model',$markaId[0]['id'],PDO::PARAM_INT);
    $result->execute();

   return $result->fetchAll(PDO::FETCH_ASSOC);
  ///end function
  }


  public static function modelAll($model){

    $pdo = Db::getConection();
    // uznaem id marka
    $modelId= Handler::modelName($model);
    // var_dump($markaId[0]['id']);
    // exit();
    // dostaem marki
    $sql = "SELECT feed_cars.id as id_post, feed_cars.*, marka.mark,model.model,cuzov.rusish as cuzov,korobka_peredac.rusish as korobka,privod.rusish as privod,dvigatel.rusish as dvigatel,opis_price_cars.*,user_va.login,profil_user.name,fotouser.url_img
            FROM `feed_cars`
              LEFT JOIN marka ON marka.id = feed_cars.id_marka
              LEFT JOIN model ON model.id = feed_cars.id_model
              LEFT JOIN cuzov ON cuzov.id = feed_cars.id_cuzov
              LEFT JOIN korobka_peredac ON korobka_peredac.id = feed_cars.korobka_peredac
              LEFT JOIN privod ON privod.id = feed_cars.privod
              LEFT JOIN dvigatel ON dvigatel.id = feed_cars.dvigatel
              LEFT JOIN opis_price_cars ON opis_price_cars.id = feed_cars.opis_price
              LEFT JOIN user_va ON user_va.id = feed_cars.id_user
              LEFT JOIN profil_user ON profil_user.user_id = feed_cars.id_user
              LEFT JOIN fotouser ON fotouser.id_user = feed_cars.id_user
            WHERE id_model = :model";

    $result = $pdo->prepare($sql);
    $result->bindParam(':model',$modelId[0]['id'],PDO::PARAM_INT);
    $result->execute();

   return $result->fetchAll(PDO::FETCH_ASSOC);
  ///end function
  }

  public static function selectCar($idcar){
    $pdo = Db::getConection();

    $sql = "SELECT feed_cars.id as id_post, feed_cars.*, marka.mark,model.model,cuzov.rusish as cuzov,
    korobka_peredac.rusish as korobka,privod.rusish as privod,dvigatel.rusish as dvigatel,color_cars.rusish as color,
    komfort_cars.*,bezopasnost_cars.*,element_eksterer_cars.*,salon_interer_cars.*,obzor_cars.*,opis_price_cars.*,
    user_va.login,profil_user.name,fotouser.url_img,klimat_kontrol.name as klim_name,klimat_kontrol.id as id_klim_kon,
    electro_steklo.id as id_el_st, electro_steklo.name as name_el_st, obogrev_siden.id as id_ob_si,
    obogrev_siden.name as name_obog_sid,reg_rul.id as id_reg_rul, reg_rul.name as name_reg_rul,
    usilitel_rul.id as id_us_rul, usilitel_rul.name as name_us_rul,obivka_salona.id as id_ob_sal,
    obivka_salona.name as name_obiv_sal,fari.id as id_fari, fari.name as name_fari
            FROM `feed_cars`
                LEFT JOIN marka ON marka.id = feed_cars.id_marka
                LEFT JOIN model ON model.id = feed_cars.id_model
                LEFT JOIN cuzov ON cuzov.id = feed_cars.id_cuzov
                LEFT JOIN korobka_peredac ON korobka_peredac.id = feed_cars.korobka_peredac
                LEFT JOIN privod ON privod.id = feed_cars.privod
                LEFT JOIN dvigatel ON dvigatel.id = feed_cars.dvigatel
                LEFT JOIN color_cars ON color_cars.id = feed_cars.color_cars
                LEFT JOIN komfort_cars ON komfort_cars.id = feed_cars.komfort_id
                LEFT JOIN bezopasnost_cars ON bezopasnost_cars.id = feed_cars.bezopasnost_id
                LEFT JOIN element_eksterer_cars ON element_eksterer_cars.id = feed_cars.element_eksterer_id
                LEFT JOIN salon_interer_cars ON salon_interer_cars.id = feed_cars.salon_interer_id
                LEFT JOIN obzor_cars ON obzor_cars.id = feed_cars.obzor_id
                LEFT JOIN opis_price_cars ON opis_price_cars.id = feed_cars.opis_price
                LEFT JOIN user_va ON user_va.id = feed_cars.id_user
                LEFT JOIN profil_user ON profil_user.user_id = feed_cars.id_user
                LEFT JOIN fotouser ON fotouser.id_user = feed_cars.id_user
                LEFT JOIN klimat_kontrol ON klimat_kontrol.id = komfort_cars.klimat_kontrol
                LEFT JOIN electro_steklo ON electro_steklo.id = komfort_cars.electro_steklo
                LEFT JOIN obogrev_siden ON obogrev_siden.id = komfort_cars.obogrev_siden
                LEFT JOIN reg_rul ON reg_rul.id = komfort_cars.reg_rul
                LEFT JOIN usilitel_rul ON usilitel_rul.id = komfort_cars.usilitel_rul
                LEFT JOIN obivka_salona ON obivka_salona.id = salon_interer_cars.obivka_salona
                LEFT JOIN fari ON fari.id = obzor_cars.fari
            WHERE feed_cars.id = :idcar";

$result = $pdo->prepare($sql);
$result->bindParam(':idcar',$idcar,PDO::PARAM_INT);
$result->execute();

return $result->fetch(PDO::FETCH_ASSOC);


  // end function
  }
// end class
}


?>
