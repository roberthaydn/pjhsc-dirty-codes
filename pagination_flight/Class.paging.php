<?php

class paginate
{
     private $db;
 
     function __construct($DB_con)
     {
         $this->db = $DB_con;
     }
 
     public function dataview($query)
     {
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        if($stmt->rowCount()>0)
        {
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
            {
         
               echo '<tr>';
               echo '<td>'.$row['name'].'</td>';
               echo '<td>'.$row['surname'].'</td>';
               echo '</tr>';
            }
        }
        else
        {
            echo '<tr><td>Nothing here...</td></tr>';
        }
    }
 
    public function paging($query, $records_per_page)
    {
        $starting_position=0;
        if(isset($_GET["page"]))
        {
             $starting_position=($_GET["page"]-1)*$records_per_page;
        }
        $query2=$query." limit $starting_position,$records_per_page";
        return $query2;
    }
 
    public function paginglink($query, $records_per_page) {

        //$self = $_SERVER['PHP_SELF'];
        $self = 'names';
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        $total_no_of_records = $stmt->rowCount();

        if($total_no_of_records > 0) {

            echo '<tr><td colspan="2">';

            $total_no_of_pages=ceil($total_no_of_records/$records_per_page);
            $current_page=1;

            if(isset($_GET["page"]))
            {
               $current_page=$_GET["page"];
            }

            if($current_page!=1)
            {
               $previous =$current_page-1;
               echo "<a href='".$self."?page=1'>First</a>&nbsp;&nbsp;";
               echo "<a href='".$self."?page=".$previous."'>Previous</a>&nbsp;&nbsp;";
            }

            for($i=1;$i<=$total_no_of_pages;$i++)
            {
                if($i==$current_page) {
                    echo "<strong><a href='".$self."?page=".$i."' style='color:red;text-decoration:none'>".$i."</a></strong>&nbsp;&nbsp;";
                } else {
                    echo "<a href='".$self."?page=".$i."'>".$i."</a>&nbsp;&nbsp;";
                }
            }

            if($current_page!=$total_no_of_pages) {
                $next=$current_page+1;
                echo "<a href='".$self."?page=".$next."'>Next</a>&nbsp;&nbsp;";
                echo "<a href='".$self."?page=".$total_no_of_pages."'>Last</a>&nbsp;&nbsp;";
            }
            echo '</td></tr>';
        }
    }
 }
