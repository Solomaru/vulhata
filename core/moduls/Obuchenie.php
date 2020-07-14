<?php

class Obuchenie
{
    
    
    #выводим все курсы
    
    
    #выводим курс по ссылке
    public static function coursResult($Urlcours){
        
        $pdo = Db::getConection();
        #достаем курс по ссылке
        $sql = "SELECT courses.id, courses.title,courses.status FROM `courses` WHERE courses.courses_url = :courses_url"; 
       //$sql = "SELECT * FROM `courses` INNER JOIN sborgroup ON c= :id_courses"; 
        
        $result = $pdo->prepare($sql);
        $result->bindParam(':courses_url', $Urlcours);
        $result->execute();
        
        $row = $result->fetch(PDO::FETCH_ASSOC);
        //var_dump($row);
        return $row;      
    }
    
    #тащим курс с датой в запись
    public static function cursZapis(){
        
      $pdo = Db::getConection();  
      
      $sql = "SELECT courses.id, courses.title FROM courses";
        
      $result = $pdo->prepare($sql);
      $result->execute();
      $row = $result->fetchAll(PDO::FETCH_ASSOC);
      
      return $row;    
    }
    

    
    public static function cursZapisData($obuc_id){
        
      $pdo = Db::getConection();  
      
      $sql = "SELECT sborgroup.id, sborgroup.data_name, sborgroup.data_courses, courses.title FROM sborgroup
      INNER JOIN courses ON sborgroup.curses_id = courses.id
      WHERE sborgroup.obuc_id = :obuc_id";
        
      $result = $pdo->prepare($sql);
      $result->bindParam('obuc_id', $obuc_id);
      $result->execute();
      $row = $result->fetchAll(PDO::FETCH_ASSOC);
      
      return $row;    
    }
    public static function semZapisData($obuc_id){
        
      $pdo = Db::getConection();  
      
      $sql = "SELECT sborgroup.id, sborgroup.data_name, sborgroup.data_courses, semenar.title FROM sborgroup
      INNER JOIN semenar ON sborgroup.curses_id = semenar.id
      WHERE sborgroup.obuc_id = :obuc_id";
        
      $result = $pdo->prepare($sql);
      $result->bindParam('obuc_id', $obuc_id);
      $result->execute();
      $row = $result->fetchAll(PDO::FETCH_ASSOC);
      
      return $row;    
    }
    
    
    #запись пользователя в анкету
    public static function saveAnketa($fio, $tel, $date_r, $sfera, $staj, $shool, $job, $login){
        
       $pdo = Db::getConection();
        
        $sql = "INSERT INTO anketa (fio, tel, hepy_day, sfera_id, staj_id, job, shool_id, user_login) VALUES(:fio, :tel, :date_r, :sfera_id, :staj_id, :job, :shool_id, :user_login)";
        $result = $pdo->prepare($sql);
        $result->bindParam(':fio', $fio);
        $result->bindParam(':tel', $tel);
        $result->bindParam(':date_r',$date_r);
        $result->bindParam(':sfera_id', $sfera);
        $result->bindParam(':staj_id', $staj);
        $result->bindParam(':job', $job);
        $result->bindParam(':shool_id', $shool);
        $result->bindParam(':user_login', $login);
        
    return $result->execute();
    }
    
    #добавлем запись на курс
    public static function saveZapis($fio, $tel, $date_kurs, $login){
        
        $pdo = Db::getConection();
        
        $sql = "INSERT INTO entrycours (fio, tel, date_kurs_id, login) VALUES(:fio, :tel, :date_kurs_id, :login)";
        $result = $pdo->prepare($sql);
        $result->bindParam(':fio', $fio);
        $result->bindParam(':tel', $tel);
        $result->bindParam(':date_kurs_id', $date_kurs);
        $result->bindParam(':login', $login);
        
    return $result->execute();
    }
    
//   Зона семенара ---------------- 
    #выводим семенар по ссылке 
    public static function semResult($Url){
        
        $pdo = Db::getConection();
        #достаем курс по ссылке
        $sql = "SELECT semenar.id, semenar.title,semenar.status FROM `semenar` WHERE semenar.semenar_url = :url";
       //$sql = "SELECT * FROM `courses` INNER JOIN sborgroup ON c= :id_courses"; 
        
        $result = $pdo->prepare($sql);
        $result->bindParam(':url', $Url);
        $result->execute();
        
        $row = $result->fetch(PDO::FETCH_ASSOC);
        //var_dump($row);
        return $row;      
    }
    
     #тащим семеар с датой в запись
    public static function semenarZapis(){
        
      $pdo = Db::getConection();  
      
      $sql = "SELECT semenar.id, semenar.title FROM semenar";
        
      $result = $pdo->prepare($sql);
      $result->execute();
      $row = $result->fetchAll(PDO::FETCH_ASSOC);
      
      return $row;    
    }
    

    
    
}




?>