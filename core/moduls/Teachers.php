<?php


class Teachers
{
    
    
    #достаем запись с курсом и обучением
    public static function selectEntry(){
        
        
        $pdo = Db::getConection(); 
        
        $sql = "SELECT entrycours.login, entrycours.fio, entrycours.tel, sborgroup.data_courses, obuchenie.name_ru, courses.title FROM entrycours 
        INNER JOIN sborgroup ON entrycours.date_kurs_id = sborgroup.id 
INNER JOIN obuchenie ON sborgroup.obuc_id = obuchenie.id 
INNER JOIN courses ON sborgroup.curses_id = courses.id WHERE sborgroup.obuc_id = 1 
UNION 
SELECT entrycours.login, entrycours.fio, entrycours.tel, sborgroup.data_courses, obuchenie.name_ru, semenar.title FROM entrycours 
INNER JOIN sborgroup ON entrycours.date_kurs_id = sborgroup.id 
INNER JOIN obuchenie ON sborgroup.obuc_id = obuchenie.id 
INNER JOIN semenar ON sborgroup.curses_id = semenar.id 
WHERE sborgroup.obuc_id = 2";
    
        
      $result = $pdo->prepare($sql);
      $result->execute();
      $row = $result->fetchAll(PDO::FETCH_ASSOC);
        
     return $row;   
    }
    
    public static function selectCourses(){
        
        $pdo = Db::getConection();
        
        $sql = "SELECT id, title FROM courses";
        
        $result = $pdo->prepare($sql);
        $result->execute();
        
        $row = $result->fetchAll(PDO::FETCH_ASSOC);
        
    return $row;   
    }
    
    public static function selectSemenar(){
        
        $pdo = Db::getConection();  
        $sql = "SELECT id, title FROM semenar";
        $result = $pdo->prepare($sql);
        $result->execute();
        
        $row = $result->fetchAll(PDO::FETCH_ASSOC);
        
    return $row;   
    }
    
    public static function selectObucenie(){
        
        $pdo = Db::getConection();  
        $sql = "SELECT id, name_ru FROM obuchenie";
        $result = $pdo->prepare($sql);
        $result->execute();
        
        $row = $result->fetchAll(PDO::FETCH_ASSOC);
//        echo '<pre>';
//          var_dump($row);
//            
//          echo '</pre>';
//           exit();
    return $row;   
    }
    
    public static function insertPotok($obuchenie, $dilis, $cite, $date_p, $addres){
        
        $pdo = Db::getConection();

        $sql = "INSERT INTO sborgroup (data_courses, obuc_id, curses_id, cite,	mesto) VALUES(:data_courses, :obuc_id, :curses_id, :cite, :mesto)";
        $result = $pdo->prepare($sql);
        $result->bindParam(':data_courses', $date_p);
        $result->bindParam(':obuc_id', $obuchenie);
        $result->bindParam(':curses_id',$dilis);
        $result->bindParam(':cite', $cite);
        $result->bindParam(':mesto', $addres);
        
    return $result->execute();
        
    }
    
    public static function selectSbor(){
        
         $pdo = Db::getConection();
         $sql = "SELECT sborgroup.data_courses, sborgroup.cite, sborgroup.mesto, obuchenie.name_ru, courses.title FROM sborgroup 
         INNER JOIN obuchenie ON sborgroup.obuc_id = obuchenie.id 
         INNER JOIN courses ON sborgroup.curses_id = courses.id
         WHERE sborgroup.obuc_id = 1 
         UNION 
         SELECT sborgroup.data_courses, sborgroup.cite, sborgroup.mesto, obuchenie.name_ru, semenar.title FROM sborgroup 
         INNER JOIN obuchenie ON sborgroup.obuc_id = obuchenie.id 
         INNER JOIN semenar ON sborgroup.curses_id = semenar.id 
         WHERE sborgroup.obuc_id = 2";
        
        $result = $pdo->prepare($sql);
        
        $result = $pdo->prepare($sql);
        $result->execute();
        $row = $result->fetchAll(PDO::FETCH_ASSOC);
        
     return $row;   
        
    }
    
    
    
    
    
}


?>