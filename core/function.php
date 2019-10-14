<?php
class BD{
    /*======================================================================*\
    Function:   connect
    Descriiption: Производит соединение с базой данных
    \*======================================================================*/
    static public function connect(){
        $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);
        mysqli_set_charset($conn, "utf8");
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        return $conn;
    }
    /*======================================================================*\
    Function:   selectRows
    Output:     Array
    Input:      String
    Descriiption: Возвращает массив строк базы данных
    \*======================================================================*/
    static public function selectRows($conn, $query){
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $a[] = $row;
            }
        } 
        return $a;
    }
    /*======================================================================*\
    Function:   selectOneRow
    Output:     String
    Input:      String
    Descriiption: Возвращает одну выбранную строку с базы данных
    \*======================================================================*/
    static public function selectOneRow($conn, $query){
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            return $row;
        } 
        return false;
    }

    /*======================================================================*\
    Function:   close
    Input:      Открытое соединение функцией connect()
    Descriiption: зыкрывает соединение
    \*======================================================================*/
    static public function close($conn){
        mysqli_close($conn);
    }  
}


class Functions{
    /*======================================================================*\
    Function:   file_force_download
    Input:      Sstring
    Descriiption: Принудительно загружает файл
    \*======================================================================*/    
    static public function file_force_download($file) {
        if (file_exists($file)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="'.basename($file).'"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file));
            readfile($file);
            exit;
        }
    }

    /*======================================================================*\
    Function:   GenerateCode
    Output:     string
    Input:      Число - длина строки 
    Descriiption: Функция для генерации случайной строки
    \*======================================================================*/
    static public function GenerateCode($length = 6)
    {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPRQSTUVWXYZ0123456789";
        $code = "";
        $clen = strlen($chars) - 1;
        while (strlen($code) < $length) {
            $code .= $chars[mt_rand(0, $clen)];
        }
        return $code;
    }
    
     /*======================================================================*\
    Function:   IsLogin
    Output:     True / False
    Input:      Строка логина
    Descriiption: Проверяет правильность ввода логина 
    \*======================================================================*/
    static public function IsLogin($login){
        
        return (is_array($login)) ? false : (preg_match( "/[a-zA-Z0-9]{4,32}/i", $login)) ? $login : false;
    
    }
    
    /*======================================================================*\
    Function:   IsPassword
    Output:     True / False
    Input:      Строка пароля
    Descriiption: Проверяет правильность ввода пароля
    \*======================================================================*/
    static public function IsPassword($password){
        
        return (is_array($password)) ? false : (preg_match( "/[a-zA-Z0-9]{4,32}/i", $password)) ? $password : false;
    
    }

    /*======================================================================*\
    Function:   IsMail
    Output:     True / False
    Input:      Email 
    Descriiption: Проверяет правильность ввода email адреса
    \*======================================================================*/
    static public function IsMail($mail){
        
        if(is_array($mail) && empty($mail) && strlen($mail) > 255 && strpos($mail,'@') > 64) return false;
            return ( ! preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $mail)) ? false : strtolower($mail);
            
    }
};

?>