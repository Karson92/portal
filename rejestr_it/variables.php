<?php

$yearsDefault = array(2000, 2001, 2002, 2003, 2004, 2005, 2006, 2007, 2008, 2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016, 2017, 2018, 2019, 2020, 2021, 2022);

$query = "SELECT it_ida, it_agreement.simple_name, it_agreement.name, date_start, date_end, category, it_company.simple_name AS company FROM `it_agreement` 
	LEFT JOIN it_category USING (it_idcat) 
	LEFT JOIN it_company USING (it_idc) 
	LEFT JOIN it_location USING (it_idl)";

$query_views = "SELECT it_ida, it_agreement.simple_name, it_agreement.name, date_start, date_end, category, location, it_company.full_name AS company, additional, it_agreement.date FROM `it_agreement` 
	LEFT JOIN it_category USING (it_idcat) 
	LEFT JOIN it_company USING (it_idc) 
	LEFT JOIN it_location USING (it_idl)";

?>