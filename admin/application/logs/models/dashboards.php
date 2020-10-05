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

}

/* Location: ./application/models/dashboards.php */