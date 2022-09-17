<?php
class ModelCatalogNewsletters extends Model {
	public function subscribes($data) {
		$res = $this->db->query("select * from ". DB_PREFIX ."newsletters where email='".$data['email']."'");
		if($res->num_rows == 1)
		{
			$data['status'] = 'existe';
			return $data;
		}
		else
		{
			if($this->db->query("INSERT INTO " . DB_PREFIX . "newsletters (email, status) 
				VALUES ('".$data['email']."', '1')"))
			{
				$data['status'] = 'ok';
				return $data;
			}
			else
			{
				$data['status'] = 'falha';
				return $data;
			}
		}
	}
}