<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboards extends CI_Model {
    
    public function get_visit_count()
    {
    $ip = $this->input->ip_address();
	$query = $this->db->query(" select (select count(*) from visit where visitdate = subdate(current_date, 0)) as counttoday,
(select count(*) from visit where visitdate = subdate(current_date, 1)) as countyesterday,
(SELECT count(*) 
FROM visit
WHERE MONTH(visitdate) = MONTH(CURRENT_DATE())
AND YEAR(visitdate) = YEAR(CURRENT_DATE())) as countmonth, (select count(*) from comment where isactive = 0) as countcomment, (select count(*) from enquiry where checked =0 ) as countenquiry  ");
	return $query->result();
    }

    public function get_login_states($type)
    {    
    if($type == 'T')  
    $query = $this->db->query("select sum(student_count) as student_count, sum(teacher_count)  as teacher_count, ldate
    from ( SELECT count(*) as student_count , 0 as teacher_count, date(lastlogin) as ldate 
    FROM `loginAttempts` where type = 'S' and date(lastLogin) > (now() - INTERVAL 1 DAY) group by date(lastlogin) UNION SELECT 0 as student_count ,
    count(*) as teacher_count, date(lastlogin) as ldate FROM `loginAttempts` where type = 'T'  and date(lastLogin) > (now() - INTERVAL 1 DAY)
    group by date(lastlogin) ) t group by ldate order by ldate DESC");
    else  if($type == 'W')
    $query = $this->db->query("select sum(student_count)  as student_count, sum(teacher_count)  as teacher_count, ldate
    from ( SELECT count(*) as student_count , 0 as teacher_count, date(lastlogin) as ldate 
    FROM `loginAttempts` where type = 'S'  and date(lastLogin) >= (now() - INTERVAL 7 DAY) group by date(lastlogin) UNION SELECT 0 as student_count ,
    count(*) as teacher_count, date(lastlogin) as ldate FROM `loginAttempts` where type = 'T' and date(lastLogin) >= (now() - INTERVAL 7 DAY) 
    group by date(lastlogin) ) t group by ldate order by ldate DESC");
    else  if($type == 'M')
    $query = $this->db->query("select sum(student_count)  as student_count, sum(teacher_count)  as teacher_count, ldate
    from ( SELECT count(*) as student_count , 0 as teacher_count, date(lastlogin) as ldate 
    FROM `loginAttempts` where type = 'S' and date(lastLogin) >= (now() - INTERVAL 30 DAY)  group by date(lastlogin) UNION SELECT 0 as student_count ,
    count(*) as teacher_count, date(lastlogin) as ldate FROM `loginAttempts` where type = 'T'  and date(lastLogin) >= (now() - INTERVAL 30 DAY) 
    group by date(lastlogin) ) t group by ldate order by ldate DESC");
    else  if($type == 'Y')
    $query = $this->db->query("select sum(student_count)  as student_count, sum(teacher_count)  as teacher_count, ldate
    from ( SELECT count(*) as student_count , 0 as teacher_count, date(lastlogin) as ldate 
    FROM `loginAttempts` where type = 'S' and date(lastLogin) >= (now() - INTERVAL 365 DAY)  group by date(lastlogin) UNION SELECT 0 as student_count ,
    count(*) as teacher_count, date(lastlogin) as ldate FROM `loginAttempts` where type = 'T'  and date(lastLogin) >= (now() - INTERVAL 365 DAY) 
    group by date(lastlogin) ) t group by ldate order by ldate DESC");
    else if($type == 'A')
    $query = $this->db->query("select sum(student_count)  as student_count, sum(teacher_count)  as teacher_count, ldate
    from ( SELECT count(*) as student_count , 0 as teacher_count, date(lastlogin) as ldate 
    FROM `loginAttempts` where type = 'S' group by date(lastlogin) UNION SELECT 0 as student_count ,
    count(*) as teacher_count, date(lastlogin) as ldate FROM `loginAttempts` where type = 'T' 
    group by date(lastlogin) ) t group by ldate order by ldate DESC");
    else
    $query = $this->db->query("select sum(student_count)  as student_count , sum(teacher_count)  as teacher_count, ldate
    from ( SELECT count(*) as student_count , 0 as teacher_count, date(lastlogin) as ldate 
    FROM `loginAttempts` where type = 'S' and date(lastLogin) >= (now() - INTERVAL 7 DAY)  group by date(lastlogin) UNION SELECT 0 as student_count ,
    count(*) as teacher_count, date(lastlogin) as ldate FROM `loginAttempts` where type = 'T'  and date(lastLogin) >= (now() - INTERVAL 7 DAY) 
    group by date(lastlogin) ) t group by ldate order by ldate DESC");
    
    return $query->result();

    }

    //Sudesh : 15012020 : doisplay chart on dashbard
    public function get_recent_login_details($type)
    {
    
    if($type == 'T')  
    $query = $this->db->query("select count(id) as cnt, type , date(lastLogin) as lastLogin from loginAttempts where date(lastLogin) > (now() - INTERVAL 1 DAY) group by type, date(lastLogin) order by date(lastLogin) desc ");
    else  if($type == 'W')
    $query = $this->db->query("select count(id) as cnt, type , date(lastLogin) as lastLogin from loginAttempts where date(lastLogin) >= (now() - INTERVAL 7 DAY) group by type, date(lastLogin) order by date(lastLogin) desc ");
    else  if($type == 'M')
    $query = $this->db->query("select count(id) as cnt, type , date(lastLogin) as lastLogin from loginAttempts where date(lastLogin) >= (now() - INTERVAL 1  Month) group by type, date(lastLogin) order by date(lastLogin) desc ");
    else  if($type == 'Y')
    $query = $this->db->query("select count(id) as cnt, type , date(lastLogin) as lastLogin from loginAttempts where date(lastLogin) >= (now() - INTERVAL 1 YEAR) group by type, date(lastLogin) order by date(lastLogin) desc ");
    else if($type == 'A')
    $query = $this->db->query("select count(id) as cnt, type , date(lastLogin) as lastLogin from loginAttempts group by type, date(lastLogin) order by date(lastLogin) desc ");
    else
    $query = $this->db->query("select count(id) as cnt, type , date(lastLogin) as lastLogin from loginAttempts where date(lastLogin) >= (now() - INTERVAL 7 DAY) group by type, date(lastLogin) order by date(lastLogin) desc ");
    
    return $query->result();
    }

    public function get_student_login_details()
    {
	$query = $this->db->query("iry  ");
	return $query->result();
    }
}

/* Location: ./application/models/dashboards.php */