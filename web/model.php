<?php

class model
{
    public $conn = "";
    function __construct()
    {
        $this->conn = new mysqli('localhost', 'root', '', 'health_care');
    }

    function select($tbl)
    {
        $sel = "select * from $tbl";        // query
        $run = $this->conn->query($sel);    // run
        while ($fetch = $run->fetch_object()) {
            $arr[] = $fetch;
        }
        return $arr;
    }

    function insert($tbl, $arr)
    {
        $key_arr = array_keys($arr);
        $col = implode(",", $key_arr);

        $values_arr = array_values($arr);
        $values = implode("','", $values_arr); //'Raj','raj@gmail.com'

        echo $ins = "insert into $tbl ($col) values('$values')";        // query
        $run = $this->conn->query($ins);               // run
        return $run;
    }

    function select_where($tbl, $where)
    {
        $sel = "select * from $tbl where 1=1";
        $key_arr = array_keys($where); //  $key=array("0"=>"email","1"=>"pass");
        $values_arr = array_values($where); // value=array("0"=>"rajjh@gmail.com","1"=>"12345")
        $i = 0;
        foreach ($where as $d) {
            $sel .= " and $key_arr[$i]='$values_arr[$i]'";
            $i++;
        }
        $run = $this->conn->query($sel);
        return $run;

        //$fetch=$run->fetch_object();
        //$chk=$run->num_rows;

    }

    function delete_where($tbl, $where)
    {
        $del = "delete from $tbl where 1=1";
        $key_arr = array_keys($where); //  $key=array("0"=>"email","1"=>"pass");
        $values_arr = array_values($where); // value=array("0"=>"rajjh@gmail.com","1"=>"12345")
        $i = 0;
        foreach ($where as $d) {
            $del .= " and $key_arr[$i]='$values_arr[$i]'";
            $i++;
        }
        $run = $this->conn->query($del);
        return $run;
    }



    function update($tbl, $arr, $where)
    {
        $upd = "update $tbl set ";
        $key_arr = array_keys($arr); //  $key=array("0"=>"email","1"=>"pass");
        $values_arr = array_values($arr); // value=array("0"=>"rajjh@gmail.com","1"=>"12345")
        $j = 0;
        $count = count($arr);
        foreach ($arr as $a) {
            if ($count == $j + 1) {
                $upd .= "$key_arr[$j]='$values_arr[$j]'";
            } else {
                $upd .= "$key_arr[$j]='$values_arr[$j]',";
                $j++;
            }
        }
        $upd .= " where 1=1";
        $wkey_arr = array_keys($where); //  $key=array("0"=>"email","1"=>"pass");
        $wvalues_arr = array_values($where); // value=array("0"=>"rajjh@gmail.com","1"=>"12345")
        $i = 0;
        foreach ($where as $d) {
            echo $upd .= " and $wkey_arr[$i]='$wvalues_arr[$i]'";
            $i++;
        }
        $run = $this->conn->query($upd);
        return $run;
    }
}
