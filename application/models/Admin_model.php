<?php 

/**
 * 
 */
class Admin_model extends CI_Model
{
	
	public function get_edit_produk($id_produk)
	{
		$data = [
			'id_produk' => $id_produk
		];

		$this->db->select('*');
		$this->db->from('produk');
		$this->db->join('kategori','produk.kategori_id = kategori.id_kategori');
		$this->db->where($data);
		$query = $this->db->get();
		return $query->row_array();
	}

	public function updateproduk($id_produk, $filename)
    {
         $data = [
            "nama_produk" => $this->input->post('nama_produk', true),
            "kategori_id" => $this->input->post('kategori_id', true),
            "nama_penulis" => $this->input->post('nama_penulis', true),
            "harga_produk" => $this->input->post('harga_produk', true),
            "deskripsi_produk" => $this->input->post('deskripsi_produk', true),
            "detail_produk" => $this->input->post('detail_produk', true),
            "stok_produk" => $this->input->post('stok_produk', true),
            "foto_produk" => $filename
            
        ];

        $this->db->where('id_produk', $this->input->post('id_produk', true));
        $this->db->update('produk', $data);
    }


    public function ubahproduk()
    {
        $data = [
            "nama_produk" => $this->input->post('nama_produk', true),
            "kategori_id" => $this->input->post('kategori_id', true),
            "nama_penulis" => $this->input->post('nama_penulis', true),
            "harga_produk" => $this->input->post('harga_produk', true),
            "deskripsi_produk" => $this->input->post('deskripsi_produk', true),
            "detail_produk" => $this->input->post('detail_produk', true),
            "stok_produk" => $this->input->post('stok_produk', true)
        ];  

        $this->db->where('id_produk', $this->input->post('id_produk',$id_owner));
        $this->db->update('produk', $data);
    }

    public function getById($id_produk)
    {
        return $this->db->get_where('produk', ['id_produk' => $id_produk])->row_array();
    }


    public function addproduk($filename)
    {
         $data = [
            "nama_produk" => $this->input->post('nama_produk', true),
            "kategori_id" => $this->input->post('kategori_id', true),
            "nama_penulis" => $this->input->post('nama_penulis', true),
            "harga_produk" => $this->input->post('harga_produk', true),
            "stok_produk" => $this->input->post('stok_produk', true),
            "deskripsi_produk" => $this->input->post('deskripsi_produk', true),
            "detail_produk" => $this->input->post('detail_produk', true),
            "foto_produk" => $filename
            
        ];

        $this->db->insert('produk', $data);
    }  


    public function get_edit_kategori($id_kategori)
    {
        return $this->db->get_where('kategori', ['id_kategori' => $id_kategori])->row_array();
    } 


     public function get_edit_kurir($id_kurir)
    {
        return $this->db->get_where('kurir', ['id_kurir' => $id_kurir])->row_array();
    } 

    public function get_pembelian($id_pembelian)
     {
         $data = [
            'pembelian.id_pembelian' => $id_pembelian
        ];

        $this->db->select('*');
        $this->db->from('pembelian');
        $this->db->join('pelanggan','pembelian.id_pelanggan= pelanggan.id_pelanggan');
        $this->db->where($data);
        $query = $this->db->get();
        return $query->row_array();
     } 

     public function get_id_pembelian($id_pembelian)
     {
         return $this->db->get_where('pembelian_produk', ['id_pembelian' => $id_pembelian])->row_array();
     }

     public function get_pelanggan($id_pelanggan)
     {
         return $this->db->get_where('pelanggan', ['id_pelanggan' => $id_pelanggan])->row_array();
     }

    public function getCountKurir()
    {
         $query = $this->db->query("SELECT a.`id_kurir`, a.`nama_kurir`, SUM(b.`tarif`) AS `tarif` FROM kurir a INNER JOIN pembelian b ON a.`id_kurir`=b.`id_kurir` GROUP BY a.`id_kurir`, a.`nama_kurir` ");
       if($query->num_rows() > 0){
            foreach($query->result() as $kurir){
                $hasil[] = $kurir;
            }
            return $hasil;
        }
         //return $query->result_array();
    }
}
 ?>